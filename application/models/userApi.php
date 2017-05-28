<?php
    class UserApi extends CI_Model{
        private $vdc = array(null);
        
        //Use for username verification
        public function verify(){
            $this->load->database();
            $query = $this->db->select('supervisorId,usernameText,passwordText')->get('supervisor');
            $result = $query->result();
            $this->db->close();
            return $result;
        }

        //Get the vdc name and healthpost from the database
        public function getDistrict($id){
            $this->load->database();
            $query = $this->db->select('districtId')->get_where('supervisor',array('supervisorId'=>$id));
            $result = $query->result();
            foreach($result as $res):
                $query2 = $this->db->select('vdcName,vdcHealthPost')->get_where('vdc',array('districtId'=>$res->districtId));
                foreach($query2->result() as $res2):
                    array_push($this->vdc,$res2);
                endforeach;
            endforeach;
            return $this->vdc;
        }
    }
?>