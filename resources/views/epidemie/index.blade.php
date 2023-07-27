@extends('back.layout')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0"><a href="">Dashboard</a> / <span>Epidemies</span>  </h5>
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
                          <h5>Epidemies</h5>

                           <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link border border-1 p-1 rounded" data-toggle="dropdown" href="#" aria-expanded="false">
                Ajouter une epidemies
                </a>
                <div class="dropdown-menu dropdown-menu-right " style="left: inherit; right: 0px; width:350px">
                <div class="shadow-lg bg-light">
                    <div class="card-header pb-3">
                        <h6>Information sur l'epidemie</h6>
                    </div>
                    <form action="{{route('epidemie.store')}}" method="post" class="border-none p-3">
                                @csrf
                                <div class="col-md-12 col-sm-6">
                                    <label for="">Designation</label>
                                    <input type="text" name='designation' class='form-control'>
                                </div>

                                <div class="col-md-12 col-sm-6 mt-3">
                                    <label for="">Description</label>
                                    <input type="text" name='description' class='form-control'>
                                </div>

                                <div class="col-md-12 col-sm-6 my-3">
                                    <button class='btn btn-primary' type='submit'>Enregister</button>
                                </div>
                                 
                            </form>
                </div>
                
                </div>
            </li>
        </ul>
                        </div>

                        <div class="card-body">
                           <table class='table table-hover'>
                                <thead class='bg-dark'>
                                    <th>#</th>
                                    <th>Designation</th>
                                    <th>Description</th>
                                </thead>
                                <tbody>
                                    <tr>

                                   @foreach($epidemies as $epidemie)
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$epidemie->designation}}</td>
                                    <td>{{$epidemie->description}} <td>
                                    <form action="{{route('epidemie.destroy', $epidemie)}}" method="post">
                                        @csrf
                                        <input type="hidden" name='_method' value='delete'>
                                     <a href="{{route('epidemie.edit',$epidemie)}}" class='btn'><i class='fa fa-edit'></i></a>
                                     <button class='btn text-danger' type='submit'><i class='fa fa-trash'></i></button>    
                                    </form></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                           </table>
                            <div class="row">
                                <div class="col-2">
                                    {{$epidemies->links()}}
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection