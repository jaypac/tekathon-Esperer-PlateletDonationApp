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
    	
     	$data=array();
    	$this->add_view("content_body","public/login", $data);
    	
    	//$this->add_view("content_body", "login", $data);
    	$this->render("public/default");
    	
    }
    

    public function do_login(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->load->library('form_validation');
            if ($this->form_validation->run('do_login') == FALSE)
            {
                $data=array();
                $this->add_view("content_body","public/login", $data);
                $this->render("public/default");
            }
            else
            {
                //$this->load->view('formsuccess');
                echo "good";
            }


        }else{

             redirect('/pda/login/', 'refresh');
        }   

    }

    public function donorRegisration(){
    	 
    	$data=array();
    	$this->add_view("content_body","registration", $data);
    	 
    	//$this->add_view("content_body", "login", $data);
    	$this->render("public/default");
    	 
    }
    
    public function loginSuccessful(){
    	 

    	$data=array();
    	$this->load->model('donor_model','login');
    	 
    	$data['query'] = $this->login->loginSuccessful();
    	
    	if ($data['query']->num_rows() > 0)
    	{
    		foreach ($data['query']->result() as $row)
    		{
    			//echo 'Welcome ';
    			//echo $row->UserLoginName;
    			$this->add_view("content_body","dashboardList", $data['query']);
    			$this->session->set_userdata('CONST_SESSION', $row->Id);
    			    
    		}
    	}
    	else {
    		echo 'not found';
    	}
    	//$this->session->set_userdata(CONST_SESSION_CO_ID, $co_id);
    	    	
    	//$this->add_view("content_body", "login", $data);
    	$this->render("admin/default");
    	 
    }
    
	public function save(){
		$data=array();	 
		$this->load->model('donor_model');
		
		$this->donor_model->savedonorDetails();
		$this->donor_model->saveuserlogin();
		
		$this->add_view("content_body","regComplete",$data);
		$this->render("default");
	}
	
	
	public function savehospital(){
		$data=
	
		array();
		$this->
	
		load->model('donor_model');
		$this->
	
		donor_model->savehospdetails();
		$this->
	
		donor_model->saveuserlogin();
		$this->add_view(
	
				"content_body","regComplete",$data);
		$this->render(
	
				"default");
	}

	
}


