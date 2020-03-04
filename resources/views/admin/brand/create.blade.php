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
        <div class="col-md-8">
          
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
                <h3 class="box-title">Form Add Brand</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{ route('brand.store') }}" method="POST">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Brand Name</label>
  
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}"  placeholder="Brand Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" name="status" class="col-sm-2 control-label">Description</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control {{ $errors->has('status' ? 'is-invalid' : '') }}"  placeholder="Description">
                    </div>
                  </div>
                  
                </div>

               
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">Sign in</button>
                </div>
            
              </form>
          
            </div>
           
          </div>
    </section>
@endsection

