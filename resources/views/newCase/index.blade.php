@extends('back.layout')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0"><a href="">Dashboard</a> / <span>Nouveau Cas</span>  </h5>
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
                          <h5>Cas épidemiologiques</h5>
                           <a href="{{route('newCase.create')}}">Ajouter un Cas</a>
                        </div>

                        <div class="card-body">
                           <table class='table table-hover'>
                                <thead class='bg-dark'>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Tranche d'age</th>
                                    <th>Epidemie</th>
                                    <th>Action</th>

                                </thead>
                                <tbody>
                                    <tr>

                                   @foreach($newCases as $newCase)
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$newCase->designation}}</td>
                                    <td>{{$newCase->designation}}</td>
                                    <td>{{$newCase->description}} <td>
                                    <form action="{{route('newCase.destroy', $newCase)}}" method="post">
                                        @csrf
                                        <input type="hidden" name='_method' value='delete'>
                                     <a href="{{route('newCase.edit',$newCase)}}" class='btn'><i class='fa fa-edit'></i></a>
                                     <button class='btn text-danger' type='submit'><i class='fa fa-trash'></i></button>    
                                    </form></td>
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