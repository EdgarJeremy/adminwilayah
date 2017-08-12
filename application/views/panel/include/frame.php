<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $title;?> | AdminWILAYAH</title>
    <!-- Favicon-->
<!--    <link rel="icon" href="../../favicon.ico" type="image/x-icon">-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url("/assets/plugins/bootstrap/css/bootstrap.css");?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url("/assets/plugins/node-waves/waves.css");?>" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="<?php echo base_url("/assets/plugins/animate-css/animate.css");?>" rel="stylesheet"/>

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url("/assets/plugins/morrisjs/morris.css");?>" rel="stylesheet" />


    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url("/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css");?>" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo base_url("/assets/plugins/waitme/waitMe.css");?>" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url("/assets/plugins/bootstrap-select/css/bootstrap-select.css");?>" rel="stylesheet" />


    <!-- Custom Css -->
    <link href="<?php echo base_url("/assets/css/style.css");?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url("/assets/css/themes/all-themes.css");?>" rel="stylesheet"/>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url("/assets/plugins/jquery/jquery.min.js");?>"></script>

    <script>
        window.base_url = function(dir) {
            if(dir === undefined)
                return "<?php echo base_url();?>";
            else
                return "<?php echo base_url();?>" + "/" + dir;
        };
        window.current_page = "<?php echo $this->uri->segment(2); ?>";
    </script>


</head>

<body class="theme-light-green">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Memuat...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">ADMINWILAYAH - MATERIAL DESIGN</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i
                                class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        <span class="label-count">7</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">person_add</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>12 new members joined</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 14 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-cyan">
                                            <i class="material-icons">add_shopping_cart</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>4 sales made</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 22 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-red">
                                            <i class="material-icons">delete_forever</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy Doe</b> deleted account</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-orange">
                                            <i class="material-icons">mode_edit</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy</b> changed name</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 2 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-blue-grey">
                                            <i class="material-icons">comment</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> commented your post</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 4 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">cached</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> updated status</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-purple">
                                            <i class="material-icons">settings</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>Settings updated</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> Yesterday
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications -->
                <!-- Tasks -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">flag</i>
                        <span class="label-count">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">TASKS</li>
                        <li class="body">
                            <ul class="menu tasks">
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Footer display issue
                                            <small>32%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Make new buttons
                                            <small>45%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Create new dashboard
                                            <small>54%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Solve transition issue
                                            <small>65%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Answer GitHub questions
                                            <small>92%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
                                class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?php echo base_url("/assets/images/user.png");?>" width="48" height="48" alt="User"/>
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata("nama_lengkap"); ?></div>
                <div class="email">
                    <?php
                    if($this->session->userdata("level") == "Pala") {
                        echo $this->session->userdata("level") . " " . $this->session->userdata("nama_kelurahan");
                    } else if($this->session->userdata("level") == "Lurah") {
                        echo $this->session->userdata("level") . " " . $this->session->userdata("nama_kelurahan");
                    } else if($this->session->userdata("level") == "Camat") {
                        echo $this->session->userdata("level") . " " . $this->session->userdata("nama_kecamatan");
                    } else {
                        echo $this->session->userdata("level");
                    }
                    ?>
                </div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Grup</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="<?php echo base_url("/panel/logout/"); ?>"><i class="material-icons">input</i>Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="<?php echo $menu["dashboard"]["current"];?>">
                    <a href="<?php echo base_url("/panel");?>" class="">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="<?php echo $menu["kependudukan"]["current"];?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">nature_people</i>
                        <span>Kependudukan</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?php echo $menu["kependudukan"]["childs"]["daftar_penduduk"];?>">
                            <a href="<?php echo base_url("/panel/daftar_penduduk/"); ?>">Daftar Penduduk</a>
                        </li>
                        <li class="<?php echo $menu["kependudukan"]["childs"]["input_penduduk"];?>">
                            <a href="<?php echo base_url("/panel/input_penduduk/"); ?>">Input Penduduk</a>
                        </li>
                        <li class="<?php echo $menu["kependudukan"]["childs"]["daftar_keluarga"];?>">
                            <a href="<?php echo base_url("/panel/daftar_keluarga/"); ?>">Daftar Keluarga</a>
                        </li>
                        <li class="<?php echo $menu["kependudukan"]["childs"]["input_keluarga"];?>">
                            <a href="javascript:void(0);">Input Keluarga</a>
                        </li>
                        <li class="<?php echo $menu["kependudukan"]["childs"]["histori"];?>">
                            <a href="javascript:void(0);">Histori</a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $menu["pekerjaan"]["current"];?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">work</i>
                        <span>Pekerjaan</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?php echo $menu["pekerjaan"]["childs"]["daftar_pekerjaan"];?>">
                            <a href="#">Daftar Pekerjaan</a>
                        </li>
                        <li class="<?php echo $menu["pekerjaan"]["childs"]["input_pekerjaan"];?>">
                            <a href="#">Input Pekerjaan</a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $menu["pendidikan"]["current"];?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">school</i>
                        <span>Pendidikan</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?php echo $menu["pendidikan"]["childs"]["daftar_pendidikan"];?>">
                            <a href="#">Daftar Pendidikan</a>
                        </li>
                        <li class="<?php echo $menu["pendidikan"]["childs"]["input_pendidikan"];?>">
                            <a href="#">Input Pendidikan</a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $menu["wilayah"]["current"];?>">
                    <a href="#">
                        <i class="material-icons">map</i>
                        <span>Wilayah</span>
                    </a>
                </li>
                <li class="<?php echo $menu["pengguna"]["current"];?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">account_circle</i>
                        <span>Pengguna</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?php echo $menu["pengguna"]["childs"]["daftar_pengguna"];?>">
                            <a href="javascript:void(0);">Daftar Pengguna</a>
                        </li>
                        <li class="<?php echo $menu["pengguna"]["childs"]["input_pengguna"];?>">
                            <a href="javascript:void(0);">Input Pengguna</a>
                        </li>
                    </ul>
                </li>
                <li class="header">LABELS</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-red">donut_large</i>
                        <span>Important</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-amber">donut_large</i>
                        <span>Warning</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Information</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.4
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green" class="active">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>