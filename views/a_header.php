<header class="header">
    <a href="beranda" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
       TigaTours Travel
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
           <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span><i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">                                
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="doLogout" class="btn btn-default btn-flat">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="assets/img/avatar5.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello,</p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li>
                    <a href="mint">
                        <i class="fa fa-dashboard"></i> <span>Dasbor</span>
                    </a>
                </li>             
                <li>
                    <a href="mint-paket">
                        <i class="fa fa-picture-o"></i> <span>Paket</span>
                    </a>
                </li>
                <li>
                    <a href="mint-testi-1">
                        <i class="fa fa-th"></i> <span>Testimoni</span>
                    </a>
                </li>
                <?php 
                    if($_GET['page']=='home' || $_GET['page']=='paket' || $_GET['page']=='cms' ||$_GET['page']=='testimoni' || $_GET['page']=='editpaket'){
                ?>
                <li class="treeview">
                <?php }else{ echo"<li class='active treeview'>"; } ?>
                    <a href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Manage Data</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="mint-galeri-1"><i class="fa fa-chevron-right"></i> Galeri</a></li>
                        <li><a href="mint-lokasi-1"><i class="fa fa-chevron-right"></i> Lokasi</a></li>
                        <li><a href="mint-car-1"><i class="fa fa-chevron-right"></i> Mobil</a></li>
                        <li><a href="mint-hotel-1"><i class="fa fa-chevron-right"></i> Hotel</a></li>
                        <li><a href="mint-edit-deskripsi"><i class="fa fa-chevron-right"></i> Deskripsi dan Kontak</a></li>
                    </ul>
                
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>