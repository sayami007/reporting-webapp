<?php
    class Login extends CI_Controller{
        
        public function index(){
            $this->load->view('login');
        }
        
        public function log(){
           $username = $this->input->post('username');
           $password = $this->input->post('password');
            if($username == 'admin' && $password='admin123'){
                 $this->load->view('admin');
                redirect(base_url().'index.php/admin');
            }else{
                $data['error'] = "Invalid Account";
                 $this->load->view('login',$data);
            }   
        }
    }
?>