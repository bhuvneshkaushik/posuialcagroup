@extends('admin.master')

@section('title')
    <title>product Page</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
      product 
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('product.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">product</li>
    </ol>
</section>
@endsection

@section('content')
    <section class="content">
        <div class="col-md-12">
          @card
              @slot('title')
                  Tambah
              @endslot

              @if (session('error'))
                @alert(['type' => 'danger'])
                    {!! session('error') !!}
                @endalert
              @endif
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Add Product</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="box-body">
                  <table class="table table-primary table-bordered col-md-8">
                      <tr>
                          <td>Name</td>
                          <td><input type="text" name="name" class="form-control " required></td>
                          <td>Category</td>
                          <td><select name="category_id" class="form-control" required>
                            <option value="">&mdash;</option>
                            @foreach ($category as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach  
                          </select></td>
                          <td>Supplier</td>
                          <td>
                          <select name="supplier_id" class="form-control" required>
                            <option value="">&mdash;</option>
                            @foreach ($supplier as $sup)
                                <option value="{{ $sup->id }}">{{ $sup->name }}</option>
                            @endforeach
                          </select>
                        </td>
                      </tr>
                      
                      <tr>
                        <td>Stock</td>
                        <td><input type="number" name="stock" class="form-control" required></td>
                        <td>Harga Beli</td>
                        <td><input type="number" name="harga_beli" class="form-control"required></td>
                        <td>Harga Jual 1</td>
                        <td><input type="number" name="harga_jual_1" class="form-control" required></td>
                      </tr>
                      
                      <tr>
                        <td>PPN Beli</td>
                        <td><input type="number" name="ppn_beli" class="form-control" required></td>
                        <td>Expired Product</td>
                        <td><input type="date" name="expired_date" class="form-control" required></td>
                        <td>Satuan</td>
                        <td>
                          <select name="satuan" class="form-control">Satuan
                            <option value="0">&mdash;</option>
                            @foreach ($units as $st)
                              <option value="{{ $st }}">{{ $st }}</option>
                            @endforeach
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>PPN Jual</td>
                        <td><input type="number" name="ppn_jual" class="form-control"></td>
                        <td>Harga Jual 2</td>
                        <td><input type="number" name="harga_jual_2" class="form-control"></td>
                        <td>SKU</td>
                        <td><input type="number" name="no_sku" placeholder="NO SKU" class="form-control"></td>
                      </tr>
                      <tr>
                        <td>Diskon 1</td>
                        <td><input type="number" name="diskon_1" class="form-control"></td>
                        <td>Diskon 2</td>
                        <td><input type="number" name="diskon_2" class="form-control"></td>
                        <td>Diskon 3</td>
                        <td><input type="number" name="diskon_3" class="form-control"></td>
                      </tr>
                      <tr>
                        <td>Harga Jual 3</td>
                        <td><input type="number" name="harga_jual_3" class="form-control"></td>
                        
                      </tr>
                  </table>
                </div>
              <div class="box-footer">
                <a href="{{ route('product.index') }}" class="btn btn-warning"><i class="fa fa-backward"></i> Back</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>    
              </form>
          @endcard
            </div>
          </div>
    </section>
@endsection

@section('js-page')
    
<!-- Select2 -->
<script src="{{URL::asset('asset/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>
    
@endsection

