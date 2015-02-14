<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->helper(array('form', 'url'));
    }

    public function index() {
    	//echo 'Dashboard page';

       // $this->add_view("content_body", "welcome", $data);
       // $this->render("default");
    	$this->load->model('Dashboard_Model','dash');
    	 
    	$data['query'] = $this->dash->getRecord();
    	 
    	$this->load->view('dashboardList.php', $data);
    }

    
    public function login(){
    	echo 'Dashboard page 2';
    	
    	//$this->add_view("content_body", "login", $data);
    	//$this->render("login");
    	
    	
    	
    }

}

