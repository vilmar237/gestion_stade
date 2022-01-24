@extends('frontend.layouts.frontend_layout')

@section('title', "Historique des réservations")

@section('content')
<section class="mt-120 mb-4">
    <h2 class="primary text-center bg-strip">Historique des réservations</h2>
</section>


<!-- Start bookings -->
<section>
    <div class="container pb-5">
        @if($bookings->count() > 0)
            @foreach($bookings as $booking)
            <div class="booking">
                <div class="row">
                    <div class="col-lg-2">
                        <h5 class="primary">Jour</h6>
                        <p> {{Carbon\Carbon::parse($booking->day)->format('d-m-Y') }}</p>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="primary">Heure de début</h6>
                        <p> {{ $booking->debut }}</p>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="primary">Heure de fin</h6>
                        <p> {{ $booking->fin }}</p>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="primary">Prix</h6>
                        <p> {{ $booking->prix }}</p>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="primary">Statut</h6>
                        @if($booking->statut == 0)
                        <p> En attente de validation</p>
                        @else
                        <p> Réservation acceptée</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    ..............................................................................................................................................................................................................................................................................................................................
                </div>

            </div>
            @endforeach
        @else
            <h4 class="text-center">Aucun Enregistrement Trouvé.</h4>    
        @endif
    </div>
</section>
<!-- End bookings -->
<!-- Contact tiles -->
@endsection