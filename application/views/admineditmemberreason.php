
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inhinyera | Edit Member Reason</title>

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
                       $reason = "";
                       $caseexplain = "";

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
                          $reason = $row ->reason;
                          $caseexplain = $row->caseexplain;

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
            <li><a href="<?php echo site_url().'/managememberController/admineditUserleadership/'.$row->studentID?>"><i class="fa fa-fire"></i> Leadership Involvement</a></li>
            <li><a href="<?php echo site_url().'/managememberController/admineditUsercase/'.$row->studentID?>"><i class="fa fa-balance-scale"></i> Disciplinary Case</a></li>
            <li class="active"><a href="<?php echo site_url().'/managememberController/admineditUserreason/'.$row->studentID?>"><i class="fa fa-info-circle"></i> Reason for joining</a></li>
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
            <small>Edit Member Reason for Joining Inhinyera</small>
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
           
              <div class="form-group">
                  <label>Reason for joining Inhinyera (minimum of 200 words):</label>
                  <textarea id="reason" name="reason" class="form-control" rows="3" placeholder="<?php echo $reason ?>" value="<?php echo $reason ?>"></textarea>
                </div>
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
