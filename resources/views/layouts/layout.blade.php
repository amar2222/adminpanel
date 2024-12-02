<!DOCTYPE html>
<!-- <html lang="en"> -->
<html  lang="{{ app()->getLocale() }}">

@include('layouts.head')

<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed  text-sm">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src={{url('dist/img/AdminLTELogo.png')}} alt="AdminLTELogo" height="60" width="60">
  </div> -->

  @include('layouts.header')

  @include('layouts.sidebar')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ __('messages.Dashboard') }}</h1>
          
          
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{@$title}}</li>
         
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>

  @include('layouts.footer')

  </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- 
    
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!-- Bootstrap -->
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('dist/js/adminlte.js')}}"></script>

<script src="{{url('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{url('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{url('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{url('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{url('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('dist/js/demo.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{url('dist/js/pages/dashboard2.js')}}"></script> -->
 @if(@$data['datatable'] == 1)

 <!-- DataTables  & Plugins -->
<script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

 @endif

 @if(@$data['fancyfile'] == 1)

 <!-- fancyfile upload  & Plugins -->
 <script src="{{url('dist/js/jquery.ui.widget.js')}}"></script>
 <script src="{{url('dist/js/jquery.fancy-fileupload.js')}}"></script>
 <script src="{{url('dist/js/jquery.fileupload.js')}}"></script>
 <script src="{{url('dist/js/jquery.iframe-transport.js')}}"></script>
 @endif



</body>
</html>

