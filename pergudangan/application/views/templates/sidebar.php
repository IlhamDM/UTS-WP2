<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url() ?>assets/dist/img/toonmechallenge.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Ilham DM</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dropbox"></i> <span>Barang</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/pergudangan/barang"><i class="fa fa-dropbox"></i> Data Barang </a></li>
                    <li><a href="http://localhost/pergudangan/barang_masuk"><i class="fa fa-dropbox"></i> Barang Masuk </a></li>
                    <li><a href="http://localhost/pergudangan/barang_keluar"><i class="fa fa-dropbox"></i> Barang Keluar </a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-cubes"></i> <span>Stok</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/pergudangan/stok"><i class="fa fa-cubes"></i> Data Stok </a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Rak</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/pergudangan/rak"><i class="fa fa-th"></i> Data Rak </a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-id-card-o"></i> <span>Tentang</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/pergudangan/biodata"><i class="fa fa-id-badge"></i> Biodata </a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-sign-out"></i> <span>Log Out</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>