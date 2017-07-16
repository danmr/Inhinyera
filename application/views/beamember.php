
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inhinyera | Be a Member</title>

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
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">

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
            
              <li><a href="<?php echo base_url()?>">Log In</a></li>
            </ul>
          </div>
        </nav>
      </header>
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
                <li><a href="#elementary"><i class="fa fa-circle-o"></i> Elementary</a></li>
                <li><a href="#highschool"><i class="fa fa-circle-o"></i> Highschool</a></li>
                <li><a href="#college"><i class="fa fa-circle-o"></i> College</a></li>
              </ul>
            </li>
            <li><a href="#other"><i class="fa fa-trophy"></i> Awards/Recognition</a></li>
            <li><a href="#organization"><i class="fa fa-group"></i> Organization Affiliated</a></li>
            <li><a href="#lead"><i class="fa fa-fire"></i> Leadership Involvement</a></li>
            <li><a href="#case"><i class="fa fa-balance-scale"></i> Disciplinary Case</a></li>
            <li><a href="#reason"><i class="fa fa-info-circle"></i> Reason for joining</a></li>
          </ul>
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <h1>
            Inhinyera
            <small>Membership Form</small>
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
            <div class="col-xs-2">
            <label for=schoolyear>School Year</label><br>
            <select name="schoolyear" class="form-control" id="schoolyear">
              <?php foreach($query->result() as $schoolyear) { ?>
              <option value="<?php echo $schoolyear->schoolyear ?>"><?php echo $schoolyear->schoolyear ?></option>
              <?php } ?>
            </select>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="col-xs-4">
            <label for=username>Student Number</label>
            <input class="form-control" id="studentid" name="studentid" type="text" placeholder="Enter Student Number" required>
            </div>
            <div class="col-xs-4">
            <label for=program>Program</label><br>
            <select name="program" class="form-control" id="program" required>
              <option value="">Program</option>
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
            <input class="form-control" id="fname" name="firstname" type="text" placeholder="Enter First name" >
            </div>
            </section>
            <div class="col-xs-4">
            <label for=mname>Middle Name</label>
            <input class="form-control" id="mname" name="middlename" type="text" placeholder="Enter Middle name">
            </div>
            <div class="col-xs-4">
            <label for=lname>Last Name</label>
            <input class="form-control" id="lname" name="lastname" type="text" placeholder="Enter Last name" >
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
                  <input type="date" class="form-control pull-right" id="birthday" name="birthday" placeholder="MM/DD/YYYY">
            </div>
            </div>
            <div class="col-xs-8">
            <label for=birthplace>Birth Place</label>
            <input class="form-control" id="birthplace" name="birthplace" type="text" placeholder="Birth Place" >
            </div>
            <br>
            <br>
            <br>
            <br>
            <section id="address">
            <div class="col-xs-12">
            <label for=completeaddress>Complete Address (Metro Manila)</label>
            <input class="form-control" id="completeaddress" name="completeaddress" type="text" placeholder="(House Number, Street, Brgy, City)" >
            </div>
            <br>
            <br>
            <br>
            <div class="col-xs-12">
            <label for=outsideaddress>Address (Outside of Metro Manila, if Applicable)</label>
            <input class="form-control" id="outsideaddress" name="outsideaddress" type="text" placeholder="(House Number, Street, Brgy, City)" >
            </div>
            </section>
            <br>
            <br>
            <br>
            <br>
            <section id="parents">
            <div class="col-xs-6">
            <label for=fathername>Father's Name</label>
            <input class="form-control" id="fathername" name="fathername" type="text" placeholder="Father's Name (Firstname Surname)" >
            </div>
            <div class="col-xs-6">
            <label for=>Occupation</label>
            <input class="form-control" id="fatheroccupation" name="fatheroccupation" type="text" placeholder="Father's Occupation" >
            </div>
            <br>
            <br>
            <br>
            <div class="col-xs-6">
            <label for=mothername>Mother's Name</label>
            <input class="form-control" id="mothername" name="mothername" type="text" placeholder="Mother's Name (Firstname Surname)" >
            </div>
            <div class="col-xs-6">
            <label for=motheroccupation>Occupation</label>
            <input class="form-control" id="motheroccupaton" name="motheroccupation" type="text" placeholder="Mother's Occupation" >
            </div>
            </section>
            <br>
            <br>
            <br>
            <br>
            <section id="contactsection">
            <div class="col-xs-6">
            <label for=email>Email Address</label>
            <input class="form-control" id="email" name="email" type="email" placeholder="name@domain.com">
            </div>
            <div class="col-xs-6">
            <label for=contact>Contact Number</label>
            <input class="form-control" id="contact" name="contact" type="text" placeholder="090000000000">
            </div>
            </section>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
        </section>

         <div class="row">
              <div class="col-md-6">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-graduation-cap"></i>

                      <h3 class="box-title">Elementary</h3>
                    </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-xs-12">
            <section id="elementary">
            <label for=elementary>Elementary School Attended</label>
            <input class="form-control" id="elementary" name="elementary" type="text" rows="2" placeholder="Elementary" >
            </div>
            <br>
            <br>
            <br>
            <div class="col-xs-12" id='TextBoxesGroupElementary'>
            <div id="TextBoxElemAwards">
            <label for=achievementelementary>Awards/Honors Received</label>
            <input class="form-control" id="achievementelementary" name="achievementelementary" type="text" placeholder="Elementary Achievements" rows="2" >
            </div>
            </div>
            </section>

              <!--ELEMENTARY ACHIEVEMENTS-->
                  <script type="text/javascript" src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>""></script>
                  <script type="text/javascript">

                  $(document).ready(function(){

                    var counter = 2;
                      
                    $("#elemaddButton").click(function () {
                          
                    if(counter>6){
                        alert("Maximum of 6 Achievements");
                        return false;
                    }   
                      
                    var newTextBoxElemAwards = $(document.createElement('div'))
                       .attr("id", 'TextBoxElemAwards' + counter);
                          
                    newTextBoxElemAwards.after().html('<br>'+ '<input class="form-control" placeholder="Elementary Achievements" type="text" name="achievementelementary' + counter + 
                        '" id="textbox' + counter + '" value=""><br>');
                        
                    newTextBoxElemAwards.appendTo("#TextBoxesGroupElementary");

                          
                    counter++;
                     });

                     $("#elemremoveButton").click(function () {
                    if(counter==2){
                        return false;
                       }   
                      
                    counter--;
                        
                      $("#TextBoxElemAwards" + counter).remove();
                        
                     });;
                    });
                 </script>
        <!--ELEMENTARY ACHIEVEMENTS-->
        
            <br>
            <br>
            <br>
            <div class="col-xs-10">
            <input type='button' class="btn btn-default" value='+' id='elemaddButton'>
            <input type='button' class="btn btn-default" value='-' id='elemremoveButton'>
            </div>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>


        <div class="col-md-6">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-graduation-cap"></i>

                      <h3 class="box-title">High School</h3>
                    </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-xs-12">
            <section id="highschool">
            <label for=highschool>High School Attended</label>
            <input class="form-control" id="highschool" name="highschool" type="text" rows="2" placeholder="High School" >
            </div>
            <br>
            <br>
            <br>
            <div class="col-xs-12" id='TextBoxesGrouphighschool'>
            <div id="TextBoxhighschoolAwards">
            <label for=achievementhighschool>Awards/Honors Received</label>
            <input class="form-control" id="achievementhigh" name="achievementhigh" type="text" placeholder="High School Achievements" rows="2" >
            </div>
            </div>
            </section>

              <!--highschool ACHIEVEMENTS-->
                  <script type="text/javascript" src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>""></script>
                  <script type="text/javascript">

                  $(document).ready(function(){

                    var counter = 2;
                      
                    $("#highschooladdButton").click(function () {
                          
                    if(counter>6){
                        alert("Maximum of 6 Achievements");
                        return false;
                    }   
                      
                    var newTextBoxhighschoolAwards = $(document.createElement('div'))
                       .attr("id", 'TextBoxhighschoolAwards' + counter);
                          
                    newTextBoxhighschoolAwards.after().html('<br>'+ '<input class="form-control" placeholder="High School Achievements" type="text" name="achievementhigh' + counter + 
                        '" id="textbox' + counter + '" value=""><br>');
                        
                    newTextBoxhighschoolAwards.appendTo("#TextBoxesGrouphighschool");

                          
                    counter++;
                     });

                     $("#highschoolremoveButton").click(function () {
                    if(counter==2){
                        return false;
                       }   
                      
                    counter--;
                        
                      $("#TextBoxhighschoolAwards" + counter).remove();
                        
                     });;
                    });
                 </script>
        <!--Highschool ACHIEVEMENTS-->
        
            <br>
            <br>
            <br>
            <div class="col-xs-10">
            <input type='button' class="btn btn-default" value='+' id='highschooladdButton'>
            <input type='button' class="btn btn-default" value='-' id='highschoolremoveButton'>
            </div>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>


         <div class="row">
              <div class="col-md-6">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-graduation-cap"></i>

                      <h3 class="box-title">College</h3>
                    </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-xs-12">
            <section id="college">
            <label for=elementary>College Attended</label>
            <input class="form-control" id="college" name="college" type="text" rows="2" placeholder="College" >
            </div>
            <br>
            <br>
            <br>
            <div class="col-xs-12" id='TextBoxesGroupcollege'>
            <div id="TextBoxcollegeAwards">
            <label for=achievementcollege>Awards/Honors Received</label>
            <input class="form-control" id="achievementcollege" name="achievementcollege" type="text" placeholder="College Achievements" rows="2" >
            </div>
            </div>
            </section>

        <!--College ACHIEVEMENTS-->
                  <script type="text/javascript" src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>""></script>
                  <script type="text/javascript">

                  $(document).ready(function(){

                    var counter = 2;
                      
                    $("#collegeaddButton").click(function () {
                          
                    if(counter>10){
                        alert("Maximum of 10 Achievements");
                        return false;
                    }   
                      
                    var newTextBoxcollegeAwards = $(document.createElement('div'))
                       .attr("id", 'TextBoxcollegeAwards' + counter);
                          
                    newTextBoxcollegeAwards.after().html('<br>'+ '<input class="form-control" placeholder="College Achievements" type="text" name="achievementcollege' + counter + 
                        '" id="textbox' + counter + '" value=""><br>');
                        
                    newTextBoxcollegeAwards.appendTo("#TextBoxesGroupcollege");

                          
                    counter++;
                     });

                     $("#collegeremoveButton").click(function () {
                    if(counter==2){
                        return false;
                       }   
                      
                    counter--;
                        
                      $("#TextBoxcollegeAwards" + counter).remove();
                        
                     });;
                    });
                 </script>
        <!--college ACHIEVEMENTS-->
        
            <br>
            <br>
            <br>
            <div class="col-xs-10">
            <input type='button' class="btn btn-default" value='+' id='collegeaddButton'>
            <input type='button' class="btn btn-default" value='-' id='collegeremoveButton'>
            </div>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>


        <div class="col-md-6">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-trophy"></i>

                      <h3 class="box-title">Other Awards/Recognition</h3>
                    </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-xs-12" id='TextBoxesGroupother'>
            <div id="TextBoxotherAwards">
            <section id="other">
            <label for=otheraward>Awards/Recognition</label>
            <input class="form-control" id="otheraward" name="otheraward" type="text" placeholder="Awards/Recognition Outside" rows="2" >
            </div>
            </div>
            </section>

              <!--other ACHIEVEMENTS-->
                  <script type="text/javascript" src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>""></script>
                  <script type="text/javascript">

                  $(document).ready(function(){

                    var counter = 2;
                      
                    $("#otheraddButton").click(function () {
                          
                    if(counter>10){
                        alert("Maximum of 10 Achievements");
                        return false;
                    }   
                      
                    var newTextBoxotherAwards = $(document.createElement('div'))
                       .attr("id", 'TextBoxotherAwards' + counter);
                          
                    newTextBoxotherAwards.after().html('<br>'+ '<input class="form-control" placeholder="Awards/Recognition Outside" type="text" name="otheraward' + counter + 
                        '" id="textbox' + counter + '" value=""><br>');
                        
                    newTextBoxotherAwards.appendTo("#TextBoxesGroupother");

                          
                    counter++;
                     });

                     $("#otherremoveButton").click(function () {
                    if(counter==2){
                        return false;
                       }   
                      
                    counter--;
                        
                      $("#TextBoxotherAwards" + counter).remove();
                        
                     });;
                    });
                 </script>
        <!--other ACHIEVEMENTS-->
        
            <br>
            <br>
            <br>
            <div class="col-xs-10">
            <input type='button' class="btn btn-default" value='+' id='otheraddButton'>
            <input type='button' class="btn btn-default" value='-' id='otherremoveButton'>
            </div>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>


        <div class="row">
        <div class="col-md-12">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-group"></i>

                      <h3 class="box-title">Organization Affiliated</h3>
                    </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-xs-6" id='TextBoxesGrouporganization'>
            <div id="TextBoxorganization">
            <section id="organization">
            <label for=organization>Organization</label>
            <input class="form-control" id="organization" name="organization" type="text" placeholder="Organization" rows="2" >
            </div>
            </div>
            <div class="col-xs-6" id='TextBoxesGrouporganizationposition'>
            <div id="TextBoxorganizationposition">
            <label for=position>Position</label>
            <input class="form-control" id="position" name="position" type="text" placeholder="Position" rows="2" >
            </div>
            </div>

            </section>

              <!--other ACHIEVEMENTS-->
                  <script type="text/javascript" src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>""></script>
                  <script type="text/javascript">

                  $(document).ready(function(){

                    var counter = 2;
                      
                    $("#orgaddButton").click(function () {
                          
                    if(counter>10){
                        alert("Maximum of 10 Organizations");
                        return false;
                    }   
                      
                    var newTextBoxorganization = $(document.createElement('div'))
                       .attr("id", 'TextBoxorganization' + counter);

                    var newTextBoxorganizationposition = $(document.createElement('div'))
                       .attr("id", 'TextBoxorganizationposition' + counter);
                          
                    newTextBoxorganization.after().html('<br>'+ '<input class="form-control" placeholder="Organization" type="text" name="organization' + counter + 
                        '" id="textbox' + counter + '" value=""><br>');
                        
                    newTextBoxorganization.appendTo("#TextBoxesGrouporganization");

                    newTextBoxorganizationposition.after().html('<br>'+ '<input class="form-control" placeholder="Position" type="text" name="position' + counter + 
                        '" id="textbox' + counter + '" value=""><br>');
                        
                    newTextBoxorganizationposition.appendTo("#TextBoxesGrouporganizationposition");

                          
                    counter++;
                     });

                     $("#orgremoveButton").click(function () {
                    if(counter==2){
                        return false;
                       }   
                      
                    counter--;
                        
                      $("#TextBoxorganization" + counter).remove();
                      $("#TextBoxorganizationposition" + counter).remove();
                        
                     });;
                    });
                 </script>
        <!--other ACHIEVEMENTS-->
        
            <br>
            <br>
            <br>
            <div class="col-xs-10">
            <input type='button' class="btn btn-default" value='+' id='orgaddButton'>
            <input type='button' class="btn btn-default" value='-' id='orgremoveButton'>
            </div>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>


        <div class="row">
        <div class="col-md-12">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-fire"></i>

                      <h3 class="box-title">Leadership Activities Involvement</h3>
                    </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-xs-4" id='TextBoxesGroupleadershipactivity'>
            <div id="TextBoxoleadershipactivity">
            <section id="leadership">
            <label for=leadershipactivity>Activity</label>
            <input class="form-control" id="activity" name="activity" type="text" placeholder="Activity" rows="2" >
            </div>
            </div>
            <div class="col-xs-4" id='TextBoxesGroupleadershipvenue'>
            <div id="TextBoxleadershipvenue">
            <label for=leadershipvenue>Venue</label>
            <input class="form-control" id="venue" name="venue" type="text" placeholder="Venue" rows="2" >
            </div>
            </div>
            <div class="form-group" id='TextBoxesGroupleadershipdate'>
              <div id="TextBoxleadershipdate">
                <label>Date</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="date" id="date" rows="2">
                </div>
                <!-- /.input group -->
              </div>

            </section>

              <!--other ACHIEVEMENTS-->
                  <script type="text/javascript" src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>""></script>
                  <script type="text/javascript">

                  $(document).ready(function(){

                    var counter = 2;
                      
                    $("#leadershipaddButton").click(function () {
                          
                    if(counter>10){
                        alert("Maximum of 10 Leadership Activity");
                        return false;
                    }   
                      
                    var newTextBoxleadershipactivity = $(document.createElement('div'))
                       .attr("id", 'TextBoxleadershipactivity' + counter);

                    var newTextBoxleadershipvenue = $(document.createElement('div'))
                       .attr("id", 'TextBoxleadershipvenue' + counter);

                    var newTextBoxleadershipdate = $(document.createElement('div'))
                       .attr("id", 'TextBoxleadershipdate' + counter);
                          
                    newTextBoxleadershipactivity.after().html('<br>'+ '<input class="form-control" placeholder="Activity" type="text" name="activity' + counter + 
                        '" id="textbox' + counter + '" value=""><br>');
                        
                    newTextBoxleadershipactivity.appendTo("#TextBoxesGroupleadershipactivity");

                    newTextBoxleadershipvenue.after().html('<br>'+ '<input class="form-control" placeholder="Venue" type="text" name="venue' + counter + 
                        '" id="textbox' + counter + '" value=""><br>');
                        
                    newTextBoxleadershipvenue.appendTo("#TextBoxesGroupleadershipvenue");

                    newTextBoxleadershipdate.after().html('<br>'+ '<div class="input-group date">' + ' <div class="input-group-addon">' + '<i class="fa fa-calendar"></i>' + ' </div>' + '<input class="form-control" type="date" name="date' + counter + 
                        '" id="date' + counter + '" value=""> </div><br>');
                        
                    newTextBoxleadershipdate.appendTo("#TextBoxesGroupleadershipdate");

                          
                    counter++;
                     });

                     $("#leadershipremoveButton").click(function () {
                    if(counter==2){
                        return false;
                       }   
                      
                    counter--;
                        
                      $("#TextBoxleadershipactivity" + counter).remove();
                      $("#TextBoxleadershipvenue" + counter).remove();
                      $("#TextBoxleadershipdate" + counter).remove();
                        
                     });;
                    });
                 </script>
        <!--other ACHIEVEMENTS-->
        
            <div class="col-xs-12">
            <input type='button' class="btn btn-default" value='+' id='leadershipaddButton'>
            <input type='button' class="btn btn-default" value='-' id='leadershipremoveButton'>
            </div>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
        </div>


        <div class="row">
        <section id="case">
        <div class="col-md-12">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-balance-scale"></i>

                      <h3 class="box-title">Disciplinary Case</h3>
                    </div>
            <!-- /.box-header -->
            <div class="box-body">

             <!-- textarea -->
                <div class="form-group">
                  <label>Have you been subjected to any disciplinary case at T.I.P. If Yes, please explain:</label>
                  <textarea id="caseexplain" name="caseexplain" class="form-control" rows="3" placeholder="Explanation ..."></textarea>
                </div>
         
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </section>
        </div>

        <div class="row">
        <section id="reason">
        <div class="col-md-12">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-info-circle"></i>

                      <h3 class="box-title">Reason for joining Inhinyera</h3>
                    </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- textarea -->
                <div class="form-group">
                  <label>Reason for joining Inhinyera (minimum of 200 words):</label>
                  <textarea id="reason" name="reason" class="form-control" rows="3" placeholder="Reason ..."></textarea>
                </div>
               
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </section>
        </div>
    

          <button type="submit" class="btn btn-info btn-block" name="submit" value="submit">Submit</button>  
          <button type="reset" class="btn btn-danger btn-block">Reset</button>

        </form>
        </div><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <?php
        include("footer.php");
        ?>
      </footer>


    </div><!-- ./wrapper -->
<?php
  include("allscripts.php");
?>



  </body>
</html>
