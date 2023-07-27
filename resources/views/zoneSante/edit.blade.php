@extends('back.layout')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0"><a href="">Dashboard</a> / <a href="{{ route('zoneSante') }}">Epidemies</a> /<span>modifier epidemie</span>  </h5>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-sm-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            modifer une ZoneSante
                        </div>
                        <div class="card-body">
                            <form action="{{route('zoneSante.update', $zoneSante)}}" method="post">
                                @csrf
                                <input type="hidden" name='_method' value='put'>

                                <div class="col-md-12 col-sm-6">
                                    <label for="">Designation</label>
                                    <input type="text" name='designation' class='form-control' value='{{$zoneSante->designation}}'>
                                </div>

                                <div class="col-md-12 col-sm-6 mt-3">
                                    <label for="">Description</label>
                                    <input type="text" name='adresse' class='form-control' value='{{$zoneSante->adresse}}'>
                                </div>

                                <div class="col-md-12 col-sm-6 mt-3">
                                    <button class='btn btn-primary' type='submit'>modifier</button>
                                </div>
                                 
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection