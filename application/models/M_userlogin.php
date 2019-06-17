
	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_userlogin extends CI_Model {
	
		function login($username, $password){
			$periksa = $this->db->get_where('users', array('username'=>$username,'password'=>md5($password)));

			// pembuatan kondisi
			if ($periksa->num_rows()>0) {
				return 1;

			}else{
				return 0;
	    	}
		}	
	}
	
	/* End of file M_userlogin.php */
	/* Location: ./application/models/M_userlogin.php */
 ?>