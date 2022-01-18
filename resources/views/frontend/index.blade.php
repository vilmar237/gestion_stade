@extends('frontend.layouts.frontend_layout')

@section('title', "Welcome")

@section('content')

<!-- Teaser start -->
<section id="teaser">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12 pull-right">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides start -->
            <div class="carousel-inner">
              <div class="item active">
                <h1 class="title">Terrain de basket ball 10.000fr/heure
                  <span class="subtitle">bonapriso douala</span></h1>
                  <div class="car-img">
                    <img src="img/car1.png" class="img-responsive" alt="car1">
                  </div>
                </div>
                <div class="item">
                  <h1 class="title">Terrain Futsall 10.000/heure
                    <span class="subtitle">bonapriso douala</span></h1>
                    <div class="car-img">
                      <img src="img/car2.png" class="img-responsive" alt="car1">
                    </div>
                  </div>
                </div>
                <!-- Wrapper for slides end -->

                <!-- Slider Controls start -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <!-- Slider Controls end -->
              </div>
            </div>
            <div class="col-md-5 col-xs-12 pull-left">
              <div class="reservation-form-shadow">

                <form method="post" enctype="multipart/form-data" action="{{url('admin/booking')}}" id="car-select-form">
                @csrf

                  <div class="alert alert-danger hidden" id="car-select-form-msg">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Note:</strong> veillez remplir tous les champs 
                  </div>

                  @if($errors->any())
                      @foreach($errors->all() as $error)
                          <p class="text-danger">{{$error}}</p>
                      @endforeach
                  @endif

                  @if(Session::has('success'))
                    <p class="text-success">{{session('success')}}</p>
                  @endif

                  <table class="table table-bordered">
                <tr>
                    <th>Date d'arrivée <span class="text-danger">*</span></th>
                    <td><input name="debut" type="text" class="form-control datetimepicker" /></td>
                </tr>
                <tr>
                    <th>Date de départ <span class="text-danger">*</span></th>
                    <td><input name="fin" type="text" class="form-control datetimepicker" /></td>
                </tr>
                <tr>
                    <th>Espaces disponibles <span class="text-danger">*</span></th>
                    <td>
                        <select class="form-control room-list" name="room_id">
                        <option value="volvo">Volvo</option>
                        </select>
                        <p>Prix: <span class="show-room-price"></span></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        
                    	<input type="hidden" name="customer_id" value="1" />
                       
                        <input type="hidden" name="roomprice" class="room-price" value="" />
                    	<input type="hidden" name="ref" value="front" />
                        <input type="submit" class="btn btn-primary" />
                    </td> 
                </tr>
            </table>

                  
                 
                </form>

              </div>
            </div>

          </div>
        </div>
</section>
<div class="arrow-down"></div>
<!-- Teaser end -->
@endsection
@push('scripts')
<script type="text/javascript">
    $(function () {
        $('.datetimepicker').datetimepicker();
    });
</script>
@endpush