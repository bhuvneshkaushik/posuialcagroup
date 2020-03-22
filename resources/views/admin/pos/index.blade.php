@extends('admin.master')

@section('title')
    <title>POS Page</title>
@endsection

@section('content-header')
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>

<section class="content-header">
    <h1>
      POS
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">POS</li>
    </ol>
</section>

@endsection

@section('content')
<section class="content">
    <div class="row">
        <!-- Content Kiri -->
        <div class="col-md-7 border-right">
            <div class="row">
                <!-- Tooltips -->
                    <div class="col">
                      <!-- Button trigger modal -->
                        <a type="button" class="btn text-success" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus"></i>
                            <span>Tambah Produk</span>
                        </a>
                      <!-- Tambah Barang Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                ...
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                      <!-- Category -->
                    <div class="col pull-right">
                      <div class="box-tools">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item active">
                            <a class="nav-link active" id="pills-makanan-tab" data-toggle="pill" href="#pills-makanan" role="tab" aria-controls="pills-makanan" aria-selected="true">
                                <i class="fa fa-cutlery"></i> Makanan
                            </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <i class="fa fa-glass"></i> Minuman
                            </a>
                            </li>
                        </ul>
                      </div>
                    </div>
            </div>
<br>
            <!-- Pills Category -->
            <div class="tab-content" id="pills-tabContent">
                <!-- List Product -->
                <div class="tab-pane fade show active" id="pills-makanan" role="tabpanel" aria-labelledby="pills-makanan-tab">
                    <div class="row">
                        <div class="col-lg-4 col-xs-6">
                            <div class="card text-center">
                                <div class="card-body">
                                <img src="{{ URL::asset('asset/dist/img/image1.jpg') }}" class="card-img-top img-fluid"  alt="responsive image">
                                <h3>Dogfood1</h3>
                                <p>Rp 15</p>
                                <a type="button" class="btn btn-success add-cart cart1">Choose</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="card text-center">
                                <div class="card-body">
                                <img src="{{ URL::asset('asset/dist/img/image1.jpg') }}" class="card-img-top img-fluid"  alt="responsive image">
                                <h3>Dogfood2</h3>
                                <p>Rp 20</p>
                                <a class="btn btn-success add-cart cart2">Choose</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="card text-center">
                                <div class="card-body">
                                <img src="{{ URL::asset('asset/dist/img/image1.jpg') }}" class="card-img-top img-fluid"  alt="responsive image">
                                <h3>Dogfood3</h3>
                                <p>Rp 30</p>
                                <a type="button" class="btn btn-success add-cart cart3">Choose</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <ul class="pagination pagination-sm margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                </div>
            </div>
        </div>

        <!-- Content Kanan -->
        <div class="col-md-5 mx-auto">
                <div class="box box-widget" id="cart">
                    <h2 class="text-center box-header"><b class=" text-success">Details</b></h2>
                    <div class="box-body" data-kart="display">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-active">
                                    <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Produk</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">QTY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="product-container">
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Total Amount -->
                    <div class="box-footer bg-gray">
                        <div class="d-flex table-active font-weight-bold text-secondary">
                            <div class="h5">Subtotal
                                <span class="pull-right p-2">RP 200</span>
                            </div>

                        </div>
                        <div class="d-flex table-active font-weight-bold text-secondary">
                            <div class="h5">Tax 1.5%
                                <span class="pull-right p-2">RP 15</span>
                            </div>
                        </div>
                        <div class="d-flex font-weight-bold">
                            <div class="h4"><b>Total</b>
                                <span class="pull-right"><b>RP 185</b></span>
                            </div>
                        </div>
                    </div>
                </div>
            <br>
            <button type="button" class="btn btn-success btn-lg btn-block">Checkout</button>
        </div>
    </div>
  <!-- /.row -->
</section>
@endsection

@section('js-page')
<script>

</script>
@endsection
