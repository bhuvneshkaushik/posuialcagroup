@extends('admin.master')

@section('title')
    <title>Category Page</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
      category 
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('category.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">category</li>
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
                <h3 class="box-title">Form Add category</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
  
                    <div class="col-sm-10">
                      <input type="text" name="name" value="{{ $category->name }}" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}"  placeholder="category Name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" name="status" class="col-sm-2 control-label">Status</label>
  
                    <div class="col-sm-10">
                      <select name="status" required class="form-control {{ $errors->has('status') ? 'is-invalid' :'' }}">
                        <option value="0">--Pilih--</option>
                        @if ($category->status == 'y')
                        <option value="{{ $category->status }}" selected>{{ $category->status }}</option>
                        <option value="n">N</option>
                        @else
                        <option value="{{ $category->status }}" selected>{{ $category->status }}</option>
                        <option value="y">Y</option>
                        @endif
                        
                      </select>
                    </div>
                  </div>
                  
                </div>
              <div class="box-footer">
                <a href="{{ route('category.index') }}" class="btn btn-warning"><i class="fa fa-backward"></i> Back</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>    
              </form>
          @endcard
            </div>
           
          </div>
    </section>
@endsection

