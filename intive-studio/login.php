<?php
include '../config/koneksi.php';
include '../controller/fungsiAll.php';

$modTravel = new Travel();

if (isset($_POST['btLogin'])) {
    # code...
    $username = $_POST['username'];
    $password = $_POST['password'];

    $modTravel->admLogin($username, $password);
}

else
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="E - Shopper Adalah Website E-Commerce Yang Bergerak DiBidang Travel">
        <meta name="keywords" content="E - Shopper, Travel, Traveling, Intive Studio">
        <meta name="author" content="Intive Studio">
        <title>Sign In | Intive Studio</title>
        <!--/ END META SECTION -->

        <!-- START @FAVICONS -->
        <link href="../images/home/logo.png" rel="shortcut icon">
        <!--/ END FAVICONS -->

        <!-- START @GLOBAL MANDATORY STYLES -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--/ END GLOBAL MANDATORY STYLES -->

        <!-- START @PAGE LEVEL STYLES -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <!--/ END PAGE LEVEL STYLES -->

        <!-- START @THEME STYLES -->
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/layout.css" rel="stylesheet">
        <link href="css/components.css" rel="stylesheet">
        <link href="css/plugins.css" rel="stylesheet">
        <link href="css/default.theme.css" rel="stylesheet" id="theme">
        <link href="css/sign.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
        <!--/ END THEME STYLES -->

        <!-- START @IE SUPPORT -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../../../assets/global/plugins/bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <script src="../../../assets/global/plugins/bower_components/respond-minmax/dest/respond.min.js"></script>
        <![endif]-->
        <!--/ END IE SUPPORT -->
    </head>
    <!--/ END HEAD -->

    <script async="" src="js/analytics.js"></script><script>function inject(){function a(){function a(a){parent.postMessage({type:"blockedWindow",args:JSON.stringify(a)},l)}function b(a){var b=a[1];return null!=b&&["_blank","_parent","_self","_top"].indexOf(b)<0?b:null}function e(a,b){var c;for(c in a)try{void 0===b[c]&&(b[c]=a[c])}catch(d){}return b}var g=arguments,h=!0,j=null,k=null;if(null!=window.event&&(k=window.event.currentTarget),null==k){for(var m=g.callee;null!=m.arguments&&null!=m.arguments.callee.caller;)m=m.arguments.callee.caller;null!=m.arguments&&m.arguments.length>0&&null!=m.arguments[0].currentTarget&&(k=m.arguments[0].currentTarget)}null!=k&&(k instanceof Window||k===document||null!=k.URL&&null!=k.body||null!=k.nodeName&&("body"==k.nodeName.toLowerCase()||"#document"==k.nodeName.toLowerCase()))?(window.pbreason="Blocked a new window opened with URL: "+g[0]+" because it was triggered by the "+k.nodeName+" element",h=!1):h=!0;document.webkitFullscreenElement||document.mozFullscreenElement||document.fullscreenElement;if(((new Date).getTime()-d<1e3||isNaN(d)&&c())&&(window.pbreason="Blocked a new window opened with URL: "+g[0]+" because a full screen was just initiated while opening this url.",document.exitFullscreen?document.exitFullscreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen&&document.webkitCancelFullScreen(),h=!1),1==h){j=f.apply(this,g);var n=b(g);if(null!=n&&(i[n]=j),j!==window){var o=(new Date).getTime(),p=j.blur;j.blur=function(){(new Date).getTime()-o<1e3?(window.pbreason="Blocked a new window opened with URL: "+g[0]+" because a it was blured",j.close(),a(g)):p()}}}else{var q={href:g[0]};q.replace=function(a){q.href=a},j={close:function(){return!0},test:function(){return!0},blur:function(){return!0},focus:function(){return!0},showModelessDialog:function(){return!0},showModalDialog:function(){return!0},prompt:function(){return!0},confirm:function(){return!0},alert:function(){return!0},moveTo:function(){return!0},moveBy:function(){return!0},resizeTo:function(){return!0},resizeBy:function(){return!0},scrollBy:function(){return!0},scrollTo:function(){return!0},getSelection:function(){return!0},onunload:function(){return!0},print:function(){return!0},open:function(){return this},opener:window,closed:!1,innerHeight:480,innerWidth:640,name:g[1],location:q,document:{location:q}},e(window,j),j.window=j;var n=b(g);if(null!=n)try{i[n].close()}catch(r){}setTimeout(function(){var b;b=j.location instanceof Object?j.document.location instanceof Object?null!=q.href?q.href:g[0]:j.document.location:j.location,g[0]=b,a(g)},100)}return j}function b(a){d=a?(new Date).getTime():0/0}function c(){return document.fullScreenElement&&null!==document.fullScreenElement||null!=document.mozFullscreenElement||null!=document.webkitFullscreenElement}var d,e="originalOpenFunction",f=window.open,g=document.createElement,h=document.createEvent,i={},j=0,k=null,l=window.location!=window.parent.location?document.referrer:document.location;window[e]=window.open,window.open=function(){try{return a.apply(this,arguments)}catch(b){return null}},document.createElement=function(){var a=g.apply(document,arguments);if("a"==arguments[0]||"A"==arguments[0]){j=(new Date).getTime();var b=a.dispatchEvent;a.dispatchEvent=function(c){return null!=c.type&&"click"==(""+c.type).toLocaleLowerCase()?(window.pbreason="blocked due to an explicit dispatchEvent event with type 'click' on an 'a' tag",parent.postMessage({type:"blockedWindow",args:JSON.stringify({0:a.href})},l),!0):b(c)},k=a}return a},document.createEvent=function(){try{return arguments[0].toLowerCase().indexOf("mouse")>=0&&(new Date).getTime()-j<=50?(window.pbreason="Blocked because 'a' element was recently created and "+arguments[0]+" event was created shortly after",arguments[0]=k.href,parent.postMessage({type:"blockedWindow",args:JSON.stringify({0:k.href})},l),null):h.apply(document,arguments)}catch(a){}},document.addEventListener("fullscreenchange",function(){b(document.fullscreen)},!1),document.addEventListener("mozfullscreenchange",function(){b(document.mozFullScreen)},!1),document.addEventListener("webkitfullscreenchange",function(){b(document.webkitIsFullScreen)},!1)} inject()</script>

    <body class="page-sound">

        <!-- START @SIGN WRAPPER -->
        <div id="sign-wrapper" style="min-height: 599px;">

            <!--/ Brand -->

            <!-- Login form -->
            <form class="sign-in form-horizontal shadow rounded no-overflow" method="post" novalidate="novalidate">
                <div class="sign-header">
                    <div class="form-group">
                        <div class="sign-text">
                            <span>Admin Area</span>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.sign-header -->
                <div class="sign-body">
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="text" class="form-control input-sm" placeholder="Username" name="username" autocomplete="off">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="password" class="form-control input-sm" placeholder="*************" name="password" autocomplete="off">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.sign-body -->
                <div class="sign-footer">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="ckbox ckbox-theme">
                                    <input id="rememberme" type="checkbox">
                                    <label for="rememberme" class="rounded">Remember me</label>
                                </div>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="#" title="lost password">Lost password?</a>
                            </div>
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn" name="btLogin">Sign In</button>
                    </div><!-- /.form-group -->
                </div><!-- /.sign-footer -->
            </form><!-- /.form-horizontal -->
            <!--/ Login form -->

        </div><!-- /#sign-wrapper -->
        <!--/ END SIGN WRAPPER -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.min.js"></script>
        <script src="js/ion.sound.min.js"></script>
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        <script src="js/jquery.validate.min.js"></script>
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <script src="js/blankon.sign.js"></script>
        <script src="js/demo.js"></script>
        <script src="dist/sweetalert.min.js"></script> 
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION -->
    
    <!-- END BODY -->

</body></html>
