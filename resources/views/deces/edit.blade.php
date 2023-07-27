@extends('back.layout')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0"><a href="">Dashboard</a> / <a href="{{ route('deces') }}">Centre de santé</a> /<span>Modifier epidemie</span>  </h5>
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
                            Modifer une CentreSante
                        </div>
                        <div class="card-body">
                            <form action="{{route('deces.update', $deces)}}" method="post">
                                @csrf
                                <input type="hidden" name='_method' value='put'>

                                <div class="col-md-12 col-sm-6">
                                    <label for="">Tranche d'âge</label>
                                    <input type="text" name='trancheAge' class='form-control' value='{{$deces->trancheAge}}'>
                                </div>

                                <div class="col-md-12 col-sm-6 mt-3">
                                    <label for="">Epidemie responsable</label>
                                    <select name="epidemie_id" id="" class="form-control">
                                        @foreach($epidemies as $epidemie)
                                            <option value="{{$epidemie->id}}" class="form-control">{{$epidemie->designation}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12 col-sm-6 mt-3">
                                    <button class='btn btn-primary' type='submit'>Modifier</button>
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