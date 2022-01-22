@extends('frontend.layouts.backend_layout')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Toutes les réservations</h4>
                    </div>
                    <div class="card-body">
                            @if(Session::has('success'))
                                <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Client</th>
                                            <th>activité</th>
                                            <th>Jour</th>
                                            <th>Heure de début</th>
                                            <th>Heure de fin</th>
                                            <th>Prix</th>
                                            <th>Statut</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Client</th>
                                            <th>activité</th>
                                            <th>Jour</th>
                                            <th>Heure de début</th>
                                            <th>Heure de fin</th>
                                            <th>Prix</th>
                                            <th>Statut</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($data as $booking)
                                        <tr>
                                            @php 
                                                $nom_client = DB::table('users')->where('id',$booking->id_user)->first();
                                                $nom_terrain = DB::table('type_terrains')->where('id',$booking->id_type_terrain)->first();
                                            @endphp
                                            <td>{{$booking->id}}</td>
                                            <td>{{$nom_client->username}}</td>
                                            <td>{{$nom_terrain->name}}</td>
                                            <td>{{$booking->day}}</td>
                                            <td>{{$booking->debut}}</td>
                                            <td>{{$booking->fin}}</td>
                                            <td>{{$booking->prix}}</td>
                                            @if($booking->statut == 0)
                                            <td class="text-warning mr-1">En attente d'approbation</td>
                                            @else
                                            <td class="text-success mr-1">Approuvée</td>
                                            @endif
                                            
                                            <td>
                                                <a href="{{url('admin/reservation/'.$booking->id.'/delete')}}" class="text-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ces données?')"><i class="fa fa-trash"></i></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="javascript:void(0)" id="approve" class="text-info" data-id="{{$booking->id}}"><i class="fa fa-check"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@push('scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

     // ---------- [ Approbation of booking stadium ] ----------------
     $("#approve").click(function(event) {
        event.preventDefault();

        let vari = $(this).attr("data-id");
        
        $.ajax({
                url: '/admin/reservation/approve/',
                method: 'post',
                data: vari,
                dataType: 'json',

                success:function(res) {
                    

                    if(res.status == 404) {
                        toastr.clear();
                        NioApp.Toast(res.message, 'error', {
                        position: 'top-right'
                        });
                    }

                    else if(res.status == 200){
                        toastr.clear();
                        NioApp.Toast(res.message, 'info', {
                        position: 'top-right'
                        });
                    }
                    //location.reload(true);
                }

        });
     });
</script>    
@endpush