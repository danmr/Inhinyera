
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inhinyera | Edit Member Leadership Details</title>

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
       <a href="<?php echo site_url().'/homeNavBarController/home'?>"" class="logo">
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

            <li><a id="clockbox"></a>
              </li>
            <li><a href="<?php echo site_url().'/homeNavBarController/homeadmin'?>">Dashboard</a></li>
            
          </ul>
        </div>
        </nav>
      </header>

                  <?php


                      $venue = null;
                      $venue2 = null;
                      $venue3 = null;
                      $venue4 = null;
                      $venue5 = null;
                      $venue6 = null;
                      $venue7 = null;
                      $venue8 = null;
                      $venue9 = null;
                      $venue10 = null;

                      $date = null;
                      $date2 = null;
                      $date3 = null;
                      $date4 = null;
                      $date5 = null;
                      $date6 = null;
                      $date7 = null;
                      $date8 = null;
                      $date9 = null;
                      $date10 = null;

                      $activity = null;
                      $activity2 = null;
                      $activity3 = null;
                      $activity4 = null;
                      $activity5 = null;
                      $activity6 = null;
                      $activity7 = null;
                      $activity8 = null;
                      $activity9 = null;
                      $activity10 = null;


                       
                                            
                       if($data->num_rows() != 0){
                          $row = $data->row();
                          $studentID = $row->studentID;

                        $venue = $row ->venue;
                        $venue2 = $row ->venue2;
                        $venue3 = $row ->venue3;
                        $venue4 = $row ->venue4;
                        $venue5 = $row ->venue5;
                        $venue6 = $row ->venue6;
                        $venue7 = $row ->venue7;
                        $venue8 = $row ->venue8;
                        $venue9 = $row ->venue9;
                        $venue10 = $row ->venue10;

                        $date = $row ->date;
                        $date2 = $row ->date2;
                        $date3 = $row ->date3;
                        $date4 = $row ->date4;
                        $date5 = $row ->date5;
                        $date6 = $row ->date6;
                        $date7 = $row ->date7;
                        $date8 = $row ->date8;
                        $date9 = $row ->date9;
                        $date10 = $row ->date10;

                        $activity = $row ->activity;
                        $activity2 = $row ->activity2;
                        $activity3 = $row ->activity3;
                        $activity4 = $row ->activity4;
                        $activity5 = $row ->activity5;
                        $activity6 = $row ->activity6;
                        $activity7 = $row ->activity7;
                        $activity8 = $row ->activity8;
                        $activity9 = $row ->activity9;
                        $activity10 = $row ->activity10;                        
                         
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
            <li><a href="<?php echo site_url().'/managememberController/admineditUserorg/'.$row->studentID?>"><i class="fa fa-group"></i> Organization Affiliated</a></li>
            <li class="active"><a href="<?php echo site_url().'/managememberController/admineditUserleadership/'.$row->studentID?>"><i class="fa fa-fire"></i> Leadership Involvement</a></li>
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
            <small>Edit Elementary Education Details </small>
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

        <section id="leadership">
           <div class="row">
             <div class="col-md-12">

              
              <div class="box box-default">
               <div class="box-header with-border">
                  <i class="fa fa-fire"></i>

                   <h3 class="box-title">Leadership Involvement</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-xs-3" id='TextBoxesGroupleadershipactivity'>
              <div id="TestBoxActivity">
              <label for="activity">Activity</label>
              <input class="form-control" id="activity" name="activity" type="text" placeholder="1. Activity" rows="2" value="<?php echo $activity ?>">
              <br>
              <input class="form-control" id="activity2" name="activity2" type="text" placeholder="2. Activity" rows="2" value="<?php echo $activity2 ?>">
              <br>
              <input class="form-control" id="activity3" name="activity3" type="text" placeholder="3. Activity" rows="2" value="<?php echo $activity3 ?>">
              <br>
              <input class="form-control" id="activity4" name="activity4" type="text" placeholder="4. Activity" rows="2" value="<?php echo $activity4 ?>">
              <br>
              <input class="form-control" id="activity5" name="activity5" type="text" placeholder="5. Activity" rows="2" value="<?php echo $activity5 ?>">
              <br>
              <input class="form-control" id="activity6" name="activity6" type="text" placeholder="6. Activity" rows="2" value="<?php echo $activity6 ?>">
              <br>
              <input class="form-control" id="activity7" name="activity7" type="text" placeholder="7. Activity" rows="2" value="<?php echo $activity7 ?>">
              <br>
              <input class="form-control" id="activity8" name="activity8" type="text" placeholder="8. Activity" rows="2" value="<?php echo $activity8 ?>">
              <br>
              <input class="form-control" id="activity9" name="activity9" type="text" placeholder="9. Activity" rows="2" value="<?php echo $activity9 ?>">
              <br>
              <input class="form-control" id="activity10" name="activity10" type="text" placeholder="10. Activity" rows="2" value="<?php echo $activity10 ?>">
              </div>
              </div>
              <div class="col-xs-4" id='TextBoxesGroupleadershipvenue'>
              <div id="TestBoxVenue">
              <label for="venue">Venue</label>
              <input class="form-control" id="venue" name="venue" type="text" placeholder="1. venue" rows="2" value="<?php echo $venue ?>">
              <br>
              <input class="form-control" id="venue2" name="venue2" type="text" placeholder="2. venue" rows="2" value="<?php echo $venue2 ?>">
              <br>
              <input class="form-control" id="venue3" name="venue3" type="text" placeholder="3. venue" rows="2" value="<?php echo $venue3 ?>">
              <br>
              <input class="form-control" id="venue4" name="venue4" type="text" placeholder="4. venue" rows="2" value="<?php echo $venue4 ?>">
              <br>
              <input class="form-control" id="venue5" name="venue5" type="text" placeholder="5. venue" rows="2" value="<?php echo $venue5 ?>">
              <br>
              <input class="form-control" id="venue6" name="venue6" type="text" placeholder="6. venue" rows="2" value="<?php echo $venue6 ?>">
              <br>
              <input class="form-control" id="venue7" name="venue7" type="text" placeholder="7. venue" rows="2" value="<?php echo $venue7 ?>">
              <br>
              <input class="form-control" id="venue8" name="venue8" type="text" placeholder="8. venue" rows="2" value="<?php echo $venue8 ?>">
              <br>
              <input class="form-control" id="venue9" name="venue9" type="text" placeholder="9. venue" rows="2" value="<?php echo $venue9 ?>">
              <br>
              <input class="form-control" id="venue10" name="venue10" type="text" placeholder="10. venue" rows="2" value="<?php echo $venue10 ?>">
              
              </div>
              </div>
              <div class="col-xs-4" id='TextBoxesGroupleadershipdate'>
              <div id="TextBoxDate">
                <label>Date</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="date" id="date" rows="2" value="<?php echo $date ?>" placeholder="00/00/0000">
                </div>
                <br>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="date2" id="date2" rows="2" value="<?php echo $date2 ?>" placeholder="00/00/0000">
                </div>
                <br>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="date3" id="date3" rows="2" value="<?php echo $date3 ?>" placeholder="00/00/0000">
                </div>
                <br>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="date4" id="date4" rows="2" value="<?php echo $date4 ?>" placeholder="00/00/0000">
                </div>
                <br>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="date5" id="date5" rows="2" value="<?php echo $date5 ?>" placeholder="00/00/0000">
                </div>
                <br>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="date6" id="date6" rows="2" value="<?php echo $date6 ?>" placeholder="00/00/0000">
                </div>
                <br>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="date7" id="date7" rows="2" value="<?php echo $date7 ?>" placeholder="00/00/0000">
                </div>
                <br>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="dat8e" id="date8" rows="2" value="<?php echo $date8 ?>" placeholder="00/00/0000">
                </div>
                <br>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="date9" id="date9" rows="2" value="<?php echo $date9 ?>" placeholder="00/00/0000">
                </div>
                <br>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="date10" id="date10" rows="2" value="<?php echo $date10 ?>" placeholder="00/00/0000">
                </div>
                <br>
                <!-- /.input group -->
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
