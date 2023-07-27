@extends('back.layout')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0"><a href="">Dashboard</a> / <a href="{{ route('deces') }}">Décès</a> /<span>Ajouter un cas de décès</span>  </h5>
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
                            Ajouter un cas de Décès
                        </div>
                        <div class="card-body">
                            <form action="{{route('deces.store')}}" method="post">
                                @csrf
                                <div class="col-md-12 col-sm-6">
                                    <label for="">Tranche d'âge du cadavre</label>
                                    <input type="text" name='trancheAge' class='form-control'>
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