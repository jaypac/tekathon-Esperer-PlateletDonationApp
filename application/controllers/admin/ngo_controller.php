<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ngo_controller extends Admin_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {


        //$this->add_view("content_body", "welcome", $data);
        $this->render("welcome");
    }

    
    public function newRequest(){

    	$data = array();
    	
    	$this->add_view("content_body", "new_request", $data);
    	$this->render("admin/default");
    	
    }
    
    public function getDonors(){
    
    	$data = array();
    	 
    	$this->load->model('Ngo_model', 'ngo');
    	
    	$kewl = $this->ngo->get_donors();
    	
		$data['query'] = $kewl['query'];
		
		$data['requestid'] = $kewl['requestId'];
		$data['pincode'] = $this->input->get_post('pincode');
		$data['bloodgrp'] = $this->input->get_post('bloodGroup');
		$data['requestdate'] = $this->input->get_post('RequestDate');
    	
    	$this->add_view("content_body", "get_donors", $data);
    	$this->render("admin/default");
    	 
    }

}

