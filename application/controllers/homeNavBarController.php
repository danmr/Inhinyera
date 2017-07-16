<?php

    class homeNavBarController extends CI_Controller{
        public function index(){
            session_destroy();
            redirect('loginController/index');
        }
        public function home(){
            redirect('homeController/viewmemberprofile');
        }
        public function homeofficer(){
            redirect('homeController/officer');
        }
        public function profile(){
            redirect('homeController/viewmemberprofile');
        }
        public function homeadmin(){
            redirect('homeadminController/index');
        }

        public function homeadminapprovedmembers(){
            redirect('homeadminController/approvedmembers');
        }

        public function adminsearchmembers(){
            redirect('homeadminController/searchmembers');
        }

        public function homeadminpendingmembers(){
            redirect('homeadminController/pendingmembers');
        }

        public function homeadmindeniedmembers(){
            redirect('homeadminController/deniedmembers');
        }
        public function adminnewmember(){
            redirect('newmemberController/admin');
        }
       
        public function newmember(){
            redirect('newmemberController/index');
        }
        public function managemember(){
            redirect('managememberController/index');
        }
        public function managealumnimember(){
            redirect('managememberController/managealumnimembers');
        }
        public function editUser(){
            redirect('managememberController/editUser');
        }

        public function editUserelem(){
            redirect('managememberController/editUserelem');
        }
        public function editUserhigh(){
            redirect('managememberController/editUserhigh');
        }
        public function editUsercollege(){
            redirect('managememberController/editUsercollege');
        }
        public function editUserother(){
            redirect('managememberController/editUserother');
        }
        public function editUserorg(){
            redirect('managememberController/editUserorg');
        }
        public function editUserleadership(){
            redirect('managememberController/editUserleadership');
        }
        public function editUsercase(){
            redirect('managememberController/editUsercase');
        }
        public function editUserreason(){
            redirect('managememberController/editUserreason');
        }

        public function admineditUser(){
            redirect('managememberController/admineditUser');
        }

        public function admineditUserelem(){
            redirect('managememberController/admineditUserelem');
        }
        public function admineditUserhigh(){
            redirect('managememberController/admineditUserhigh');
        }
        public function admineditUsercollege(){
            redirect('managememberController/admineditUsercollege');
        }
        public function admineditUserother(){
            redirect('managememberController/admineditUserother');
        }
        public function admineditUserorg(){
            redirect('managememberController/admineditUserorg');
        }
        public function admineditUserleadership(){
            redirect('managememberController/admineditUserleadership');
        }
        public function admineditUsercase(){
            redirect('managememberController/admineditUsercase');
        }
        public function admineditUserreason(){
            redirect('managememberController/admineditUserreason');
        }
        public function adminviewmemberprofile(){
            redirect('managememberController/admineditviewmemberprofile');
        }


        public function schoolyear(){
            redirect('schoolyearController/index');
        }

         public function adminschoolyear(){
            redirect('schoolyearController/admin');
        }

        public function adminaccessrole(){
            redirect('accessroleController/admin');
        }


       
        
        // Reports
        public function allmembersreport(){
            redirect('reportsController/index');
        }

        public function allmembersreportprint(){
            redirect('reportsController/allmembersreportprint');
        }
        public function civilengineeringmembersreport(){
            redirect('reportsController/civilengineeringreport');
        }
        public function civilengineeringmembersreportprint(){
            redirect('reportsController/civilengineeringreportprint');
        }
        public function computerengineeringmembersreport(){
             redirect('reportsController/computerengineeringreport');
        }
        public function computerengineeringmembersreportprint(){
             redirect('reportsController/computerengineeringreportprint');
        }
        public function electricalengineeringmembersreport(){
             redirect('reportsController/electricalengineeringreport');
        }
        public function electricalengineeringmembersreportprint(){
             redirect('reportsController/electricalengineeringreportprint');
        }
        public function electronicsengineeringmembersreport(){
            redirect('reportsController/electronicsengineeringreport');
        }
        public function electronicsengineeringmembersreportprint(){
            redirect('reportsController/electronicsengineeringreportprint');
        }
        public function environmentalengineeringmembersreport(){
            redirect('reportsController/environmentalengineeringreport');
        }
        public function environmentalengineeringmembersreportprint(){
            redirect('reportsController/envrionmentalengineeringreportprint');
        }
        public function industrialengineeringmembersreport(){
            redirect('reportsController/industrialengineeringreport');
        }
        public function industrialengineeringmembersreportprint(){
            redirect('reportsController/industrialengineeringreportprint');
        }
        public function marineengineeringmembersreport(){
            redirect('reportsController/marineengineeringreport');
        }
        public function marineengineeringmembersreportprint(){
            redirect('reportsController/marineengineeringreportprint');
        }
        public function mechanicalengineeringmembersreport(){
            redirect('reportsController/mechanicalengineeringreport');
        }
        public function mechanicalengineeringmembersreportprint(){
            redirect('reportsController/mechanicalengineeringreportprint');
        }




        public function manageAnnouncement(){
            redirect('manageAnnouncementController/index');
        }
        public function editAnnouncement(){
            redirect('manageAnnouncementController/editAnnouncement');
        }
        
/*                     
        public function monitoring(){
            ini_set('max_execution_time', 300);
            redirect('monitoringController/index');
        }
        public function printPDF(){
            $this->load->view('monitoringPDF.php');
        }
 */
        
        // Transation Type
        public function newmemberlist(){
            $this->load->view('TransacTypeDaily.html');
        }
        public function transacTypeWeekly(){
            $this->load->view('TransacTypeWeekly.html');
        }
        public function transacTypeMonthly(){
            $this->load->view('TransacTypeMonthly.html');
        }
        
        // Transaction Status
        public function transacStatusDaily(){
            $this->load->view('TransacStatusDaily.html');
        }
        public function transacStatusWeekly(){
            $this->load->view('TransacStatusWeekly.html');
        }
        public function transacStatusMonthly(){
            $this->load->view('TransacStatusMonthly.html');
        }
    }

?>
