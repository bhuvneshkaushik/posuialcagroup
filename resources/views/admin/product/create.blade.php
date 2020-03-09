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
        <div class="col-md-8">
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
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}"  placeholder="product Name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                      
                        <select name="category_id" class="form-control select2" required>
                          <option value="">&mdash;</option>
                          @foreach ($category as $c)
                              <option value="{{ $c->id }}">{{ $c->name }}</option>
                          @endforeach
                        </select>
                         
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Supplier</label>
                    <div class="col-sm-10">
                      <select name="supplier_id" class="form-control select2" required>
                          <option value="NULL">&mdash;</option>
                          @foreach ( $supplier as $s )
                          <option value="{{ $s->id }}">{{ $s->name }}</option>
                          @endforeach   
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Brand</label>
                    <div class="col-sm-10">
                      <select name="brand_id" class="form-control select2" required>
                          <option value="NULL">&mdash;</option>
                          @foreach ( $brands as $b )
                          <option value="{{ $b->id }}">{{ $b->name }}</option>
                          @endforeach   
                      </select> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Unit</label>
                    <div class="col-sm-10">
                      <select name="unit" class="form-control select2">
                        <option value="">&mdash;</option>
                        @foreach ($units as $uni)
                            <option value="{{ $uni }}">{{ $uni }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Diskon</label>
                    <div class="col-sm-10">
                      <input type="text" name="diskon" required class="form-control" placeholder="Diskon">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                      <input type="text" name="price" required class="form-control" placeholder="Price">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">PPN</label>
                    <div class="col-sm-10">
                      <input type="text" name="ppn" required class="form-control" placeholder="PPN">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Stock </label>
                    <div class="col-sm-10">
                      <input type="number" name="stock" class="form-control" required placeholder="Stock">
                    </div>
                  </div>
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

