<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Ngo_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	public function save_donation_center($input_params)
	{
		$this->load->database();
		$this->db->insert('DonationCenters', $input_params);

	}

	public function update_donation_center($center_id, $input_params)
	{
		$this->load->database();
		$this->db->where('id', $center_id);
		$this->db->update('donationcenters', $input_params);

	}

	public function get_donation_center($center_id = '')
	{
		$this->load->database();

		$query = array();
		if(isset($center_id) && !empty($center_id)){
			$sql = "SELECT Id,Name, City,Address,Pincode from donationcenters where Id = ?";
			$query = $this->db->query($sql, array($center_id));
		}else{
			$sql = "SELECT Id,Name, City,Address,Pincode from donationcenters";
			$query = $this->db->query($sql, array());
		}

		return $query;
	}


	public function search_donors()
	{
		
		$this->load->database();
		$center_Id = $this->input->get_post('centerId');
		$bloodGroup = $this->input->get_post('bloodGroup');
		$requestDate = $this->input->get_post('requestDate');
		
       	$donation_center_query = $this->get_donation_center($center_Id);
       	$pincode = $donation_center_query->row()->Pincode;
		
		//Create a new request
		$data = array(
				'UserLogin_Id' => '1' ,
				'Date' => $requestDate,
				'PinCode' => $pincode,
				'BloodGrp'=> $bloodGroup,
				'HospitalName' => $donation_center_query->row()->Name,
				'Status' => 'Open',
				'SearchRadius' => 10,
				'RecordCount' => 10,
				'CreatedDateTime' => date("Y-m-d H:i:s")
		);
		
		$this->db->insert('request', $data);
		$request_Id = $this->db->insert_id();
		
		$sql = "SELECT latitude, longitude from pincodelookup where pincode = ?";
		$query = $this->db->query($sql, array($pincode));
		
		
		$row = $query->row();
		//log_message('error',$row->latitude);
		//log_message('error',$row->longitude);
		
		//Get all the nearby pincodes
		$sql = "SELECT pincode, (6371* acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance FROM pincodelookup HAVING distance < ? order by distance";
		$query = $this->db->query($sql, array($row->latitude, $row->longitude, $row->latitude,10));
		
		$pincodes = array();
		foreach ($query->result() as $row)
		{
			array_push($pincodes,$row->pincode);
		}
		
		//log_message("error",count($pincodes));
		
		if(count($pincodes) > 0){
			
			$pincode_list = implode(",",$pincodes);
			
			$sql = "SELECT d.Id ,d.FirstName, d.LastName , d.MobileNumber, SUM(PositiveDonationRatio + (100 - ActualDonationRatio) + (SELECT CASE WHEN DATEDIFF(CURDATE(),`LastDonatedDate`) > 100 THEN 100 ELSE DATEDIFF(CURDATE(),`LastDonatedDate`) END )) as AwesomeFigure FROM `donordetails` d where (OfficePincode in (".$pincode_list.") or ResidencePincode in (".$pincode_list.")) and BloodGroup = '".$bloodGroup."' group by Id order by AwesomeFigure desc LIMIT 50";
			$query = $this->db->query($sql, array($pincode_list));
			
			//Insert into requestfollowuplog
			foreach ($query->result() as $row)
			{
				
				$data = array(
						'Request_Id' => $request_Id ,
						'Donor_id' => $row->Id ,
						'AwesomeFigure' => $row->AwesomeFigure,
						'Status'=>'N/A'
				);
				
				$this->db->insert('requestfollowuplog', $data);
			}
			
			$result = array();
			$result['query'] = $query;
			$result['requestId'] = $request_Id;
			$result['pincode'] = $pincode;
			$result['bloodgrp'] = $bloodGroup;
			$result['requestdate'] = $requestDate;
			
			return $result;
		}				
		
	}	
}	