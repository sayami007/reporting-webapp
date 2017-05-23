<?php
    class Admin extends CI_Controller{   

        //This function call the function getInfos and send the information to the view     
        public function index(){
            $data['value'] = $this->getInfos();
            $this->load->view('admin',$data);    
         }

         //This function retrive the information about the supervisor from the Model supervisor
         public function getInfos(){
             $this->load->model('supervisor');
             $val=$this->supervisor->getInfo();
             return $val;
         }
    }
?>