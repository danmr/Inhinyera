
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inhinyera | Profile</title>
 
 <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php
  include("alllinks.php");
  ?>

</head>
<body class="hold-transition skin-black-light layout-top-nav">
<div class="wrapper">

  <header class="main-header">

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo site_url().'/homeNavBarController/homeadmin'?>"" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="<?php echo base_url().'assets/img/inhinyerawhitelogo.png'?>"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="<?php echo base_url().'assets/img/logotopnav.png'?>"></span>
          </a>
          
         
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
          <ul class="nav navbar-nav">
           
            
          </ul>
        </div>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li><a id="clockbox"></a>
            </li>
            <li><a href="<?php echo site_url().'/homeNavBarController/homeadmin'?>">Go Back</a></li>
            

          </ul>
        </div>
      

        
        <!-- /.navbar-custom-menu -->
       </div>
      <!-- /.container-fluid -->

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

                      $elementary = null;
                      $achievementelementary = null;
                      $achievementelementary2 = null;
                      $achievementelementary3 = null;
                      $achievementelementary4 = null;
                      $achievementelementary5 = null;
                      $achievementelementary6 = null;
                      $achievementelementary7 = null;
                      $achievementelementary8 = null;
                      $achievementelementary9 = null;
                      $achievementelementary10= null;

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

                      $college = null;
                      $achievementcollege = null;
                      $achievementcollege2 = null;
                      $achievementcollege3 = null;
                      $achievementcollege4 = null;
                      $achievementcollege5 = null;
                      $achievementcollege6 = null;
                      $achievementcollege7 = null;
                      $achievementcollege8 = null;
                      $achievementcollege9 = null;
                      $achievementcollege10 = null;

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

                      $otheraward = null;
                      $otheraward2 = null;
                      $otheraward3 = null;
                      $otheraward4 = null;
                      $otheraward5 = null;
                      $otheraward6 = null;
                      $otheraward7 = null;
                      $otheraward8 = null;
                      $otheraward9 = null;
                      $otheraward10 = null;

                       
                                            
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
                          $approvalstatus = $row->approvalstatus;
                          $approvalstatusdatetime = $row->approvalstatusdatetime;
                          $date_connected = $row->date_connected;
                          $picture = $row->picture;
                        }

                        else if($data2->num_rows() != 0){



                          $elementary = $row ->elementary;
                          $achievementelementary = $row ->achievementelementary;
                          $achievementelementary2 = $row ->achievementelementary2;
                          $achievementelementary3 = $row ->achievementelementary3;
                          $achievementelementary4 = $row ->achievementelementary4;
                          $achievementelementary5 = $row ->achievementelementary5;
                          $achievementelementary6 = $row ->achievementelementary6;
                        }

                        else if($data4->num_rows() !=0) {
                          $college = $row ->college;
                          $achievementcollege = $row ->achievementcollege;
                          $achievementcollege2 = $row ->achievementcollege2;
                          $achievementcollege3 = $row ->achievementcollege3;
                          $achievementcollege4 = $row ->achievementcollege4;
                          $achievementcollege5 = $row ->achievementcollege5;
                          $achievementcollege6 = $row ->achievementcollege6;
                          $achievementcollege7 = $row ->achievementcollege7;
                          $achievementcollege8 = $row ->achievementcollege8;
                          $achievementcollege9 = $row ->achievementcollege9;
                          $achievementcollege10 = $row ->achievementcollege10;
                        }

                        else if($data3->num_rows() !=0) {

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

                        else if($data5->num_rows() !=0) {
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

                      else if($data6->num_rows() !=0) {

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

                      else if($data7->num_rows() !=0) {

                        $otheraward = $row ->otheraward;
                        $otheraward2 = $row ->otheraward2;
                        $otheraward3 = $row ->otheraward3;
                        $otheraward4 = $row ->otheraward4;
                        $otheraward5 = $row ->otheraward5;
                        $otheraward6 = $row ->otheraward6;
                        $otheraward7 = $row ->otheraward7;
                        $otheraward8 = $row ->otheraward8;
                        $otheraward9 = $row ->otheraward9;
                        $otheraward10 = $row ->otheraward10;

             
                      }
                                            
                                            
                                            
               ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     
      <!-- Content -->
    <div class="container">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
      </h1>
    </section>

  <section class="content">

    <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url().'assets/img/studentphotos/avatar5.png'?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $firstname.' '.$middlename.' '.$lastname ?></h3>

              <p class="text-muted text-center"><?php echo $approvalstatus ?> Member</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Student Number</b> <a class="pull-right"><?php echo $studentID ?></a>
                </li>
                <li class="list-group-item">
                  <b>Campus</b> <a class="pull-right"><?php echo $campus ?></a>
                </li>
                <li class="list-group-item">
                  <b>Program</b> <a class="pull-right"><?php echo $program ?></a>
                </li>
                <li class="list-group-item">
                  <b>Member Since:</b> <a class="pull-right"><?php echo $approvalstatusdatetime?></a>
                </li>
                <li class="list-group-item">
                  <b>Email Address:</b> <a class="pull-right"><?php echo $email ?></a>
                </li>
                <li class="list-group-item">
                  <b>Contact:</b> <a class="pull-right"><?php echo $contact ?></a>
                </li>
              </ul>

              <a href="<?php echo site_url().'/managememberController/admineditUser/'.$row->studentID?>" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
              <a href="<?php echo site_url().'/managememberController/admineditUser/'.$row->studentID?>" class="btn btn-default btn-block"><b>Print Profile</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
          <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#personal" data-toggle="tab">Personal Information</a></li>
              <li><a href="#Education" data-toggle="tab">Education</a></li>
              <li><a href="#Leadership" data-toggle="tab">Leadership</a></li>
              <li><a href="#Organizations" data-toggle="tab">Organizations</a></li>
              <li><a href="#Disciplinary" data-toggle="tab">Disciplinary Case</a></li>
              <li><a href="#Reason" data-toggle="tab">Reason For Joining</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="personal">

                <strong>Full Name</strong>

                <p class="text-muted">
                <?php echo $firstname.' '.$middlename.' '.$lastname ?>
                </p>

                <hr>

                <strong>Birthday | Birthplace</strong>

                <p class="text-muted">
                <?php echo $birthday ?> | <?php echo $birthplace ?>
                </p>

                <hr>

                <strong>Address (Within Metro | Outside Metro) </strong>

                <p class="text-muted">
                <?php echo $completeaddress ?> | <?php echo $outsideaddress?>
                </p>

                <hr>

                <strong>Father's Name | Occupation</strong>

                <p class="text-muted">
                <?php echo $fathername ?> | <?php echo $fatheroccupation ?>
                </p>

                <hr>
                <strong>Mother's Name | Occupation</strong>

                <p class="text-muted">
                <?php echo $mothername ?> | <?php echo $motheroccupation ?>
                </p>

                <hr>
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="Education">
               
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="Leadership">
                
                 
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="Organizations">
                
                 
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="Disciplinary">
                
                 
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="Reason">
                
                 
              </div>
              <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row -->


  </section>
  </div>
</div>
      


  <footer class="main-footer">
     <?php
        include("footer.php");
     ?>
  </footer>

  </div>
  <?php
  include("allscripts.php");
  ?>

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
</body>
</html>