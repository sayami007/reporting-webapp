<?php
    class Supervisor extends CI_Model{
     
        //This function retrive the information about supervisor from database
        public function getInfo(){
            $this->load->database();
            $q = $this->db->query("SELECT supervisorId,supervisorName,supervisorPhone,districtName,usernameText  FROM supervisor ,district WHERE
supervisor.districtId = district.districtId");
            return $val = $q->result();
        }

        //This function retrive Id  and Name from the supervisor database
        public function provideSupervior(){
            $this->load->database();
            $query = $this->db->query("SELECT supervisorId, supervisorName FROM supervisor" );
            return $val = $query->result();
        }

        //Retrieve the total information about the supervisor 
        public function getSupervisor($supervisorId){
            if($supervisorId == ""){

            }else{
                $this->load->database();    
                $q = $this->db->query("SELECT * FROM supervisor WHERE supervisorId=$supervisorId");
                $values = $q->result();
                return $values;
            }
        }

        //Update the supervisor information based on their ID
        public function updateSupervisor($data,$id){
            $this->load->database();
            $this->db->where('supervisorId',$id);
            $this->db->update('supervisor',$data);
         }
         
         //Delete the supervisor information based on their ID
         public function delSupervisor($supervisorId){
             $this->load->database();
             $this->db->where('supervisorId', $supervisorId);
            $this->db->delete('supervisor');
         }

         
    }
?>