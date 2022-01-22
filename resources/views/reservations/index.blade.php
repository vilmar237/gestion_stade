@extends('layouts.backend_layout')

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
                                            <th>Customer</th>
                                            <th>Room No.</th>
                                            <th>Room Type</th>
                                            <th>CheckIn Date</th>
                                            <th>CheckOut Date</th>
                                            <th>Ref</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Customer</th>
                                            <th>Room No.</th>
                                            <th>Room Type</th>
                                            <th>CheckIn Date</th>
                                            <th>CheckOut Date</th>
                                            <th>Ref</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($data as $booking)
                                        <tr>
                                            <td>{{$booking->id}}</td>
                                            <td>{{$booking->customer->full_name}}</td>
                                            <td>{{$booking->room->title}}</td>
                                            <td>{{$booking->room->Roomtype->title}}</td>
                                            <td>{{$booking->checkin_date}}</td>
                                            <td>{{$booking->checkout_date}}</td>
                                            <td>{{$booking->ref}}</td>
                                            <td><a href="{{url('admin/booking/'.$booking->id.'/delete')}}" class="text-danger" onclick="return confirm('Are you sure you want to delete this data?')"><i class="fa fa-trash"></i></a></td>
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