<?php
    class Add extends CI_Controller{
      public function index(){
        $this->load->library('refresh');
        $this->refresh->rp();
      }
    }

?>
