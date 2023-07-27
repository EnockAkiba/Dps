@extends('back.layout')

@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0"><a href="">Dashboard</a> / <span>Décès</span>  </h5>
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
                          <h5>Décès</h5>
                           <a href="{{route('deces.create')}}">Ajouter cas de Décès</a>
                        </div>

                        <div class="card-body">
                           <table class='table table-hover'>
                                <thead class='bg-dark'>
                                    <th>#</th>
                                    <th>Tranche Age</th>
                                    <th>Epidemie</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                   @foreach($deces as $dece)
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$dece->trancheAge}}</td>
                                    <td>{{$dece->epidemie->designation}}<td>
                                    <!-- <td><td> -->
                                    <td>
                                        <form action="{{route('deces.destroy', $dece)}}" method="post">
                                            @csrf
                                            <input type="hidden" name='_method' value='delete'>
                                        <a href="{{route('deces.edit', $dece)}}" class='btn'><i class='fa fa-edit'></i></a>
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