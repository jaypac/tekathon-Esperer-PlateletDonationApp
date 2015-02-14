<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sms_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('SMS_Model');
    }

    function smsresponse()
    {
    	$this->SMS_Model->processSMSRespone();
    	$data['results'] = 'Response Received';
    	$this->load->view('smsResponseSuccess', $data);    
    }
    
    function startfollowup()
    {
    	log_message('error','enter follow up');
    	
    	log_message('error',print_r($this->input->post(null,true), true));
    	
    	$this->SMS_Model->startfollowup();
    	$data['results'] = 'SMS Sent';
    	$this->load->view('smsResponseSuccess', $data);
    	log_message('error','exit follow up');
    }
    
    function closeRequest()
    {
    	$sql = "UPDATE donordetails SET LastDonatedDate = CURDATE(), ActualDonationCount = ActualDonationCount + 1, ActualDonationRation = ((ActualDonationCount/PositiveResponseCount)*100) WHERE FirstName = '".$this->input->post('donorName')."'";
    	
    	log_message('error','Values : ' .  $sql);
    	
    	$this->db->query($sql);
    	$results = $this->db->affected_rows();
    	
    	log_message('error','requestfollowuplog Updated : ' .  $results);
    	
    	$data['results'] = 'Request Closed';
    	$this->load->view('smsResponseSuccess', $data);
    }
}

