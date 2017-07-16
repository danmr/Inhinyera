<?php

class loginadminController extends CI_Controller{
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

       
        $this->verifyLogin();
    }

   
    
    public function verifyLogin(){

         //This method will have the credentials validation
        //$this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_checks_database');

        if($this->form_validation->run() == FALSE){
            //Field validation failed.  User redirected to login page
            $this->load->view('loginadmin.php');
        }
        else{
            //Go to private area
            ini_set('max_execution_time', 300);
            redirect('homeNavBarController/homeadmin');
        }

    }
    
    public function checks_database($password, $username){
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        $password= $this->input->post('password');
 
        //query the database
        $result = $this->userModel->checkadmin($username, $password);
 
        if($result){
            $sess_array = array();
            foreach($result as $row){
                $sess_array = array(
                    'adminID' => $row->adminID,
                    'username' => $row->username,
                    'firstname' => $row->firstname,
                    'password' => $row->password,
                    'picture' => $row->picture,
                    'middlename' => $row->middlename,
                    'lastname' => $row->lastname,
                    
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else{
            //$this->form_validation->set_message('check_database', 'Invalid username or password');
            $this->session->set_flashdata('failed', 'Incorrect Username or Password. Please Try again.');
            return false;
        }
    }
    
}

?>