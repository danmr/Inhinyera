<?php
    
    class homeadminController extends CI_Controller{
        
        public function __construct() {
            parent::__construct();
            $this->load->model('userModel');
            $this->load->model('dashboardModel');
            $this->load->model('managemembersModel');
            $this->load->library('pagination');
   
        }
        
        public function index(){

            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');

                $data['adminID'] = $session_data['adminID'];
                $data['username'] = $session_data['username'];
                $data['password'] = $session_data['password'];
                $data['firstname'] = $session_data['firstname'];
                $data['middlename'] = $session_data['middlename'];
                $data['lastname'] = $session_data['lastname'];
                $data['picture'] = $session_data['picture'];

                $adminID = $session_data['adminID'];      
                $users = $this->managemembersModel->getData();
                $data['registrations'] = $this->managemembersModel->getRegistrations();  
                $data['count'] = $this->countUser();    
                $data['message'] = '';
                $data['query'] = $this->userModel->getUsers();
                
                $data['computerengineering'] = $this->dashboardModel->getComputerEngineering();
                $data['civilengineering'] = $this->dashboardModel->getCivilEngineering();
                $data['electronicsengineering'] = $this->dashboardModel->getElectronicsEngineering();
                $data['electricalengineering'] = $this->dashboardModel->getElectricalEngineering();
                $data['environmentalengineering'] = $this->dashboardModel->getEnvironmentalEngineering();
                $data['industrialengineering'] = $this->dashboardModel->getIndustrialEngineering();
                $data['marineengineering'] = $this->dashboardModel->getMarineEngineering();
                $data['mechanicalengineering'] = $this->dashboardModel->getMechanicalEngineering();

                $data['computerengineeringstudents'] = $this->dashboardModel->getComputerEngineeringstudents();
                $data['civilengineeringstudents'] = $this->dashboardModel->getCivilEngineeringstudents();
                $data['electronicsengineeringstudents'] = $this->dashboardModel->getElectronicsEngineeringstudents();
                $data['electricalengineeringstudents'] = $this->dashboardModel->getElectricalEngineeringstudents();
                $data['environmentalengineeringstudents'] = $this->dashboardModel->getEnvironmentalEngineeringstudents();
                $data['industrialengineeringstudents'] = $this->dashboardModel->getIndustrialEngineeringstudents();
                $data['marineengineeringstudents'] = $this->dashboardModel->getMarineEngineeringstudents();
                $data['mechanicalengineeringstudents'] = $this->dashboardModel->getMechanicalEngineeringstudents();

                $data['computerengineeringalumni'] = $this->dashboardModel->getComputerEngineeringalumni();
                $data['civilengineeringalumni'] = $this->dashboardModel->getCivilEngineeringalumni();
                $data['electronicsengineeringalumni'] = $this->dashboardModel->getElectronicsEngineeringalumni();
                $data['electricalengineeringalumni'] = $this->dashboardModel->getElectricalEngineeringalumni();
                $data['environmentalengineeringalumni'] = $this->dashboardModel->getEnvironmentalEngineeringalumni();
                $data['industrialengineeringalumni'] = $this->dashboardModel->getIndustrialEngineeringalumni();
                $data['marineengineeringalumni'] = $this->dashboardModel->getMarineEngineeringalumni();
                $data['mechanicalengineeringalumni'] = $this->dashboardModel->getMechanicalEngineeringalumni();

                $data['allcount'] = $this->dashboardModel->getAllcount();
                $data['totalmembers'] = $this->dashboardModel->getTotalMembers();
                $data['totalapprovedstudents'] = $this->dashboardModel->getTotalApprovedStudents();
                $data['totalpendingstudents'] = $this->dashboardModel->getTotalPendingStudents();
                $data['totaldeniedstudents'] = $this->dashboardModel->getTotalDeniedStudents();
                $data['query'] = $this->userModel->getschoolyear();

            $this->load->view('admin.php', $data);
 
            }
            
            else{
                //If no session, redirect to login page
                redirect('loginadminController/index');
            }
        }

        public function searchmembers(){

            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');

                $data['adminID'] = $session_data['adminID'];
                $data['username'] = $session_data['username'];
                $data['password'] = $session_data['password'];
                $data['firstname'] = $session_data['firstname'];
                $data['middlename'] = $session_data['middlename'];
                $data['lastname'] = $session_data['lastname'];
                $data['picture'] = $session_data['picture'];

                $adminID = $session_data['adminID'];      
                $users = $this->managemembersModel->getData();
                $data['approved'] = $this->managemembersModel->getApprovedMembers();  
                $data['count'] = $this->countUser();    
                $data['message'] = '';
                $data['query'] = $this->userModel->getUsers();
                
                $data['computerengineering'] = $this->dashboardModel->getComputerEngineering();
                $data['civilengineering'] = $this->dashboardModel->getCivilEngineering();
                $data['electronicsengineering'] = $this->dashboardModel->getElectronicsEngineering();
                $data['electricalengineering'] = $this->dashboardModel->getElectricalEngineering();
                $data['environmentalengineering'] = $this->dashboardModel->getEnvironmentalEngineering();
                $data['industrialengineering'] = $this->dashboardModel->getIndustrialEngineering();
                $data['marineengineering'] = $this->dashboardModel->getMarineEngineering();
                $data['mechanicalengineering'] = $this->dashboardModel->getMechanicalEngineering();

                $data['computerengineeringstudents'] = $this->dashboardModel->getComputerEngineeringstudents();
                $data['civilengineeringstudents'] = $this->dashboardModel->getCivilEngineeringstudents();
                $data['electronicsengineeringstudents'] = $this->dashboardModel->getElectronicsEngineeringstudents();
                $data['electricalengineeringstudents'] = $this->dashboardModel->getElectricalEngineeringstudents();
                $data['environmentalengineeringstudents'] = $this->dashboardModel->getEnvironmentalEngineeringstudents();
                $data['industrialengineeringstudents'] = $this->dashboardModel->getIndustrialEngineeringstudents();
                $data['marineengineeringstudents'] = $this->dashboardModel->getMarineEngineeringstudents();
                $data['mechanicalengineeringstudents'] = $this->dashboardModel->getMechanicalEngineeringstudents();

                $data['computerengineeringalumni'] = $this->dashboardModel->getComputerEngineeringalumni();
                $data['civilengineeringalumni'] = $this->dashboardModel->getCivilEngineeringalumni();
                $data['electronicsengineeringalumni'] = $this->dashboardModel->getElectronicsEngineeringalumni();
                $data['electricalengineeringalumni'] = $this->dashboardModel->getElectricalEngineeringalumni();
                $data['environmentalengineeringalumni'] = $this->dashboardModel->getEnvironmentalEngineeringalumni();
                $data['industrialengineeringalumni'] = $this->dashboardModel->getIndustrialEngineeringalumni();
                $data['marineengineeringalumni'] = $this->dashboardModel->getMarineEngineeringalumni();
                $data['mechanicalengineeringalumni'] = $this->dashboardModel->getMechanicalEngineeringalumni();

                $data['allcount'] = $this->dashboardModel->getAllcount();
                $data['totalmembers'] = $this->dashboardModel->getTotalMembers();
                $data['totalapprovedstudents'] = $this->dashboardModel->getTotalApprovedStudents();
                $data['totalpendingstudents'] = $this->dashboardModel->getTotalPendingStudents();
                $data['totaldeniedstudents'] = $this->dashboardModel->getTotalDeniedStudents();
                $data['query'] = $this->userModel->getschoolyear();

            $this->load->view('adminsearchmembers.php', $data);
 
            }
            
            else{
                //If no session, redirect to login page
                redirect('loginadminController/index');
            }
        }

         public function approvedmembers(){

            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');

                $data['adminID'] = $session_data['adminID'];
                $data['username'] = $session_data['username'];
                $data['password'] = $session_data['password'];
                $data['firstname'] = $session_data['firstname'];
                $data['middlename'] = $session_data['middlename'];
                $data['lastname'] = $session_data['lastname'];
                $data['picture'] = $session_data['picture'];

                $adminID = $session_data['adminID'];      
                $users = $this->managemembersModel->getData();
                $data['approved'] = $this->managemembersModel->getApprovedMembers();  
                $data['count'] = $this->countUser();    
                $data['message'] = '';
                $data['query'] = $this->userModel->getUsers();
                
                $data['computerengineering'] = $this->dashboardModel->getComputerEngineering();
                $data['civilengineering'] = $this->dashboardModel->getCivilEngineering();
                $data['electronicsengineering'] = $this->dashboardModel->getElectronicsEngineering();
                $data['electricalengineering'] = $this->dashboardModel->getElectricalEngineering();
                $data['environmentalengineering'] = $this->dashboardModel->getEnvironmentalEngineering();
                $data['industrialengineering'] = $this->dashboardModel->getIndustrialEngineering();
                $data['marineengineering'] = $this->dashboardModel->getMarineEngineering();
                $data['mechanicalengineering'] = $this->dashboardModel->getMechanicalEngineering();

                $data['computerengineeringstudents'] = $this->dashboardModel->getComputerEngineeringstudents();
                $data['civilengineeringstudents'] = $this->dashboardModel->getCivilEngineeringstudents();
                $data['electronicsengineeringstudents'] = $this->dashboardModel->getElectronicsEngineeringstudents();
                $data['electricalengineeringstudents'] = $this->dashboardModel->getElectricalEngineeringstudents();
                $data['environmentalengineeringstudents'] = $this->dashboardModel->getEnvironmentalEngineeringstudents();
                $data['industrialengineeringstudents'] = $this->dashboardModel->getIndustrialEngineeringstudents();
                $data['marineengineeringstudents'] = $this->dashboardModel->getMarineEngineeringstudents();
                $data['mechanicalengineeringstudents'] = $this->dashboardModel->getMechanicalEngineeringstudents();

                $data['computerengineeringalumni'] = $this->dashboardModel->getComputerEngineeringalumni();
                $data['civilengineeringalumni'] = $this->dashboardModel->getCivilEngineeringalumni();
                $data['electronicsengineeringalumni'] = $this->dashboardModel->getElectronicsEngineeringalumni();
                $data['electricalengineeringalumni'] = $this->dashboardModel->getElectricalEngineeringalumni();
                $data['environmentalengineeringalumni'] = $this->dashboardModel->getEnvironmentalEngineeringalumni();
                $data['industrialengineeringalumni'] = $this->dashboardModel->getIndustrialEngineeringalumni();
                $data['marineengineeringalumni'] = $this->dashboardModel->getMarineEngineeringalumni();
                $data['mechanicalengineeringalumni'] = $this->dashboardModel->getMechanicalEngineeringalumni();

                $data['allcount'] = $this->dashboardModel->getAllcount();
                $data['totalmembers'] = $this->dashboardModel->getTotalMembers();
                $data['totalapprovedstudents'] = $this->dashboardModel->getTotalApprovedStudents();
                $data['totalpendingstudents'] = $this->dashboardModel->getTotalPendingStudents();
                $data['totaldeniedstudents'] = $this->dashboardModel->getTotalDeniedStudents();
                $data['query'] = $this->userModel->getschoolyear();

            $this->load->view('adminapprovedmembers.php', $data);
 
            }
            
            else{
                //If no session, redirect to login page
                redirect('loginadminController/index');
            }
        }

         public function pendingmembers(){

            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');

                $data['adminID'] = $session_data['adminID'];
                $data['username'] = $session_data['username'];
                $data['password'] = $session_data['password'];
                $data['firstname'] = $session_data['firstname'];
                $data['middlename'] = $session_data['middlename'];
                $data['lastname'] = $session_data['lastname'];
                $data['picture'] = $session_data['picture'];

                $adminID = $session_data['adminID'];      
                $users = $this->managemembersModel->getData();
                $data['pending'] = $this->managemembersModel->getPendingMembers();  
                $data['count'] = $this->countUser();    
                $data['message'] = '';
                $data['query'] = $this->userModel->getUsers();
                
                $data['computerengineering'] = $this->dashboardModel->getComputerEngineering();
                $data['civilengineering'] = $this->dashboardModel->getCivilEngineering();
                $data['electronicsengineering'] = $this->dashboardModel->getElectronicsEngineering();
                $data['electricalengineering'] = $this->dashboardModel->getElectricalEngineering();
                $data['environmentalengineering'] = $this->dashboardModel->getEnvironmentalEngineering();
                $data['industrialengineering'] = $this->dashboardModel->getIndustrialEngineering();
                $data['marineengineering'] = $this->dashboardModel->getMarineEngineering();
                $data['mechanicalengineering'] = $this->dashboardModel->getMechanicalEngineering();

                $data['computerengineeringstudents'] = $this->dashboardModel->getComputerEngineeringstudents();
                $data['civilengineeringstudents'] = $this->dashboardModel->getCivilEngineeringstudents();
                $data['electronicsengineeringstudents'] = $this->dashboardModel->getElectronicsEngineeringstudents();
                $data['electricalengineeringstudents'] = $this->dashboardModel->getElectricalEngineeringstudents();
                $data['environmentalengineeringstudents'] = $this->dashboardModel->getEnvironmentalEngineeringstudents();
                $data['industrialengineeringstudents'] = $this->dashboardModel->getIndustrialEngineeringstudents();
                $data['marineengineeringstudents'] = $this->dashboardModel->getMarineEngineeringstudents();
                $data['mechanicalengineeringstudents'] = $this->dashboardModel->getMechanicalEngineeringstudents();

                $data['computerengineeringalumni'] = $this->dashboardModel->getComputerEngineeringalumni();
                $data['civilengineeringalumni'] = $this->dashboardModel->getCivilEngineeringalumni();
                $data['electronicsengineeringalumni'] = $this->dashboardModel->getElectronicsEngineeringalumni();
                $data['electricalengineeringalumni'] = $this->dashboardModel->getElectricalEngineeringalumni();
                $data['environmentalengineeringalumni'] = $this->dashboardModel->getEnvironmentalEngineeringalumni();
                $data['industrialengineeringalumni'] = $this->dashboardModel->getIndustrialEngineeringalumni();
                $data['marineengineeringalumni'] = $this->dashboardModel->getMarineEngineeringalumni();
                $data['mechanicalengineeringalumni'] = $this->dashboardModel->getMechanicalEngineeringalumni();

                $data['allcount'] = $this->dashboardModel->getAllcount();
                $data['totalmembers'] = $this->dashboardModel->getTotalMembers();
                $data['totalapprovedstudents'] = $this->dashboardModel->getTotalApprovedStudents();
                $data['totalpendingstudents'] = $this->dashboardModel->getTotalPendingStudents();
                $data['totaldeniedstudents'] = $this->dashboardModel->getTotalDeniedStudents();
                $data['query'] = $this->userModel->getschoolyear();

            $this->load->view('adminpendingmembers.php', $data);
 
            }
            
            else{
                //If no session, redirect to login page
                redirect('loginadminController/index');
            }
        }

         public function deniedmembers(){

            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');

                $data['adminID'] = $session_data['adminID'];
                $data['username'] = $session_data['username'];
                $data['password'] = $session_data['password'];
                $data['firstname'] = $session_data['firstname'];
                $data['middlename'] = $session_data['middlename'];
                $data['lastname'] = $session_data['lastname'];
                $data['picture'] = $session_data['picture'];

                $adminID = $session_data['adminID'];      
                $users = $this->managemembersModel->getData();
                $data['denied'] = $this->managemembersModel->getDeniedMembers();  
                $data['count'] = $this->countUser();    
                $data['message'] = '';
                $data['query'] = $this->userModel->getUsers();
                
                $data['computerengineering'] = $this->dashboardModel->getComputerEngineering();
                $data['civilengineering'] = $this->dashboardModel->getCivilEngineering();
                $data['electronicsengineering'] = $this->dashboardModel->getElectronicsEngineering();
                $data['electricalengineering'] = $this->dashboardModel->getElectricalEngineering();
                $data['environmentalengineering'] = $this->dashboardModel->getEnvironmentalEngineering();
                $data['industrialengineering'] = $this->dashboardModel->getIndustrialEngineering();
                $data['marineengineering'] = $this->dashboardModel->getMarineEngineering();
                $data['mechanicalengineering'] = $this->dashboardModel->getMechanicalEngineering();

                $data['computerengineeringstudents'] = $this->dashboardModel->getComputerEngineeringstudents();
                $data['civilengineeringstudents'] = $this->dashboardModel->getCivilEngineeringstudents();
                $data['electronicsengineeringstudents'] = $this->dashboardModel->getElectronicsEngineeringstudents();
                $data['electricalengineeringstudents'] = $this->dashboardModel->getElectricalEngineeringstudents();
                $data['environmentalengineeringstudents'] = $this->dashboardModel->getEnvironmentalEngineeringstudents();
                $data['industrialengineeringstudents'] = $this->dashboardModel->getIndustrialEngineeringstudents();
                $data['marineengineeringstudents'] = $this->dashboardModel->getMarineEngineeringstudents();
                $data['mechanicalengineeringstudents'] = $this->dashboardModel->getMechanicalEngineeringstudents();

                $data['computerengineeringalumni'] = $this->dashboardModel->getComputerEngineeringalumni();
                $data['civilengineeringalumni'] = $this->dashboardModel->getCivilEngineeringalumni();
                $data['electronicsengineeringalumni'] = $this->dashboardModel->getElectronicsEngineeringalumni();
                $data['electricalengineeringalumni'] = $this->dashboardModel->getElectricalEngineeringalumni();
                $data['environmentalengineeringalumni'] = $this->dashboardModel->getEnvironmentalEngineeringalumni();
                $data['industrialengineeringalumni'] = $this->dashboardModel->getIndustrialEngineeringalumni();
                $data['marineengineeringalumni'] = $this->dashboardModel->getMarineEngineeringalumni();
                $data['mechanicalengineeringalumni'] = $this->dashboardModel->getMechanicalEngineeringalumni();

                $data['allcount'] = $this->dashboardModel->getAllcount();
                $data['totalmembers'] = $this->dashboardModel->getTotalMembers();
                $data['totalapprovedstudents'] = $this->dashboardModel->getTotalApprovedStudents();
                $data['totalpendingstudents'] = $this->dashboardModel->getTotalPendingStudents();
                $data['totaldeniedstudents'] = $this->dashboardModel->getTotalDeniedStudents();
                $data['query'] = $this->userModel->getschoolyear();

            $this->load->view('admindeniedmembers.php', $data);
 
            }
            
            else{
                //If no session, redirect to login page
                redirect('loginadminController/index');
            }
        }

        public function countUser(){
        $countStud = $this->managemembersModel->countUser();
        return $countStud->num_rows();
        }

        // Logout from member page
        public function logout() {

        // Removing session data
        $sess_array = array(
        'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('login', $data);
         redirect('loginController/index');
        }

         // View Member user
    public function viewmemberprofile($studentID = ""){
        $data = array(
            "data" => $this->db->get_where('account_information', array('studentID' => $studentID))
      );

        $data2 = array(
            "data2" => $this->db->get_where('education_elementary', array('studentID' => $studentID)) );
        $data3 = array(
            "data2" => $this->db->get_where('education_highschool', array('studentID' => $studentID)) );
        $data4 = array(
            "data2" => $this->db->get_where('education_college', array('studentID' => $studentID)) );
        $data5 = array(
            "data2" => $this->db->get_where('leadership', array('studentID' => $studentID)) );
        $data6 = array(
            "data2" => $this->db->get_where('organization', array('studentID' => $studentID)) );
        $data7 = array(
            "data2" => $this->db->get_where('other_awards', array('studentID' => $studentID))
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
                       $this->userModel->viewmemberprofile($studentID, $params);
                        redirect('managememberController/adminviewmemberprofile');
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
                $this->userModel->viewmemberprofile($studentID, $params);
                //$this->userModel->updateUserWithoutPassword($studentID, $params);
                redirect('managememberController/adminviewmemberprofile');
            }
        }
        else if(isset($back)){
            
                  redirect('homeadminController/index');
            
         }
        //else if(isset()){
           // redirect('manageUserController/index');
       // }
        $this->load->view('adminviewmemberprofile.php', $data , $data2 , $data3 , $data4 , $data5 , $data6 , $data7);
        
    }



        
    }
?>