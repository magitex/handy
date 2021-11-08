<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Handyman | Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo assets_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo assets_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo assets_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo assets_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo assets_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
      .tox-notification { display: none !important; }
    </style>
    <script src="<?php echo assets_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo assets_url(); ?>";
    </script>
    
    <!-- 
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>dashboard" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><i class="fa fa-home"></i></span>
          
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><i class="fa fa-home"></i><b> HANDYMAN</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <i class="fa fa-history"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"> Last Login : <i class="fa fa-clock-o"></i> <?= empty($last_login) ? "First Time Login" : $last_login; ?></li>
                </ul>
              </li> -->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo assets_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <img src="<?php echo assets_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                    
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>profile" class="btn btn-warning btn-flat"><i class="fa fa-user-circle"></i> Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header"><center>> N A V B A R <</center></li>
            <li>
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            <?php
            if($role == ROLE_ADMIN || $role == ROLE_MANAGER)
            {
            ?>
            <?php
            }
            if($role == ROLE_ADMIN)
            {
            ?>
            <!--<li>
              <a href="<?php echo base_url(); ?>bannerListing">
                <i class="fa fa-ticket"></i>
                <span>Banner Management System</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>userListing1">
                <i class="ion ion-person-add"></i>
                <span>Our Mission</span>
              </a>
            </li>-->
            <li>
              <a href="<?php echo base_url(); ?>languageListing">
                <i class="fa fa-list-alt"></i>
                <span>Language</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>currencyListing">
                <i class="fa fa-rss"></i>
                <span>Currency</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>cmspageListing">
                <i class="fa fa-list-alt"></i>
                <span>Cms Page</span>
              </a>
            </li>
            <li>
                <a href="<?php echo base_url().'contact/1'; ?>">
                <i class="fa fa-address-book"></i>
                <span>Contact Details</span>
              </a>
            </li>
            <!--<li>
              <a href="<?php echo base_url(); ?>newsListing">
                <i class="fa fa-newspaper-o"></i>
                <span>News</span>
              </a>
            </li>-->
            <li>
              <a href="<?php echo base_url(); ?>categoryListing">
                <i class="fa fa-list-alt"></i>
                <span>Job Categories</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>serviceListing">
                <i class="fa fa-list-alt"></i>
                <span>Services</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>packageListing">
                <i class="fa fa-list-alt"></i>
                <span>Packages</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>providerListing">
                <i class="fa fa-list-alt"></i>
                <span>Provders</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>customerListing">
                <i class="fa fa-list-alt"></i>
                <span>Customers</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>faqListing">
                <i class="fa fa-rss"></i>
                <span>Faq</span>
              </a>
            </li>
            <!--<li>
              <a href="<?php echo base_url(); ?>blogListing">
                <i class="fa fa-rss"></i>
                <span>Our Blog</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>historicListing" >
                <i class="fa fa-globe"></i>
                <span>Historic Research</span>
              </a>
            </li>-->
            <!-- <li>
              <a href="#" >
                <i class="fa fa-thumb-tack"></i>
                <span>Task Status</span>
              </a>
            </li>
            <li>
              <a href="#" >
                <i class="fa fa-upload"></i>
                <span>Task Uploads</span>
              </a>
            </li>-->
            <!--<li>
              <a href="<?php echo base_url(); ?>reportListing" >
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
              </a>
            </li> 
            <li>
              <a href="<?php echo base_url(); ?>teamListing" >
                <i class="fa fa-users"></i>
                <span>Our Team</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>fundersListing" >
                <i class="fa fa-money"></i>
                <span>Funders</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>partnersListing" >
                <i class="fa fa-user"></i>
                <span>Partners</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>contactQueryListing" >
                <i class="fa fa-question-circle"></i>
                <span>Contact Query</span>
              </a>
            </li>-->
            <?php
            }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>