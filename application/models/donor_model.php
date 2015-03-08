<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Donor_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function save_donor($user_params, $donor_params)
	{
		$this->load->database();
		$this->db->insert('UserLogin', $user_params);

		$userLogin_id = $this->db->insert_id();
		$donor_params['userlogin_id'] = $userLogin_id;

		$this->db->insert('donordetails', $donor_params);

	}

	public function update_donor($donor_id, $userlogin_id, $user_params, $donor_params)
	{
		$this->load->database();
		$this->db->where('Id', $userlogin_id);
		$this->db->update('UserLogin', $user_params); 

		$this->db->where('Id', $donor_id);
		$this->db->update('donordetails', $donor_params); 

	}

	public function get_donors($donor_id = '')
	{
		$this->load->database();

		$query = array();
		if(isset($donor_id) && !empty($donor_id)){
			$this->db->select("donordetails.*", FALSE);
			$this->db->select("UserLogin.Id as UserId, UserLoginName as UserLoginName, Password as Password", FALSE);
			$this->db->from("UserLogin");
			$this->db->join("donordetails", "donordetails.userlogin_id = UserLogin.id");
			$this->db->where(array('donordetails.Id'=>$donor_id), NULL, FALSE);

			$query = $this->db->get();
		}else{
			$query = $this->db->get('donordetails');
		}

	 	//log_message('error',$this->db->last_query()) ;
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