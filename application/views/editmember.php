
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inhinyera | Edit Member</title>

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
            <li><a href="<?php echo site_url().'/homeNavBarController/home'?>">Dashboard</a></li>
            
          </ul>
        </div>
        </nav>
      </header>

      <?php
                       $studentID = "";
                       $firstname = "";
                       $middlename = "";
                       $lastname= "";
                       $program = "";
                       $access_role = "";
                       $campus = "";
                       $birthday = "";
                       $birthplace = "";
                       $email = "";
                       $contact = "";
                       $fathername = "";
                       $fatheroccupation= "";
                       $mothername = "";
                       $motheroccupation = "";
                       $completeaddress = "";
                       $outsideaddress = "";
                       $schoolyear = "";

                    //  $elementary = null;
                    //  $achievementelementary = null;
                   //   $achievementelementary2 = null;
                    //  $achievementelementary3 = null;
                   //   $achievementelementary4 = null;
                   //   $achievementelementary5 = null;
                   //   $achievementelementary6 = null;

                       
                                            
                       if($data->num_rows() != 0){
                          $row = $data->row();
                          $studentID = $row->studentID;
                          $firstname = $row->firstname;
                          $middlename = $row->middlename;
                          $lastname = $row->lastname;
                          $program = $row->program;
                          $access_role = $row->access_role;
                          $campus = $row->campus;
                          $birthday = $row ->birthday;
                          $birthplace = $row ->birthplace;
                          $email = $row ->email;
                          $contact = $row ->contact;
                          $fathername = $row ->fathername;
                          $mothername = $row ->mothername;
                          $motheroccupation = $row ->motheroccupation;
                          $fatheroccupation = $row ->fatheroccupation;
                          $completeaddress = $row ->completeaddress;
                          $outsideaddress = $row ->outsideaddress;
                          $schoolyear = $row ->schoolyear;

                     //     $elementary = $row ->elementary;
                      //    $achievementelementary = $row ->achievementelementary;
                     //     $achievementelementary2 = $row ->achievementelementary2;
                     //     $achievementelementary3 = $row ->achievementelementary3;
                     //     $achievementelementary4 = $row ->achievementelementary4;
                     //     $achievementelementary5 = $row ->achievementelementary5;
                     //     $achievementelementary6 = $row ->achievementelementary6;


                         
                      }
                                            
                                            
                                            
               ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <div class="sidebar" id="scrollspy">

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="nav sidebar-menu">
            <li class="header">MEMBERSHIP FORM CONTENTS</li>
           <li class="treeview" id="scrollspy-components">
              <a href="javascript:void(0)"><i class="fa fa-female"></i> Personal Information</a>
              <ul class="nav treeview-menu">
                <li><a href="#fullname"><i class="fa fa-circle-o"></i> Full Name</a></li>
                <li><a href="#address"><i class="fa fa-circle-o"></i> Address</a></li>
                <li><a href="#parents"><i class="fa fa-circle-o"></i> Parents</a></li>
                <li><a href="#contactsection"><i class="fa fa-circle-o"></i> Contact</a></li>
              </ul>
            </li>
            <li class="treeview" id="scrollspy-components">
              <a href="javascript:void(0)"><i class="fa fa-graduation-cap"></i> Education</a>
              <ul class="nav treeview-menu">
                <li><a href="<?php echo site_url().'/managememberController/editUserelem/'.$row->studentID?>"><i class="fa fa-circle-o"></i> Elementary</a></li>
                <li><a href="<?php echo site_url().'/managememberController/editUserhigh/'.$row->studentID?>"><i class="fa fa-circle-o"></i> Highschool</a></li>
                <li><a href="<?php echo site_url().'/managememberController/editUsercollege/'.$row->studentID?>"><i class="fa fa-circle-o"></i> College</a></li>
              </ul>
            </li>
            <li><a href="<?php echo site_url().'/managememberController/editUserother/'.$row->studentID?>"><i class="fa fa-trophy"></i> Awards/Recognition</a></li>
            <li><a href="<?php echo site_url().'/managememberController/editUserorg/'.$row->studentID?>"><i class="fa fa-group"></i> Organization Affiliated</a></li>
            <li><a href="<?php echo site_url().'/managememberController/editUserleadership/'.$row->studentID?>"><i class="fa fa-fire"></i> Leadership Involvement</a></li>
          </ul>
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

              
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <h1>
            <?php echo $firstname?> <?php echo $lastname ?>
            <small>Edit Member Detail</small>
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

        <section id="personalinfo">
           <div class="row">
             <div class="col-md-12">

              
              <div class="box box-default">
               <div class="box-header with-border">
                  <i class="fa fa-female"></i>

                   <h3 class="box-title">Personal Information</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-xs-10">
            <label for=schoolyear>Registered For School Year   <p class="text-red"><?php echo $schoolyear ?> </p></label><br>
            </div>
            <br>
            <br>
            <div class="col-xs-4">
            <label for=username>Student Number</label>
            <select name="studentid" class="form-control" id="studentid" required>
              <option value="<?php echo $studentID ?>"><?php echo $studentID ?></option>
            </select>
            </div>
            <div class="col-xs-4">
            <label for=program>Program</label><br>
            <select name="program" class="form-control" id="program" required>
              <option value="<?php echo $program ?>"><?php echo $program ?></option>
              <option value="Civil Engineering">Civil Engineering</option>
              <option value="Computer Engineering">Computer Engineering</option>
              <option value="Electrical Engineering">Electrical Engineering</option>
              <option value="Electronics Engineering">Electronics Engineering</option>
              <option value="Environmental & Sanitary Engineering">Environmental & Sanitary Engineering</option>
              <option value="Industrial Engineering">Industrial Engineering</option>
              <option value="Marine Engineering">Marine Engineering</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>       
            </select>
            </div>
            <div class="col-xs-4">
            <label for=campus>Campus</label><br>
            <select name="campus" class="form-control" id="campus">
              <option value="<?php echo $campus ?>"><?php echo $campus ?></option>
              <option value="Quezon City">Quezon City</option>
              <option value="Manila">Manila</option>
            </select>
            </div>
            <br>
            <br>
            <br>
            <section id="fullname">
            <div class="col-xs-4">
            <label for=fname>First Name</label>
            <input class="form-control" id="fname" name="firstname" type="text" placeholder="Enter First name" value="<?php echo $firstname ?>" >
            </div>
            </section>
            <div class="col-xs-4">
            <label for=mname>Middle Name</label>
            <input class="form-control" id="mname" name="middlename" type="text" placeholder="Enter Middle name"  value="<?php echo $middlename ?>">
            </div>
            <div class="col-xs-4">
            <label for=lname>Last Name</label>
            <input class="form-control" id="lname" name="lastname" type="text" placeholder="Enter Last name" value="<?php echo $lastname ?>">
            </div>
            <br>
            <br>
            <br>
            <div class="col-xs-4">
            <label for=birthday>Birthday</label>
            <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="birthday" name="birthday" placeholder="MM/DD/YYYY" value="<?php echo $birthday ?>">
            </div>
            </div>
            <div class="col-xs-8">
            <label for=birthplace>Birth Place</label>
            <input class="form-control" id="birthplace" name="birthplace" type="text" placeholder="Birth Place" value="<?php echo $birthplace ?>">
            </div>
            <br>
            <br>
            <br>
            <br>
            <section id="address">
            <div class="col-xs-12">
            <label for=completeaddress>Complete Address (Metro Manila)</label>
            <input class="form-control" id="completeaddress" name="completeaddress" type="text" placeholder="(House Number, Street, Brgy, City)" value="<?php echo $completeaddress ?>">
            </div>
            <br>
            <br>
            <br>
            </section>
            <div class="col-xs-12">
            <label for=outsideaddress>Address (Outside of Metro Manila, if Applicable)</label>
            <input class="form-control" id="outsideaddress" name="outsideaddress" type="text" placeholder="(House Number, Street, Brgy, City)" value="<?php echo $outsideaddress ?>">
            </div>
            <br>
            <br>
            <br>
            <br>
            <section id="parents">
            <div class="col-xs-6">
            <label for=fathername>Father's Name</label>
            <input class="form-control" id="fathername" name="fathername" type="text" placeholder="Father's Name (Firstname Surname)" value="<?php echo $fathername ?>">
            </div>
            <div class="col-xs-6">
            <label for=>Occupation</label>
            <input class="form-control" id="fatheroccupation" name="fatheroccupation" type="text" placeholder="Father's Occupation" value="<?php echo $fatheroccupation?>">
            </div>
            <br>
            <br>
            <br>
            <div class="col-xs-6">
            <label for=mothername>Mother's Name</label>
            <input class="form-control" id="mothername" name="mothername" type="text" placeholder="Mother's Name (Firstname Surname)" value="<?php echo $mothername ?>" >
            </div>
            <div class="col-xs-6">
            <label for=motheroccupation>Occupation</label>
            <input class="form-control" id="motheroccupaton" name="motheroccupation" type="text" placeholder="Mother's Occupation" value="<?php echo $motheroccupation ?>">
            </div>
            </section>
            <br>
            <br>
            <br>
            <br>
            <section id="contactsection">
            <div class="col-xs-6">
            <label for=email>Email Address</label>
            <input class="form-control" id="email" name="email" type="email" placeholder="name@domain.com" value="<?php echo $email ?>">
            </div>
            <div class="col-xs-6">
            <label for=contact>Contact Number</label>
            <input class="form-control" id="contact" name="contact" type="text" placeholder="090000000000" value="<?php echo $contact ?>">
            </div>
            </section>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
