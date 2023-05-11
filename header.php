<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Ujian Online</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <!-- <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180"> -->
        <link rel="shortcut icon" href="https://www.araksa.com/bootstrap/img/logo_icon.ico">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->
        
        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->
        
        <!-- Modernizr (browser feature detection library) -->
        <script src="js/vendor/modernizr.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.14/css/bootstrap-select.min.css">


    </head>
    <body>
    <div id="page-wrapper" class="page-loading">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Harap Tunggu .....</strong></h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            </div>


  
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available #page-container classes:

                '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

                'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
                'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
                'sidebar-mini sidebar-visible-lg-mini'          for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
                'sidebar-mini sidebar-visible-lg'               for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)

                'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
                'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

                'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

                'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

                'style-alt'                                     for an alternative main style (without it: the default style)
                'footer-fixed'                                  for a fixed footer (without it: a static footer)

                'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links
            -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <!-- Alternative Sidebar -->
                <div id="sidebar-alt">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-alt-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Chat -->
                            <!-- Chat demo functionality initialized in js/app.js -> chatUi() -->
                            <a href="page_ready_chat.html" class="sidebar-title">
                                <i class="gi gi-comments pull-right"></i> <strong>Chat</strong>UI
                            </a>
                            <!-- Chat Users -->
                            <ul class="chat-users clearfix">
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-online">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-online">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-online">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-online">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-away">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-away">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar9.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-busy">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                            </ul>
                            <!-- END Chat Users -->

                            <!-- Chat Talk -->
                            <div class="chat-talk display-none">
                                <!-- Chat Info -->
                                <div class="chat-talk-info sidebar-section">
                                    <button id="chat-talk-close-btn" class="btn btn-xs btn-default pull-right">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle pull-left">
                                    <strong>John</strong> Doe
                                </div>
                                <!-- END Chat Info -->

                                <!-- Chat Messages -->
                                <ul class="chat-talk-messages">
                                    <li class="text-center"><small>Yesterday, 18:35</small></li>
                                    <li class="chat-talk-msg animation-slideRight">Hey admin?</li>
                                    <li class="chat-talk-msg animation-slideRight">How are you?</li>
                                    <li class="text-center"><small>Today, 7:10</small></li>
                                    <li class="chat-talk-msg chat-talk-msg-highlight themed-border animation-slideLeft">I'm fine, thanks!</li>
                                </ul>
                                <!-- END Chat Messages -->

                                <!-- Chat Input -->
                                <form action="header.php.html" method="post" id="sidebar-chat-form" class="chat-form">
                                    <input type="text" id="sidebar-chat-message" name="sidebar-chat-message" class="form-control form-control-borderless" placeholder="Type a message..">
                                </form>
                                <!-- END Chat Input -->
                            </div>
                            <!--  END Chat Talk -->
                            <!-- END Chat -->

                            <!-- Activity -->
                            <a href="javascript:void(0)" class="sidebar-title">
                                <i class="fa fa-globe pull-right"></i> <strong>Activity</strong>UI
                            </a>
                            <div class="sidebar-section">
                                <div class="alert alert-danger alert-alt">
                                    <small>just now</small><br>
                                    <i class="fa fa-thumbs-up fa-fw"></i> Upgraded to Pro plan
                                </div>
                                <div class="alert alert-info alert-alt">
                                    <small>2 hours ago</small><br>
                                    <i class="gi gi-coins fa-fw"></i> You had a new sale!
                                </div>
                                <div class="alert alert-success alert-alt">
                                    <small>3 hours ago</small><br>
                                    <i class="fa fa-plus fa-fw"></i> <a href="page_ready_user_profile.html"><strong><?php echo $_SESSION['username']; ?></strong></a> would like to become friends!<br>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-check"></i> Accept</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-times"></i> Ignore</a>
                                </div>
                                <div class="alert alert-warning alert-alt">
                                    <small>2 days ago</small><br>
                                    Running low on space<br><strong>18GB in use</strong> 2GB left<br>
                                    <a href="page_ready_pricing_tables.html" class="btn btn-xs btn-primary"><i class="fa fa-arrow-up"></i> Upgrade Plan</a>
                                </div>
                            </div>
                            <!-- END Activity -->

                            <!-- Messages -->
                            <a href="page_ready_inbox.html" class="sidebar-title">
                                <i class="fa fa-envelope pull-right"></i> <strong>Messages</strong>UI (5)
                            </a>
                            <div class="sidebar-section">
                                <div class="alert alert-alt">
                                    Debra Stanley<small class="pull-right">just now</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>New Follower</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Sarah Cole<small class="pull-right">2 min ago</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>Your subscription was updated</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Bryan Porter<small class="pull-right">10 min ago</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>A great opportunity</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Jose Duncan<small class="pull-right">30 min ago</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>Account Activation</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Henry Ellis<small class="pull-right">40 min ago</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>You reached 10.000 Followers!</strong></a>
                                </div>
                            </div>
                            <!-- END Messages -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Alternative Sidebar -->

                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <div class="sidebar-brand">
                                <span class="sidebar-nav-mini-hide">Asuransi Raksa</span>
                            </div>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="page_ready_user_profile.html">
                                    <?php
                                    if($_SESSION['status'] == 'admin'){
                                        echo '<img src="img/placeholders/avatars/admin.png" alt="avatar">';
                                    }elseif($_SESSION['status'] == 'guru'){
                                        echo '<img src="img/placeholders/avatars/teacher.png" alt="avatar">';
                                    }else{
                                        echo '<img src="img/placeholders/avatars/student.png" alt="avatar">';
                                    }
                                        
                                    ?>
                                    </a>
                                </div>
                                <div class="sidebar-user-name"><?php echo $_SESSION['username']; ?></div>
                                <div class="sidebar-user-links">
                                   <label><?php echo $_SESSION['status'];?></label>
                                </div>
                            </div>
                            <!-- END User Info -->

                            <!-- Theme Colors -->
                            <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->
                           
                            <!-- END Theme Colors -->

                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                            <?php 
                            //session_start();
                            if($_SESSION['status'] == 'admin'){ ?>
                            <!-- menu admin -->
                                <li>
                                    <a href="index.php?home"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
                                <li>
                                    <a class="sidebar-nav-menu">
                                        <i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                                        <i class="gi gi-settings sidebar-nav-icon"></i>
                                        <span class="sidebar-nav-mini-hide">Konfigurasi</span>
                                    </a>
                                    <ul style="display: none;">
                                        <li>
                                            <a href="index.php?mapel">Mapel</a>
                                        </li>
                                        <li>
                                            <a href="index.php?tahunajaran">Tahun Ajaran</a>
                                        </li>
                                        <li>
                                            <a href="index.php?gurumapel">Guru Pelajaran</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index.php?soal"><i class="gi gi-more_items sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Group Soal</span></a>
                                </li>
                                <!--<li>
                                    <a href="index.php?ujian"><i class="gi gi-cogwheel sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Set Ujian</span></a>
                                </li>-->
                                <li>
                                    <a href="index.php?rekapnilaiujian"><i class="gi gi-cup sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Nilai</span></a>
                                </li>
                                <li>
                                    <a href="index.php?user"><i class="gi gi-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User</span></a>
                                </li>
                                <li>
                                    <a href="logout.php"><i class="gi gi-left_arrow sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Logout</span></a>
                                </li>
                            <?php } ?>
                            <!-- menu guru -->
                            <?php if($_SESSION['status'] == 'guru'){ ?>
                                <li>
                                    <a href="index.php?home"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
            
                                <li>
                                    <a href="index.php?soal"><i class="gi gi-more_items sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Soal</span></a>
                                </li>
                                
                                <li>
                                    <a class="sidebar-nav-menu">
                                        <i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                                        <i class="gi gi-settings sidebar-nav-icon"></i>
                                        <span class="sidebar-nav-mini-hide">Group Ujian</span>
                                    </a>
                                    <ul style="display: none;">
                                        <li>
                                            <a href="index.php?ujian">Ujian</a>
                                        </li>
                                        <li>
                                            <a href="index.php?pilihuserujian">User Access</a>
                                        </li>
                                        <!-- <li>
                                            <a href="index.php?gurumapel">Guru Pelajaran</a>
                                        </li> -->
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a href="index.php?ujian"><i class="gi gi-cogwheel sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Set Ujian</span></a>
                                </li> -->
                                <li>
                                    <a href="index.php?rekapnilaiujian"><i class="gi gi-cup sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Nilai</span></a>
                                </li>
                                <li>
                                    <a href="logout.php"><i class="gi gi-left_arrow sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Logout</span></a>
                                </li>
                            <?php } ?>
                            <!-- menu siswa -->
                            <?php if($_SESSION['status'] == 'siswa'){ ?>
                                <li>
                                    <a href="index.php?home"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="index.php?daftarujian"><i class="gi gi-more_items sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Daftar Ujian</span></a>
                                </li>
                                
                                <!-- <li>
                                    <a href="index.php?hasilujian"><i class="gi gi-cup sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Nilai</span></a>
                                </li> -->

                                <?php if(!empty($_SESSION['ujian'])){?>
                                <li>
                                    <!-- <a href="logout.php"><i class="gi gi-left_arrow sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Logout</span></a> -->
                                    <a href="#" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-left_arrow sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Logout</span></a>
                                    
                                    <!-- <a onclick="$('#modal-user-settings<?php // echo $hasil['idujian']; ?>').modal('show');" title="Delete" class="btn btn-sm btn-default"><i class="gi gi-stopwatch"></i> Ambil Ujian</a> -->
                                    <!-- <a href="#" onclick=""><i class="gi gi-left_arrow sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Logout</span></a> -->
                                    <div class="modal fade" id="modal-user-settings<?php //echo $hasil['idujian']; ?>" role="dialog">
                                        <div class="modal-dialog">
                                         <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                    <h4 class="modal-title" style="color: #000;"></i>Keluar ujian</h4>
                                                </div>
                                                <!-- END Modal Header -->

                                                <!-- Modal Body -->
                                                <div class="modal-body">
                                                    <input type="hidden" name="idujian" value="<?php //echo $hasil['idujian']; ?>">
                                                        <p style="color: #000;">Anda belum menyelesaikan proses Ujian, kami hanya akan mencatat soal yang sudah Anda jawab.</p>
                                                        <div class="form-group form-actions">
                                                            <div >
                                                                <a href="logout.php" title="Delete" class="btn btn-sm btn-danger">Keluar Ujian</a>
                                                                <br>
                                                                <a href="#" title="Delete" data-dismiss="modal" aria-hidden="true" class="btn btn-sm btn-primary">Batal</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- END Modal Body -->
                                            </div>
                                        </div>
                                    </div> 
                                </li>
                                <?php } else { ?>
                                    <a href="logout.php"><i class="gi gi-left_arrow sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Logout</span></a>
                            <?php 
                                 }  
                            } ?>
                            </ul>
                            <!-- END Sidebar Navigation -->

                            <!-- Sidebar Notifications -->
                            
                            <!-- END Sidebar Notifications -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Template Options -->
                            <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                            
                            <!-- END Template Options -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Search Form -->
                        
                        <!-- END Search Form -->

                        <!-- Right Header Navigation -->

                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard Header -->
                        <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
                        
                        <!-- END Dashboard Header -->

                        <!-- Mini Top Stats Row -->
                        
                         