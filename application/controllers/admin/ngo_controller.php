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

        
        $this->load->model('ngo_model','ngo');
        $result_list = $this->ngo->get_donation_center();

        $data = array('query' => $result_list);

        $this->add_view("content_body", "admin/manage_donation_centers", $data);
        $this->render("admin/default");
        
    }

    public function edit_donation_center($center_id = ''){

        $data = array();
        
        if(!isset($center_id) || empty($center_id)){
            $this->show_404();
        }

        $this->load->model('ngo_model','ngo');
        $result = $this->ngo->get_donation_center($center_id);

        $data = array('Id' => $result->row()->Id,
                        'Name' => $result->row()->Name,
                        'Address' => $result->row()->Address,
                        'City' => $result->row()->City,
                        'Pincode' => $result->row()->Pincode
                        );

        $this->add_view("content_body", "admin/edit_donation_center", $data);
        $this->render("admin/default");
        
    }

    public function update_donation_center(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->load->library('form_validation');
            if ($this->form_validation->run('save_donation_center') == FALSE)
            {
                $data=array();
                $this->add_view("content_body","admin/edit_donation_center", $data);
                $this->render("admin/default");
            }
            else
            {

                $input_params = array(
                    'Name' => $this->input->get_post('centerName'),
                    'Address' => $this->input->get_post('centerAddress'),
                    'City' => $this->input->get_post('centerCity'),
                    'Pincode' => $this->input->get_post('centerPincode')
                );

                $center_id = $this->input->get_post('centerId');

                $this->load->model('ngo_model','ngo');
                $result = $this->ngo->update_donation_center($center_id,$input_params);

                $data=array(
                    'success'=>'Success. The donation center has been updated.'
                );
                $this->add_view("content_body","admin/edit_donation_center", $data);
                $this->render("admin/default");
            }

         }else{

             redirect('/pda/ngo/manage-donation-center', 'refresh');
        }  
        
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
                    'City' => $this->input->get_post('centerCity'),
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

