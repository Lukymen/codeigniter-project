<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function index()
	{
        $this->load->view('part/header');
        $this->load->view('part/home');
        $this->load->view('part/footer');
    }


    public function tentangkami()
	{
        $this->load->view('part/header');
        $this->load->view('part/tentangkami');
        $this->load->view('part/footer');
    }

}
