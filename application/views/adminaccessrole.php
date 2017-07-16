
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inhinyera | Access Role Settings</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php
  include("alllinks.php");
  ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->

  
<body class="hold-transition skin-black-light fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url().'/homeNavBarController/homeadmin'?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="<?php echo base_url().'assets/img/inhinyerawhitelogo.png'?>"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?php echo base_url().'assets/img/logotopnav.png'?>"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url().'assets/img/studentphotos/avatar5.png'?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $firstname.' '.$lastname ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="background: url('<?php echo base_url().'assets/dist/img/banner.png'?>') center center;">
                <img src="<?php echo base_url().'assets/img/studentphotos/avatar5.png'?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $firstname.' '.$middlename.' '.$lastname ?>
                  <small>Administrator</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <?php
                       
         $schoolyear = "";
                      
         if($query->num_rows() != 0){
         $row = $query->row();
                          
           $schoolyear = $row -> schoolyear;
     
        }
                                            
                                            
                                            
  ?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url().'assets/img/studentphotos/avatar5.png'?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $firstname.' '.$lastname ?></p>
          <a href="#"><i id="clockboxdateonly"></i></a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active"><a href="<?php echo site_url().'/homeNavBarController/homeadmin'?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i>
            <span>Members Stats</span>
            <span class="pull-right-container">
              <span class="label pull-right bg-red"><?php echo $totaldeniedstudents ?></span>
              <span class="label pull-right bg-yellow"><?php echo $totalpendingstudents ?></span>
              <span class="label pull-right bg-green"><?php echo $totalapprovedstudents ?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url().'/homeNavBarController/homeadminapprovedmembers'?>"><i class="fa fa-circle-o"></i>Approved Members <span class="pull-right-container">
                  <span class="label pull-right bg-green"><?php echo $totalapprovedstudents ?></span>
                </span></a></li>
            <li><a href="<?php echo site_url().'/homeNavBarController/homeadminpendingmembers'?>"><i class="fa fa-circle-o"></i>Pending Members <span class="pull-right-container">
                  <span class="label pull-right bg-yellow"><?php echo $totalpendingstudents ?></span>
                </span></a></li></a></li>
            <li><a href="<?php echo site_url().'/homeNavBarController/homeadmindeniedmembers'?>"><i class="fa fa-circle-o"></i>Denied Members <span class="pull-right-container">
                  <span class="label pull-right bg-red"><?php echo $totaldeniedstudents ?></span>
                </span></a></li></a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Manage Members</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>Search Members</a></li>
            <li><a href="<?php echo site_url().'/newmemberController/admin'?>"><i class="fa fa-circle-o"></i>Add New Members</a></li>
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>Register New Members</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Alumni</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>Manage Alumni</a></li>
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>Add New Alumni</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Reports</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>All Members</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i>
            <span>Settings</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url().'/homeNavBarController/adminschoolyear'?>"><i class="fa fa-circle-o"></i>School Year</a></li>
            <li><a href="<?php echo site_url().'/homeNavBarController/adminaccessrole'?>"><i class="fa fa-circle-o"></i>Access Role</a></li>
          </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Settings
        <small>Access Role</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="<?php echo site_url().'/homeNavBarController/homeadmin'?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="">Settings</a></li>
        <li class="active"><a href="<?php echo site_url().'/homeNavBarController/adminschoolyear'?>">Access Role</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
     <?php
        include("footer.php");
     ?>
  </footer>
</div>
<!-- ./wrapper -->

<?php
  include("allscripts.php");
?>
</body>
</html>
