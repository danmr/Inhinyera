<?php

class managememberController extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('userModel');
        $this->load->model('managemembersModel');
        $this->load->library('pagination');
    }
    
    // View Users Table
    
    public function index(){
        //$this->load->view('manageUser.html', $data);
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
//            $data['userID'] = $session_data['userID'];
//            $data['userName'] = $session_data['userName'];
//            $data['fName'] = $session_data['fName'];
//            $data['mName'] = $session_data['mName'];
//            $data['lName'] = $session_data['lName'];
//            $data['password'] = $session_data['password'];
//            $data['access_Type'] = $session_data['access_Type'];
//            $data['createdDate'] = $session_data['createdDate'];
              $data['studentID'] = $session_data['studentID'];
                $data['password'] = $session_data['password'];
                $data['firstname'] = $session_data['firstname'];
                $data['lastname'] = $session_data['lastname'];
                $data['middlename'] = $session_data['middlename'];
                $data['access_role'] = $session_data['access_role'];
                $data['campus'] = $session_data['campus'];
                $data['program'] = $session_data['program'];

                $studentID = $session_data['studentID'];

              
                $users = $this->managemembersModel->getData();
               
                $data['users'] = $this->managemembersModel->getUsers();  
                $data['count'] = $this->countUser();    
                $data['message'] = '';
                $data['query'] = $this->userModel->getUsers();
                

                $this->load->view("managemembers.php", $data);
          //  $this->showUsers();
            //print_r($this->session->userdata());  //<-- To check what's inside of userdate()
        }
        else{
            //If no session, redirect to login page
            redirect('loginController/index');
        }
            
        
    }

    public function registerthisschoolyearconfirm($studentID = ""){

     $data = array(
            "data" => $this->db->get_where('account_information', array('studentID' => $studentID))
        );
       
        $studentid = null;
        $schoolyear = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['schoolyear'] = $schoolyear;


        $studentid_available = $this->userModel->check_exists($studentid);
        $data['query'] = $this->userModel->getschoolyear();
                
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been Registered.');
                        $this->userModel->updatememberschoolyear($studentID, $params);
                        $this->userModel->Insertmemberslog($params);
                        redirect('beamemberController/registerthisschoolyear');
                }
             
            else{
                $this->session->set_flashdata('success', 'Member has been Registered.');
                $this->userModel->updatememberschoolyear($studentID, $params);
                $this->userModel->Insertmemberslog($params);
                redirect('beamemberController/registerthisschoolyear');
            }
        }
        else if(isset($backs)){ 
                      
             redirect('beamemberController/registerthisschoolyear', $data);


        }
            
        $this->load->view('registerthisschoolyearconfirm.php', $data);
        
    }

     public function managealumnimembers(){
        //$this->load->view('manageUser.html', $data);
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
//            $data['userID'] = $session_data['userID'];
//            $data['userName'] = $session_data['userName'];
//            $data['fName'] = $session_data['fName'];
//            $data['mName'] = $session_data['mName'];
//            $data['lName'] = $session_data['lName'];
//            $data['password'] = $session_data['password'];
//            $data['access_Type'] = $session_data['access_Type'];
//            $data['createdDate'] = $session_data['createdDate'];
              $data['studentID'] = $session_data['studentID'];
                $data['password'] = $session_data['password'];
                $data['firstname'] = $session_data['firstname'];
                $data['lastname'] = $session_data['lastname'];
                $data['middlename'] = $session_data['middlename'];
                $data['access_role'] = $session_data['access_role'];
                $data['campus'] = $session_data['campus'];
                $data['program'] = $session_data['program'];

                $studentID = $session_data['studentID'];

                $start_row = $this->uri->segment(4);
                $per_page = 6;
                 if(trim($start_row) == ""){$start_row = 0;}        
                $users = $this->managemembersModel->getData();
                $total_rows = $users;
              //  $config['base_url'] = base_url().'/index.php/managememberController/index/showUsers';
                $config['total_rows'] = $total_rows;
                $config['per_page'] = $per_page;
                $config['num_links'] = 6;
                $config['full_tag_open'] = '<div id="pagination" style="letter-spacing: 2px;">';
                $config['close_tag_open'] = '</div>';        
                $this->pagination->initialize($config);
                $data['pagination'] = $this->pagination->create_links();
                $data['users'] = $this->managemembersModel->getUserLimited($start_row, $per_page);  
                $data['count'] = $this->countUser();    
                $data['message'] = '';
                $data['query'] = $this->userModel->getUsers();
                

                $this->load->view("managealumnimembers.php", $data);
          //  $this->showUsers();
            //print_r($this->session->userdata());  //<-- To check what's inside of userdate()
        }
        else{
            //If no session, redirect to login page
            redirect('loginController/index');
        }
            
        
    }
    
    public function showUsers(){
        
        $start_row = $this->uri->segment(4);
        $per_page = 6;
        if(trim($start_row) == ""){$start_row = 0;}        
        $users = $this->managemembersModel->getData();
        $total_rows = $users;
        $config['base_url'] = base_url().'/index.php/managememberController/index/showUsers';
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['num_links'] = 6;
        $config['full_tag_open'] = '<div id="pagination" style="letter-spacing: 2px;">';
        $config['close_tag_open'] = '</div>';        
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['users'] = $this->managemembersModel->getUserLimited($start_row, $per_page);  
        $data['count'] = $this->countUser();    
        $data['message'] = '';
        $data['query'] = $this->userModel->getUsers();
        $this->load->view("managemembers.php", $data);
    }
    
    public function countUser(){
        $countStud = $this->managemembersModel->countUser();
        return $countStud->num_rows();
    }
    
    
    // Once user has been searched
    public function userSearch(){
        $this->showSearched();
    }
    protected $start_row = null;
    protected $userSearch = null;
    protected $program = null;
    protected $total_rows = null;


    public function callMe(){
        
        $this->start_row = $this->uri->segment(4);
        $this->userSearch = $this->input->post('search');
        $this->program = $this->input->post('program');
        $this->users = $this->managemembersModel->countUserSearch($this->userSearch, $this->program);
        $this->total_rows = $this->users->num_rows();
    }
    
    public function showSearched(){
        $this->callMe();
        if(trim($this->start_row) == ""){$this->start_row = 0;}        
        
        
        $config['base_url'] = base_url().'/index.php/managememberController/userSearch/showSearched/';
        $config['total_rows'] = $this->total_rows;
        $config['per_page'] = 100;
        $config['num_links'] = 20;
        $config['full_tag_open'] = '<div id="pagination" class="container voffset5" style="letter-spacing: 2px;">';
        $config['close_tag_open'] = '</div>';        
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        if(isset($this->userSearch) and ($this->userSearch!="") and isset($this->program) and ($this->program=="Choose Program")){$data['users'] = $this->managemembersModel->search_UserWithoutAccessType($this->userSearch, $this->start_row, $config['per_page']);
            $data['count'] = $this->countUserSearchWithoutAccessType($this->userSearch);
        }
        else if(isset($this->userSearch) and ($this->userSearch=="") and isset($this->program) and ($this->program!="Choose Program")){$data['users'] = $this->managemembersModel->search_UserWithoutName($this->program, $this->start_row, $config['per_page']);
            $data['count'] = $this->countUserSearchWithoutName($this->program);}
        else if(isset($this->program) and ($this->program!="Choose Program") and isset($this->userSearch) and ($this->userSearch!="")){$data['users'] = $this->managemembersModel->search_User($this->userSearch, $this->program, $this->start_row, $config['per_page']);
            $data['count'] = $this->countUserSearch($this->userSearch, $this->program);}
        $data['message'] = 'Keep the textbox empty and then click the Button to refresh data.';
        $this->load->view('managemembers.php', $data);
        //if(isset($userSearch) and empty($userSearch)){redirect('manageUserController/index');}
        if(isset($this->program) and ($this->program=="Choose Program") and isset($this->userSearch) and ($this->userSearch=="")){redirect('managememberController/index');}
    }
    
    
    
    public function countUserSearch($userSearch, $program){
        $userSearch = $this->input->post('search');
        $countUserSearch = $this->managemembersModel->countUserSearch($userSearch, $program);
        return $countUserSearch->num_rows();
    }
    
    public function countUserSearchWithoutAccessType($userSearch){
        $userSearch = $this->input->post('search');
        $countUserSearch = $this->managemembersModel->countUserSearchWithoutAccessType($userSearch);
        return $countUserSearch->num_rows();
    }
    
    public function countUserSearchWithoutName($program){
        $countUserSearch = $this->managemembersModel->countUserSearchWithoutName($program);
        return $countUserSearch->num_rows();
    }
    
    
    
    // Delete user
    public function delete($studentID = ""){
        $this->db->delete('account_information', array('studentID' => $studentID));
        $this->db->delete('education_college', array('studentID' => $studentID));
        $this->db->delete('education_highschool', array('studentID' => $studentID));
        $this->db->delete('education_elementary', array('studentID' => $studentID));
        $this->db->delete('leadership', array('studentID' => $studentID));
        $this->db->delete('organization', array('studentID' => $studentID));
        $this->db->delete('other_awards', array('studentID' => $studentID));
        $this->db->delete('memberslog', array('studentID' => $studentID));
        $this->session->set_flashdata('success', 'Success! Member has been deleted.');
        redirect('managememberController/index');
    }

     // Delete user
    public function admindelete($studentID = ""){
        $this->db->delete('account_information', array('studentID' => $studentID));
        $this->db->delete('education_college', array('studentID' => $studentID));
        $this->db->delete('education_highschool', array('studentID' => $studentID));
        $this->db->delete('education_elementary', array('studentID' => $studentID));
        $this->db->delete('leadership', array('studentID' => $studentID));
        $this->db->delete('organization', array('studentID' => $studentID));
        $this->db->delete('other_awards', array('studentID' => $studentID));
        $this->db->delete('memberslog', array('studentID' => $studentID));
        $this->session->set_flashdata('success', 'Success! Member has been deleted.');
        redirect('homeNavBarController/homeadminpendingmembers');
    }

    

     // Edit user
    public function admineditUser($studentID = ""){
        $data = array(
            "data" => $this->db->get_where('account_information', array('studentID' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;
        $caseexplain = null;
        $reason = null;

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
        $achievementelementary10 = null;


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

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;
        $params['achievementelementary7'] = $achievementelementary7;
        $params['achievementelementary8'] = $achievementelementary8;
        $params['achievementelementary9'] = $achievementelementary9;
        $params['achievementelementary10'] = $achievementelementary10;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
        $params['achievementhigh6'] = $achievementhigh6;
        $params['achievementhigh7'] = $achievementhigh7;
        $params['achievementhigh8'] = $achievementhigh8;
        $params['achievementhigh9'] = $achievementhigh9;
        $params['achievementhigh10'] = $achievementhigh10;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;
        $params['achievementcollege7'] = $achievementcollege7;
        $params['achievementcollege8'] = $achievementcollege8;
        $params['achievementcollege9'] = $achievementcollege9;
        $params['achievementcollege10'] = $achievementcollege10;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;
        $params['otheraward7'] = $otheraward7;
        $params['otheraward8'] = $otheraward8;
        $params['otheraward9'] = $otheraward9;
        $params['otheraward10'] = $otheraward10;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['organization7'] = $organization7;
        $params['organization8'] = $organization8;
        $params['organization9'] = $organization9;
        $params['organization10'] = $organization10;

        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;
        $params['position7'] = $position7;
        $params['position8'] = $position8;
        $params['position9'] = $position9;
        $params['position10'] = $position10;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['activity7'] = $activity7;
        $params['activity8'] = $activity8;
        $params['activity9'] = $activity9;
        $params['activity10'] = $activity10;

        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['venue7'] = $venue7;
        $params['venue8'] = $venue8;
        $params['venue9'] = $venue9;
        $params['venue10'] = $venue10;

        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;
        $params['date7'] = $date7;
        $params['date8'] = $date8;
        $params['date9'] = $date9;
        $params['date10'] = $date10;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){
//if(($user_pass != "") OR ($user_confirmPass != "")){
           //     if($user_pass != $user_confirmPass){
                    //echo "<script> alert('Your passwords do not match. Please try again.') </script>";
        //            $this->session->set_flashdata('failed', 'Passwords do not match. Please try again.');
        //        }
        //        if($user_pass == $user_confirmPass){
                    //echo "<script> alert('New user has been registered.') </script>";
        //            if(strlen($user_pass) <= 5){
         //               $this->session->set_flashdata('failed', 'You cant use weak password. Please try again. '
         //                   . '<br>It should be greater than 5 characters.');
          //          }
             //       else{
                       $this->session->set_flashdata('success', 'Member has been modified.');
                        //$this->userModel->updateUserWithPassword($studentID, $params);
                       $this->userModel->updateInformation($studentID, $params);
                        redirect('managememberController/admineditUser');
                //    }
                }
                //redirect('manageUserController/index');
          //  }
            //}
            //else{
                //$this->session->set_flashdata('failed', 'Sorry, that username is already taken. Try another username');
            //}
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformation($studentID, $params);
                //$this->userModel->updateUserWithoutPassword($studentID, $params);
                redirect('managememberController/admineditUser');
            }
        }
        else if(isset($back)){
            
                  redirect('homeadminController/index');
            
         }
        //else if(isset()){
           // redirect('manageUserController/index');
       // }
        $this->load->view('adminEditmember.php', $data);
        
    }
    
    // Edit user
    public function editUser($studentID = ""){
        $data = array(
            "data" => $this->db->get_where('account_information', array('studentID' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){
//if(($user_pass != "") OR ($user_confirmPass != "")){
           //     if($user_pass != $user_confirmPass){
                    //echo "<script> alert('Your passwords do not match. Please try again.') </script>";
        //            $this->session->set_flashdata('failed', 'Passwords do not match. Please try again.');
        //        }
        //        if($user_pass == $user_confirmPass){
                    //echo "<script> alert('New user has been registered.') </script>";
        //            if(strlen($user_pass) <= 5){
         //               $this->session->set_flashdata('failed', 'You cant use weak password. Please try again. '
         //                   . '<br>It should be greater than 5 characters.');
          //          }
             //       else{
                       $this->session->set_flashdata('success', 'Member has been modified.');
                        //$this->userModel->updateUserWithPassword($studentID, $params);
                       $this->userModel->updateInformation($studentID, $params);
                        redirect('managememberController/index');
                //    }
                }
                //redirect('manageUserController/index');
          //  }
            //}
            //else{
                //$this->session->set_flashdata('failed', 'Sorry, that username is already taken. Try another username');
            //}
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformation($studentID, $params);
                //$this->userModel->updateUserWithoutPassword($studentID, $params);
                redirect('managememberController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('managememberController/index');
            
         }
        //else if(isset()){
           // redirect('manageUserController/index');
       // }
        $this->load->view('Editmember.php', $data);
        
    }

    public function admineditUserhigh($studentID = ""){

        $data = array(
            "data" => $this->db->get_where('education_highschool', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationhigh($studentID, $params);
                        redirect('homeadminController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationhigh($studentID, $params);
               
                 redirect('homeadminController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('homeadminController/index');
            
        }
        $this->load->view('adminEditmemberhigh.php', $data);

    }

    public function editUserhigh($studentID = ""){

        $data = array(
            "data" => $this->db->get_where('education_highschool', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationhigh($studentID, $params);
                        redirect('managememberController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationhigh($studentID, $params);
               
                redirect('managememberController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('managememberController/index');
            
        }
        $this->load->view('Editmemberhigh.php', $data);

    }

     public function admineditUsercollege($studentID = ""){

        $data = array(
            "data" => $this->db->get_where('education_college', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationcollege($studentID, $params);
                         redirect('homeadminController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationcollege($studentID, $params);
               
                 redirect('homeadminController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('homeadminController/index');
        }
      
        $this->load->view('adminEditmembercollege.php', $data);
        
    }

    public function editUsercollege($studentID = ""){

        $data = array(
            "data" => $this->db->get_where('education_college', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationcollege($studentID, $params);
                        redirect('managememberController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationcollege($studentID, $params);
               
                redirect('managememberController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('managememberController/index');
        }
      
        $this->load->view('Editmembercollege.php', $data);
        
    }

    public function admineditUserother($studentID = ""){

        $data = array(
            "data" => $this->db->get_where('other_awards', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationother($studentID, $params);
                        redirect('homeadminController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationother($studentID, $params);
               
                redirect('homeadminController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('homeadminController/index');
            
        }
        $this->load->view('adminEditmemberother.php', $data);
        
    }

    public function editUserother($studentID = ""){

        $data = array(
            "data" => $this->db->get_where('other_awards', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationother($studentID, $params);
                        redirect('managememberController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationother($studentID, $params);
               
                redirect('managememberController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('managememberController/index');
            
        }
        $this->load->view('Editmemberother.php', $data);
        
    }

    public function admineditUserleadership($studentID = ""){

         $data = array(
            "data" => $this->db->get_where('leadership', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationleadership($studentID, $params);
                        redirect('homeadminController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationleadership($studentID, $params);
               
               redirect('homeadminController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('homeadminController/index');
        }
      
        $this->load->view('adminEditmemberleadership.php', $data);
        
    }

    public function editUserleadership($studentID = ""){

         $data = array(
            "data" => $this->db->get_where('leadership', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationleadership($studentID, $params);
                        redirect('managememberController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationleadership($studentID, $params);
               
                redirect('managememberController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('managememberController/index');
        }
      
        $this->load->view('Editmemberleadership.php', $data);
        
    }

     public function admineditUserorg($studentID = ""){

         $data = array(
            "data" => $this->db->get_where('organization', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationorg($studentID, $params);
                        redirect('homeadminController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationorg($studentID, $params);
                redirect('homeadminController/index');
               
            }
        }
        else if(isset($back)){
            
                  redirect('homeadminController/index');
        }
      
        $this->load->view('adminEditmemberorg.php', $data);
        
    }

    public function editUserorg($studentID = ""){

         $data = array(
            "data" => $this->db->get_where('organization', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationorg($studentID, $params);
                        redirect('managememberController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationorg($studentID, $params);
               
                redirect('managememberController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('managememberController/index');
        }
      
        $this->load->view('Editmemberorg.php', $data);
        
    }

    public function admineditUserelem($studentID = ""){
        $data = array(
            "data" => $this->db->get_where('education_elementary', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationelementary($studentID, $params);
                        redirect('homeadminController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationelementary($studentID, $params);
               
                redirect('homeadminController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('homeadminController/index');
        }
      
        $this->load->view('adminEditmemberelem.php', $data);
        
    }

     public function editUserelem($studentID = ""){
        $data = array(
            "data" => $this->db->get_where('education_elementary', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationelementary($studentID, $params);
                        redirect('managememberController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationelementary($studentID, $params);
               
                redirect('managememberController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('managememberController/index');
        }
      
        $this->load->view('Editmemberelem.php', $data);
        
    }

    public function admineditUsercase($studentID = ""){
        $data = array(
            "data" => $this->db->get_where('account_information', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;
        $caseexplain = null;
        $reason = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;
        $params['caseexplain'] = $caseexplain;
        $params['reason'] = $reason;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationcase($studentID, $params);
                        redirect('homeadminController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationcase($studentID, $params);
               
                redirect('homeadminController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('homeadminController/index');
        }
      
        $this->load->view('adminEditmembercase.php', $data);
        
    }

     public function admineditUserreason($studentID = ""){
        $data = array(
            "data" => $this->db->get_where('account_information', array('studentid' => $studentID))
      );

       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;
        $caseexplain = null;
        $reason = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;
        $params['caseexplain'] = $caseexplain;
        $params['reason'] = $reason;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){

                       $this->session->set_flashdata('success', 'Member has been modified.');
                       
                       $this->userModel->updateInformationreason($studentID, $params);
                        redirect('homeadminController/index');
              
                }
           
            else{
                $this->session->set_flashdata('success', 'Member has been modified.');
                $this->userModel->updateInformationreason($studentID, $params);
               
                redirect('homeadminController/index');
            }
        }
        else if(isset($back)){
            
                  redirect('homeadminController/index');
        }
      
        $this->load->view('adminEditmemberreason.php', $data);
        
    }

    public function viewUser($studentID = ""){
        $data = array(
            "data" => $this->db->get_where('account_information', array('studentID' => $studentID))
        );
       
        $studentid = null;
        $firstname = null;
        $middlename = null;
        $lastname = null;
        $program = null;
        $campus = null;
        $birthday = null;
        $birthplace = null;
        $completeaddress = null;
        $outsideaddress = null;
        $fathername = null;
        $fatheroccupation = null;
        $mothername = null;
        $motheroccupation = null;
        $email = null;
        $contact = null;
        $schoolyear = null;

        $elementary = null;
        $achievementelementary = null;
        $achievementelementary2 = null;
        $achievementelementary3 = null;
        $achievementelementary4 = null;
        $achievementelementary5 = null;
        $achievementelementary6 = null;

        $highschool = null;
        $achievementhigh = null;
        $achievementhigh2 = null;
        $achievementhigh3 = null;
        $achievementhigh4 = null;
        $achievementhigh5 = null;
        $achievementhigh6 = null;

        $college = null;
        $achievementcollege = null;
        $achievementcollege2 = null;
        $achievementcollege3 = null;
        $achievementcollege4 = null;
        $achievementcollege5 = null;
        $achievementcollege6 = null;

        $otheraward = null;
        $otheraward2 = null;
        $otheraward3 = null;
        $otheraward4 = null;
        $otheraward5 = null;
        $otheraward6 = null;

        $organization = null;
        $organization2 = null;
        $organization3 = null;
        $organization4 = null;
        $organization5 = null;
        $organization6 = null;
        $position = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;
        $position6 = null;

        $activity = null;
        $activity2 = null;
        $activity3 = null;
        $activity4 = null;
        $activity5 = null;
        $activity6 = null;
        $venue = null;
        $venue2 = null;
        $venue3 = null;
        $venue4 = null;
        $venue5 = null;
        $venue6 = null;
        $date = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;

        $access_role= 'null';
        $user_pass = null;
        $user_confirmPass = null;

        $createdDate = null;
        
        extract($_POST);
        $params['studentid'] = $studentid;
        $params['firstname'] = $firstname;
        $params['middlename'] = $middlename;
        $params['lastname'] = $lastname;
        $params['program'] = $program;
        $params['campus'] = $campus;
        $params['birthday'] = $birthday;
        $params['birthplace'] = $birthplace;
        $params['completeaddress'] = $completeaddress;
        $params['outsideaddress'] = $outsideaddress;
        $params['fathername'] = $fathername;
        $params['fatheroccupation'] = $fatheroccupation;
        $params['mothername'] = $mothername;
        $params['motheroccupation'] = $motheroccupation;
        $params['contact'] = $contact;
        $params['email'] = $email;
        $params['schoolyear'] = $schoolyear;

        $params['elementary'] = $elementary;
        $params['achievementelementary'] = $achievementelementary;
        $params['achievementelementary2'] = $achievementelementary2;
        $params['achievementelementary3'] = $achievementelementary3;
        $params['achievementelementary4'] = $achievementelementary4;
        $params['achievementelementary5'] = $achievementelementary5;
        $params['achievementelementary6'] = $achievementelementary6;

        $params['highschool'] = $highschool;
        $params['achievementhigh'] = $achievementhigh;
        $params['achievementhigh2'] = $achievementhigh2;
        $params['achievementhigh3'] = $achievementhigh3;
        $params['achievementhigh4'] = $achievementhigh4;
        $params['achievementhigh5'] = $achievementhigh5;
         $params['achievementhigh6'] = $achievementhigh6;

        $params['college'] = $college;
        $params['achievementcollege'] = $achievementcollege;
        $params['achievementcollege2'] = $achievementcollege2;
        $params['achievementcollege3'] = $achievementcollege3;
        $params['achievementcollege4'] = $achievementcollege4;
        $params['achievementcollege5'] = $achievementcollege5;
        $params['achievementcollege6'] = $achievementcollege6;

        $params['otheraward'] = $otheraward;
        $params['otheraward2'] = $otheraward2;
        $params['otheraward3'] = $otheraward3;
        $params['otheraward4'] = $otheraward4;
        $params['otheraward5'] = $otheraward5;
        $params['otheraward6'] = $otheraward6;

        $params['organization'] = $organization;
        $params['organization2'] = $organization2;
        $params['organization3'] = $organization3;
        $params['organization4'] = $organization4;
        $params['organization5'] = $organization5;
        $params['organization6'] = $organization6;
        $params['position'] = $position;
        $params['position2'] = $position2;
        $params['position3'] = $position3;
        $params['position4'] = $position4;
        $params['position5'] = $position5;
        $params['position6'] = $position6;

        $params['activity'] = $activity;
        $params['activity2'] = $activity2;
        $params['activity3'] = $activity3;
        $params['activity4'] = $activity4;
        $params['activity5'] = $activity5;
        $params['activity6'] = $activity6;
        $params['venue'] = $venue;
        $params['venue2'] = $venue2;
        $params['venue3'] = $venue3;
        $params['venue4'] = $venue4;
        $params['venue5'] = $venue5;
        $params['venue6'] = $venue6;
        $params['date'] = $date;
        $params['date2'] = $date2;
        $params['date3'] = $date3;
        $params['date4'] = $date4;
        $params['date5'] = $date5;
        $params['date6'] = $date6;

        $params['access_role'] = $access_role;
        $params['user_pass'] = $user_pass;
        $params['user_confirmPass'] = $user_confirmPass;

        $studentid_available = $this->userModel->check_exists($studentid);
        
        if(isset($save)){
            if($studentid_available){
//if(($user_pass != "") OR ($user_confirmPass != "")){
           //     if($user_pass != $user_confirmPass){
                    //echo "<script> alert('Your passwords do not match. Please try again.') </script>";
        //            $this->session->set_flashdata('failed', 'Passwords do not match. Please try again.');
        //        }
        //        if($user_pass == $user_confirmPass){
                    //echo "<script> alert('New user has been registered.') </script>";
        //            if(strlen($user_pass) <= 5){
         //               $this->session->set_flashdata('failed', 'You cant use weak password. Please try again. '
         //                   . '<br>It should be greater than 5 characters.');
          //          }
             //       else{
                       $this->session->set_flashdata('success', 'Member has been modified.');
                        $this->userModel->updateUserWithPassword($studentID, $params);
                        redirect('managememberController/index');
                //    }
                }
                //redirect('manageUserController/index');
          //  }
            //}
            //else{
                //$this->session->set_flashdata('failed', 'Sorry, that username is already taken. Try another username');
            //}
            else{
                $this->session->set_flashdata('success', 'User has been modified.');
                $this->userModel->updateUserWithoutPassword($studentID, $params);
                redirect('managememberController/index');
            }
        }//else if(isset()){
           // redirect('manageUserController/index');
       // }
        $this->load->view('Editmember.php', $data );
        
    }
     // Logout from member page
        public function logout() {

        // Removing session data
        $sess_array = array(
        'studentid' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('login', $data);
         redirect('loginController/index');
        }
    
    
}
?>