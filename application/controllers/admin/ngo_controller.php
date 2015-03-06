<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ngo_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
         $this->load->helper(array('form', 'url'));
    }

    public function index() {


        //$this->add_view("content_body", "welcome", $data);
        $this->render("welcome");
    }

    public function manage_donation_centers(){

        $data = array();
        
        $this->add_view("content_body", "admin/manage_donation_centers", $data);
        $this->render("admin/default");
        
    }

    public function save_donation_center(){

         if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->load->library('form_validation');
            if ($this->form_validation->run('save_donation_center') == FALSE)
            {
                $data=array();
                $this->add_view("content_body","admin/add_donation_center", $data);
                $this->render("admin/default");
            }
            else
            {

                $input_params = array(
                    'Name' => $this->input->get_post('centerName'),
                    'Address' => $this->input->get_post('centerAddress'),
                    'Pincode' => $this->input->get_post('centerPincode')
                );

                $this->load->model('ngo_model','ngo');
                $result = $this->ngo->save_donation_center($input_params);

                $this->form_validation->clear_field_data();
                $data=array(
                    'success'=>'Success. New donation center has been added.'
                );
                $this->add_view("content_body","admin/add_donation_center", $data);
                $this->render("admin/default");
            }

         }else{

             redirect('/pda/ngo/add-donation-center', 'refresh');
        }      


        
    }

    public function add_donation_center(){

        $data = array();
        
        $this->add_view("content_body", "admin/add_donation_center", $data);
        $this->render("admin/default");
        
    }

    
    public function new_request(){

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

