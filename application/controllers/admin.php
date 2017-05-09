<?php
    class Admin extends CI_Controller{        
        public function index(){
            $data['value'] = $this->getArray();
            $this->load->view('admin',$data);    
         }


         public function getArray(){
             $this->load->model('supervisor');
             $val=$this->supervisor->getInfo();
            return $val;
         }
    }
?>