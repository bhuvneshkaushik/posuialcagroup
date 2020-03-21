@extends('admin.pos.masterpos')

@section('title')
    <title>POS</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
      Kasir
      
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      
    </ol>
</section>
@endsection

@section('content')
<section class="content">
<div class="row">
    <div class="col-xs-12 col-md-8">
      <div class="box box-danger">
        <div class="box-header with-border">
          <i class="fa fa-shopping-cart"></i>

          <h3 class="box-title">Cart</h3>
        </div>
        <!-- /.box-header -->
        {{-- <div class="box-body">
          <table class="table table-danger table-bordered">
            @foreach ($cartMember as $cm)
            <tr>
              <td>memberCode</td>
              <td><input type="text" value="{{ $cm->member->memberCode }}"  name="memberCode" readonly class="form-control" value="" placeholder="memberCode"></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td><input type="text" value="{{ $cm->member->name }}" readonly  name="name" placeholder="Name" class="form-control"></td>
            </tr>
            <tr>
              <td>Hp</td>
              <td><input type="text" name="phone" value="{{ $cm->member->phone }}" readonly placeholder="phone" class="form-control" id=""></td>
            </tr>
           
            <tr>
              <td>Status</td>
              <td><select name="status" class="form-control" style="width:30%">
                <option value="null">&mdash;</option>  
                @foreach ($status as $st)
                    <option value="{{ $st }}">{{ $st }}</option>
                @endforeach
              </select></td>
            </tr>
            
            @endforeach
          </table>
        </div> --}}
        <div class="box-body">
          <table class="table table-info table-bordered" style="border-collapse: collapse;">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name Product</th>
                  <th>Price</th>
                  <th>Unit</th>
                  <th>Disc</th>
                  <th>ppn</th>
                  <th>Qty</th>
                  <th>SubTotal</th>
                  <th>Tools</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="7" class="text-right">SubTotal:</th>
                  <th colspan="2"><input type="text" readonly class="form-control" name="" id=""></th>
                </tr>
                <tr>
                  <th colspan="7" class="text-right">PPN(10%):</th>
                  <th colspan="2"><input type="text" readonly class="form-control" name="" id=""></th>
                </tr>
                <tr>
                  <th colspan="7" class="text-right">Total Diskon:</th>
                  <th colspan="2"><input type="text" readonly class="form-control" name="" id=""></th>
                </tr>
                <tr>
                  <th colspan="7" class="text-right">GrandTotal:</th>
                  <th colspan="2"><input type="text" readonly class="form-control" name="" id=""></th>
                </tr>
                <tr>
                  <th colspan="7" class="text-right">Bayar / DP:</th>
                  <th colspan="2"><input type="text" placeholder="Bayar" class="form-control" name="" id=""></th>
                </tr>
                <tr>
                  <th colspan="7" class="text-right">&nbsp;</th>
                  <th colspan="2"><button class="btn btn-warning"> <b>ADD Payment</b> </button></th>
                </tr>
              </tfoot>
          </table>
          
        </div>
        <!-- /.box-body -->
        <!-- Tambahan -->
        
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->

    <div class="col-xs-6 col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <i class="fa fa-list"></i>
          <h3 class="box-title" id="txt"></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          
          <div class="row">
            <form action="{{ route('pos.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('POST')
              <table class="table table-bordered">
                  <tr>
                  <td>Member :</td>
                  <td><select name="member_id" id="" class="js-example-responsive form-control select2">
                    <option value="null">&mdash;</option>  
                    @foreach ($product as $pr)
                        <option value="{{ $pr->id }}">{{ $pr->name }} - {{ $mb->memberCode }}</option>
                    @endforeach
                  </select></td>
                </tr>
                <tr>
                  <td colspan="2" class="text-right"><button type="submit" class="btn btn-success"><span class="fa fa-flask"></span> Add</button></td>
                </tr>
              </table>
            </form>
          </div>
        </div>
        <div class="body">
          
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
</div>

</section>
@endsection

@section('jsmasterpos')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="{{URL::asset('public/asset/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".js-example-responsive").select2({
      width: 'resolve' // need to override the changed default
    });
    
  })
</script>
@endsection