@extends('back.layout')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0"><a href="">Dashboard</a> / <a href="{{ route('Annuler-Cas') }}">Cas Annulés</a> /<span>Annulation d'un cas</span>  </h5>
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
                            Annuler un cas
                        </div>
                        <div class="card-body">
                            <form action="{{route('zoneSante.store')}}" method="post">
                                @csrf

                                <div class="col-md-12 col-sm-6 mt-3">
                                    <label for="">Selectionner le cas à annuler</label>
                                    <select name="epidemie_id" id="" class="form-control">
                                        @foreach($newcases as $newcase)
                                            <option value="{{$newcase->id}}" class="form-control">{{$newcase->designation}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12 col-sm-6 mt-2">
                                    <label for="">Pourquoi annuler ce cas</label>
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