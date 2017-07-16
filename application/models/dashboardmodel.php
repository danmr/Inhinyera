<?php

    class dashboardModel extends CI_Model{
        function __construct() {
            parent::__construct();
        }
        
        public function getCivilEngineering() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Civil Engineering'));
            return $this->db->count_all_results();
        }
        
        public function getComputerEngineering() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Computer Engineering'));
            return $this->db->count_all_results();
        }

        public function getElectricalEngineering() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Electrical Engineering'));
            return $this->db->count_all_results();
        }

        public function getElectronicsEngineering() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Electronics Engineering'));
            return $this->db->count_all_results();
        }

        public function getMarineEngineering() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Marine Engineering'));
            return $this->db->count_all_results();
        }

        public function getMechanicalEngineering() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Mechanical Engineering'));
            return $this->db->count_all_results();
        }

        public function getIndustrialEngineering() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Industrial Engineering'));
            return $this->db->count_all_results();
        }
        public function getEnvironmentalEngineering() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Environmental & Sanitary Engineering'));
            return $this->db->count_all_results();
        }

        public function getCivilEngineeringstudents() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Civil Engineering', 'type'=>'Student'));
            return $this->db->count_all_results();
        }

         public function getComputerEngineeringstudents() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Computer Engineering', 'type'=>'Student'));
            return $this->db->count_all_results();
        }

         public function getElectricalEngineeringstudents() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Electrical Engineering', 'type'=>'Student'));
            return $this->db->count_all_results();
        }

         public function getElectronicsEngineeringstudents() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Electronics Engineering', 'type'=>'Student'));
            return $this->db->count_all_results();
        }


        public function getEnvironmentalEngineeringstudents() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Environmental & Sanitary Engineering', 'type'=>'Student'));
            return $this->db->count_all_results();
        }

        public function getIndustrialEngineeringstudents() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Industrial Engineering', 'type'=>'Student'));
            return $this->db->count_all_results();
        }

        public function getMarineEngineeringstudents() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Marine Engineering', 'type'=>'Student'));
            return $this->db->count_all_results();
        }

        public function getMechanicalEngineeringstudents() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Mechanical Engineering', 'type'=>'Student'));
            return $this->db->count_all_results();
        }

        public function getCivilEngineeringalumni() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Civil Engineering', 'type'=>'Alumni'));
            return $this->db->count_all_results();
        }

         public function getComputerEngineeringalumni() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Computer Engineering', 'type'=>'Alumni'));
            return $this->db->count_all_results();
        }

         public function getElectricalEngineeringalumni() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Electrical Engineering', 'type'=>'Alumni'));
            return $this->db->count_all_results();
        }

         public function getElectronicsEngineeringalumni() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Electronics Engineering', 'type'=>'Alumni'));
            return $this->db->count_all_results();
        }


        public function getEnvironmentalEngineeringalumni() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Environmental & Sanitary Engineering', 'type'=>'Alumni'));
            return $this->db->count_all_results();
        }

        public function getIndustrialEngineeringalumni() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Industrial Engineering', 'type'=>'Alumni'));
            return $this->db->count_all_results();
        }

        public function getMarineEngineeringalumni() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Marine Engineering', 'type'=>'Alumni'));
            return $this->db->count_all_results();
        }

        public function getMechanicalEngineeringalumni() {
            $this->db->from('account_information');
            $this->db->where(array('program'=>'Mechanical Engineering', 'type'=>'Alumni'));
            return $this->db->count_all_results();
        }



        public function getAllCount() {
            $this->db->Select('*');
            $this->db->from('account_information');
            return $this->db->count_all_results();
        }

        public function getTotalMembers() {
            $this->db->Select('*');
            $this->db->from('account_information');
            $this->db->where(array('approvalstatus'=>'Approved'));
            return $this->db->count_all_results();
        }

        public function getTotalApprovedStudents() {
            $this->db->Select('*');
            $this->db->from('account_information');
            $this->db->where(array('approvalstatus'=>'Approved', 'type' => 'Student'));
            return $this->db->count_all_results();
        }

        public function getTotalPendingStudents() {
            $this->db->Select('*');
            $this->db->from('account_information');
            $this->db->where(array('approvalstatus'=>'Pending', 'type' => 'Student'));
            return $this->db->count_all_results();
        }
        public function getTotalDeniedStudents() {
            $this->db->Select('*');
            $this->db->from('account_information');
            $this->db->where(array('approvalstatus'=>'Denied', 'type' => 'Student'));
            return $this->db->count_all_results();
        }


        /****************************  START FETCH OR VIEW FORM DATA ***************/
        public function getUsers()
        {
        $this->data['getUsers']= $this->admin->getUsers();
        $this->load->view('admin', $this->data, FALSE);
        }
        

       

    }
    
?>