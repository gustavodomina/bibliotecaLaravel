<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('titulo', 'Biblioteca') | TutorialesVirtuales </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">
  <!-- css customizados propios s-->
  <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">

  <!-- css enviados desde el controlador -->
  @yield('styles')
  <!-- /.css enviados desde el controlador -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9] 
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <!-- [endif] -->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- inicio header -->
        @include("theme/$theme/header");
        <!-- fin header -->
        
        <!-- inicio aside -->
        @include("theme/$theme/aside");
        <!-- fin aside -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <!-- contenido enviados desde el controlador -->
                    @yield('contenido')
                <!-- /.contenido enviados desde el controlador -->
            </section>
            <!-- ./Main content -->
    </div>
    <!-- ./Site wrapper -->
    <!-- inicio footer -->
    @include("theme/$theme/footer");
    <!-- /. fin footer -->
    <!-- jQuery 3 -->
    <script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
    <!-- FastClick -->
    <script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
    <!-- jqueryvalidation -->
    <script src="{{asset("assets/js/jquery-validation/jquery.validate.js")}}"></script>
    <script src="{{asset("assets/js/jquery-validation/localization/messages_es_AR.js")}}"></script>
    <script src="{{asset("assets/js/funciones.js")}}"></script>
    <!-- js enviados desde el controlador -->
    @yield('scripts')
    <!-- /. js enviados desde el controlador -->
</body>
<!-- ./body -->

</html>    