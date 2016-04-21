<?php

$modTravel = new Travel();

if (isset($_POST['input'])) {
    # code...
    $nabank = $_POST['nama_bank'];
    $norek = $_POST['norek'];
    $user = $_POST['pemilik'];

    $modTravel->tambahBank($nabank, $norek, $user);
    
}

?>
<!-- START @WRAPPER -->
        <section id='wrapper'>

            <!-- START @PAGE CONTENT -->
            <section id='page-content'>

                <!-- Start page header -->
                <div class='header-content'>
                    <h2><i class='fa fa-home'></i>Rekening Bank</h2>
                    <div class='breadcrumb-wrapper hidden-xs'>
                        <span class='label'>You are here:</span>
                        <ol class='breadcrumb'>
                            <li class='active'>Rekening Bank</li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->
                <form action="#" method="post">
                          <div class="form-body">
                                        <div class="form-group">
                                                <label class="control-label">Nama Bank</label>
                                                    <div class="input-icon">
                                                        <i class="fa fa-bank"></i>
                                                        <input class="form-control" placeholder="ex : Mandiri, BRI, BCA" type="text" autocomplete="off" name="nama_bank">
                                                    </div>
                                                </div><!-- /.form-group -->

                                                <div class="form-group">
                                                    <label class="control-label">No. Rekening</label>
                                                    <div class="input-icon">
                                                        <i class="fa fa-phone"></i>
                                                        <input class="form-control" placeholder="ex : 1871239812" type="text" autocomplete="off" name="norek">
                                                    </div>
                                                </div><!-- /.form-group -->

                                                <div class="form-group">
                                                    <label class="control-label">Pemilik</label>
                                                        <div class="input-icon">
                                                            <i class="fa fa-user"></i>
                                                            <input class="form-control" placeholder="Tanya Mamaku" type="text" autocomplete="off" name="pemilik">
                                                        </div>
                                                    </div><!--/.form-group-->

                                        <div class="form-footer">
                                            <div class="pull-right">
                                                <button class="btn btn-danger mr-5" onclick="refresh()">Cancel</button>
                                                <button class="btn btn-success" type="submit" name="input">Submit</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div><!-- /.form-footer -->
                                    </form>

                                </div><!-- /.panel-body -->