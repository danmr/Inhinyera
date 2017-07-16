
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inhinyera | Administrator </title>
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
            <li><a href="<?php echo site_url().'/homeNavBarController/adminsearchmembers'?>"><i class="fa fa-circle-o"></i>Search Members</a></li>
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
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>Pending Members</a></li>
          </ul>
          <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>Approved Members</a></li>
          <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>Denied Members</a></li>
          <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>Alumni</a></li>
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
        </li>
        
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
        <li class="active"><a href="<?php echo site_url().'/homeNavBarController/homeadmin'?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <?php if($this->session->flashdata('failed')){?>
              <div class="alert alert-danger alert-dismissible">   
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>   
                <?php echo $this->session->flashdata('failed')?>
              </div>
                <?php } else if($this->session->flashdata('success')){?>
                  <div class="alert alert-success alert-dismissible"> 
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>     
                <?php echo $this->session->flashdata('success')?>
                  </div>
                <?php } else if($this->session->flashdata('warning')){?>
                  <div class="alert alert-warning alert-dismissible"> 
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
                <?php echo $this->session->flashdata('warning')?> 
                 <?php }
                 else{?>
                 <?php } ?>
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Members</span>
              <span class="info-box-number"><?php echo $totalmembers?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Approved Members</span>
              <span class="info-box-number"><a href="<?php echo site_url().'/homeNavBarController/homeadminapprovedmembers'?>"><?php echo $totalapprovedstudents ?></a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-exclamation"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pending Members</span>
              <span class="info-box-number"><a href="<?php echo site_url().'/homeNavBarController/homeadminpendingmembers'?>"><?php echo $totalpendingstudents ?></a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-user-times"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Denied Members</span>
              <span class="info-box-number"><a href="<?php echo site_url().'/homeNavBarController/homeadmindeniedmembers'?>"><?php echo $totaldeniedstudents ?></a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">

        <div class="col-md-12">

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Registrations Pending</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
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

                  <?php foreach($registrations as $index => $row)
                  { ?>

                  <tr>
                    <td><a href="<?php echo base_url('index.php/homeadminController/viewmemberprofile/'.$row->studentID)?>"><?php echo $row->studentID ?></a></td>
                    <td><?php echo $row->firstname.' '.$row->middlename.' '.$row->lastname ?></td>
                    <td><?php echo $row->program ?></td>
                    <td><span class="label label-warning"><?php echo $row->approvalstatus ?></span></td>
                    <td><a class="editbutton" href="<?php echo site_url().'/managememberController/editUser/'.$row->studentID?>"> Change Status </a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="<?php echo site_url().'/newmemberController/admin'?>" class="btn btn-sm btn-info btn-flat pull-left">Register New Member</a>
              <a href="<?php echo site_url().'/homeNavBarController/homeadminpendingmembers'?>" class="btn btn-sm btn-default btn-flat pull-right">View Pending Registrations</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

      <div class="row">

        <div class="col-md-12">

          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#studentbar-chart" data-toggle="tab">Students</a></li>
              <li><a href="#alumnibar-chart" data-toggle="tab">Alumni</a></li>
              <li><a href="#allbar-chart" data-toggle="tab">All</a></li>
              <li class="pull-left header"><i class="fa fa-group"></i> Members Charts (SY <?php echo $schoolyear ?> )</li>
            </ul>
            <div class="tab-content">
              <!--  chart - members -->
              <div class="chart tab-pane active" id="studentbar-chart" style="position: relative; height: 170px;"></div>
              <div class="chart tab-pane" id="allbar-chart" style="position: relative; height: 170px;"></div>
              <div class="chart tab-pane" id="alumnibar-chart" style="position: relative; height: 170px;"></div>
              
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

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
