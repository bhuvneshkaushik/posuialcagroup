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
          <a href="{{ route('brand.create') }}" class="btn btn-success">Add Brand</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Brand Name</th>
              <th>Status</th>
              <th>Tools</th>
            </tr>
            </thead>
            <tbody>
              @php
                $no = 1;   
              @endphp
              @forelse ($brands as $i)
                  <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $i->name }}</td>
                    <td>@if ($i->status == 'y')
                        <label class="btn btn-success">{{ $i->status }}</label>
                       @else 
                       <label class="btn btn-danger">{{ $i->status }}</label>
                    @endif
                      </td>
                    <td><button class="btn btn-success" title="Edit"><i class="fa fa-edit"></i></button> 
                    <a href="#" class="btn btn-warning" title="Show"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  @php
                      $no++
                  @endphp
              @empty
                  <tr>
                    <td colspan="3" class="text-center">Tidak Ada Data</td>
                  </tr>
              @endforelse
            </tbody>
            <tfoot>
            <tr>
              <th>#</th>
              <th>Name Brand</th>
              <th>Status</th>
              
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
<!-- DataTables -->
<script src="{{URL::asset('asset/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('asset/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('asset/dist/js/adminlte.min.js')}}"></script>

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