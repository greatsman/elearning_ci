<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //
        $this->load->library('form_validation');
        //
    }

    public function index()
    {
        $data = array(
            'title' => 'Home',
        );
        $this->load->view('frontend/index', $data);
    }
}
        
    /* End of file  Home.php */
