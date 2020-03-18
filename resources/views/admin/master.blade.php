<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   @yield('title')
   @include('admin.components.css') 
   <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
   <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #ffff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
    </style>
   <script>
    $(document).ready(function(){
      $(".preloader").fadeOut(100);
    });
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini" >
    <div class="preloader">
      <div class="loading">
        <img src="{{asset('public/images/loading212.gif')}}" width="95%">
      </div>
    </div>
<div class="wrapper">

  @include('admin.layouts.navbar')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    @if (Auth::user()->level == 1)
        @include('admin.layouts.asideAdmin')
    @elseif(Auth::user()->level == 2)
        @include('admin.layouts.asideUser')
    @endif
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content-header')

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.layouts.footer')
</div>
<!-- ./wrapper -->

@include('admin.components.js')
@yield('js-page')

</body>
</html>
