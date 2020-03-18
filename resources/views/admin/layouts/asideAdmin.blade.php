<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{URL::asset('public/asset/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
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
        <a href="{{ url('pos') }}" target="_self">
          <i class="fa fa-shopping-cart"></i><span>POS</span>
        </a>
    </li>
    <li>
      <a href="{{ route('informasi.index') }}">
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
        {{-- <li><a href="{{ route('brand.index') }}"><i class="fa fa-circle-o"></i>Data Brand</a></li> --}}
        <li><a href="{{ route('rak.index') }}"><i class="fa fa-circle-o"></i>Data Rak</a></li>
        <li><a href="{{ route('supplier.index') }}"><i class="fa fa-circle-o"></i>Data Supplier</a></li>
        <li><a href="{{ route('product.index') }}"><i class="fa fa-circle-o"></i>Data Produk</a></li>
        <li><a href="{{ route('member.index') }}"><i class="fa fa-circle-o"></i>Data Pelanggan</a></li>
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
        <span>Pembelian</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Transaksi</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Transaksi</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Retur Produk</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Retur</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Retur</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Master Biaya</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Akun Biaya</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Pengeluaran Biaya</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari Pengeluaran Biaya</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Stock Opname</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Stock Opname</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cari StockOpname</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cetak Produk</a></li>
      </ul>
    </li>
    
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Cetak Price Tag</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Cetak Barcode</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Cetak Price Tag</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Kartu Hutan Dan Piutang</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Kartu Hutang</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Kartu Piutang</a></li>
      </ul>
    </li>
    {{-- <li class="treeview">
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
    </li> --}}
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Laporan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Laporan Perioder</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Laporan Supplier</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Laporan Data Member</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Laporan Data Produk</a></li>

      </ul>
    </li>
  </ul>
</section>