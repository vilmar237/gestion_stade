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
        $reservation = Reservation::find($id);

        if (!$reservation) {
            return response()->json([
                'status'=>404,
                'message'=> $id//'aucune reservation existante'
            ]);
        } else
        {
            $reservation->statut = 1;
            $reservation->update();
            //Reservation::whereIn('id',$id)->update(['statut' => 1]);
            return response()->json([
                'status'=>200,
                'message'=> 'Reservation approuvée'
            ]);
        }

        
    }
}
