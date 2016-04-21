<?php

$modTravel = new Travel();

if (isset($_POST['input'])) {
    # code...
    $ns = $_POST['nama_slider'];
    $example = mysql_escape_string($_FILES['file']['name']);
    $ext= pathinfo($example,PATHINFO_EXTENSION);

    $modTravel->inpSlider($ns, $example, $ext);
}

?>

<!-- START @WRAPPER -->
        <section id='wrapper'>

            <!-- START @PAGE CONTENT -->
            <section id='page-content'>

                <!-- Start page header -->
                <div class='header-content'>
                    <h2><i class='fa fa-home'></i>Input Slider</h2>
                    <div class='breadcrumb-wrapper hidden-xs'>
                        <span class='label'>You are here:</span>
                        <ol class='breadcrumb'>
                            <li class='active'>Input Slider</li>
                        </ol>
                    </div>
                </div><!-- /.header-content --><div class="row">
                        <div class="col-md-12">

                            <!-- Start file input - basic form -->
                            <div class="panel rounded shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title">Tambah Slider</h3>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                        <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body no-padding">

                                    <form action="#" method="POST" enctype="multipart/form-data" name="submit">
                                        <div class="form-body">

                                        <div class="form-group">
                                            <label class="control-label">Masukkan Nama Slider</label>
                                            <input type="text" class="form-control tooltips" data-toggle="tooltip" data-placement="top" data-title="Masukkan Nama Slider" placeholder="Slider 1" name="nama_slider" autocomplete="off">
                                        </div>

                                        <div class="form-group">
                                           <label class="control-label">Masukkan Gambar Slider Disini</label>
                                              <div class="fileinput fileinput-new input-group" data-provides="fileinput"></div>
                                                    <span class="btn-file"><input type="file" name="file" id="file"></span>
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