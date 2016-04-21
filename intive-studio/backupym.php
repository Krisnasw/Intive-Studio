<div class='panel rounded shadow'>
                                <div class='panel-heading'>
                                    <div class='pull-left'>
                                        <h3 class='panel-title'>List Customer Services </h3>
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
                                                <th data-class='expand' class='text-center'>Nama</th>
                                                <th data-hide='phone'>Username</th>
                                                <th data-hide='phone,tablet' style='min-width: 200px' class='text-center'>Action</th>
                                            </tr>
                                        </thead>
                                        <form method="post" action="#">
                                        <tbody>
                                        <?php

                                            $p1 = new Paging();
                                            $batas = 5;
                                            $posisi = $p1->cariPosisi($batas);
                                            $q = mysqli_query($db, "SELECT * FROM ym ORDER BY id asc");
                                            $no = 1;
                                            while($r = mysqli_fetch_array($q)){

                                        echo "
                                        <input type='hidden' name='id' value='$r[id]'>
                                            <tr>
                                                <td>$no</td>
                                                <td>$r[nama]</td>
                                                <td>$r[username]</td>
                                                <td class='text-center'>
                                                    <a href='#' class='btn btn-sm btn-primary btn-xs btn-push'><i class='fa fa-pencil'></i> Edit</a>
                                                    <button class='btn btn-sm btn-danger btn-xs btn-push' name='hpsSlider' type='submit'><i class='fa fa-trash'></i> Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        ";
                                        $no++;
                                        }
                                        ?>
                                        </form>
                                        <tfoot>
                                            <tr>
                                                <th data-hide='phone,tablet'>No</th>
                                                <th data-class='expand' class='text-center'>Nama</th>
                                                <th data-hide='phone'>Username</th>
                                                <th data-hide='phone,tablet' style='min-width: 200px' class='text-center'>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!--/ End datatable -->
                                    </a>
                                    <div class="form-footer">
                                            <div class="pull-right">
                                                <a href="?min=inpCS"><button class="btn btn-success" type="submit">Tambah CS Baru</button></a>
                                            </div>
                                <center>
                                <ul>
                                    <?php

                                    $jmldata = mysqli_num_rows(mysqli_query($db, "SELECT * FROM ym"));
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