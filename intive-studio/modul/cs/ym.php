<?php

$modTravel = new Travel();

if (isset($_POST['hapus'])) {
    # code...
    $id = $_GET['id'];

    $modTravel->hpsCS($id);
}

?>
<!-- START @WRAPPER -->
        <section id='wrapper'>

            <!-- START @PAGE CONTENT -->
            <section id='page-content'>

                <!-- Start page header -->
                <div class='header-content'>
                    <h2><i class='fa fa-home'></i>Customer Services</h2>
                    <div class='breadcrumb-wrapper hidden-xs'>
                        <span class='label'>You are here:</span>
                        <ol class='breadcrumb'>
                            <li class='active'>Customer Services</li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->
                
                <!-- Start datatable using dom -->
                            <!-- Start datatable using dom -->
                            <div class="panel rounded shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class='panel-title'>List Customer Services </h3>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse" data-original-title="" title=""><i class="fa fa-angle-up"></i></button>
                                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove" data-original-title="" title=""><i class="fa fa-times"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body">
                                    <!-- Start datatable -->
                                    <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline">
                                        <div class="row">
                                    </div>
                                    <table id="datatable-dom" class="table table-striped table-lilac dataTable" role="grid" aria-describedby="datatable-dom_info">
                                        <thead>
                                            <tr role="row">
                                            <th>No</th>
                                                <th class='text-center'>Nama</th>
                                                <th>Username</th>
                                                <th style='min-width: 200px' class='text-center'>Action</th>
                                            </tr>
                                        </thead>
                                        <form method="POST" action="">
                                        <tbody>
                                        <?php
                                            $q = $db->query("SELECT * FROM ym ORDER BY id asc");
                                            $no = 1;
                                            while($r = mysqli_fetch_array($q)) :

                                        ?>
                                        <input type="hidden" name="id" value="<?=$r['id']; ?>">
                                            <tr>
                                                <td class="text-center"><?=$no; ?></td>
                                                <td><?=$r['nama']; ?></td>
                                                <td><?=$r['username']; ?></td>
                                                <td class='text-center'>
                                                    <a href='#' class='btn btn-sm btn-primary btn-xs btn-push'><i class='fa fa-pencil'></i> Edit</a>
                                                    <a href="#" class='btn btn-sm btn-danger btn-xs btn-push' name="hapus"><i class='fa fa-trash'></i> Delete</button>
                                                </td>
                                            </tr>
                                        <?php
                                        $no++;
                                        endwhile;
                                        ?>
                                        </tbody>
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
                                    <div class="row">
                                    <div class="col-xs-12">
                                    <a href="?min=inpCS"><button class="btn btn-success pull-left" type="submit">Tambah CS Baru</button></a>
                                    </div>
                                    </div>
                                    </div>
                                    <!--/ End datatable -->
                                </div><!-- /.panel-body -->
                            </div><!-- /.panel -->
                            <!--/ End datatable using dom -->
            </div>
</div>