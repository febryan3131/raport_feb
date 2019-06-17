 
 	<?php
 	defined('BASEPATH') OR exit('No direct script access allowed');
 	
 	class Login extends CI_Controller {
 	
 	public function __construct(){
 		parent::__construct();
 		//Do your magic here
 		 $this->load->model('M_userlogin');
 	}
 	 function login(){
 	 	if (isset($_post['submit'])) {
 	 		$username = $this->input->post['username'];
 	 		$password = $this->input->post['password'];

 	 		$berhasil = $this->M_userlogin->login($username,$password);
// kondisi
 	 		if ($berhasil == 1) {
 	 			
 	 			$this->session->set_userdata(array('status_login'=>'sukses'));
 	 			redirect('C_dashboard');
 	 		}else{
 	 			redirect('auth/login');
 	 		}

 	 	}else{
 	 		$this->load->view('form_login');
 	 		}
 	 	}

 	 	function logout(){
 	 		$this->session->sess_destroy();

 	 		redirect('isi mau diarahkan kemana setelah logout');
 	 		// kalau kosong dia ke beranda
 	 	}
 	 }
 	
 	
 	/* End of file login.php */
 	/* Location: ./application/controllers/login/login.php */
 ?>