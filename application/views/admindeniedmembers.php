
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inhinyera | Administrator Denied Members</title>
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
        <li><a href="<?php echo site_url().'/homeNavBarController/homeadmin'?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview active">
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
        Inhinyera
        <small>Membership Management System</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url().'/homeNavBarController/homeadmin'?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href=""><i></i>Member Stats</a></li>
        <li class="active"><a href="<?php echo site_url().'/homeNavBarController/homeadmindeniedmembers'?>">Denied Members</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">

     <?php if ($denied) : ?>
             <?php if($this->session->flashdata('success')){?>
              <div class="alert alert-success text-center">      
               <?php echo $this->session->flashdata('success')?>
               </div>
               <?php } else if($this->session->flashdata('failed')){ ?>
                <div class="alert alert-danger text-center">      
                <?php echo $this->session->flashdata('failed')?>
               </div>
                <?php } else if($message == ''){ ?>
                                    
                <?php } else{?>
                 <div class="alert alert-info text-center">      
                 <?php echo $message ?>
                 </div>
    <?php } ?>

      <div class="col-md-12">

      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Members List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Student ID</th>
                  <th>Name</th>
                  <th>Program</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 
                  <?php foreach($denied as $index => $row)
                  { ?>

                  <tr>
                    <td><a href="<?php echo base_url('index.php/homeadminController/viewmemberprofile/'.$row->studentID)?>"><?php echo $row->studentID ?></a></td>
                    <td><?php echo $row->firstname.' '.$row->middlename.' '.$row->lastname ?></td>
                    <td><?php echo $row->program ?></td>
                    <td><span class="label label-warning"><?php echo $row->approvalstatus ?></span></td>
                    <td><a class="editbutton" href="<?php echo site_url().'/managememberController/admineditUser/'.$row->studentID?>"> Change Status </a> &nbsp;  <a> | </a> &nbsp; 
                    <a class="deletebutton" href="<?php echo base_url('index.php/managememberController/admindelete/'.$row->studentID)?>" onclick="return confirm('Are you sure you want to delete <?php echo $row->firstname.' '.$row->middlename.' '.$row->lastname ?>?')">  Delete </a>

                  </tr>
                <?php } ?>                                     
                </tbody>
              </table>
              <?php endif; ?>
            </div>
    </div>

      </div>
    </div>

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
