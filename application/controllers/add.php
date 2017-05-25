<?php
    class Add extends CI_Controller{
     //Shows the add page in the VIEW
      public function index(){
        $this->load->library('refresh');
        $this->refresh->rp();
      }
    }
?>
