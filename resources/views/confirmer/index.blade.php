@extends('back.layout')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0"><a href="">Dashboard</a> / <span>Cas confirmés</span>  </h5>
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
                        <div class="card-header d-flex justify-content-between">
                          <h5>Alertes Confirmés</h5>
                           <a href="{{route('confirmer.create')}}">Confirmer une alerte</a>
                        </div>

                        <div class="card-body">
                           <table class='table table-hover'>
                                <thead class='bg-dark'>
                                    <th>#</th>
                                    <th>Designation</th>
                                    <th>Epidemie</th>
                                </thead>
                                <tbody>
                                    <tr>

                                   @foreach($confirmers as $conformer)
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$conformer->designation}}</td>
                                    <td>{{$conformer->adresse}} <td>
                                    <form action="{{route('zoneSante.destroy', $zoneSante)}}" method="post">
                                        @csrf
                                        <input type="hidden" name='_method' value='delete'>
                                     <a href="{{route('zoneSante.edit',$zoneSante)}}" class='btn'><i class='fa fa-edit'></i></a>
                                     <button class='btn text-danger' type='submit'><i class='fa fa-trash'></i></button>    
                                    </form>
                                </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                           </table>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection