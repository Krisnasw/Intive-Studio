            <!-- START @HEADER -->
            <header id="header">

                <!-- Start header left -->
                <div class="header-left">
                    <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <div class="navbar-minimize-mobile left">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!--/ End offcanvas left -->

                    <!-- Start navbar header -->
                    <div class="navbar-header">

                    </div><!-- /.navbar-header -->
                    <!--/ End navbar header -->

                    <div class="clearfix"></div>
                </div><!-- /.header-left -->
                <!--/ End header left -->

                <!-- Start header right -->
                <div class="header-right">
                    <!-- Start navbar toolbar -->
                    <div class="navbar navbar-toolbar">

                        <!-- Start left navigation -->
                        <ul class="nav navbar-nav navbar-left">

                            <!-- Start sidebar shrink -->
                            <li class="navbar-minimize">
                                <a href="javascript:void(0);" title="Minimize sidebar">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <!--/ End sidebar shrink -->

                            <!-- Start form search -->
                            <li class="navbar-search">
                                <!-- Just view on mobile screen-->
                                <a href="#" class="trigger-search"><i class="fa fa-search"></i></a>
                                <form class="navbar-form">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control typeahead rounded" placeholder="Search for people, places and things">
                                        <button type="submit" class="btn btn-theme fa fa-search form-control-feedback rounded"></button>
                                    </div>
                                </form>
                            </li>
                            <!--/ End form search -->

                        </ul><!-- /.nav navbar-nav navbar-left -->
                        <!--/ End left navigation -->

                        <!-- Start right navigation -->
                        <ul class="nav navbar-nav navbar-right"><!-- /.nav navbar-nav navbar-right -->

                        <!-- Start messages -->
                        <li class="dropdown navbar-message">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="count label label-danger rounded">0</span></a>

                            <!-- Start dropdown menu -->
                            <div class="dropdown-menu animated flipInX">
                                <div class="dropdown-header">
                                    <span class="title">Messages <strong>(0)</strong></span>
                                    <span class="option text-right"><a href="#">+ New message</a></span>
                                </div>
                                <div class="dropdown-body">

                                    <!-- Start message search -->
                                    <form class="form-horizontal" action="#">
                                        <div class="form-group has-feedback has-feedback-sm m-5">
                                            <input type="text" class="form-control input-sm" placeholder="Search message...">
                                            <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                                        </div>
                                    </form>
                                    <!--/ End message search -->

                                    <!-- Start message list -->
                                    <div class="media-list niceScroll">

                                        <a href="page-messages.html" class="media">
                                            <div class="pull-left"><img src="assets/img/avatar/50/2.png" class="media-object img-circle" alt="John Kribo"/></div>
                                            <div class="media-body">
                                                <span class="media-heading">John Kribo</span>
                                                <span class="media-text">I was impressed how fast the content is loaded. Congratulations. nice design.</span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta"><i class="fa fa-reply"></i></span>
                                                <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                                <span class="media-meta pull-right">13 minutes</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                    </div>
                                    <!--/ End message list -->

                                </div>
                                <div class="dropdown-footer">
                                    <a href="?min=allinbox">See All</a>
                                </div>
                            </div>
                            <!--/ End dropdown menu -->

                        </li><!-- /.dropdown navbar-message -->
                        <!--/ End messages -->

                        <!-- Start notifications -->
                        <li class="dropdown navbar-notification">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="count label label-danger rounded">0</span></a>

                            <!-- Start dropdown menu -->
                            <div class="dropdown-menu animated flipInX">
                                <div class="dropdown-header">
                                    <span class="title">Notifications <strong>(0)</strong></span>
                                    <span class="option text-right"><a href="#"><i class="fa fa-cog"></i> Setting</a></span>
                                </div>
                                <div class="dropdown-body niceScroll">

                                    <!-- Start notification list -->
                                    <div class="media-list small">

                                        <a href="#" class="media">
                                            <div class="media-object pull-left"><i class="fa fa-share-alt fg-info"></i></div>
                                            <div class="media-body">
                                                <span class="media-text"><strong>Dolanan Remi : </strong><strong>Chris Job,</strong><strong>Denny Puk</strong> and <strong>Joko Fernandes</strong> sent you <strong>5 free energy boosts and other request</strong></span>
                                                <!-- Start meta icon -->
                                                <span class="media-meta">3 minutes</span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

                                    </div>
                                    <!--/ End notification list -->

                                </div>
                                <div class="dropdown-footer">
                                    <a href="#">See All</a>
                                </div>
                            </div>
                            <!--/ End dropdown menu -->

                        </li><!-- /.dropdown navbar-notification -->
                        <!--/ End notifications -->

                        <!-- Start profile -->
                        <li class="dropdown navbar-profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="avatar"><img src="assets/img/avatar/35/1.png" class="img-circle" alt="admin"></span>
                                    <span class="text hidden-xs hidden-sm text-muted"><?=$_SESSION['namalengkap']; ?></span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <!-- Start dropdown menu -->
                            <ul class="dropdown-menu animated flipInX">
                                <li class="dropdown-header">Account</li>
                                <li><a href="mail-inbox.html"><i class="fa fa-envelope-square"></i>Inbox <span class="label label-info pull-right">0</span></a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
                            </ul>
                            <!--/ End dropdown menu -->
                        </li><!-- /.dropdown navbar-profile -->
                        <!--/ End profile -->

                        </ul>
                        <!--/ End right navigation -->

                    </div><!-- /.navbar-toolbar -->
                    <!--/ End navbar toolbar -->
                </div><!-- /.header-right -->
                <!--/ End header left -->

            </header> <!-- /#header -->
            <!--/ END HEADER -->