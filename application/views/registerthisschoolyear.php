<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inhinyera | Register Existing Member</title>
 
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
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
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

    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>Inhinyera</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

      
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li><a id="clockbox"></a>
              </li>
            <li><a href="<?php echo base_url()?>">Log In</a></li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
       </div>
      <!-- /.container-fluid -->
    </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     
      <!-- Content -->
    <div class="container">

    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        REGISTER
        <small>For School Year  <?php foreach($query->result() as $schoolyearnow) { ?><?php echo $schoolyearnow->schoolyear ?><?php } ?></small>
      </h1>
    </section>

  <section class="content">

    <div class="row">
     <?php if ($users) : ?>
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
    <br>
    <div class="col-xs-12">

    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Students List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
            <td style="text-align: center;"><?php echo $row->studentID ?></td>
            <td style="text-align: justify;"><?php echo $row->firstname.' '.$row->middlename.' '.$row->lastname ?></td>
            <td style="text-align: center;"><?php echo $row->program ?></td>
            <td style="text-align: center;">
        
                <a class="registerbutton" href="<?php echo base_url('index.php/managememberController/registerthisschoolyearconfirm/'.$row->studentID)?>"> Register Member </a> 

                                                  
            </td>
            </tr>
                 <?php } ?>
                </tbody>
              </table>
              <?php endif; ?>
            </div>
    </div>
    </div>
    </div>
  </div>
  </section>
  </div>
</div>
      
  <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 3.0
        </div>
        <strong>Inhinyera</a></strong> Membership Management System
      </footer>

 

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

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
