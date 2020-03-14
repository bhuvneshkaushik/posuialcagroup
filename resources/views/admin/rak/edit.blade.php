@extends('admin.master')

@section('title')
    <title>rak Page</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
      rak 
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('rak.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">rak</li>
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
                <h3 class="box-title">Form Add rak</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{ route('rak.update', $raks->id) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">No Rak</label>
                      <div class="col-sm-10">
                        <input type="text" name="no_rak" value="{{ $raks->no_rak }}" class="form-control {{ $errors->has('no_rak') ? 'is-invalid':'' }}" placeholder="No Rak">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
  
                    <div class="col-sm-10">
                      <input type="text" name="name" value="{{ $raks->name }}" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}"  placeholder="rak Name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" value="{{ $raks->description }}" class="form-control {{ $errors->has('description') ? 'is-invalid':'' }}" placeholder="Description" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label   class="col-sm-2 control-label">Status</label>

                    <div class="col-sm-10">
                      <select name="status" required class="form-control {{ $errors->has('status') ? 'is-invalid' :'' }}">
                        <option value="0">--Pilih--</option>
                        @if ($raks->status == 'y')
                        <option value="{{ $raks->status }}" selected>{{ $raks->status }}</option>
                        <option value="n">N</option>
                        @else
                        <option value="{{ $raks->status }}" selected>{{ $raks->status }}</option>
                        <option value="y">Y</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  
                </div>
              <div class="box-footer">
                <a href="{{ route('rak.index') }}" class="btn btn-warning"><i class="fa fa-backward"></i> Back</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>    
              </form>
          @endcard
            </div>
           
          </div>
    </section>
@endsection

