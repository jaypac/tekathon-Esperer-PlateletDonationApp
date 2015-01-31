<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Public_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {


        //$this->add_view("content_body", "welcome", $data);
        $this->render("welcome");
    }

    
    public function login(){
    	echo 'Awesome';
    	
    	//$this->add_view("content_body", "login", $data);
    	//$this->render("login");
    	
    }

}

