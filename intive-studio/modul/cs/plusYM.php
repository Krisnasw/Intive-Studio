<?php

$modTravel = new Travel();

if (isset($_POST['input'])) {
    # code...
    $nama = $_POST['nama'];
    $username = $_POST['username'];

    $modTravel->inputYM($nama, $username);
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
                            <li class='active'>Tambah Customer Services</li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->
                                        <form action="#" method="post">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label">Nama</label>
                                                    <div class="input-icon">
                                                        <i class="fa fa-microphone"></i>
                                                        <input class="form-control" placeholder="ex : name" type="text" autocomplete="off" name="nama">
                                                    </div>
                                                </div><!-- /.form-group -->

                                                <div class="form-group">
                                                    <label class="control-label">Username</label>
                                                    <div class="input-icon">
                                                        <i class="fa fa-microphone"></i>
                                                        <input class="form-control" placeholder="ex : user" type="text" autocomplete="off" name="username">
                                                    </div>
                                                </div><!-- /.form-group -->

                                        <div class="form-footer">
                                            <div class="pull-right">
                                                <button class="btn btn-danger mr-5" onclick="refresh()">Cancel</button>
                                                <button class="btn btn-success" type="submit" name="input">Submit</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div><!-- /.form-footer -->
                                    </form>

                                </div><!-- /.panel-body -->