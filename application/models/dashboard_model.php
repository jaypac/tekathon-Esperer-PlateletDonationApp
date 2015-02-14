<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	
	function getRecord()
	{
		$this->load->database();
		
		return $this->db->query(" SELECT * FROM request WHERE status='Open' ")->result();
		
	}
}	

