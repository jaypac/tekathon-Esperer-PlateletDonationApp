<?php

class Sms_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	function startfollowup()
	{
		$requestId = null;
		$followUp = false;
		log_message('error','enter model');
		$i = 0;
		while(true)
		{
			log_message('error','I : '.$i);
			$hiddenField = $this->input->post('sendSMSDetails'.$i);
			if($hiddenField == null)
			{
				break;
			}
			else 
			{
				$checkBox = $this->input->post('sendSMS'.$i);
				if($checkBox != null)
				{
					$followUp = true;
					log_message('error','check found');
					//$this->sendSMS($hiddenField);

					/* 'teamId' => '888',
					'donorName' => $arrContent[0],
					'donorMobile' => $arrContent[1],
					'requestType' => 'Platelets',
					'requiredByWhen'=> $arrContent[2],
					'pincodeForDonation'=> $arrContent[3],
					'donationRequestId'=> $arrContent[4]); */
					
					$arrContent = explode('#', $hiddenField);
					
					$content = "Dear Donor, We have received a requirement for platelets at ".$arrContent[3]." on ".$arrContent[2].". Please reply as Y or N indicating your availability.";
					
					$this->sendSMS($arrContent[4], $arrContent[5], $content);
					
					$date = date("Y-m-d h:i:sa");
					
					$arrHiddenField = explode('#', $hiddenField);
					
					$requestId = $arrHiddenField[4];
					
					$sql = "UPDATE requestfollowuplog SET SMSSent='Y', SMSTime = '".$date."', Status= 'Unavailable' WHERE Request_Id = '".$requestId."' and Donor_Id = '".$arrHiddenField[5]."'";
					
					log_message('error','Values : ' .  $sql);
					
					$this->db->query($sql);
					$results = $this->db->affected_rows();
					
					log_message('error','requestfollowuplog Updated : ' .  $results);
					
					$sql = "UPDATE donordetails SET RequestSentCount = RequestSentCount + 1 WHERE Id = '".$arrHiddenField[5]."'";
						
					log_message('error','Values : ' .  $sql);
						
					$this->db->query($sql);
					$results = $this->db->affected_rows();
						
					log_message('error','requestfollowuplog Updated : ' .  $results);
				}
			}
			$i++;
		}
		
		if($followUp)
		{
			$sql = "UPDATE request SET Status = 'Follow Up In Progress' WHERE Id = '".$requestId."'";
			
			log_message('error','Values : ' . $sql);
			
			$this->db->query($sql);
			$results = $this->db->affected_rows();
			
			log_message('error','Request Updated : ' .  $results);
		}
		
		log_message('error','exit model');
	}
	
	/*function sendSMS($content)
	{
		log_message('error','SMS Content'.$content);
		
		$arrContent = explode('#', $content);
		
		$date = date("Y-m-d h:i:sa");
		$url = 'http://tekathonsms-ideafountain.rhcloud.com/smsRequests.json';
		$postData = array("entryDateTime" => $date,
				'teamId' => '888',
				'donorName' => $arrContent[0],
				'donorMobile' => $arrContent[1],
				'requestType' => 'Platelets',
				'requiredByWhen'=> $arrContent[2],
				'pincodeForDonation'=> $arrContent[3],
				'donationRequestId'=> $arrContent[4]);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
		$result = curl_exec($ch);
		curl_close($ch);
		
		log_message('error','URL Result : '.$result);
	}*/
	
	function processSMSRespone()
	{
		log_message('error','Work started..');
		$requestId = $this->input->get('requestId');
		$donorId = $this->input->get('donorId');
		
		$smsresponse = $this->input->get('smsresponse');
		
		log_message('error','Values : ' .  $requestId);
		log_message('error','Values : ' .  $donorId);
		log_message('error','Values : ' .  $smsresponse);
		
		if($smsresponse == 'Y')
		{
			$sql = "UPDATE requestfollowuplog SET Status= 'Available' WHERE Request_Id = '".$requestId."' and Donor_Id = '".$donorId."'";
				
			log_message('error','Values : ' .  $sql);
				
			$this->db->query($sql);
			$results = $this->db->affected_rows();
				
			log_message('error','requestfollowuplog Updated with available: ' .  $results);
			
			$sql = "UPDATE donordetails SET PositiveResponseCount = PositiveResponseCount + 1, PositiveDonationRatio = ((PositiveResponseCount/RequestSentCount)*100) WHERE Id = '".$donorId."'";
			
			log_message('error','Values : ' .  $sql);
			
			$this->db->query($sql);
			$results = $this->db->affected_rows();
			
			log_message('error','requestfollowuplog Updated : ' .  $results);
			
			$donorFound = false;
			$query = $this->db->query("Select 1 as reqpresent from request where Status = 'Donor Found' and Id = '".$requestId."'");
			
			$row = $query->row();
			if($row != null)
			{
				$donorFound = true;
			}
			
			log_message('error','donor not found');
			
			if(!$donorFound)
			{
				//SEND CONFIRMATION SMS
				$content = "Dear Donor, We hereby confirm your donation for this request. Please be present as someone's life depends on it!";
				$this->sendSMS($requestId, $donorId, $content);
				
				$sql = "UPDATE requestfollowuplog SET Status= 'Confirmed' WHERE Request_Id = '".$requestId."' and Donor_Id = '".$donorId."'";
				
				log_message('error','Values : ' .  $sql);
				
				$this->db->query($sql);
				$results = $this->db->affected_rows();
				
				log_message('error','requestfollowuplog Updated with confirmed : ' .  $results);
				
				$sql = "UPDATE request SET Status = 'Donor Found' WHERE Id = '".$requestId."'";
				log_message('error','Values : ' . $sql);
				
				$this->db->query($sql);
				$results = $this->db->affected_rows();
				
				log_message('error','request Updated with donor found: ' .  $results);
			}
			else 
			{
				//SEND STANDBY SMS
				$content = "Dear Donor, We have already confirmed another donor for this request. However you have been kept on standby and would be contacted in case of emergency. ";
				$this->sendSMS($requestId, $donorId, $content);
			}
		}
		
	}
	
	function sendSMS($reqId, $donorId, $content)
	{
		$data = array(
				'RequestId' => $reqId,
				'DonorId' => $donorId,
				'SMSContent' => $content
		);
		
		$this->db->insert('sms', $data);
		
		log_message('error','SMS Inserted!');
	}
	
}

?>