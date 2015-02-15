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


	function init_session($email, $password){

		$result = array();

		$this->load->database();

		$params = array($email , $password);
		$sql = "SELECT Id,Type FROM userlogin where UserLoginName = ? and Password =?";
		$query = $this->db->query($sql, $params);

		$row = $query->row_array();
		$user_type =  $row['Type'];
		$user_id =  $row['Id'];

		$this->session->set_userdata(CONST_SESSION_USER_ID, $user_id);
        $this->session->set_userdata(CONST_SESSION_USER_TYPE, $user_type);

		switch ($user_type) {
            case CONST_USER_TYPE_ADMIN:
                $result['route'] = 'pda/admin/dashboard';
                break;

            case CONST_USER_TYPE_NGO:
                $result['route'] = 'pda/ngo/dashboard';
                break;

            case CONST_USER_TYPE_DONOR:
                $result['route'] = 'pda/donor/dashboard';
                break;
        }

        return $result;
	}	
	
	
}	

