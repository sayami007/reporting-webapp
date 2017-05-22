<?php
    class Edit extends CI_Controller{
        public function index(){
            $this->load->model('supervisor');
            $supervisors = $this->supervisor->provideSupervior();
            $data['supervisor'] = $supervisors;
            $this->load->view('edit', $data);
        }

        //Select the Supervisor from the database;
        public function makeEdit(){
            $supervisorId = $this->input->get('id');
            $this->load->model('supervisor');
            $data['v'] =  $this->supervisor->getSupervisor($supervisorId);
            $this->load->view('editSupervisor',$data);
        }

        //Refine id from string
        public function getSupervisorId($text){
            $txt = "";
            for ($i = 0; $i<strlen($text) ; $i++) :
                if(is_numeric($text[$i]))
                    $txt .= $text[$i];
            endfor;
            return $txt;
        }
    }
?>