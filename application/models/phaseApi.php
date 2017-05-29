<?php
    class PhaseApi extends CI_Model{
        public function insertPhase1($data){
            $this->load->database();
            $this->db->insert('phase1',$data);
        }

        public function insertPhase2($data){
            $this->load->database();
            $this->db->insert('phase2',$data);
        }

        public function insertPhase3($data){
            $this->load->database();
            $this->db->insert('phase3',$data);
        }

        public function insertPhase4($data){
            $this->load->database();
            $this->db->insert('phase4',$data);
        }

        public function recordMother($data){
            $this->load->database();
            $this->db->insert('mother',$data);
        }
    }

?>