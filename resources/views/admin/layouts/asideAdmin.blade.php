<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{URL::asset('asset/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
    <p>{{ Auth::user()->name }}</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu bg-default" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active">
      <a href="{{url('/')}}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-th"></i> <span>Informasi Toko</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Master Data Produk</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i>Data Kategori</a></li>
        <li><a href="{{ route('brand.index') }}"><i class="fa fa-circle-o"></i>Data Brand</a></li>
        <li><a href="{{ route('rak.index') }}"><i class="fa fa-circle-o"></i>Data Rak</a></li>
        <li><a href="{{ route('supplier.index') }}"><i class="fa fa-circle-o"></i>Data Supplier</a></li>
        <li><a href="{{ route('product.index') }}"><i class="fa fa-circle-o"></i>Data Produk</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Data Pelanggan</a></li>
      </ul>
    </li>
    
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Transaksi Penjualan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Transaksi</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Transaksi Pending</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Transaksi</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-money"></i>
        <span>Sell</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Transaksi</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Transaksi Pending</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Transaksi</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Transaksi Penjualan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Transaksi</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Transaksi Pending</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Transaksi</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Transaksi Penjualan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Transaksi</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Transaksi Pending</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Transaksi</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Transaksi Penjualan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Transaksi</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Transaksi Pending</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Transaksi</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Transaksi Penjualan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Transaksi</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Transaksi Pending</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Transaksi</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Transaksi Penjualan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Transaksi</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Transaksi Pending</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Transaksi</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Transaksi Penjualan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Transaksi</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Transaksi Pending</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Transaksi</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Transaksi Penjualan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Transaksi</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Transaksi Pending</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Transaksi</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Transaksi Penjualan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Transaksi</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Transaksi Pending</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Transaksi</a></li>
      </ul>
    </li>
  </ul>
</section>