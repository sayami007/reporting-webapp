<?php
    class Api extends CI_Controller{
        private $username;
        private $password;
        private $supervisorId;

        private function setUsername($username){   $this->username = $username;}
        private function setPassword($password){     $this->password = $password;}
        private function setsupervisorId($supervisorId){     $this->supervisorId = $supervisorId;}

        public function getUsername(){           return $this->username;}
        public function getPassword(){       return $this->password;}
        public function getsupervisorId(){       return $this->supervisorId;}

        //Api Starts from here
        public function index(){
            $this->setUsername($this->input->get('usr'));
            $this->setPassword($this->input->get('pwd'));
            if($this->verifyPassword()){
                $this->load->model('userApi');
                $result = $this->userApi->getDistrict($this->getsupervisorId());
                $this->vdcApi($this->getsupervisorId(),$result);
            }else{
                $message = array(
                    'message' => 'User not found',
                    'error' => 'User error'
                );
                echo json_encode($message);
            }
        }
    
        //Verify Password
        public function verifyPassword(){
            $this->load->model('userApi');
            $result = $this->userApi->verify();
            foreach($result as $res):
                if($this->getUsername() == $res->usernameText && $this->getPassword() == $res->passwordText):
                    $this->setsupervisorId($res->supervisorId);
                    return true;
                endif;
            endforeach;
            return false;
        }
    
        //VDC API
        public function vdcApi($id,$result){
            $name = array();
            $healthPost = array();
            foreach($result as $vdc):
                if(!empty($vdc)):
                    array_push($name,$vdc->vdcName);
                    array_push($healthPost,$vdc->vdcHealthPost);
                endif;
            endforeach;

            $value = array();
            for($i = 0; $i < count($name); $i++):
                array_push($value,array('vdcName'=>$name[$i],'vdcHealthpost'=>$healthPost[$i]));
            endfor;

            $final = array('studentName' => $id,'vdc' => $value);
            echo json_encode($final);
        }
    }    

