@extends('admin.master')

@section('title')
    <title>Supplier</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
      Supplier
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Supplier</li>
    </ol>
</section>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              @if (session('success'))
                @alert(['type' => 'success'])
                    {!! session('success') !!}
                @endalert
              @endif
              <div class="box">
                <div class="box-header">
                  <a href="{{ route('supplier.create') }}" class="btn btn-success">Add supplier</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Code</th>
                      <th>Name</th>
                      <th>Fax</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Contact Person</th>
                      <th>Status</th>
                      <th>Tools</th>
                    </tr>
                    </thead>
                    <tbody>
                      @php
                        $no = 1;   
                      @endphp
                      @forelse ($suppliers as $i)
                          <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $i->supplierCode }}</td>
                            <td>{{ $i->name }}</td>
                            <td>{{ $i->fax }}</td>
                            <td>{{ $i->phone }}</td>
                            <td>{{ $i->address }}</td>
                            <td>{{ $i->contact_person }}</td>
                            <td>@if ($i->status == 'y')
                                <label class="btn btn-success">{{ $i->status }}</label>
                               @else 
                               <label class="btn btn-danger">{{ $i->status }}</label>
                            @endif
                              </td>
                            <td>
                              <form action="{{ route('supplier.destroy', $i->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <a href="{{route('supplier.edit', $i->id)}}" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                {{-- <a href="#" class="btn btn-info btn-sm" title="Show"><i class="fa fa-eye"></i></a> --}}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></button>
                              </form>
                            </td>
                          </tr>
                          @php
                              $no++
                          @endphp
                      @empty
                          <tr>
                            <td colspan="8" class="text-center">Tidak Ada Data</td>
                          </tr>
                      @endforelse
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Fax</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Contact Person</th>
                        <th>Status</th>
                        <th>Tools</th>
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
    </section>
@endsection
@section('js-page')
<!-- DataTables -->
<script src="{{URL::asset('public/asset/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('public/asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

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