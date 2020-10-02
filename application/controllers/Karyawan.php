<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();		
		$this->load->model('M_karyawan');
	}

	function index()
	{
		$data['karyawan'] = $this->M_karyawan->get_data();
		$this->load->view('part/header');
		$this->load->view('vw_karyawan.php',$data);
		$this->load->view('part/footer');
	}



}