<?php
    class Event extends CI_Controller{
        public function index(){

        }

        public function event1($supervisorId){
            $data = array(
                        $this->input->post('id'),
                        $supervisorId,
                        $this->input->post('supervisorPos'),
                        $this->input->post('date'),
                        $this->input->post('chairperson'),
                        $this->input->post('maleNumber'),
                        $this->input->post('femaleNumber'),
                        $this->input->post('officeRepresented'),
                        $this->input->post('agenda'),
                        $this->input->post('decision'),
                        1
                    );
        }
        
        public function event2($supervisorId){
            $data = array(
                $this->input->post('id'),
                2,
                $supervisorId,
                $this->input->post('supervisorPos'),
                $this->input->post('date'),
                $this->input->post('startDate'),
                $this->input->post('endDate'),
                $this->input->post('male'),
                $this->input->post('female')
            );
        }

        public function event3($supervisorId){
             $data = array(
                $this->input->post('id'),
                3,
                $supervisorId,
                $this->input->post('supervisorPos'),
                $this->input->post('date'),
                $this->input->post('chairperson'),
                $this->input->post('male'),
                $this->input->post('female')
            );
        }
        
        public function event4($supervisorId){
         $data = array(
                $this->input->post('id'),
                4,
                $supervisorId,
                $this->input->post('supervisorPos'),
                $this->input->post('date'),
                $this->input->post('chairPerson'),
                $this->input->post('male'),
                $this->input->post('female'),
                $this->input->post('office'),
                $this->input->post('agenda'),
                $this->input->post('decision'),
            );
        }
        public function event5($supervisorId){
         $data = array(
                $this->input->post('id'),
                5,
                $this->input->post('date'),
                $supervisorId,
                $this->input->post('supervisorPos'),
                $this->input->post('startDate'),
                $this->input->post('endDate'),
                $this->input->post('male'),
                $this->input->post('female')
            );
        }
        public function event6($supervisorId){
         $data = array(
                $this->input->post('id'),
                6,
                $supervisorId,
                $this->input->post('supervisorPos'),
                $this->input->post('date'),
                $this->input->post('startDate'),
                $this->input->post('endDate'),
                $this->input->post('total')
            );
        }
        
        public function event7a($supervisorId){
        
        }public function event7b($supervisorId){
        
        }
        public function event7c($supervisorId){
        
        }
        public function event7d($supervisorId){
        
        }
        public function event7e($supervisorId){
        
        }
        public function event7f($supervisorId){
        
        }
        public function event7g($supervisorId){
        
        }
        public function event7h($supervisorId){
        
        }
        public function event8($supervisorId){
        
        }
        public function event9($supervisorId){
        
        }
        public function event10($supervisorId){
        
        }
        public function event11($supervisorId){
        
        }
        public function event12($supervisorId){
        
        }
    }
?>
