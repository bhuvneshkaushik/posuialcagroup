<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Alexander Pierce</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu bg-default" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active">
      <a href="{{ route('category.create') }}">
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
        <span>Master Data</span>
      </a>
      <ul class="treeview-menu">
        <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Manajemen User</a></li>
        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Manajemen Shift</a></li>
        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Data Supplier</a></li>
        <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>Data Kategori</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Data Brand</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Data Pelanggan</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Data Produk</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Data Rak</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Data Point</a></li>
      </ul>
    </li>
    
    <li class="treeview">
      <a href="#">
        <i class="fa fa-pie-chart"></i>
        <span>Charts</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
        <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
        <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
      </ul>
    </li>
    <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
    <li class="header">LABELS</li>
    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
  </ul>
</section>