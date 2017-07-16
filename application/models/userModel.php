<?php 

    class userModel extends CI_Model{
        
        protected $table = 'Account_Information';
        protected $college_table = 'education_college';
        protected $elementary_table = 'education_elementary';
        protected $highschool_table = 'education_highschool';
    
        protected $other_awards_table = 'other_awards';
        protected $org_table = 'organization';
        protected $leadership_table = 'leadership';
        protected $memberslog_table = 'memberslog';

        function __construct() {
            parent::__construct();
        }
        
        // Student Table
        public function checkstudent($studentid, $password){
            $this->db->from('Account_Information');
            $this->db->where('studentID', $studentid);
            $this->db->where('password', $password);
            $result = $this->db->get();
            
            if($result->num_rows() > 0 ){
                return $result->result();
            }
            else{
                return FALSE;
            }
        }

        // Admin Table
        public function checkadmin($username, $password){
            $this->db->from('admin');
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $result = $this->db->get();
            
            if($result->num_rows() > 0 ){
                return $result->result();
            }
            else{
                return FALSE;
            }
        }

        public function viewmemberprofile_a($studentid, $params) {
            $query_str = "Select * from account_information as a \n"
                    . "INNER JOIN education_college as ec ON a.studentID = ec.studentID \n"
                    . "INNER JOIN education_elementary as ee ON a.studentID = ee.studentID \n"
                    . "INNER JOIN education_highschool as eh ON a.studentID = eh.studentID \n"
                    . "INNER JOIN leadership as l ON a.studentID = l.studentID \n"
                    . "INNER JOIN other_awards as oa ON a.studentID = oa.studentID \n"
                    . "WHERE a.studentID = '$studentid'";
                    
            $result = $this->db->query($query_str);
            return $result  ;

        }

        public function getschoolyear() {
            $this->db->from('schoolyear');
            $this->db->where(array('current'=>'Yes'));
            $query = $this->db->get();
            return $query;
        }

        public function updatememberschoolyear($studentid, $params){

            $fields = array(
                'infoUpdateDate' => date('Y-m-d H:i:s'),
                'schoolyear' => $params['schoolyear']
            );
            $this->db->set($fields);
            $this->db->where('studentid', $studentid);
            $this->db->update('Account_Information');
           
        }

        public function Insertmemberslog($params){

            $fields = array(
                'studentID' => $params['studentid'],
                'memberdatetime' => date('Y-m-d H:i:s'),
                'schoolyear' => $params['schoolyear']
            );
            $this->db->insert($this->memberslog_table, $fields);
           
        }
        
        public function updateAdminPass($params, $userID){
            $this->db->set('password', $params);
            $this->db->where('studentID', $userID);
            $this->db->update('Account_Information');
        }
        
        
        // User Table
        
        public function InsertInfo($params){
            $fields = array(
                'studentid' => $params['studentid'], 
                'firstname' => $params['firstname'],
                'middlename' => $params['middlename'],
                'lastname' => $params['lastname'],
                'program' => $params['program'],
                'campus' => $params['campus'],
                'birthday' => $params['birthday'],
                'birthplace' => $params['birthplace'],
                'completeaddress' => $params['completeaddress'],
                'outsideaddress' => $params['outsideaddress'],
                'fathername' => $params['fathername'],
                'fatheroccupation' => $params['fatheroccupation'],
                'mothername' => $params['mothername'],
                'motheroccupation' => $params['motheroccupation'],
                'email' => $params['email'],
                'contact' => $params['contact'],
                'password' => $params['user_pass'],
                'date_connected' => date('Y-m-d H:i:s'),
                'infoUpdateDate' => date('Y-m-d H:i:s'),
                'schoolyear' => $params['schoolyear'],
                'access_role' => $params['access_role'],
                'type' => $params['type'],
                'reason' => $params['reason'],
                'caseexplain' => $params['caseexplain'],
                'approvalstatus' => $params['approvalstatus'],



            );
            $this->db->insert($this->table, $fields);
        }

        public function Insertelementary($params){

            $elementaryfields = array(
                'studentid' => $params['studentid'], 
                'elementary' => $params['elementary'],
                'achievementelementary' => $params['achievementelementary'],
                'achievementelementary2' => $params['achievementelementary2'],
                'achievementelementary3' => $params['achievementelementary3'],
                'achievementelementary4' => $params['achievementelementary4'],
                'achievementelementary5' => $params['achievementelementary5'],
                'achievementelementary6' => $params['achievementelementary6'],
                'achievementelementary7' => $params['achievementelementary7'],
                'achievementelementary8' => $params['achievementelementary8'],
                'achievementelementary9' => $params['achievementelementary9'],
                'achievementelementary10' => $params['achievementelementary10']
               
            );
            $this->db->insert($this->elementary_table, $elementaryfields);
        }

        public function Inserthighschool($params){

            $highschoolfields = array(
                'studentid' => $params['studentid'], 
                'highschool' => $params['highschool'],
                'achievementhigh' => $params['achievementhigh'],
                'achievementhigh2' => $params['achievementhigh2'],
                'achievementhigh3' => $params['achievementhigh3'],
                'achievementhigh4' => $params['achievementhigh4'],
                'achievementhigh5' => $params['achievementhigh5'],
                'achievementhigh6' => $params['achievementhigh6'],
                 'achievementhigh7' => $params['achievementhigh7'],
                'achievementhigh8' => $params['achievementhigh8'],
                'achievementhigh9' => $params['achievementhigh9'],
                'achievementhigh10' => $params['achievementhigh10']
               
            );
            $this->db->insert($this->highschool_table, $highschoolfields);
        }

         public function Insertcollege($params){

            $collegefields = array(
                'studentid' => $params['studentid'], 
                'college' => $params['college'],
                'achievementcollege' => $params['achievementcollege'],
                'achievementcollege2' => $params['achievementcollege2'],
                'achievementcollege3' => $params['achievementcollege3'],
                'achievementcollege4' => $params['achievementcollege4'],
                'achievementcollege5' => $params['achievementcollege5'],
                'achievementcollege6' => $params['achievementcollege6'],
                'achievementcollege7' => $params['achievementcollege7'],
                'achievementcollege8' => $params['achievementcollege8'],
                'achievementcollege9' => $params['achievementcollege9'],
                'achievementcollege10' => $params['achievementcollege10']
               
               
            );
            $this->db->insert($this->college_table, $collegefields);
        }


     
      

        public function Insertotherawards($params){

             $fields = array(
                'studentid' => $params['studentid'], 
                'otheraward' => $params['otheraward'],
                'otheraward2' => $params['otheraward2'],
                'otheraward3' => $params['otheraward3'],
                'otheraward4' => $params['otheraward4'],
                'otheraward5' => $params['otheraward5'],
                'otheraward6' => $params['otheraward6'],
                'otheraward7' => $params['otheraward7'],
                'otheraward8' => $params['otheraward8'],
                'otheraward9' => $params['otheraward9'],
                'otheraward10' => $params['otheraward10']
                
            );
            $this->db->insert($this->other_awards_table, $fields);
        }

        public function Insertorg($params){

             $fields = array(
                'studentid' => $params['studentid'], 
                'organization' => $params['organization'],
                'organization2' => $params['organization2'],
                'organization3' => $params['organization3'],
                'organization4' => $params['organization4'],
                'organization5' => $params['organization5'],
                'organization6' => $params['organization6'],
                'organization7' => $params['organization7'],
                'organization8' => $params['organization8'],
                'organization9' => $params['organization9'],
                'organization10' => $params['organization10'],
                'position' => $params['position'],
                'position2' => $params['position2'],
                'position3' => $params['position3'],
                'position4' => $params['position4'],
                'position5' => $params['position5'],
                'position6' => $params['position6'],
                'position7' => $params['position7'],
                'position8' => $params['position8'],
                'position9' => $params['position9'],
                'position10' => $params['position10']
               
                
            );
            $this->db->insert($this->org_table, $fields);
        }

        public function Insertleadership($params){

             $fields = array(
                'studentid' => $params['studentid'], 
                'activity' => $params['activity'],
                'activity2' => $params['activity2'],
                'activity3' => $params['activity3'],
                'activity4' => $params['activity4'],
                'activity5' => $params['activity5'],
                'activity6' => $params['activity6'],
                'activity7' => $params['activity7'],
                'activity8' => $params['activity8'],
                'activity9' => $params['activity9'],
                'activity10' => $params['activity10'],
                'venue' => $params['venue'],
                'venue2' => $params['venue2'],
                'venue3' => $params['venue3'],
                'venue4' => $params['venue4'],
                'venue5' => $params['venue5'],
                'venue6' => $params['venue6'],
                'venue7' => $params['venue7'],
                'venue8' => $params['venue8'],
                'venue9' => $params['venue9'],
                'venue10' => $params['venue10'],
                'date' => $params['date'],
                'date2' => $params['date2'],
                'date3' => $params['date3'],
                'date4' => $params['date4'],
                'date5' => $params['date5'],
                'date6' => $params['date6'],
                'date7' => $params['date7'],
                'date8' => $params['date8'],
                'date9' => $params['date9'],
                'date10' => $params['date10']   

                
            );
            $this->db->insert($this->leadership_table, $fields);
        }

        public function check_exists($studentid){
            $this->db->from('Account_Information');
            $this->db->where('studentID', $studentid);
            $result = $this->db->get();
            
            if($result->num_rows() >0){
                return FALSE;
            }
            else{
                return TRUE;
            }
        }
        
        public function validate($studentid, $password){
            $this->db->from('Account_Information');
            $this->db->where('studentid', $studentid);
            $this->db->where('password', $password);
            $result = $this->db->get();
            
            if($result->num_rows() > 0 ){
                return $result->result();
            }
            else{
                return FALSE;
            }
        }
        
        public function updatePass($params, $studentid){
            $this->db->set('password', $params);
            $this->db->where('studentID', $studentid);
            $this->db->update($this->table);
            
        }
        
        public function getUsers(){
            $this->load->database();
            $query = $this->db->get('Account_Information');
            return $query->result();
        }

        public function getschoolyeardata(){
            $this->db->from('schoolyear');
            $query = $this->db->get();
            return $query->result();
        }

       
        //LIST PER DEPARTMENT

        public function getCivilEngineeringList() {
            $this->db->from('Account_Information');
            $this->db->where(array('program'=>'Civil Engineering'));
            $query = $this->db->get();
            return $query->result();
        }

        public function getComputerEngineeringList() {
            $this->db->from('Account_Information');
            $this->db->where(array('program'=>'Computer Engineering'));
            $query = $this->db->get();
            return $query->result();
        }
        public function getElectricalEngineeringList() {
            $this->db->from('Account_Information');
            $this->db->where(array('program'=>'Electrical Engineering'));
            $query = $this->db->get();
            return $query->result();
        }
        public function getElectronicsEngineeringList() {
            $this->db->from('Account_Information');
            $this->db->where(array('program'=>'Electronics Engineering'));
            $query = $this->db->get();
            return $query->result();
        }
        public function getEnvironmentalEngineeringList() {
            $this->db->from('Account_Information');
            $this->db->where(array('program'=>'Environmental Engineering'));
            $query = $this->db->get();
            return $query->result();
        }
        public function getIndustrialEngineeringList() {
            $this->db->from('Account_Information');
            $this->db->where(array('program'=>'Industrial Engineering'));
            $query = $this->db->get();
            return $query->result();
        }
        public function getMarineEngineeringList() {
            $this->db->from('Account_Information');
            $this->db->where(array('program'=>'Marine Engineering'));
            $query = $this->db->get();
            return $query->result();
        }
        public function getMechanicalEngineeringList() {
            $this->db->from('Account_Information');
            $this->db->where(array('program'=>'Mechanical Engineering'));
            $query = $this->db->get();
            return $query->result();
        }
        
        public function updateUserWithPassword($studentid, $params){
//            $this->db->set('userName', $userName);
//            $this->db->set('fName', $fName);
//            $this->db->set('mName', $mName);
//            $this->db->set('lName', $lName);
//            $this->db->set('password', $password);
//            $this->db->set('access_Type', $access_Type);
//            $this->db->set('createdDate', $createdDate);
            $fields = array(
                'studentid' => $params['studentid'], 
                'firstname' => $params['firstname'],
                'middlename' => $params['middlename'],
                'lastname' => $params['lastname'],
                'password' => $params['user_pass'],
                'access_role' => $params['access_role'],
                'infoUpdateDate' => date('Y-m-d H:i:s')
            );
            $this->db->set($fields);
            $this->db->where('studentid', $studentid);
            $this->db->update($this->table);
        }

        public function updateInformation($studentid, $params){

            $fields = array (
                'studentid' => $params['studentid'],
                'firstname' => $params['firstname'],
                'middlename' => $params['middlename'],
                'lastname' => $params['lastname'],
                'program' => $params['program'],
                'campus' => $params['campus'],
                'birthday' => $params['birthday'],
                'birthplace' => $params['birthplace'],
                'email' => $params['email'],
                'contact' => $params['contact'],
                'fathername' => $params['fathername'],
                'mothername' => $params['mothername'],
                'motheroccupation' => $params['motheroccupation'],
                'fatheroccupation' => $params['fatheroccupation'],
                'completeaddress' => $params['completeaddress'],
                'outsideaddress' => $params['outsideaddress'],
                'infoUpdateDate' => date('Y-m-d H:i:s')


                );
            $this->db->set($fields);
            $this->db->where('studentid', $studentid);
            $this->db->update($this->table);
        }

        public function updateInformationelementary($studentid, $params){

            $fields = array (
                'elementary' => $params['elementary'],
                'achievementelementary' => $params['achievementelementary'],
                'achievementelementary2' => $params['achievementelementary2'],
                'achievementelementary3' => $params['achievementelementary3'],
                'achievementelementary4' => $params['achievementelementary4'],
                'achievementelementary5' => $params['achievementelementary5'],
                'achievementelementary6' => $params['achievementelementary6'],
                'achievementelementary7' => $params['achievementelementary7'],
                'achievementelementary8' => $params['achievementelementary8'],
                'achievementelementary9' => $params['achievementelementary9'],
                'achievementelementary10' => $params['achievementelementary10'],
              


                );

           
            $this->db->set($fields);
            $this->db->where('studentid', $studentid);
            $this->db->update('education_elementary');

           
        }
          public function updateInformationhigh($studentid, $params){

            $fields = array (
                'highschool' => $params['highschool'],
                'achievementhigh' => $params['achievementhigh'],
                'achievementhigh2' => $params['achievementhigh2'],
                'achievementhigh3' => $params['achievementhigh3'],
                'achievementhigh4' => $params['achievementhigh4'],
                'achievementhigh5' => $params['achievementhigh5'],
                'achievementhigh6' => $params['achievementhigh6'],
                'achievementhigh7' => $params['achievementhigh7'],
                'achievementhigh8' => $params['achievementhigh8'],
                'achievementhigh9' => $params['achievementhigh9'],
                'achievementhigh10' => $params['achievementhigh10'],
              
              


                );

           
            $this->db->set($fields);
            $this->db->where('studentid', $studentid);
            $this->db->update('education_highschool');

           
        }

          public function updateInformationcollege($studentid, $params){

            $fields = array (
                'college' => $params['college'],
                'achievementcollege' => $params['achievementcollege'],
                'achievementelementary2' => $params['achievementcollege2'],
                'achievementelementary3' => $params['achievementcollege3'],
                'achievementelementary4' => $params['achievementcollege4'],
                'achievementelementary5' => $params['achievementcollege5'],
                'achievementelementary6' => $params['achievementcollege6'],
                'achievementelementary7' => $params['achievementcollege7'],
                'achievementelementary8' => $params['achievementcollege8'],
                'achievementelementary9' => $params['achievementcollege9'],
                'achievementelementary10' => $params['achievementcollege10'],
              
              


                );

           
            $this->db->set($fields);
            $this->db->where('studentid', $studentid);
            $this->db->update('education_college');

           
        }
        
          public function updateInformationother($studentid, $params){

            $fields = array (
                'otheraward' => $params['otheraward'],
                'otheraward2' => $params['otheraward2'],
                'otheraward3' => $params['otheraward3'],
                'otheraward4' => $params['otheraward4'],
                'otheraward5' => $params['otheraward5'],
                'otheraward6' => $params['otheraward6'],
                'otheraward7' => $params['otheraward7'],
                'otheraward8' => $params['otheraward8'],
                'otheraward9' => $params['otheraward9'],
                'otheraward10' => $params['otheraward10']

                );

           
            $this->db->set($fields);
            $this->db->where('studentid', $studentid);
            $this->db->update('other_awards');

           
        }

         public function updateInformationorg($studentid, $params){

             $fields = array(
                'studentid' => $params['studentid'], 
                'organization' => $params['organization'],
                'organization2' => $params['organization2'],
                'organization3' => $params['organization3'],
                'organization4' => $params['organization4'],
                'organization5' => $params['organization5'],
                'organization6' => $params['organization6'],
                'organization7' => $params['organization7'],
                'organization8' => $params['organization8'],
                'organization9' => $params['organization9'],
                'organization10' => $params['organization10'],
                'position' => $params['position'],
                'position2' => $params['position2'],
                'position3' => $params['position3'],
                'position4' => $params['position4'],
                'position5' => $params['position5'],
                'position6' => $params['position6'],
                'position7' => $params['position7'],
                'position8' => $params['position8'],
                'position9' => $params['position9'],
                'position10' => $params['position10']
               
               
                
            );
            $this->db->set($fields);
            $this->db->where('studentid', $studentid);
            $this->db->update('organization');
            
        }

        public function updateInformationleadership($studentid, $params){

             $fields = array(
                'studentid' => $params['studentid'], 
                'activity' => $params['activity'],
                'activity2' => $params['activity2'],
                'activity3' => $params['activity3'],
                'activity4' => $params['activity4'],
                'activity5' => $params['activity5'],
                'activity6' => $params['activity6'],
                'activity7' => $params['activity7'],
                'activity8' => $params['activity8'],
                'activity9' => $params['activity9'],
                'activity10' => $params['activity10'],
                'venue' => $params['venue'],
                'venue2' => $params['venue2'],
                'venue3' => $params['venue3'],
                'venue4' => $params['venue4'],
                'venue5' => $params['venue5'],
                'venue6' => $params['venue6'],
                'venue7' => $params['venue7'],
                'venue8' => $params['venue8'],
                'venue9' => $params['venue9'],
                'venue10' => $params['venue10'],
                'date' => $params['date'],
                'date2' => $params['date2'],
                'date3' => $params['date3'],
                'date4' => $params['date4'],
                'date5' => $params['date5'],
                'date6' => $params['date6'],
                'date7' => $params['date7'],
                'date8' => $params['date8'],
                'date9' => $params['date9'],
                'date10' => $params['date10']


                
            );
            $this->db->set($fields);
            $this->db->where('studentid', $studentid);
            $this->db->update('leadership');
        }

        public function updateInformationcase($studentid, $params){

             $fields = array (
                'caseexplain' => $params['caseexplain'],



                );
            $this->db->set($fields);
            $this->db->where('studentid', $studentid);
            $this->db->update($this->table);
        }

        public function updateInformationreason($studentid, $params){

            $fields = array (
                'reason' => $params['reason'],
 


                );
            $this->db->set($fields);
            $this->db->where('studentid', $studentid);
            $this->db->update($this->table);
        }
        
        public function updateUserWithoutPassword($studentid, $params){

            $fields = array(
                'username' => $params['username'], 
                'firstname' => $params['firstname'],
                'middlename' => $params['middlename'],
                'lastname' => $params['lastname'],
                'access_role' => $params['access_role'],
                'infoUpdateDate' => date('Y-m-d H:i:s')
            );
            $this->db->set($fields);
            $this->db->where('studentid', $studentid);
            $this->db->update($this->table);
        }

        
    }
    
?>