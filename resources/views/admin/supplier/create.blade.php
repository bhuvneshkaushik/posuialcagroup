@extends('admin.master')

@section('title')
    <title>supplier Page</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
      supplier 
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('supplier.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">supplier</li>
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
              @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
              @endif
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Add supplier</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{ route('supplier.store') }}" method="POST">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
  
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}"  placeholder="supplier Name" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
  
                    <div class="col-sm-10">
                      <input type="text" name="address" class="form-control {{ $errors->has('address') ? 'is-invalid':'' }}"  placeholder="Address" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Fax</label>
  
                    <div class="col-sm-10">
                      <input type="text" name="fax" class="form-control {{ $errors->has('fax') ? 'is-invalid':'' }}"  placeholder="Fax" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
  
                    <div class="col-sm-10">
                      <input type="text" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid':'' }}"  placeholder="phone" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Contact Person</label>
  
                    <div class="col-sm-10">
                      <input type="text" name="contact_person" class="form-control {{ $errors->has('contact_person') ? 'is-invalid':'' }}"  placeholder="contact_person" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">SupplierCPHP</label>
                    <div class="col-sm-10">
                      <input type="text" name="supplierCPHP" class="form-control {{ $errors->has('supplierCPHP') ? 'is-invalid':'' }}"  placeholder="supplierCPHP" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" name="status" class="col-sm-2 control-label">Status</label>
  
                    <div class="col-sm-10">
                      <select name="status" required class="form-control {{ $errors->has('status') ? 'is-invalid' :'' }}">
                        <option value="0">--Pilih--</option>
                        <option value="y">Y</option>
                        <option value="n">N</option>
                      </select>
                    </div>
                  </div>
                  
                </div>
              <div class="box-footer">
                <a href="{{ route('supplier.index') }}" class="btn btn-warning"><i class="fa fa-backward"></i> Back</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>    
              </form>
          @endcard
            </div>
           
          </div>
    </section>
@endsection

