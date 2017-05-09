<?php
    class Edit extends CI_Controller{
        public function index(){
            $this->load->model('supervisor');
            $supervisors = $this->supervisor->provideSupervior();
            $data['supervisor'] = $supervisors;
            $this->load->view('edit', $data);
        }

        public function makeEdit(){
            $text = $this->input->post('value');
            $supervisorId = $this->getSupervisorId($text);
           
            $this->load->model('supervisor');
            $data['v'] =  $this->supervisor->getSupervisor($supervisorId);
            $this->load->view('editSupervisor',$data);
        }



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