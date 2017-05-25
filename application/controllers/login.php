<?php
    class Login extends CI_Controller{
        
        //This function loads the view Login page
        public function index(){
            $this->load->view('login');
        }
        
        //This function check the username and password and help to login if correct else return invalid users
        public function log(){
           $username = $this->input->post('username');
           $password = $this->input->post('password');
            if($username == 'admin' && $password='admin123'){
                 $this->load->view('admin');
                redirect(base_url().'admin');
            }else{
                $data['error'] = "Invalid Account";
                 $this->load->view('login',$data);
            }   
        }
    }
?>