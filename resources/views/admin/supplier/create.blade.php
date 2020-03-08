@extends('admin.master')

@section('title')
    <title>Data Supplier</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
      Supplier 
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('supplier.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Supplier</li>
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
                <h3 class="box-title">Form Add Supplier</h3>
            </div>
            <form action="{{route('supplier.store')}}">
                <table class="table table-bordered with-border">
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><input type="text" name="name" class="form-control"></td>
                        <td>Address</td>
                        <td>:</td>
                        <td><input type="text" name="address" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Fax</td>
                        <td>:</td>
                        <td><input type="text" name="fax" class="form-control"></td>
                        <td>Phone</td>
                        <td>:</td>
                        <td><input type="text" name="phone" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Contact Person</td>
                        <td>:</td>
                        <td><input type="text" name="contact_person" class="form-control"></td>
                        <td>Supplier CPHP</td>
                        <td>:</td>
                        <td><input type="text" name="supplierCPHP" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><select name="status" class="form-control">
                            <option value="0">-Pilih-</option>
                            <option value="y">Y</option>
                            <option value="n">N</option>    
                        </select></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        
                        <td colspan="6"><button type="submit" class="pull-right btn btn-info">Save</button></td>
                    </tr>
                </table>
            </form>
        </div>
        @endcard
    </div>
</section>
@endsection