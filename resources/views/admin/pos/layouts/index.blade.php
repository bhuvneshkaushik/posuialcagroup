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
        <div class="box-body">
          <table class="table table-danger table-bordered">
            <tr>
              <td>Tes</td>
              <td>Tes</td>
            </tr>
          </table>
        </div>
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
                  <th>Tools</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mie</td>
                  <td>2500</td>
                  <td>4</td>
                  <td>4</td>
                  <td>4</td>
                  <td>4</td>
                  <td><a href="#" class="btn btn-info"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              </tbody>
          </table>
          <div class="row">
            <div class="box-body">
               <table class="table table-bordered">
                 <thead>
                   <tr>
                     <th>#</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>Nama</td>
                   </tr>
                 </tbody>
               </table>
            </div>
          </div>
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
          <form action="" method="POST">
            <div class="row">
              <table class="table ">
                <tr>
                  <td>Product :</td>
                  <td><select name="product_id" id="" class="js-example-responsive form-control select2">
                    <option value="null">&mdash;</option>
                    @foreach ($product as $pr)
                      <option value="{{ $pr->id }}">{{ $pr->name }} - {{$pr->productCode}}</option>
                    @endforeach  
                  </select> </td>
                  
                </tr>
                <tr>
                  <td>Qty</td>
                  <td><input type="number" name="qty" id="" class="form-control" value="1"></td>
                </tr>
                <tr>
                  <td>Member :</td>
                  <td><select name="member_id" id="" class="js-example-responsive form-control select2">
                    <option value="null">&mdash;</option>  
                    @foreach ($member as $mb)
                        <option value="{{ $mb->id }}">{{ $mb->name }} - {{ $mb->memberCode }}</option>
                    @endforeach
                  </select></td>
                </tr>
                <tr>
                  <td colspan="2" class="text-right"><button type="submit" class="btn btn-success"><span class="fa fa-flask"></span> Add</button></td>
                </tr>
              </table>
              
            </div>
            
          </form>
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