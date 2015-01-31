<?php

class Sms_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	function processSMSRespone()
	{
		log_message('error','Work started..');
		$requestId = $this->input->get('requestId');
		$donorId = $this->input->get('donorId');
		
		$smsresponse = $this->input->get('smsresponse');
		
		log_message('error','Values : ' .  $requestId);
		log_message('error','Values : ' .  $donorId);
		log_message('error','Values : ' .  $smsresponse);
		
		$status = 'Unavailable';
		
		if($smsresponse == 'Y')
		{
			$status = 'Available';
		}
		
		$sql = "UPDATE requestfollowuplog SET Status= '".$status."' WHERE Request_Id = '".$requestId."' and Donor_Id = '".$donorId."'";
		
		log_message('error','Values : ' .  $sql);
		
		$this->db->query($sql);
		$results = $this->db->affected_rows();
		
		log_message('error','DB Updated : ' .  $results);
		return $results;
	}
	
}

?>