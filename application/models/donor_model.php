<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Donor_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function get_donors($donor_id = '')
	{
		$this->load->database();

		$query = array();
		if(isset($donor_id) && !empty($donor_id)){
			$query = $this->db->get_where('donordetails', array('Id' => $donor_id));
		}else{
			$query = $this->db->get('donordetails');
		}

		return $query;
	}


	function savedonorDetails(){
		
		$data = array(
				'FirstName' => $this->input->post('firstname'),
				'LastName' => $this->input->post('lastname'),
				'Gender' => $this->input->post('gender'),
				'BirthDate' => $this->input->post('dob')			
				
		);
		
		$this->db->insert('donordetails', $data);
	}
	
	function saveuserlogin(){
		
		$userdata = array(
				'UserLoginName' => $this->input->post('login'),
				'Password' => $this->input->post('password'),
		);
		
		$this->db->insert('userlogin', $userdata);
		
	}
	
	function loginSuccessful(){
		$userlogin = array($this->input->post('loginName') , $this->input->post('Password'));
		
		$sql = "SELECT Id,UserLoginName, Password FROM userlogin where UserLoginName = ? and Password =?";
		$query = $this->db->query($sql, $userlogin);
		return $query;
		
	}
}	