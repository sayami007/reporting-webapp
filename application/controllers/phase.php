<?php
    class Phase extends CI_Controller{
        public function motherInformation($supervisorId){
            $motherData = array(
                $this->input->post('motherId'),
                $this->input->post('motherName'),
                $this->input->post('motherAge'),
                $this->input->post('motherContact'),
                $supervisorId
            );
            $this->load->model('phaseApi');
            if($this->phaseApi->recordMother($motherData))
                return true;
            else 
                return false;
        }

        public function savephase1($id){
            if(motherInformation($id)):
                $data = array(
                                $this->input->post('motherId'),
                                $this->input->post('phase1Answer1'),
                                $this->input->post('phase1Answer2'),
                                $this->input->post('phase1Answer3'),
                                $this->input->post('phase1Answer4'),
                                $this->input->post('phase1Answer5'),
                                $this->input->post('phase1Answer6'),
                                $this->input->post('phase1Answer7'),
                                $this->input->post('phase1Answer8'),
                                $this->input->post('phase1Answer9'),
                                $this->input->post('phase1Answer10'),
                                $this->input->post('phase1Answer11'),
                                $this->input->post('phase1Answer12'),
                                $this->input->post('phase1Answer13'),
                                $this->input->post('phase1Answer14'),
                                $this->input->post('phase1Answer15'),
                                $this->input->post('phase1Answer16'),
                                $this->input->post('phase1Answer17'),
                                $this->input->post('phase1Answer18'),
                                $this->input->post('phase1Answer10'),
                                $this->input->post('phase1Answer20')
                        );
                $this->load->model('phaseApi');
                $this->phaseApi->insertPhase1($data);
            else:
                echo 'error';
            endif;
        }

        public function savephase2($id){
            if(motherInformation($id)):
                $data = array(
                                $this->input->post('motherId'),
                                $this->input->post('phase2Answer1'),
                                $this->input->post('phase2Answer2'),
                                $this->input->post('phase2Answer3'),
                                $this->input->post('phase2Answer4'),
                                $this->input->post('phase2Answer5'),
                                $this->input->post('phase2Answer6'),
                                $this->input->post('phase2Answer7'),
                                $this->input->post('phase2Answer8'),
                                $this->input->post('phase2Answer9'),
                                $this->input->post('phase2Answer10'),
                                $this->input->post('phase2Answer11'),
                                $this->input->post('phase2Answer12'),
                                $this->input->post('phase2Answer13'),
                                $this->input->post('phase2Answer14'),
                                $this->input->post('phase2Answer15'),
                                $this->input->post('phase2Answer16'),
                                $this->input->post('phase2Answer17'),
                                $this->input->post('phase2Answer18'),
                                $this->input->post('phase2Answer19'),
                                $this->input->post('phase2Answer20'), 
                                $this->input->post('phase2Answer21'),
                                $this->input->post('phase2Answer22'),
                                $this->input->post('phase2Answer23'),
                                $this->input->post('phase2Answer24'),
                                $this->input->post('phase2Answer25'),
                                $this->input->post('phase2Answer26'),
                                $this->input->post('phase2Answer27'),
                                $this->input->post('phase2Answer28'),
                                $this->input->post('phase2Answer29'),
                                $this->input->post('phase2Answer30')
                        );
                $this->load->model('phaseApi');
                $this->phaseApi->insertphase2($data);
            else:
                echo 'error';
            endif;
        }

        public function savePhase3($id){
            if(motherInformation($id)):
                $data = array(
                                $this->input->post('motherId'),
                                $this->input->post('phase3Answer1'),
                                $this->input->post('phase3Answer2'),
                                $this->input->post('phase3Answer3'),
                                $this->input->post('phase3Answer4'),
                                $this->input->post('phase3Answer5'),
                                $this->input->post('phase3Answer6'),
                                $this->input->post('phase3Answer7'),
                                $this->input->post('phase3Answer8'),
                                $this->input->post('phase3Answer9'),
                                $this->input->post('phase3Answer10'),
                                $this->input->post('phase3Answer11'),
                                $this->input->post('phase3Answer12'),
                                $this->input->post('phase3Answer13'),
                                $this->input->post('phase3Answer14'),
                                $this->input->post('phase3Answer15'),
                                $this->input->post('phase3Answer16'),
                                $this->input->post('phase3Answer17'),
                                $this->input->post('phase3Answer18'),
                                $this->input->post('phase3Answer19'),
                                $this->input->post('phase3Answer20'), 
                                $this->input->post('phase3Answer21'),
                                $this->input->post('phase3Answer22'),
                                $this->input->post('phase3Answer23'),
                                $this->input->post('phase3Answer24'),
                                $this->input->post('phase3Answer25'),
                                $this->input->post('phase3Answer26'),
                                $this->input->post('phase3Answer27'),
                                $this->input->post('phase3Answer28'),
                                $this->input->post('phase3Answer29'),
                                $this->input->post('phase3Answer30')
                        );
                $this->load->model('phaseApi');
                $this->phaseApi->insertphase3($data);
            else:
                echo 'error';
            endif;
        }
  
        public function savePhase4($id){
            if(motherInformation($id)):
                $data = array(
                                $this->input->post('motherId'),
                                $this->input->post('phase4Answer1'),
                                $this->input->post('phase4Answer2'),
                                $this->input->post('phase4Answer3'),
                                $this->input->post('phase4Answer4'),
                                $this->input->post('phase4Answer5'),
                                $this->input->post('phase4Answer6'),
                                $this->input->post('phase4Answer7'),
                                $this->input->post('phase4Answer8'),
                                $this->input->post('phase4Answer9'),
                                $this->input->post('phase4Answer10'),
                                $this->input->post('phase4Answer11'),
                                $this->input->post('phase4Answer12'),
                                $this->input->post('phase4Answer13'),
                                $this->input->post('phase4Answer14'),
                                $this->input->post('phase4Answer15'),
                                $this->input->post('phase4Answer16'),
                                $this->input->post('phase4Answer17'),
                                $this->input->post('phase4Answer18'),
                                $this->input->post('phase4Answer19'),
                                $this->input->post('phase4Answer20'), 
                                $this->input->post('phase4Answer21'),
                                $this->input->post('phase4Answer22'),
                                $this->input->post('phase4Answer23'),
                                $this->input->post('phase4Answer24'),
                                $this->input->post('phase4Answer25'),
                                $this->input->post('phase4Answer26'),
                                $this->input->post('phase4Answer27'),
                                $this->input->post('phase4Answer28'),
                                $this->input->post('phase4Answer29'),
                                $this->input->post('phase4Answer30')
                        );
                $this->load->model('phaseApi');
                $this->phaseApi->insertphase4($data);
            else:
                echo 'error';
            endif;
        }
    }


?>
