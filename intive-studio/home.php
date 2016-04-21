<?php
error_reporting(0);
session_start();
$modTravel = new Travel();

if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    # code...
    echo "<script> window.location = 'index.php' </script>";
}
else
{
?>
<!-- START @WRAPPER -->
        <section id='wrapper'>

            <!-- START @PAGE CONTENT -->
            <section id='page-content'>

            
                <!-- Start page header -->
                <div class='header-content'>
                    <h2><i class='fa fa-home'></i>Dashboard <span>Selamat Datang Di Admin Panel Intive Studio</span></h2>
                    <div class='breadcrumb-wrapper hidden-xs'>
                        <span class='label'>You are here:</span>
                        <ol class='breadcrumb'>
                            <li class='active'>Dashboard</li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->

                <!-- Start body content -->
                <div class='body-content animated fadeIn'>

                <?php
                        $sorder=mysqli_query($db, "select * from orders");
                        $torder=mysqli_num_rows($sorder);
                        
                        $sorder1=mysqli_query($db, "select * from orders where status_order='Baru'");
                        $torder1=mysqli_num_rows($sorder1);
                        
                        $selisihorder=$torder-$torder1;
                        ?>

                    <div class='row'>
                        <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                            <div class='mini-stat clearfix bg-facebook rounded'>
                                <span class='mini-stat-icon'><i class='fa fa-shopping-cart fg-shopping-cart'></i></span>
                                <div class='mini-stat-info'>
                                    <span><?php echo "$torder"; ?></span>
                                    Statistik Order
                                </div>
                            </div>
                        </div> 

                        <?php

                            $jmlcust = mysqli_num_rows(mysqli_query($db, "SELECT * FROM kustomer"));

                        ?>
                        <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                            <div class='mini-stat clearfix bg-twitter rounded'>
                                <span class='mini-stat-icon'><i class='fa fa-users fg-users'></i></span>
                                <div class='mini-stat-info'>
                                    <span><?php echo "$jmlcust"; ?></span>
                                    Customer
                                </div>
                            </div>
                        </div>

                        <?php

                            $jmlprod = mysqli_num_rows(mysqli_query($db, "SELECT * FROM produk"));

                        ?>
                        <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                            <div class='mini-stat clearfix bg-googleplus rounded'>
                                <span class='mini-stat-icon'><i class='fa fa-dropbox fg-dropbox'></i></span>
                                <div class='mini-stat-info'>
                                    <span><?php echo "$jmlprod"; ?></span>
                                    Jumlah Produk
                                </div>
                            </div>
                        </div>

                        <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                            <div class='mini-stat clearfix bg-bitbucket rounded'>
                                <span class='mini-stat-icon'><i class='fa fa-pencil fg-pencil'></i></span>
                                <div class='mini-stat-info'>
                                    <span>8,932</span>
                                    Total Artikel
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class='row'>
                        <div class='col-md-9'>
                        
                        <!-- Start sample table -->
                        <?php

                            $no = 1;
                            $query = mysqli_query($db, "SELECT * FROM kustomer");
                            $r = mysqli_fetch_array($query);

                        ?>
                            <div class='table-responsive rounded mb-20'>
                                <table class='table table-striped table-warning'>
                                    <thead>
                                    <tr>
                                        <th class='text-center border-right'>No.</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th class='text-center'>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class='text-center border-right'><?=$no;?></td>
                                        <td>
                                            <img src='assets/img/avatar/35/5.png' class='img-circle img-bordered-theme' alt='John Kribo'>
                                            <span><?=$r['nama_lengkap']; ?></span>
                                        </td>
                                        <td><?=$r['alamat']; ?></td>
                                        <td><?=$r['email']; ?></td>
                                        <td class='text-center'>
                                            <a href='#' class='btn btn-success btn-xs rounded' data-toggle='tooltip' data-placement='top' data-original-title='View detail'><i class='fa fa-eye'></i></a>
                                            <a href='#' class='btn btn-primary btn-xs rounded' data-toggle='tooltip' data-placement='top' data-original-title='Edit'><i class='fa fa-pencil'></i></a>
                                            <a href='#' class='btn btn-danger btn-xs rounded' data-toggle='tooltip' data-placement='top' data-original-title='Delete'><i class='fa fa-times'></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th class='text-center border-right'>No.</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th class='text-center'>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                        </div>
                        </div>

                        <div class='col-md-3'>

                            <div class='row'>
                                <div class='col-lg-12 col-md-12 col-sm-4 col-xs-12'>

                                    <!-- Start weather widget -->
                                    <div class='widget-wrapper bg-theme rounded'>
                                        <div class='weather-current-city'>
                                            <img src='assets/img/building/5.jpg' alt='...'/>
                                            <div class='row'>
                                                <div class='col-md-8 col-sm-8 col-xs-8'>
                                                            <span class='current-city'>
                                                                Surabaya, ID
                                                            </span>
                                                            <span class='current-temp'>
                                                                <?php echo rand(0, 30); ?>&deg;C
                                                            </span>
                                                </div><!-- /.col-md-7 -->
                                                <div class='col-md-4 col-sm-4 col-xs-4'>
                                                            <span class='current-day-icon'>
                                                              <canvas id='partly-cloudy-day' width='60' height='60'></canvas>
                                                            </span>
                                                </div><!-- /.col-md-5 -->
                                            </div><!-- /.row -->
                                            <span class='current-day'> <?php echo date(D); ?>, <?php echo date(j); ?> <?php echo date(M); ?></span>
                                        </div><!-- /.weather-current-city -->
                                        <div class='row'>
                                            <ul class='days'>
                                                <li class='col-md-4 col-sm-4 col-xs-4'>
                                                    <strong>Tue</strong>
                                                    <canvas id='snow' width='45' height='45'></canvas>
                                                    <span><?php echo rand(0, 30); ?>°</span>
                                                </li>
                                                <li class='col-md-4 col-sm-4 col-xs-4'><strong>Fri</strong>
                                                    <canvas id='rain' width='45' height='45'></canvas>
                                                    <span><?php echo rand(0, 30); ?>°</span>
                                                </li>
                                                <li class='col-md-4 col-sm-4 col-xs-4'><strong>Sat</strong>
                                                    <canvas id='sleet' width='45' height='45'></canvas>
                                                    <span><?php echo rand(0, 30); ?>°</span>
                                                </li>
                                            </ul><!-- /.days -->
                                        </div><!-- /.row -->
                                    </div><!-- /.widget-wrapper -->
                                    <!--/ End weather widget -->

                                    <div class='divider'></div>

                                </div>

                        </div>
                    </div><!-- /.row -->

                    </div><!-- /.row -->

                </div><!-- /.body-content -->
                <!--/ End body content -->

            </section><!-- /#page-content -->
            <!--/ END PAGE CONTENT -->

        </section><!-- /#wrapper -->
        <!--/ END WRAPPER -->
<?php } ?>