@extends("theme.$theme.layout");

@section('titulo')
    Gestión Menús
@endsection

@section("scripts")
<script src="{{asset("assets/js/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            <!-- si hay errores se muestran aca -->
            @include('includes.form-error')
            <!-- fin errores -->
            <!-- mensajes sin error -->
            @include('includes.mensajes')
            <!-- fin mensajes -->
            <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Permisos</h3>
                </div>
                <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
                    <!-- CSRF(cross file protection) tsoken de seguridad -->
                    @csrf
                    <!-- box-body -->
                    <div class="box-body ">
                        @include('admin.menu.form')
                    </div>  
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            @include('includes.boton-form-crear')
                        </div>
                    </div>
                    <!-- /.box-footer -->  
                </form>    
            </div>
        </div>
    </div>
@endsection