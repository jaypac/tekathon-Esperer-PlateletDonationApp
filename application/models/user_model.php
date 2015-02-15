<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class User_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}


	function authenticate_login($email, $password) {

		$this->load->database();

		$params = array($email , $password);
		$sql = "SELECT 1 FROM userlogin where UserLoginName = ? and Password =?";
		$query = $this->db->query($sql, $params);

		if ($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}	
	
	
}	

