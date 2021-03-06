<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<html>
    <head>
        <meta charset="utf-8" />
        <title>Metro Lab</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="Mosaddek" name="author" />
        <link href="<?php echo base_url();?>admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>admin/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>admin/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>admin/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>admin/css/style-responsive.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>admin/css/style-default.css" rel="stylesheet" id="style_color" />
        <link href="<?php echo base_url();?>admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
        <script>
            function check_delete()
            {
                var chk=confirm('Are You Want To Delete This');
                if(chk)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        </script>
    </head>

    <body class="fixed-top">
        <div id="header" class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <div class="sidebar-toggle-box hidden-phone">
                        <div class="icon-reorder"></div>
                    </div>
                    <a class="brand" href="index.html">
                        <img src="<?php echo base_url();?>admin/img/logo.png" alt="Metro Lab" />
                    </a>
                    <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="arrow"></span>
                    </a>
                    <div id="top_menu" class="nav notify-row">
                        <ul class="nav top-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-tasks"></i>
                                    <span class="badge badge-important">6</span>
                                </a>
                                <ul class="dropdown-menu extended tasks-bar">
                                    <li>
                                        <p>You have 6 pending tasks</p>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="task-info">
                                                <div class="desc">Dashboard v1.3</div>
                                                <div class="percent">44%</div>
                                            </div>
                                            <div class="progress progress-striped active no-margin-bot">
                                                <div class="bar" style="width: 44%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="task-info">
                                                <div class="desc">Database Update</div>
                                                <div class="percent">65%</div>
                                            </div>
                                            <div class="progress progress-striped progress-success active no-margin-bot">
                                                <div class="bar" style="width: 65%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="task-info">
                                                <div class="desc">Iphone Development</div>
                                                <div class="percent">87%</div>
                                            </div>
                                            <div class="progress progress-striped progress-info active no-margin-bot">
                                                <div class="bar" style="width: 87%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="task-info">
                                                <div class="desc">Mobile App</div>
                                                <div class="percent">33%</div>
                                            </div>
                                            <div class="progress progress-striped progress-warning active no-margin-bot">
                                                <div class="bar" style="width: 33%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="task-info">
                                                <div class="desc">Dashboard v1.3</div>
                                                <div class="percent">90%</div>
                                            </div>
                                            <div class="progress progress-striped progress-danger active no-margin-bot">
                                                <div class="bar" style="width: 90%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="external">
                                        <a href="#">See All Tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown" id="header_inbox_bar">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-envelope-alt"></i>
                                    <span class="badge badge-important">5</span>
                                </a>
                                <ul class="dropdown-menu extended inbox">
                                    <li>
                                        <p>You have 5 new messages</p>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="photo"><img src="<?php echo base_url();?>admin/img/avatar-mini.png" alt="avatar" /></span>
                                            <span class="subject">
                                                <span class="from">Jonathan Smith</span>
                                                <span class="time">Just now</span>
                                            </span>
                                            <span class="message">
                                                Hello, this is an example msg.
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="photo"><img src="<?php echo base_url();?>admin/img/avatar-mini.png" alt="avatar" /></span>
                                            <span class="subject">
                                                <span class="from">Jhon Doe</span>
                                                <span class="time">10 mins</span>
                                            </span>
                                            <span class="message">
                                                Hi, Jhon Doe Bhai how are you ?
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="photo"><img src="<?php echo base_url();?>admin/img/avatar-mini.png" alt="avatar" /></span>
                                            <span class="subject">
                                                <span class="from">Jason Stathum</span>
                                                <span class="time">3 hrs</span>
                                            </span>
                                            <span class="message">
                                                This is awesome dashboard.
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="photo"><img src="<?php echo base_url();?>admin/img/avatar-mini.png" alt="avatar" /></span>
                                            <span class="subject">
                                                <span class="from">Jondi Rose</span>
                                                <span class="time">Just now</span>
                                            </span>
                                            <span class="message">
                                                Hello, this is metrolab
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">See all messages</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown" id="header_notification_bar">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-bell-alt"></i>
                                    <span class="badge badge-warning">7</span>
                                </a>
                                <ul class="dropdown-menu extended notification">
                                    <li>
                                        <p>You have 7 new notifications</p>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-important"><i class="icon-bolt"></i></span>
                                            Server #3 overloaded.
                                            <span class="small italic">34 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-warning"><i class="icon-bell"></i></span>
                                            Server #10 not respoding.
                                            <span class="small italic">1 Hours</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-important"><i class="icon-bolt"></i></span>
                                            Database overloaded 24%.
                                            <span class="small italic">4 hrs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-success"><i class="icon-plus"></i></span>
                                            New user registered.
                                            <span class="small italic">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                            Application error.
                                            <span class="small italic">10 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">See all notifications</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END  NOTIFICATION -->
                    <div class="top-nav ">
                        <ul class="nav pull-right top-menu" >
                            <!-- BEGIN SUPPORT -->
                            <li class="dropdown mtop5">
                                <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                                    <i class="icon-comments-alt"></i>
                                </a>
                            </li>
                            <li class="dropdown mtop5">
                                <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                                    <i class="icon-headphones"></i>
                                </a>
                            </li>
                            <!-- END SUPPORT -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url();?>admin/img/avatar1_small.jpg" alt="">
                                    <span class="username"><?php echo $this->session->userdata('admin_name');?></span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu extended logout">
                                    <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                                    <li><a href="<?php echo base_url();?>super_admin/logout">Logout</a></li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                </div>
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div id="container" class="row-fluid">
            <!-- BEGIN SIDEBAR -->
            <div class="sidebar-scroll">
                <div id="sidebar" class="nav-collapse collapse">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <div class="navbar-inverse">
                        <form class="navbar-search visible-phone">
                            <input type="text" class="search-query" placeholder="Search" />
                        </form>
                    </div>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="sidebar-menu">
                        <li class="sub-menu active">
                            <a class="" href="<?php echo base_url();?>super_admin">
                                <i class="icon-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="<?php echo base_url();?>" target="_blank">
                                <i class="icon-user"></i>
                                <span>View Website</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-glass"></i>
                                <span>Logo Manager</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-book"></i>
                                <span>Category Manager</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="<?php echo base_url(); ?>super_admin/add_category">And Category</a></li>
                                <li><a class="" href="<?php echo base_url(); ?>super_admin/add_sub_category">Add Subcategory</a></li>
                                <li><a class="" href="<?php echo base_url(); ?>super_admin/manage_category">Manage Category</a></li>
                                <li><a class="" href="<?php echo base_url(); ?>super_admin/manage_sub_category">Manage Subcategory</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-fire"></i>
                                <span>Slider Control</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-fire"></i>
                                <span>Welcome Message</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-book"></i>
                                <span>Product Manager</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="<?php echo base_url(); ?>super_admin/add_product">Add Product</a></li>
                                <li><a class="" href="<?php echo base_url(); ?>super_admin/manage_product">Manage Product</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="<?php echo base_url(); ?>super_admin/manage_customer" class="">
                                <i class="icon-cogs"></i>
                                <span>Customer Manager</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-fire"></i>
                                <span>Review Manager</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-th"></i>
                                <span>Order Manager</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="basic_table.html">Basic Table</a></li>
                                <li><a class="" href="dynamic_table.html">Dynamic Table</a></li>
                                <li><a class="" href="editable_table.html">Editable Table</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-file-alt"></i>
                                <span>Footer Category</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="blank.html">Blank Page</a></li>
                                <li><a class="" href="blog.html">Blog</a></li>
                                <li><a class="" href="timeline.html">Timeline</a></li>
                                <li><a class="" href="about_us.html">About Us</a></li>
                                <li><a class="" href="contact_us.html">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon-fire"></i>
                                <span>Copyright Manager</span>
                            </a>
                        </li>
                        </hr>
                        <li class="sub-menu">
                            <a href="javascript:;" class="red-box">
                                <i class="icon-fire"></i>
                                <span>About CMS</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN PAGE -->  
            <div id="main-content">
                <!-- BEGIN PAGE CONTAINER-->
                <div class="container-fluid">
                    
                    <!-- BEGIN PAGE CONTENT-->
                    <?php echo $admin_content;?>
                    <!-- END PAGE CONTENT-->         
                </div>
                <!-- END PAGE CONTAINER-->
            </div>
            <!-- END PAGE -->  
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div id="footer">
            2013 &copy; Metro Lab Dashboard.
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS -->
        <!-- Load javascripts at bottom, this will reduce page load time -->
        <script src="<?php echo base_url();?>admin/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url();?>admin/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script type="<?php echo base_url();?>admin/text/javascript" src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
        <script type="<?php echo base_url();?>admin/text/javascript" src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>admin/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
        <script src="<?php echo base_url();?>admin/assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- ie8 fixes -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url();?>admin/js/excanvas.js"></script>
        <script src="<?php echo base_url();?>admin/js/respond.js"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>admin/js/jquery.sparkline.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>admin/assets/chart-master/Chart.js"></script>
        <!--common script for all pages-->
        <script src="<?php echo base_url();?>admin/js/common-scripts.js"></script>
        <!--script for this page only-->
        <script src="<?php echo base_url();?>admin/js/easy-pie-chart.js"></script>
        <script src="<?php echo base_url();?>admin/js/sparkline-chart.js"></script>
        <script src="<?php echo base_url();?>admin/js/home-page-calender.js"></script>
        <script src="<?php echo base_url();?>admin/js/chartjs.js"></script>
        <!-- END JAVASCRIPTS -->   
    </body>
</html>