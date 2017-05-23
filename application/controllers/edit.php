<?php
    class Edit extends CI_Controller{
       //This function retrive ID and Name of supervisor from the Model
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

        //This function updates the supervisor information according to the their ID
        public function editSupervisor(){
            $data =array(
                  'supervisorPhone' =>   $this->input->post('supervisorPhone'),
                  'usernameText' =>   $this->input->post('usernameText'),
                  'passwordText' =>   $this->input->post('passwordText'),      
                  'districtId' =>   $this->input->post('districtId')
            );
            $supervisorId = $this->input->post('supervisorId');
            $this->load->model('supervisor');
            $this->supervisor->updateSupervisor($data,$supervisorId); 
            $this->index();
         }

         //This function deletes the supervisor from the database
         public function deleteSupervisor(){
            $supervisorId = $this->input->get('id');
            $this->load->model('supervisor');
            $this->supervisor->delSupervisor($supervisorId);
            $this->load->view('delete');
         }
    }
?>