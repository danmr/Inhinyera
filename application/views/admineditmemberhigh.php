
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inhinyera | Edit Member High School Details</title>

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


                      $highschool = null;
                      $achievementhigh = null;
                      $achievementhigh2 = null;
                      $achievementhigh3 = null;
                      $achievementhigh4 = null;
                      $achievementhigh5 = null;
                      $achievementhigh6 = null;
                      $achievementhigh7 = null;
                      $achievementhigh8 = null;
                      $achievementhigh9 = null;
                      $achievementhigh10 = null;

                       
                                            
                       if($data->num_rows() != 0){
                          $row = $data->row();
                          $studentID = $row->studentID;

                        $highschool = $row ->highschool;
                        $achievementhigh = $row ->achievementhigh;
                        $achievementhigh2 = $row ->achievementhigh2;
                        $achievementhigh3 = $row ->achievementhigh3;
                        $achievementhigh4 = $row ->achievementhigh4;
                        $achievementhigh5 = $row ->achievementhigh5;
                        $achievementhigh6 = $row ->achievementhigh6;
                        $achievementhigh7 = $row ->achievementhigh7;
                        $achievementhigh8 = $row ->achievementhigh8;
                        $achievementhigh9 = $row ->achievementhigh9;
                        $achievementhigh10 = $row ->achievementhigh10;


                         
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
            <li class="treeview active" id="scrollspy-components">
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
            <small>Edit High School Education Details </small>
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
                  <i class="fa fa-graduation-cap"></i>

                   <h3 class="box-title">High School Education</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-xs-8">
            <section id="elementary">
            <br>
            <label for=highschool>High School Attended</label>
            <input class="form-control" id="highschool" name="highschool" type="text" rows="2" placeholder="High School" >
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-xs-6" id='TextBoxesGroupHighschool'>
            <div id="TextBoxHighAwards">
            <label for=achievementhigh>Awards/Honors Received</label>
            <input class="form-control" id="achievementhigh" name="achievementhigh" type="text" placeholder="1. High School Achievement" rows="2" value="<?php echo $achievementhigh ?>">
            <input class="form-control" id="achievementhigh2" name="achievementhigh2" type="text" placeholder="2. High School Achievement" rows="2" value="<?php echo $achievementhigh2 ?>">
            <input class="form-control" id="achievementhigh3" name="achievementhigh3" type="text" placeholder="3. High School Achievement" rows="2" value="<?php echo $achievementhigh3 ?>">
            <input class="form-control" id="achievementhigh4" name="achievementhigh4" type="text" placeholder="4. High School Achievement" rows="2" value="<?php echo $achievementhigh4 ?>">
            </div>
            <input class="form-control" id="achievementhigh5" name="achievementhigh5" type="text" placeholder="5. High School Achievement" rows="2" value="<?php echo $achievementhigh5 ?>">
            <input class="form-control" id="achievementhigh6" name="achievementhigh6" type="text" placeholder="6. high School Achievement" rows="2" value="<?php echo $achievementhigh6 ?>">
            <input class="form-control" id="achievementhigh7" name="achievementhigh7" type="text" placeholder="7. High School Achievement" rows="2" value="<?php echo $achievementhigh7 ?>">
            <input class="form-control" id="achievementhigh8" name="achievementhigh8" type="text" placeholder="8. high School Achievement" rows="2" value="<?php echo $achievementhigh8 ?>">
            <input class="form-control" id="achievementhigh9" name="achievementhigh9" type="text" placeholder="9. High School Achievement" rows="2" value="<?php echo $achievementhigh9 ?>" >
            <input class="form-control" id="achievementhigh10" name="achievementhigh10" type="text" placeholder="10. high School Achievement" rows="2" value="<?php echo $achievementhigh10 ?>">
            <br>
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
