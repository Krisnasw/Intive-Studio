<?php
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    # code...
    echo "<script> window.location = 'index.php' </script>";
}
else
{

$modTravel = new Travel();

if (isset($_POST['valid'])) {
    # code...
    $user = $_SESSION['namauser'];
    $pwlama = $_POST['lm_password'];
    $pwbaru = $_POST['pv_password'];
    $pwbaru1 = $_POST['pv_password2'];

    $modTravel->changePwd($user, $pwlama, $pwbaru, $pwbaru1);
}

?>
<!-- START @WRAPPER -->
        <section id='wrapper'>

            <!-- START @PAGE CONTENT -->
            <section id='page-content'>

                <!-- Start page header -->
                <div class='header-content'>
                    <h2><i class='fa fa-home'></i>Ubah Password</h2>
                    <div class='breadcrumb-wrapper hidden-xs'>
                        <span class='label'>You are here:</span>
                        <ol class='breadcrumb'>
                            <li class='active'>Ubah Password</li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->
<!-- Start password validation -->
                            <div class='panel rounded shadow'>
                                <div class='panel-heading'>
                                    <div class='pull-left'>
                                        <h3 class='panel-title'>Password Validation</h3>
                                    </div>
                                    <div class='pull-right'>
                                        <button class='btn btn-sm' data-action='collapse' data-container='body' data-toggle='tooltip' data-placement='top' data-title='Collapse'><i class='fa fa-angle-up'></i></button>
                                        <button class='btn btn-sm' data-action='remove' data-container='body' data-toggle='tooltip' data-placement='top' data-title='Remove'><i class='fa fa-times'></i></button>
                                    </div>
                                    <div class='clearfix'></div>
                                </div><!-- /.panel-heading -->
                                <div class='panel-body no-padding'>

                                    <form class='form-horizontal form-bordered' role='form' id='password-validate' action='' method='POST'>
                                        <div class='form-body'>
                                            <div class="form-group">
                                                <label class='col-sm-3 control-label'>Password Lama</label>
                                                <div class='col-sm-7'>
                                                    <input type='password' class='form-control input-sm' name='lm_password'></input>
                                                </div>
                                            </div>
                                            <div class='form-group'>
                                                <label class='col-sm-3 control-label'>Password</label>
                                                <div class='col-sm-7'>
                                                    <input type='password' class='form-control input-sm' name='pv_password'>
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class='form-group'>
                                                <label class='col-sm-3 control-label'>Confirm password</label>
                                                <div class='col-sm-7'>
                                                    <input type='password' class='form-control input-sm' name='pv_password2'>
                                                </div>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.form-body -->
                                        <div class='form-footer'>
                                            <div class='col-sm-offset-3'>
                                                <button type='submit' class='btn btn-theme' name='valid'>Validate</button>
                                            </div>
                                        </div><!-- /.form-footer -->
                                    </form>

                                </div><!-- /.panel-body -->
                            </div><!-- /.panel -->
                            <!--/ End password validation -->
<?php } ?>