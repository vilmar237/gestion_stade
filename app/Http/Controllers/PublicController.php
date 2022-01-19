<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth as Login;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Enums\UserRoles;
use App\Models\User;
use Auth;

class PublicController extends Controller
{
    public function __construct()
    {
 
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome()
    {
        $logged     = Login::check();
        $admins     = ($logged && in_array(Login::user()->role, [UserRoles::ADMIN, UserRoles::SUPER_ADMIN]));
        
        return view('frontend.index', compact('admins'));
    }

    public function user_login(Request $request)
    {
        if (Login::attempt(['email' => $request->email, 'password' => $request->password])) {
        $user = Login::user();

            if ($user->role == "C") {
                $user->status = 1;
                $user->save();
                return redirect('/');
            } else {
                Auth::logout();
                $request->session()->invalidate();
                return back()->withErrors(["error" => "Identifiants de connexion invalides ou client non vérifié."], 'login')->withInput();
            }
        }else {
            return back()->withErrors(["error" => "Authentification invalide"], 'login')->withInput();
        }
    }

    public function user_logout(Request $request)
    {
        $user = Login::user();
        $user->status = 0;
        $user->save();
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    public function customer_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm_password|min:8',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator, 'register')->withInput();
        }

        $id = User::create([
            "username" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "role" => "C",
            "status" => 0,
        ])->id;

        $user = User::find($id);
        $user->username = $request->name;
        $user->save();

        return back()->with('success', 'Vous êtes inscrit avec succès ! veuillez vous connecter ici.');

    }

    public function booking_history($id)
    {
        if (Auth::user()->id == $id) {
            $data['bookings'] = Reservation::where('id_user', $id)->latest()->get();
        } else {
            $data['bookings'] = [];
        }
        return view('frontend.historique_reservations', $data);
    }

    public function book(Request $request)
    {
        if (Auth::user() && Auth::user()->role == 'C') {
            $validation = Validator::make($request->all(), [
                'debut' => 'required',
                'fin' => 'required',
                'type_stade' => 'required',
            ]);

            if ($validation->fails()) {
                return back()->withErrors($validation)->withInput();
            } else {
                $id = Reservation::create(['id_user' => Auth::user()->id,
                    'debut' => $request->debut,
                    'fin' => $request->fin,
                    'type_stade' => $request->type_stade,
                ])->id;

                $booking = Reservation::find($id);
                $booking->save();

            }
            return back()->with('success', 'Requete envoyée.');
        } else {
            return redirect("login")->withErrors(["error" => "Veuillez vous connecter au préalable"], 'login');
        }

    }
}
