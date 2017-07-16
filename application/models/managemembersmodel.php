<?php
    class managemembersModel extends CI_Model {
        function __construct() {
            parent::__construct();
        }
        // Count all record of table "contact_info" in database.
        public function getData() {
            return $this->db->count_all("account_information");
        }
         public function getschoolyeardata() {
            $query_str = "Select * from schoolyear order by schoolyearID asc ";
            $result = $this->db->query($query_str);
            return $result->result();
        }

        // Fetch data according to per_page limit.
        public function getUsers() {
            $query_str = "Select * from account_information order by lastname asc ";
            $result = $this->db->query($query_str);
            return $result->result();
        }
        public function getUserLimited() {
            $query_str = "Select * from account_information where studentID order by date_connected desc Limit 3 ";
            $result = $this->db->query($query_str);
            return $result->result();
        }

        public function getRegistrations() {
            $query_str = "Select * from account_information where approvalstatus = 'Pending' order by date_connected desc Limit 5 ";
            $result = $this->db->query($query_str);
            return $result->result();
        }

        public function getApprovedMembers() {
            $query_str = "Select * from account_information where approvalstatus = 'Approved' order by studentID asc";
            $result = $this->db->query($query_str);
            return $result->result();
        }
        public function getPendingMembers() {
            $query_str = "Select * from account_information where approvalstatus = 'Pending' order by studentID asc";
            $result = $this->db->query($query_str);
            return $result->result();
        }

        public function getDeniedMembers() {
            $query_str = "Select * from account_information where approvalstatus = 'Denied' order by studentID asc";
            $result = $this->db->query($query_str);
            return $result->result();
        }

        public function getComputerEngineeringList($start_row, $limit) {
            $query_str = "Select * from account_information where program = 'Computer Engineering' order by lastname asc ";
            $result = $this->db->query($query_str);
            return $result->result();
        }

         public function getCivilEngineeringList($start_row, $limit) {

            $query_str = "Select * from account_information where program = 'Civil Engineering' order by lastname asc ";
            $result = $this->db->query($query_str);
            return $result->result();
        }

        public function getElectricalEngineeringList($start_row, $limit) {      
            $query_str = "Select * from account_information where program = 'Electrical Engineering' order by lastname asc ";
            $result = $this->db->query($query_str);
            return $result->result();
        }

        public function getElectronicsEngineeringList($start_row, $limit) {        
            $query_str = "Select * from account_information where program = 'Electronics Engineering' order by lastname asc ";
            $result = $this->db->query($query_str);
            return $result->result();
        }

        public function getEnvironmentalEngineeringList($start_row, $limit) {       
            $query_str = "Select * from account_information where program = 'Environmental Engineering' order by lastname asc ";
            $result = $this->db->query($query_str);
            return $result->result();
        }

        public function getIndustrialEngineeringList($start_row, $limit) {       
            $query_str = "Select * from account_information where program = 'Industrial Engineering' order by lastname asc ";
            $result = $this->db->query($query_str);
            return $result->result();
        }

        public function getMarineEngineeringList($start_row, $limit) {       
            $query_str = "Select * from account_information where program = 'Industrial Engineering' order by lastname asc ";
            $result = $this->db->query($query_str);
            return $result->result();
        }

        public function getMechanicalEngineeringList($start_row, $limit) {       
            $query_str = "Select * from account_information where program = 'Mechanical Engineering' order by lastname asc ";
            $result = $this->db->query($query_str);
            return $result->result();
        }
        
        
        
        public function countUser(){
            $query_str = "Select * from account_information";
            $result = $this->db->query($query_str);
            return $result  ;
        }
        
        
        
        // Once program has been searched
        public function search($studentid){
            $query_str = "Select * from account_information where studentID like '%$studentid%'";
            $result = $this->db->query($query_str);
            return $result;
        }
        
        public function search_User($searchedUser, $accessType, $start_row, $limit){

             //$query_str = "Select * from user "
              //      . "where access_Type = '$accessType' "
             //       . "AND (userName like '%$searchedUser%' "
            //        . "OR fName like '%$searchedUser%' "
             //       . "OR lname like '%$searchedUser%') "
              //      . "order by userName asc OFFSET $start_row rows fetch next $limit rows only";
            $query_str = "Select * from account_information "
                    . "where access_role = '$accessType' "
                    . "AND (studentID like '%$searchedUser%' "
                    . "OR firstname like '%$searchedUser%' "
                    . "OR lastname like '%$searchedUser%') "
                    . "order by studentID asc ";
            $result = $this->db->query($query_str);
            if($result->num_rows()>0){
                return $result->result();            
            }
            else{
                return $result->result();   
            }
        }   
        
        public function search_UserWithoutAccessType($searchedUser, $start_row, $limit){
             //$query_str = "Select * from user "
        //            . "where (userName like '%$searchedUser%' "
      //              . "OR fName like '%$searchedUser%' "
        //            . "OR lname like '%$searchedUser%') "
       //             . "order by userName asc OFFSET $start_row rows fetch next $limit rows only";
            $query_str = "Select * from account_information "
                    . "where (studentID like '%$searchedUser%' "
                    . "OR firstname like '%$searchedUser%' "
                    . "OR lasstname like '%$searchedUser%') "
                    . "order by studentID asc ";
            $result = $this->db->query($query_str);
            if($result->num_rows()>0){
                return $result->result();            
            }
            else{
                return $result->result();   
            }
        }   
        
        public function search_UserWithoutName($accessType, $start_row, $limit){
            //$query_str = "Select * from user "
         //           . "where access_Type = '$accessType' "
         //           . "order by userName asc OFFSET $start_row rows fetch next $limit rows only";
            $query_str = "Select * from account_information "
                    . "where access_role = '$accessType' "
                    . "order by studentID asc ";
            $result = $this->db->query($query_str);
            if($result->num_rows()>0){
                return $result->result();            
            }
            else{
                return $result->result();   
            }
        }   
        
        public function countUserSearch($searchedUser, $accessType){
         //   $query_str = "Select * from user "
         //           . "where access_Type = '$accessType' "
         //           . "AND (userName like '%$searchedUser%' "
         //           . "OR fName like '%$searchedUser%' "
           //         . "OR lname like '%$searchedUser%') "
          //          . "order by userName asc";
            $query_str = "Select * from account_information "
                    . "where access_role = '$accessType' "
                    . "AND (studentID like '%$searchedUser%' "
                    . "OR firstname like '%$searchedUser%' "
                    . "OR lastname like '%$searchedUser%') "
                    . "order by studentID asc";
            $result = $this->db->query($query_str);
            return $result  ;
        }
        
        
        public function countUserSearchWithoutAccessType($searchedUser){
            $query_str = "Select * from account_information "
                    . "where (studentID like '%$searchedUser%' "
                    . "OR firstname like '%$searchedUser%' "
                    . "OR lastname like '%$searchedUser%') "
                    . "order by userName asc";
            $result = $this->db->query($query_str);
            return $result  ;
        }
        public function countUserSearchWithoutName($accessType){
            $query_str = "Select * from account_information "
                    . "where access_role = '$accessType' "
                    . "order by studentID asc";
            $result = $this->db->query($query_str);
            return $result  ;
        }
        
    }
?>