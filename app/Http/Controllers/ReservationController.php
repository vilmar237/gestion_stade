<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\TypeTerrain;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=Reservation::all();
        $customers=Client::all();
        return view('reservations.index',['data'=>$bookings,'data1'=>$customers]);
    }

    public function processApprove(Request $request)
    {
        $id = $request->vari;
        $reservation = Reservation::where('id', $id)->get();

        if (blank($reservation)) {
            return response()->json([
                'status'=>404,
                'message'=> 'aucune reservation existante'
            ]);
        }

        if ($action == 'sync') {
            return $this->syncTranslations($languages);
        } elseif ($action == 'regenerate') {
            return $this->regenerateTranslations($languages);
        }

        return response()->json([
            'status'=>404,
            'message'=> __("error occured")
        ]);
    }
}
