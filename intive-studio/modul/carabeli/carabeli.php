<?php
    if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    # code...
    echo "<script> window.location = 'index.php' </script>";
    }
    else
    {
    $modTravel = new Travel();

    if (isset($_POST['btnCabel'])) {
        # code...
        $carbel = $_POST['cabel'];
        $aidi = $_POST['id'];

        $modTravel->caraBeli($carbel, $aidi);
    }

?>
<!-- START @WRAPPER -->
        <section id="wrapper">

            <!-- START @PAGE CONTENT -->
            <section id="page-content">

                <!-- Start page header -->
                <div class="header-content">
                    <h2><i class="fa fa-home"></i>Cara Pembelian</h2>
                    <div class="breadcrumb-wrapper hidden-xs">
                        <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li class="active">Cara Pembelian</li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->

                            <div class="panel rounded shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title">Cara Pembelian</h3>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="inner-all">
                                    <?php
                                                $pft = mysqli_query($db, "SELECT * FROM modul WHERE id_modul = '45' ");
                                                $r = mysqli_fetch_array($pft);
                                        
                                        echo "<form class='form-horizontal' action='' method='POST'>";

                                                echo "
                                            <input type='hidden' name='id' value='$r[id_modul]'>
                                            <div class='form-group'>
                                                <textarea id='Summernote' class='form-control' rows='10' placeholder='Masukkan Tata Cara Pembelian Anda' name='cabel'>$r[static_content]</textarea>
                                            </div>
                                    </div>
                                    <button type='submit' class='btn btn-primary btn-md btn-push pull-right' name='btnCabel'> Update </button>
                                        </form>
                                </div><!-- /.panel-body -->
                            </div>"; ?><!-- /.panel --> 
                            <!--/ End Summernote 5 WYSIWYG Editor -->
                            </section>
<?php } ?>