<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sms_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    function smsresponse()
    {
    	$this->load->model('SMS_Model');
    	$data['results'] = $this->SMS_Model->processSMSRespone();
    	$this->load->view('smsResponseSuccess', $data);    
    }
}

