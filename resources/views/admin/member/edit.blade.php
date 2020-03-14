@extends('admin.master')

@section('title')
    <title>member Page</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
      member 
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('member.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">member</li>
    </ol>
</section>
@endsection

@section('content')
    <section class="content">
        <div class="col-md-8">
          @card
              @slot('title')
                  Edit 
              @endslot

              @if (session('error'))
                @alert(['type' => 'danger'])
                    {!! session('error') !!}
                @endalert
              @endif
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Edit member</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{ route('member.update', $members->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
  
                    <div class="col-sm-10">
                      <input type="text" name="name" value="{{ $members->name }}" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}"  placeholder="Name" required>
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" value="{{ $members->address }}" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" placeholder="Address" required>
                    </div>  
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Phone</label>
                      <div class="col-sm-10">
                          <input type="text" name="phone" value="{{ $members->phone }}" required class="form-control">
                        </div>  
                    </div>
                  
                </div>
              <div class="box-footer">
                <a href="{{ route('member.index') }}" class="btn btn-warning"><i class="fa fa-backward"></i> Back</a>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>    
              </form>
          @endcard
            </div>
           
          </div>
    </section>
@endsection

