<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inhinyera | Officer Dashboard</title>

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
<body class="hold-transition skin-black-light layout-top-nav">
<div class="wrapper">

  <header class="main-header">

    <!-- Header Navbar: style can be found in header.less -->
     <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><img src="<?php echo base_url().'assets/img/inhinyerawhitelogo.png'?>"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Members <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url().'/newmemberController/index'?>">Add New Member</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url().'/newmemberController/index'?>">Register Member</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url().'/homeNavBarController/managemember'?>">Manage Members</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url().'/homeNavBarController/managealumnimember'?>">Manage Alumni Members</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url().'/homeNavBarController/allmembersreport'?>">All Members</a></li>
              
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url().'/homeNavBarController/schoolyear'?>">School Year</a></li>
                <li class="divider"></li>
                <li><a href="#">Access Role</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li><a id="clockbox"></a>
              </li>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo base_url().'assets/img/studentphotos/avatar5.png'?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $firstname.' '.$lastname ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header" style="background: url('<?php echo base_url().'assets/dist/img/banner.png'?>') center center;">
                  <img src="<?php echo base_url().'assets/img/studentphotos/avatar5.png'?>" class="img-circle" alt="User Image">

                  <p>
                      <?php echo $firstname.' '.$middlename.' '.$lastname ?>
                    <small><?php echo $access_role ?></small>
                  </p>
                </li>
                <!-- Menu Footer-->
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
        <!-- /.navbar-custom-menu -->
       </div>
      <!-- /.container-fluid -->
    </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Inhinyera 
          <small>Membership Management System </small>
        </h1>

        <ol class="breadcrumb">
          <li><a href="<?php echo site_url().'/homeNavBarController/home'?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        </ol>
      </section>

    <!-- Main content -->
    <section class="content">
       <div class="row">
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-red" style="background: url('<?php echo base_url().'assets/dist/img/banner.png'?>') center center;">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url().'assets/img/studentphotos/avatar5.png'?>" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?php echo $firstname.' '.$lastname ?></h3>
              <h5 class="widget-user-desc"><?php echo $program ?></h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
              <li><a href="<?php echo site_url().'/homeNavBarController/allmembersreport'?>">Total Members <span class="pull-right badge bg-red"><?php echo $allcount ?></span></a></li>
              <li><a href="<?php echo site_url().'/homeNavBarController/civilengineeringmembersreport'?>">Civil Engineering<span class="pull-right badge bg-grey"><?php echo $civilengineering ?></span></a></li>
              <li><a href="<?php echo site_url().'/homeNavBarController/computerengineeringmembersreport'?>">Computer Engineering<span class="pull-right badge bg-grey"><?php echo $computerengineering ?></span></a></li>
              <li><a href="<?php echo site_url().'/homeNavBarController/electricalengineeringmembersreport'?>">Electrical Engineering<span class="pull-right badge bg-grey"><?php echo $electricalengineering ?></span></a></li>
              <li><a href="<?php echo site_url().'/homeNavBarController/electronicsengineeringmembersreport'?>">Electronics Engineering <span class="pull-right badge bg-grey"><?php echo $electronicsengineering ?></span></a></li>
              <li><a href="<?php echo site_url().'/homeNavBarController/environmentalengineeringmembersreport'?>">Environmental & Sanitary Engineering <span class="pull-right badge bg-grey"><?php echo $environmentalengineering ?></span></a></li>
              <li><a href="<?php echo site_url().'/homeNavBarController/industrialengineeringmembersreport'?>">Industrial Engineering <span class="pull-right badge bg-grey"><?php echo $industrialengineering ?></span></a></li>
              <li><a href="<?php echo site_url().'/homeNavBarController/marineengineeringmembersreport'?>">Marine Engineering <span class="pull-right badge bg-grey"><?php echo $marineengineering ?></span></a></li>
              <li><a href="<?php echo site_url().'/homeNavBarController/mechanicalengineeringmembersreport'?>">Mechanical Engineering <span class="pull-right badge bg-grey"><?php echo $mechanicalengineering ?></span></a></li>
                <li><a href="<?php echo site_url().'/homeNavBarController/home'?>""><i class="fa fa-refresh"></i>  Refresh</a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
          </div>

          <div class="col-md-8">
  
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-users"></i>
              <h3 class="box-title">Latest Members</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="users" class="table no-margin">
                  <thead>
                  <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                   
                    <th>Program</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 <?php foreach ($users as $index => $row){ ?>
            <tr>
            <td><?php echo $row->studentID ?></td>
            <td><?php echo $row->firstname.' '.$row->middlename.' '.$row->lastname ?></td>

            <td><?php echo $row->program ?></td>
            <td>
                <a class="viewbutton" href="<?php echo base_url('index.php/managememberController/view/'.$row->studentID)?>"> View </a>  &nbsp; &nbsp; <a> | </a> &nbsp; &nbsp; 
                <a class="editbutton" href="<?php echo site_url().'/managememberController/editUser/'.$row->studentID?>"> Edit </a>
                          <!--<a class="editbutton" href="<?php echo site_url().'/managememberController/editUser/'.$row->studentID?>"> Deactivate </a>
                                                            <!--<button type="submit" class="deletebutton"  name="delete" ><a>Delete</a></button> &nbsp; &nbsp; &nbsp; &nbsp; 
                                                            <button type="submit" class="editbutton" name="edit" ><a>Edit</a></button>-->

                                                            
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
              <a href="<?php echo site_url().'/newmemberController/index'?>" class="btn btn-sm btn-info btn-flat pull-left">Add New Member</a>
              <a href="<?php echo site_url().'/homeNavBarController/managemember'?>" class="btn btn-sm btn-default btn-flat pull-right">Manage Members</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

        </div>
          <div class="col-md-8">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#studentbar-chart" data-toggle="tab">Students</a></li>
              <li><a href="#alumnibar-chart" data-toggle="tab">Alumni</a></li>
              <li><a href="#allbar-chart" data-toggle="tab">All</a></li>
              <li class="pull-left header"><i class="fa fa-group"></i> Members Charts</li>
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

          
    
        <!-- row -->
        </div>


    </section>
    <!-- /.content -->
  </div>
      </div>
</div>
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
<!-- FLOT CHARTS -->
<script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.min.js'?>"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.categories.min.js'?>"></script>

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
<script>
  /*
     * All BAR CHART
     * ---------
     */

    var allbar_data = {
      data: [["CE", <?php echo $civilengineering ?>], ["CPE", <?php echo $computerengineering ?>], ["EE", <?php echo $electricalengineering ?>], ["ECE", <?php echo $electronicsengineering ?>], ["ENSE", <?php echo $environmentalengineering ?>], ["IE", <?php echo $industrialengineering ?>], ["MARE", <?php echo $marineengineering ?>], ["ME", <?php echo $mechanicalengineering ?>]],
      color: "#e668b2"
    };
    $.plot("#allbar-chart", [allbar_data], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
    /* END All BAR CHART */
</script>
<script>
      /*
     * Students BAR CHART
     * ---------
     */

    var studentbar_data = {
      data: [["CE", <?php echo $civilengineeringstudents ?>], ["CPE", <?php echo $computerengineeringstudents ?>], ["EE", <?php echo $electricalengineeringstudents ?>], ["ECE", <?php echo $electronicsengineeringstudents ?>], ["ENSE", <?php echo $environmentalengineeringstudents ?>], ["IE", <?php echo $industrialengineeringstudents ?>], ["MARE", <?php echo $marineengineeringstudents ?>], ["ME", <?php echo $mechanicalengineeringstudents ?>]],
      color: "#e668b2"
    };
    $.plot("#studentbar-chart", [studentbar_data], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
    /* END students BAR CHART */

     /*
     * ALUMNI BAR CHART
     * ---------
     */

</script>
<script>
    var alumnibar_data = {
      data: [["CE", <?php echo $civilengineeringalumni ?>], ["CPE", <?php echo $computerengineeringalumni ?>], ["EE", <?php echo $electricalengineeringalumni ?>], ["ECE", <?php echo $electronicsengineeringalumni ?>], ["ENSE", <?php echo $environmentalengineeringalumni ?>], ["IE", <?php echo $industrialengineeringalumni ?>], ["MARE", <?php echo $marineengineeringalumni ?>], ["ME", <?php echo $mechanicalengineeringalumni ?>]],
      color: "#e668b2"
    };
    $.plot("#alumnibar-chart", [alumnibar_data], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
    /* END ALUMNI BAR CHART */
</script>
</body>
</html>
