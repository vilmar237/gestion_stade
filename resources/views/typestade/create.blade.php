@extends('frontend.layouts.backend_layout')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ajouter un Type de stade</h4>
                    </div>
                    <div class="card-body">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <p class="text-danger">{{$error}}</p>
                                @endforeach
                            @endif
                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                            <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vertical Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form enctype="multipart/form-data" method="post" action="{{url('admin/typestade')}}">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">TITRE</label>
                                            <div class="col-sm-9">
                                                <input type="text"name="title" class="form-control" placeholder="TITRE">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Soumettre</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

@endsection