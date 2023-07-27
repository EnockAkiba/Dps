@extends('back.layout')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0"><a href="">Dashboard</a> / <a href="{{ route('newCase') }}">Nouveau cas</a> /<span>Ajouter Un cas</span>  </h5>
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
                            Ajouter un cas
                        </div>
                        <div class="card-body">
                            <form action="{{route('newCase.store')}}" method="post">
                                @csrf
                                <div class="col-md-12 col-sm-6">
                                    <label for="">Choisissez la tranche d'age </label>
                                    <input type="text" name='designation' class='form-control'>
                                </div>

                                <div class="col-md-12 col-sm-6 mt-3">
                                    <label for="">Selectionnez l'épidemie</label>
                                    <select name="epidemie_id" id="" class="form-control">
                                        @foreach($epidemies as $epidemie)
                                            <option value="{{$epidemie->id}}" class="form-control">{{$epidemie->designation}}</option>
                                        @endforeach
                                    </select>
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