@extends('admin.master')

@section('title')
    <title>Dashboard </title>
@endsection

@section('content-header')
    <section class="content-header">
        <h1>Dashboard
            <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="alert alert-info">
                            <p><span class="fa fa-fw fa-info-circle"></span>Selamat Datang {{ Auth::user()->name }}  <a style="color: #fff;font-weight: bold;border: 1px solid #fff;padding: 5px 10px;text-decoration: none;text-transform: uppercase;" href="#">Look &rarr;</a></p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-shopping-cart"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Sell</span>
                  <span class="info-box-number">1,410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-book"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Quotation</span>
                  <span class="info-box-number">410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Supplier</span>
                  <span class="info-box-number">13,648</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-file-text-o"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Invoice</span>
                  <span class="info-box-number">93,139</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recent Activities</h3>
                    </div>
                    <div class="box-body">
                        <div class="nav-tabs-custom mb-0">
                            <ul class="nav nav-tabs store-15">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection