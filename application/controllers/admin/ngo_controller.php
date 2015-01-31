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

    
    public function test(){
    	echo 'Awesome';
    	
    	//$this->add_view("content_body", "login", $data);
    	//$this->render("login");
    	
    }

}

