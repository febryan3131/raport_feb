<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_mapel extends CI_Controller {

  
  public function index()
  {
    // var_dump('haahha');
    // exit();
   $this->load->view('bagian/head');
    $this->load->view('bagian/sidebar');
    $this->load->view('bagian/navbar');

    $this->load->view('tambah/mapel');

    $this->load->view('bagian/js');
    $this->load->view('bagian/footer');
  }
}
?>