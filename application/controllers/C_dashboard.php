<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	
	public function index()
	{
		// var_dump('haahha');
		// exit();
		$this->load->view('bagian/head');
		$this->load->view('bagian/sidebar');
		$this->load->view('bagian/navbar');
		$this->load->view('menu/aaa');

		$this->load->view('bagian/js');
		$this->load->view('bagian/footer');
	}
}
?>