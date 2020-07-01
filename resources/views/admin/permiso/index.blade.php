@extends("theme.$theme.layout");

@section('titulo')
    Gestion de Permisos    
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Gestion de Permisos</h3>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr> 
                                <th>Id</th>
                                <th>Permiso</th>
                                <th>Slug</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($permisos as $permiso)
                                <tr>
                                    <td>{{'# '.$permiso->id}}</td>
                                    <td>{{$permiso->nombre}}</td>
                                    <td>{{$permiso->slug}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>    
                </div>    
            </div>
        </div>
    </div>
@endsection