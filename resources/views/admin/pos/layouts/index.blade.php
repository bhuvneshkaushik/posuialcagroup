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
          <div class="callout callout-info">
            <h4><span class="glyphicon glyphicon-object-align-left"></span> Product</h4>  
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                  </tr>
                </thead>
            </table>
          </div>
          <div class="callout callout-danger">
            <h4><span class="glyphicon glyphicon-book"></span> Item Cart</h4>  
            <table class="table table-bordered">
               <tr>
                 <td></td>
               </tr>
            </table>
          </div>
          <div class="callout callout-warning">
            <h4>I am a warning callout!</h4>

            <p>This is a yellow callout.</p>
          </div>
          <div class="callout callout-success">
            <h4>I am a success callout!</h4>

            <p>This is a green callout.</p>
          </div>
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
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

@endsection