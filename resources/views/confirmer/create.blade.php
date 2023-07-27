@extends('back.layout')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0"><a href="">Dashboard</a> / <a href="{{ route('confirmer') }}">Alertes confirmés</a> /<span>Confirmer une Alete</span>  </h5>
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
                            Confirmer une Alerte
                        </div>
                        <div class="card-body">
                            <form action="{{route('zoneSante.store')}}" method="post">
                                @csrf

                                <div class="col-md-12 col-sm-6 mt-3">
                                    <label for="">Alerte à confirmer</label>
                                    <select name="epidemie_id" id="" class="form-control">
                                        @foreach($alertes as $alerte)
                                            <option value="{{$alerte->id}}" class="form-control">{{$alerte->designation}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12 col-sm-6 mt-2">
                                    <label for="">Pourquoi confirmer cette alerte</label>
                                    <input type="text" name='designation' class='form-control'>
                                </div>

                                <div class="col-md-12 col-sm-6 mt-3">
                                    <button class='btn btn-primary' type='submit'>Enregister</button>
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