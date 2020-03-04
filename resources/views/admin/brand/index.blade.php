@extends('admin.master')

@section('title')
    <title>Brand Page</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
      Brand 
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Brand</li>
    </ol>
  </section>

@endsection

@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
          <a href="#" class="btn btn-success">Add Brand</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Misc</td>
              <td>IE Mobile</td>
              <td>Windows Mobile 6</td>
              <td>-</td>
              <td>C</td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>PSP browser</td>
              <td>PSP</td>
              <td>-</td>
              <td>C</td>
            </tr>
            <tr>
              <td>Other browsers</td>
              <td>All others</td>
              <td>-</td>
              <td>-</td>
              <td>U</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
@endsection

@section('js-page')
    <!-- jQuery 3 -->
<script src="{{URL::asset('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{URL::asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{URL::asset('asset/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{URL::asset('asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('asset/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('asset/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('asset/../../dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection