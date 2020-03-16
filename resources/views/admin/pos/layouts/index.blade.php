@extends('admin.pos.masterpos')

@section('title')
    <title>POS</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
      Kasir
      <small id="txt"></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      
    </ol>
</section>
@endsection

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div >

      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered">
            <tr>
              <th>#</th>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection