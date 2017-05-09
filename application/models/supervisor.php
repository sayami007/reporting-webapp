<?php
    class Supervisor extends CI_Model{
        public function getInfo(){
            $this->load->database();
            $q = $this->db->query("SELECT supervisorId,supervisorName,supervisorPhone,districtName,usernameText  FROM Supervisor ,District WHERE
Supervisor.districtId = District.districtId");
            return $val = $q->result();
        }

        public function provideSupervior(){
            $this->load->database();
            $query = $this->db->query("SELECT supervisorId, supervisorName FROM Supervisor" );
            return $val = $query->result();
        }

        public function editSupervisor($supervisorId){
            $this->load->database();
        }

        public function getSupervisor($supervisorId){
            if($supervisorId == ""){

            }else{
                $this->load->database();    
                $q = $this->db->query("SELECT * FROM Supervisor WHERE supervisorId=$supervisorId");
                $values = $q->result();
                return $values;
            }
        }
    }
?>