<!-- START @WRAPPER -->
        <section id='wrapper'>

            <!-- START @PAGE CONTENT -->
            <section id='page-content'>

                <!-- Start page header -->
                <div class='header-content'>
                    <h2><i class='fa fa-home'></i>List Artikel</h2>
                    <div class='breadcrumb-wrapper hidden-xs'>
                        <span class='label'>You are here:</span>
                        <ol class='breadcrumb'>
                            <li class='active'>List Artikel</li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->
                
                <!-- Start datatable using dom -->
                            <div class='panel rounded shadow'>
                                <div class='panel-heading'>
                                    <div class='pull-left'>
                                        <h3 class='panel-title'>List Artikel</h3>
                                    </div>
                                    <div class='pull-right'>
                                        <button class='btn btn-sm' data-action='collapse' data-container='body' data-toggle='tooltip' data-placement='top' data-title='Collapse'><i class='fa fa-angle-up'></i></button>
                                        <button class='btn btn-sm' data-action='remove' data-container='body' data-toggle='tooltip' data-placement='top' data-title='Remove'><i class='fa fa-times'></i></button>
                                    </div>
                                    <div class='clearfix'></div>
                                </div><!-- /.panel-heading -->
                                <div class='panel-body'>
                                    <!-- Start datatable -->
                                    <table id='datatable-dom' class='table table-striped table-lilac'>
                                        <thead>
                                            <tr>
                                                <th data-hide='phone,tablet'>No</th>
                                                <th data-class='expand' class='text-center'>Judul</th>
                                                <th data-hide='phone'>Author</th>
                                                <th data-hide='phone'>Tanggal</th>
                                                <th data-hide='phone,tablet' style='min-width: 200px' class='text-center'>Action</th>
                                            </tr>
                                        </thead>
                                        <form method="post" action="#">
                                        <tbody>
                                        <?php

                                            $p1 = new Paging();
                                            $batas = 5;
                                            $posisi = $p1->cariPosisi($batas);
                                            $q = mysqli_query($db, "SELECT * FROM artikel ORDER BY id_artikel asc");
                                            $no = 1;
                                            while($r = mysqli_fetch_array($q)){

                                        echo "
                                        <input type='hidden' name='id' value='$r[id_artikel]'>
                                            <tr>
                                                <td>$no</td>
                                                <td>$r[judul]</td>
                                                <td>$r[pembuat]</td>
                                                <td>$r[tgl_posting]</td>
                                                <td class='text-center'>
                                                    <a href='#' class='btn btn-sm btn-primary btn-xs btn-push'><i class='fa fa-pencil'></i> Edit</a>
                                                    <a href='#' class='btn btn-sm btn-success btn-xs btn-push'><i class='fa fa-eye'></i> Detail</a>
                                                    <button class='btn btn-sm btn-danger btn-xs btn-push' name='hpsBank' type='submit'><i class='fa fa-trash'></i> Delete</button>
                                                </td>
                                            </tr>
                                        ";
                                        $no++;
                                        }
                                        ?>
                                        </tbody>
                                        </form>
                                        <tfoot>
                                            <tr>
                                                <th data-hide='phone,tablet'>No</th>
                                                <th data-class='expand' class='text-center'>Judul</th>
                                                <th data-hide='phone'>Author</th>
                                                <th data-hide='phone'>Tanggal</th>
                                                <th data-hide='phone,tablet' style='min-width: 200px' class='text-center'>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!--/ End datatable -->
                                    </a>
                                <center>
                                <ul>
                                    <?php

                                    $jmldata = mysqli_num_rows(mysqli_query($db, "SELECT * FROM bank"));
                                    $jmlhalaman = $p1->jumlahHalaman($jmldata, $batas);
                                    $linkHalaman = $p1->navHalaman($_GET['min'], $jmlhalaman);
                                    echo "<div class='pagination'><li>$linkHalaman</li></div>";

                                    ?>    
                                </ul>
                                </center>
                                            <div class="clearfix"></div>
                                        </div><!-- /.form-footer -->
                                </div><!-- /.panel-body -->
                            </div><!-- /.panel -->

                            <!--/ End datatable using dom -->
            </div>
</div>