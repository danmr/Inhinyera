
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inhinyera | Edit Member Organization Details</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="icon" href="<?php echo base_url().'assets/img/logo-small-trans.png'?>" type="image/x-icon">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome-4.6.3/css/font-awesome.min.css'?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/ionicons-2.0.1/css/ionicons.min.css'?>">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datepicker/datepicker3.css'?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/iCheck/all.css'?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/colorpicker/bootstrap-colorpicker.min.css'?>">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.css'?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/select2/select2.min.css'?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url().'assets//dist/css/skins/_all-skins.min.css'?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-black-light fixed" data-spy="scroll" data-target="#scrollspy">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <!-- Logo -->
       <a href="<?php echo site_url().'/homeNavBarController/homeadmin'?>"" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="<?php echo base_url().'assets/img/logotopnav.png'?>"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="<?php echo base_url().'assets/img/logotopnav.png'?>"></span>
          </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            
            <li><a href="<?php echo site_url().'/homeNavBarController/homeadmin'?>">Dashboard</a></li>
            
          </ul>
        </div>
        </nav>
      </header>

                  <?php


                      $organization = null;
                      $organization2 = null;
                      $organization3 = null;
                      $organization4 = null;
                      $organization5 = null;
                      $organization6 = null;
                      $organization7 = null;
                      $organization8 = null;
                      $organization9 = null;
                      $organization10 = null;

                      $position = null;
                      $position2 = null;
                      $position3 = null;
                      $position4 = null;
                      $position5 = null;
                      $position6 = null;
                      $position7 = null;
                      $position8 = null;
                      $position9 = null;
                      $position10 = null;
                      

                       
                                            
                       if($data->num_rows() != 0){
                          $row = $data->row();
                          $studentID = $row->studentID;

                        $organization = $row ->organization;
                        $organization2 = $row ->organization2;
                        $organization3 = $row ->organization3;
                        $organization4 = $row ->organization4;
                        $organization5 = $row ->organization5;
                        $organization6 = $row ->organization6;
                        $organization7 = $row ->organization7;
                        $organization8 = $row ->organization8;
                        $organization9 = $row ->organization9;
                        $organization10 = $row ->organization10;

                        $position = $row ->position;
                        $position2 = $row ->position2;
                        $position3 = $row ->position3;
                        $position4 = $row ->position4;
                        $position5 = $row ->position5;
                        $position6 = $row ->position6;
                        $position7 = $row ->position7;
                        $position8 = $row ->position8;
                        $position9 = $row ->position9;
                        $position10 = $row ->position10;


                         
                      }
                                            
                                            
                                            
               ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <div class="sidebar" id="scrollspy">

          <!-- sidebar menu: : style can be found in sidebar.less -->
           <ul class="nav sidebar-menu">
            <li class="header">MEMBERSHIP FORM CONTENTS</li>
            <li><a href="<?php echo site_url().'/managememberController/admineditUser/'.$row->studentID?>"><i class="fa fa-female"></i>Personal Information</a></li>
            <li class="treeview" id="scrollspy-components">
              <a href="javascript:void(0)"><i class="fa fa-graduation-cap"></i> Education</a>
              <ul class="nav treeview-menu">
                <li><a href="<?php echo site_url().'/managememberController/admineditUserelem/'.$row->studentID?>"><i class="fa fa-circle-o"></i> Elementary</a></li>
                <li><a href="<?php echo site_url().'/managememberController/admineditUserhigh/'.$row->studentID?>"><i class="fa fa-circle-o"></i> Highschool</a></li>
                <li><a href="<?php echo site_url().'/managememberController/admineditUsercollege/'.$row->studentID?>"><i class="fa fa-circle-o"></i> College</a></li>
              </ul>
            </li>
            <li><a href="<?php echo site_url().'/managememberController/admineditUserother/'.$row->studentID?>"><i class="fa fa-trophy"></i> Awards/Recognition</a></li>
            <li class="active"><a href="<?php echo site_url().'/managememberController/admineditUserorg/'.$row->studentID?>"><i class="fa fa-group"></i> Organization Affiliated</a></li>
            <li><a href="<?php echo site_url().'/managememberController/admineditUserleadership/'.$row->studentID?>"><i class="fa fa-fire"></i> Leadership Involvement</a></li>
            <li><a href="<?php echo site_url().'/managememberController/admineditUsercase/'.$row->studentID?>"><i class="fa fa-balance-scale"></i> Disciplinary Case</a></li>
            <li><a href="<?php echo site_url().'/managememberController/admineditUserreason/'.$row->studentID?>"><i class="fa fa-info-circle"></i> Reason for joining</a></li>
          </ul>
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

              
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <h1>
             <?php echo $studentID ?>
            <small>Edit Organization Affiliated Details </small>
          </h1>
        </div>

        <!-- Main content -->
        <div class="content body">
        <form role="form" method="POST">

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

        <section id="Organization">
           <div class="row">
             <div class="col-md-12">

              
              <div class="box box-default">
               <div class="box-header with-border">
                  <i class="fa fa-graduation-cap"></i>

                   <h3 class="box-title">Organization</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
            
            <div class="col-xs-6" id='TextBoxesGrouporganization'>
            <div id="TextBoxorganization">
            <section id="organization">
            <label for=organization>Organization</label>
            <input class="form-control" id="organization" name="organization" type="text" placeholder="1. Organization" rows="2"  value="<?php echo $organization ?>">
            <br>
            <input class="form-control" id="organization2" name="organization2" type="text" placeholder="2. Organization" rows="2"  value="<?php echo $organization2 ?>">
            <br>
            <input class="form-control" id="organization3" name="organization3" type="text" placeholder="3. Organization" rows="2"  value="<?php echo $organization3 ?>">
            <br>
            <input class="form-control" id="organization4" name="organization4" type="text" placeholder="4. Organization" rows="2"  value="<?php echo $organization4 ?>">
            <br>
            <input class="form-control" id="organization5" name="organization5" type="text" placeholder="5. Organization" rows="2"  value="<?php echo $organization5 ?>">
            <br>
            <input class="form-control" id="organization6" name="organization6" type="text" placeholder="6. Organization" rows="2"  value="<?php echo $organization6 ?>">
            <br>
            <input class="form-control" id="organization7" name="organization7" type="text" placeholder="7. Organization" rows="2"  value="<?php echo $organization7 ?>">
            <br>
            <input class="form-control" id="organization8" name="organization8" type="text" placeholder="8. Organization" rows="2"  value="<?php echo $organization8 ?>">
            <br>
            <input class="form-control" id="organization9" name="organization9" type="text" placeholder="9. Organization" rows="2"  value="<?php echo $organization9 ?>">
            <br>
            <input class="form-control" id="organization10" name="organization10" type="text" placeholder="10. Organization" rows="2"  value="<?php echo $organization10 ?>">
            </div>
            </div>
            <div class="col-xs-6" id='TextBoxesGrouporganizationposition'>
            <div id="TextBoxorganizationposition">
            <label for=position>Position</label>
            <input class="form-control" id="position" name="Position" type="text" placeholder="1. Position" rows="2" value="<?php echo $position ?>" >
            <br>
            <input class="form-control" id="position2" name="Position2" type="text" placeholder="2. Position" rows="2" value="<?php echo $position2 ?>" >
            <br>
            <input class="form-control" id="position3" name="Position3" type="text" placeholder="3. Position" rows="2" value="<?php echo $position3 ?>" >
            <br>
            <input class="form-control" id="position4" name="Position4" type="text" placeholder="4. Position" rows="2" value="<?php echo $position4 ?>" >
            <br>
            <input class="form-control" id="position5" name="Position5" type="text" placeholder="5. Position" rows="2" value="<?php echo $position5 ?>" >
            <br>
            <input class="form-control" id="position6" name="Position6" type="text" placeholder="6. Position" rows="2" value="<?php echo $position6 ?>" >
            <br>
            <input class="form-control" id="position7" name="Position7" type="text" placeholder="7. Position" rows="2" value="<?php echo $position7 ?>" >
            <br>
            <input class="form-control" id="position8" name="Position8" type="text" placeholder="8. Position" rows="2" value="<?php echo $position8 ?>" >
            <br>
            <input class="form-control" id="position9" name="Position9" type="text" placeholder="9. Position" rows="2" value="<?php echo $position9 ?>" >
            <br>
            <input class="form-control" id="position10" name="Position10" type="text" placeholder="10. Position" rows="2" value="<?php echo $position10 ?>" >
            </div>
            </div>
          <!-- /.box -->
            </div>
        </div>
        </div>
        </section>




          <button type="submit" class="btn btn-info btn-block" name="save" value="save">Save</button>  
          <button type="submit" class="btn btn-danger btn-block" name="back" value="back">Cancel</button>

        </form>
        </div><!-- /.content -->


      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 3.0
        </div>
        <strong>Inhinyera</a></strong> Membership Management System
      </footer>


    </div><!-- ./wrapper -->

    
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url().'assets/plugins/select2/select2.full.min.js'?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.date.extensions.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.extensions.js'?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url().'assets/moment.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url().'assets/plugins/colorpicker/bootstrap-colorpicker.min.js'?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker birthday
   // $('#birthday').datepicker({
    //  autoclose: true
  //  });

     //Date picker leadership
  //  $('#datepickerleadership').datepicker({
  //    autoclose: true
  //  });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
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
