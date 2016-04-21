<?php
date_default_timezone_set('Asia/Jakarta');

$modTravel = new Travel();

if (isset($_POST["input"])) {
    # code...
    $judul = $_POST["judul"];
    $tgl = $_POST["tanggal"];
    $author = $_POST["author"];
    $konten = $_POST["konten"];
    $gambar = mysql_escape_string($_FILES["gambar"]["name"]);
    $ext= pathinfo($gambar,PATHINFO_EXTENSION);

    $modTravel->inputArtikel($judul, $tgl, $author, $konten, $gambar, $ext);
}

?>
<!-- START @WRAPPER -->
        <section id="wrapper">

            <!-- START @PAGE CONTENT -->
            <section id="page-content">

                <!-- Start page header -->
                <div class="header-content">
                    <h2><i class="fa fa-home"></i>Input Artikel</h2>
                    <div class="breadcrumb-wrapper hidden-xs">
                        <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li class="active">Input Artikel</li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->
                    <form action="#" method="POST" enctype="multipart/form-data">
                          <div class="form-body">
                                        <div class="form-group">
                                                <label class="control-label">Judul</label>
                                                    <div class="input-icon">
                                                        <i class="fa fa-rss"></i>
                                                        <input class="form-control" placeholder="Masukkan Judul Artikel Disini" type="text" autocomplete="off" name="judul">
                                                    </div>
                                                </div><!-- /.form-group -->

                                                <div class="form-group">
                                                <label class="control-label">Author</label>
                                                    <div class="input-icon">
                                                        <i class="fa fa-user"></i>
                                                        <input class="form-control" placeholder="Masukkan Judul Artikel Disini" type="text" autocomplete="off" name="author">
                                                    </div>
                                                </div><!-- /.form-group -->

                                                <div class="form-group">
                                                    <label class="control-label">Tanggal Posting</label>
                                                    <div class="input-icon">
                                                        <i class="fa fa-calendar"></i>
                                                        <input class="form-control" value="<?=date("d F Y");?>" type="text" autocomplete="off" name="tanggal" readonly>
                                                    </div>
                                                </div><!-- /.form-group -->

                                                <div class="form-group">
                                                    <label class="control-label">Konten</label>
                                                        <div class="input-icon">
                                                            <i class="fa fa-file-text-o"></i>
                                                            <textarea class="form-control" placeholder="Tanya Mamaku" autocomplete="off" name="konten"> </textarea>
                                                        </div>
                                                    </div><!--/.form-group-->

                                                <div class="form-group">
                                                    <label class="control-label">Gambar</label>
                                                        <div class="input-icon">
                                                            <input type="file" name="gambar" id="file">
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