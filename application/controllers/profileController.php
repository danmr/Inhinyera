<?php
    
    class profileController extends CI_Controller{
        
        protected $password, $userID;
        
        public function __construct() {
            parent::__construct();
            $this->load->model('userModel');
        }
        
        public function index(){
//            $admin = $this->session->userdata('userName');
//            $callIt = $this->homeModel->callUser( $admin );
//            
//            $data['userName'] = $admin;
//            $data1 = $this->homeModel->fill_session_data($data);
//
//            $this->load->view('index.html', $data1);
            $user_oldpass = null;
            $user_newpass = null;
            $user_confirmNewPass = null;
            
            extract($_POST);
            $params['user_oldpass'] = $user_oldpass;
            $params['user_newpass'] = $user_newpass;
            $params['user_confirmNewPass'] = $user_confirmNewPass;
            
            
            
            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
//                $data['userID'] = $session_data['userID'];
//                $data['userName'] = $session_data['userName'];
//                $data['fName'] = $session_data['fName'];
//                $data['mName'] = $session_data['mName'];
//                $data['lName'] = $session_data['lName'];
//                $data['password'] = $session_data['password'];
//                $data['access_Type'] = $session_data['access_Type'];
//                $data['createdDate'] = $session_data['createdDate'];
                $data['studentID'] = $session_data['studentID'];
                $data['firstname'] = $session_data['firstname'];
                $data['middlename'] = $session_data['middlename'];
                $data['lastname'] = $session_data['lastname'];
                $data['password'] = $session_data['password'];
                $data['access_role'] = $session_data['access_role'];
                $data['campus'] = $session_data['campus'];
                $data['program'] = $session_data['program'];
                $data['date_connected'] = $session_data['date_connected'];

                $studentID = $session_data['studentID'];
                $password = $session_data['password'];
                
                if(isset($save)){
                    if($password != $params['user_oldpass']){
                        $this->session->set_flashdata('failed', 'Sorry, you entered an incorrect old password');                     
                    }
                    else{
                        if($params['user_newpass'] != $params['user_confirmNewPass']){
                        $this->session->set_flashdata('failed', 'Sorry, you entered an incorrect old password');
                            //echo "<script> alert('Your passwords do not match. Please try again.') </script>";
                            $this->session->set_flashdata('failed', 'Passwords do not match. Please try again.');
                        }
                        
                        
                        if($params['user_newpass'] == $params['user_confirmNewPass']){
                            if(strlen($user_newpass) <= 5 ){
                                $this->session->set_flashdata('failed', 'You cant use weak password. Please try again. '
                                    . '<br>It should be greater than 5 characters.');
                            }
                            //echo "<script> alert('New user has been registered.') </script>";
                            //$this->session->set_flashdata('success', 'Success! Old password has been modified. <br> Wait for a few minutes to change your password again.');
                            else{
                                $this->userModel->updateAdminPass($params['user_confirmNewPass'], $userID);
                                sleep(3);
                                $this->session->set_flashdata('success', 'Success! Old password has been modified. <br> Try signing in again.');
                                redirect('loginController/index');
                            }
                        }   
                    }
                    //redirect('homeNavBarController/profile', refresh);
                }
            }
            else{
                //If no session, redirect to login page
                redirect('loginController/index');
            }
            $this->load->view('profile.php', $data);
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