
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inhinyera | Civil Engineering Members</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="<?php echo base_url().'assets/img/logo-small-trans.png'?>" type="image/x-icon">

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome-4.6.3/css/font-awesome.min.css'?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/ionicons-2.0.1/css/ionicons.min.css'?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'?>"'>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
     <a href="<?php echo site_url().'/homeNavBarController/home'?>"" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="<?php echo base_url().'assets/img/logotopnav.png'?>"></span>
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
           <li><a id="clockbox"></a>
           </li>
          
          
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
                    <small><?php echo $access_role ?></small>
                  </p>
                </li>
              <!-- Menu footer -->
              <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo site_url().'/homeNavBarController/profile'?>" class="btn btn-default btn-flat">Profile</a>
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
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Members Report</li>
        
        
        <li>
          <a href="<?php echo site_url().'/homeNavBarController/allmembersreport'?>">
            <i class="fa fa-group"></i> <span>All Members</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red"><?php echo $allcount ?></small>
            </span>
          </a>
        </li>
       
       
        <li class="header">Programs</li>
        <li class="active"><a href="<?php echo site_url().'/homeNavBarController/civilengineeringmembersreport'?>"><i class="fa fa-circle-o text-orange"></i> <span>Civil Engineering</span></a></li>
        <li><a href="<?php echo site_url().'/homeNavBarController/computerengineeringmembersreport'?>"><i class="fa fa-circle-o text-green"></i> <span>Computer Engineering</span></a></li>
        <li><a href="<?php echo site_url().'/homeNavBarController/electricalengineeringmembersreport'?>"><i class="fa fa-circle-o text-red"></i> <span>Electrical Engineering</span></a></li>
        <li><a href="<?php echo site_url().'/homeNavBarController/electronicsengineeringmembersreport'?>"><i class="fa fa-circle-o text-green"></i> <span>Electronics Engineering</span></a></li>
        <li><a href="<?php echo site_url().'/homeNavBarController/environmentalengineeringmembersreport'?>"><i class="fa fa-circle-o text-green"></i> <span>Environmental Engineering</span></a></li>
        <li><a href="<?php echo site_url().'/homeNavBarController/industrialengineeringmembersreport'?>"><i class="fa fa-circle-o text-yellow"></i> <span>Industrial Engineering</span></a></li>
        <li><a href="<?php echo site_url().'/homeNavBarController/marineengineeringmembersreport'?>"><i class="fa fa-circle-o text-aqua"></i> <span>Marine Engineering</span></a></li>
        <li><a href="<?php echo site_url().'/homeNavBarController/mechanicalengineeringmembersreport'?>"><i class="fa fa-circle-o text-brown"></i> <span>Mechanical Engineering</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Inhinyera
          <small>All Members Report</small>
        </h1>

        <ol class="breadcrumb">
          <li><a href="<?php echo site_url().'/homeNavBarController/home'?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li><a href="#">Members Report</a></li>
          <li class="active">All Members</li>
        </ol>
    </section>

    

    <!-- Main content -->
    <section class="invoice">
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="<?php echo site_url().'/homeNavBarController/allmembersreportprint'?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
        </div>
      </div>
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i></i>Inhinyera 
            <small class="pull-right"> Total Number of CE Members: <?php echo $civilengineeringcount ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      

     <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <tr>
                  <th>Student ID</th>
                  <th>Name</th>
                  <th>Program</th>
                  <th>Contact</th>
                  <th>Email</th>
                </tr>
                </thead>
                <tbody>
                 <?php foreach ($result as $index => $row){ ?>
                  <tr>
                  <td><?php echo $row->studentID ?></td>
                  <td><?php echo $row->firstname.' '.$row->middlename.' '.$row->lastname ?></td>
                  <td><?php echo $row->program ?></td>
                  <td><?php echo $row->contact ?></td>
                  <td><?php echo $row->email ?></td>
                  </tr>
                 <?php } ?>
                </tbody>
              
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 3.0
    </div>
    <strong>Inhinyera</strong> Membership System
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url().'assets/plugins/sparkline/jquery.sparkline.min.js'?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url().'assets/plugins/chartjs/Chart.min.js'?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url().'assets/dist/js/pages/dashboard2.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script>
 tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
 tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

                    function GetClock(){
                        var d=new Date();
                        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
                        if(nyear<1000) nyear+=1900;
                        var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
                        
                        if(nhour==0){ap=" AM";nhour=12;}
                        else if(nhour<12){ap=" AM";}
                        else if(nhour==12){ap=" PM";}
                        else if(nhour>12){ap=" PM";nhour-=12;}
                        
                        if(nmin<=9) nmin="0"+nmin;
                        if(nsec<=9) nsec="0"+nsec;
                        
                        document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+ndate+" "+tmonth[nmonth]+" "+nyear+" - "+nhour+":"+nmin+":"+nsec+ap+"";
                    }
                    window.onload=function(){
                        GetClock();
                        setInterval(GetClock,1000);
                    }         
</script>
</body>
</html>
