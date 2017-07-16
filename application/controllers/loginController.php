<?php

class loginController extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('userModel');
    }

    public function beamember(){
            redirect('beamemberController/index');
    }
    public function registerthisschoolyear(){
            redirect('beamemberController/registerthisschoolyear');
    }
    public function adminlogin(){
        redirect('loginadminController/index');
    }

    
    public function index(){
//        $this->load->view('Login.html');
//        
//        $username = null;
//        $userpass = null;
//        
//        extract($_POST);
//        $params['username'] = $username;
//        $params['userpass'] = $userpass;
//        $username_available = $this->userModel->validate($username, $userpass);
//        
//        if(isset($submit)){
//            if($username_available){
//                // User is in the database             
//                redirect('homeNavBarController/home');
//            }
//            else{
//                // User Not listed in the database
//                $this->session->set_flashdata('failed', 'Incorrect username and password. Try again.');
//            }
//        }
        $this->verifyLogin();
    }

   
    
    public function verifyLogin(){
        //This method will have the credentials validation
        //$this->load->library('form_validation');
        $this->form_validation->set_rules('studentid', 'Studentid', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');

        if($this->form_validation->run() == FALSE){
            //Field validation failed.  User redirected to login page
            $this->load->view('Login.php');
        }
        else{
            //Go to private area
            ini_set('max_execution_time', 300);
            redirect('homeNavBarController/home');
        }
    }
    
    public function check_database($password, $studentid){
        //Field validation succeeded.  Validate against database
        $studentid = $this->input->post('studentid');
 
        //query the database
        $result = $this->userModel->checkstudent($studentid, $password);
 
        if($result){
            $sess_array = array();
            foreach($result as $row){
                $sess_array = array(
//                    'userID' => $row->userID,
//                    'userName' => $row->userName,
//                    'fName' => $row->fName,
//                    'mName' => $row->mName,
//                    'lName' => $row->lName,
//                    'password' => $row->password,
//                    'access_Type' => $row->access_Type,
//                    'createdDate' => $row->createdDate
                    'studentID' => $row->studentID,
                    'firstname' => $row->firstname,
                    'middlename' => $row->middlename,
                    'lastname' => $row->lastname,
                    'password' => $row->password,
                    'campus' => $row->campus,
                    'program' => $row->program,
                    'picture' => $row->picture,
                    'date_connected' => $row->date_connected,
                    'picture' => $row->picture,
                    'program' => $row->program,
                    'access_role' => $row->access_role
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else{
            //$this->form_validation->set_message('check_database', 'Invalid username or password');
            $this->session->set_flashdata('failed', 'Incorrect Student ID or Password. Please Try again.');
            return false;
        }
    }
    
}

?>