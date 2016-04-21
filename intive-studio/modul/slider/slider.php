<?php

$modTravel = new Travel();

if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    # code...
    echo "<script> window.location = 'index.php' </script>";
}
else
{

if (isset($_POST['hpsSlider'])) {
    # code...
    $id = $_POST['id_slider'];

    $modTravel->hpsSlider($id);
}
?>
<!-- START @WRAPPER -->
        <section id='wrapper'>

            <!-- START @PAGE CONTENT -->
            <section id='page-content'>

                <!-- Start page header -->
                <div class='header-content'>
                    <h2><i class='fa fa-home'></i>Opsi Slider</h2>
                    <div class='breadcrumb-wrapper hidden-xs'>
                        <span class='label'>You are here:</span>
                        <ol class='breadcrumb'>
                            <li class='active'>Opsi Slider</li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->

                <!-- Start datatable using dom -->
                            <div class='panel rounded shadow'>
                                <div class='panel-heading'>
                                    <div class='pull-left'>
                                        <h3 class='panel-title'>List Slider </h3>
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
                                                <th data-class='expand' class='text-center'>Image</th>
                                                <th data-hide='phone'>Title</th>
                                                <th data-hide='phone,tablet' style='min-width: 200px' class='text-center'>Action</th>
                                            </tr>
                                        </thead>
                                        <form method="post" action="#">
                                        <tbody>
                                        <?php
                                            $no = 1;
                                            $q = mysqli_query($db, "SELECT * FROM slider ORDER BY id_slider asc");
                                            while($r = mysqli_fetch_array($q)) :

                                        echo "
                                        <input type='hidden' name='id_slider' value='$r[id_slider]'>
                                            <tr>
                                                <td>$no</td>
                                                <td class='text-center' style='width: 1%'><img src='travel/../../images/slider/$r[gambar]' alt='$r[nama_slider]' width='160' class='mt-5 mb-5'/></td>
                                                <td>$r[nama_slider]</td>
                                                <td class='text-center'>
                                                    <a href='#' class='btn btn-sm btn-primary btn-xs btn-push'><i class='fa fa-pencil'></i> Edit</a>
                                                    <button class='btn btn-sm btn-danger btn-xs btn-push' name='hpsSlider' type='submit'><i class='fa fa-trash'></i> Delete</button>
                                                </td>
                                            </tr>
                                        ";
                                        $no++;
                                        endwhile;
                                        ?>
                                        </tbody>
                                        </form>
                                        <tfoot>
                                            <tr>
                                                <th data-hide='phone,tablet'>No</th>
                                                <th data-class='expand' class='text-center'>Image</th>
                                                <th data-hide='phone'>Title</th>
                                                <th data-hide='phone,tablet' class='text-center'>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!--/ End datatable -->
                                    </a>
                                    <div class="form-footer">
                                            <div class="pull-right">
                                                <a href="?min=inpSlider"><button class="btn btn-success" type="submit">Tambah Slider Baru</button></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div><!-- /.form-footer -->
                                </div><!-- /.panel-body -->
                            </div><!-- /.panel -->
                            <!--/ End datatable using dom -->
            </div>
</div>

<div class="modal fade bs-example-modal-sm" id="modalhapus" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>One fine body…</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-theme">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
<?php } ?>