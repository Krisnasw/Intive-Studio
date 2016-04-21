<aside id="sidebar-left" class="sidebar-circle">

                <!-- Start left navigation - profile shortcut -->
                <div class="sidebar-content">
                    <div class="media">
                        <a class="pull-left has-notif avatar" href="page-profile.html">
                            <img src="assets/img/avatar/50/1.png" alt="admin">
                            <i class="online"></i>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><span><?=$_SESSION['namalengkap']; ?></span></h4>
                            <small><?=$_SESSION['leveluser']; ?></small>
                        </div>
                    </div>
                </div><!-- /.sidebar-content -->
                <!--/ End left navigation -  profile shortcut -->

                <!-- Start left navigation - menu -->
                <ul class="sidebar-menu">

                    <!-- Start navigation - dashboard -->
                    <li>
                        <a href="?min=home">
                            <span class="icon"><i class="fa fa-home"></i></span>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <!--/ End navigation - dashboard -->

                    <!-- Start navigation - frontend themes -->
                    <li>
                        <a href="?min=carabeli">
                            <span class="icon"><i class="fa fa-leaf"></i></span>
                            <span class="text">Cara Pembelian</span>
                        </a>
                    </li>
                    <!--/ End navigation - frontend themes -->

                    <!-- Start navigation - blankon versions -->
                    <li>
                        <a href="?min=changepasw">
                            <span class="icon"><i class="fa fa-sun-o"></i></span>
                            <span class="text">Ganti Password</span>
                        </a>
                    </li>
                    <!--/ End navigation - blankon versions -->

                    <li class="submenu">
                    <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-globe"></i></span>
                            <span class="text">Slider</span>
                            <span class="plus"></span>
                        </a>
                        <ul>
                            <li><a href="?min=opslider">Opsi Slider</a></li>
                            <li><a href="?min=inpSlider">Input Slider</a></li>
                        </ul>
                    </li>

                    <!-- Start development - components -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-cube"></i></span>
                            <span class="text">Manajemen Produk</span>
                            <span class="plus"></span>
                        </a>
                        <ul>
                            <li><a href="?min=prod">Produk</a></li>
                            <li><a href="?min=subprod">Sub Produk</a></li>
                            <li><a href="?min=kat">Kategori</a></li>
                            <li><a href="?min=subkat">Sub Kategori</a></li>
                            <li><a href="?min=jasakirim">Jasa Pengiriman</a></li>
                        </ul>
                    </li>
                    <!--/ End development - components -->

                    <!-- Start widget - social -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-group"></i></span>
                            <span class="text">Modul Admin</span>
                            <span class="plus"></span>
                        </a>
                        <ul>
                            <li><a href="?min=cs">Customer Services</a></li>
                            <li><a href="?min=cust">Customer</a></li>
                            <li><a href="?min=bank">Rekening Bank</a></li>
                        </ul>
                    </li>
                    <!--/ End widget - social -->

                    <!-- Start widget - blog -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-pencil"></i></span>
                            <span class="text">Modul Artikel</span>
                            <span class="plus"></span>
                        </a>
                        <ul>
                            <li><a href="?min=inpberita">Input Artikel</a></li>
                            <li><a href="?min=artikel">List Artikel</a></li>
                            <li><a href="?min=komen">Komentar</a></li>
                        </ul>
                    </li>
                    <!--/ End widget - blog -->

                    <li>
                        <a href="">
                            <span class="icon"><i class="fa fa-dropbox"></i></span>
                            <span class="text">Order Masuk</span>
                        </a>
                    </li>

                </ul><!-- /.sidebar-menu -->
                <!--/ End left navigation - menu -->

                <!-- Start left navigation - footer -->
                <div class="sidebar-footer hidden-xs hidden-sm hidden-md">
                    <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
                    <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
                    <a id="lock-screen" data-url="lock.php" class="pull-left" href="lock.php" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
                    <a id="logout" data-url="logout.php" class="pull-left" href="logout.php" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
                </div><!-- /.sidebar-footer -->
                <!--/ End left navigation - footer -->

            </aside><!-- /#sidebar-left -->
            <!--/ END SIDEBAR LEFT -->