<?php



    class Auth extends CI_Controller{
        public function index()
        {
            $t['title'] = 'Covid-19 Dashboard Information';
            $this->load->view('main/auth',$t);
        }
    }