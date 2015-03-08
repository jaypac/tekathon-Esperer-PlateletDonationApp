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

    public function manage_donors(){

        $this->load->model('donor_model','donor');
        $result_list = $this->donor->get_donors();

        $data = array('query' => $result_list);

        $this->add_view("content_body", "admin/manage_donors", $data);
        $this->render("admin/default");
        
    }


    public function manage_donation_centers(){

        $this->load->model('ngo_model','ngo');
        $result_list = $this->ngo->get_donation_center();

        $data = array('query' => $result_list);

        $this->add_view("content_body", "admin/manage_donation_centers", $data);
        $this->render("admin/default");
        
    }

    public function edit_donor($donor_id = ''){

        $data = array();

        if(!isset($donor_id) || empty($donor_id)){
            $this->show_404();
        }
        
        $this->load->model('donor_model','donor');
        $result = $this->donor->get_donors($donor_id);

        $data = array('Id' => $result->row()->Id,
                        'FirstName' => $result->row()->FirstName,
                        'LastName' => $result->row()->LastName,
                        'BirthDate' => $result->row()->BirthDate,
                        'Gender' => $result->row()->Gender,
                        'BloodGroup' => $result->row()->BloodGroup,
                        'OfficePincode' => $result->row()->OfficePincode,
                        'ResidencePincode' => $result->row()->ResidencePincode,
                        'MobileNumber' => $result->row()->MobileNumber,
                        'Email' => $result->row()->UserLoginName,
                        'Password' => $result->row()->Password,
                        'UserId' => $result->row()->userlogin_id,
                        'type' => 'edit'
                    );


        $this->add_view("content_body", "admin/add_edit_donor", $data);
        $this->add_view("content_footer", "admin/add_edit_donor_ftr", $data);
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



    public function update_donor(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->load->library('form_validation');
            if ($this->form_validation->run('save_donor') == FALSE)
            {
                $data=array('type' => 'edit');
                $this->add_view("content_body", "admin/add_edit_donor", $data);
                $this->add_view("content_footer", "admin/add_edit_donor_ftr", $data);
                $this->render("admin/default");
            }
            else
            {

               $user_params = array(
                    'UserLoginName' => $this->input->get_post('email'),
                    'Password' => $this->input->get_post('password')
                );

                $donor_params = array(
                    'FirstName' => $this->input->get_post('firstName'),
                    'LastName' => $this->input->get_post('lastName'),
                    'BirthDate' => $this->input->get_post('birthDate') ,
                    'Gender' => $this->input->get_post('gender'),
                    'BloodGroup' => $this->input->get_post('bloodGroup'),
                    'OfficePincode' => $this->input->get_post('officePincode',''),
                    'ResidencePincode' => $this->input->get_post('residencePincode',''),
                    'MobileNumber' => $this->input->get_post('mobileNo'),
                );

                $donor_id = $this->input->get_post('DonorId');
                $user_id = $this->input->get_post('UserId');

                $this->load->model('donor_model','donor');
                $result = $this->donor->update_donor($donor_id, $user_id, $user_params, $donor_params);

                $data=array(
                    'success'=>'Success. The donor has been updated.',
                    'type' => 'edit'
                );


                $this->add_view("content_body", "admin/add_edit_donor", $data);
                $this->add_view("content_footer", "admin/add_edit_donor_ftr", $data);
                $this->render("admin/default");
            }

         }else{

             redirect('/pda/ngo/manage_donors', 'refresh');
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

     public function save_donor(){

         if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->load->library('form_validation');
            if ($this->form_validation->run('save_donor') == FALSE)
            {
                $data=array('type' => 'add');
                $this->add_view("content_body","admin/add_edit_donor", $data);
                $this->add_view("content_footer", "admin/add_edit_donor_ftr", $data);
                $this->render("admin/default");
            }
            else
            {

                $user_params = array(
                    'UserLoginName' => $this->input->get_post('email'),
                    'Password' => $this->input->get_post('password'),
                    'Type' => 'donor',
                    'IsActive' => 'Y'
                );

                $donor_params = array(
                    'FirstName' => $this->input->get_post('firstName'),
                    'LastName' => $this->input->get_post('lastName'),
                    'BirthDate' => $this->input->get_post('birthDate') ,
                    'Gender' => $this->input->get_post('gender'),
                    'BloodGroup' => $this->input->get_post('bloodGroup'),
                    'OfficePincode' => $this->input->get_post('officePincode',''),
                    'ResidencePincode' => $this->input->get_post('residencePincode',''),
                    'LastDonatedDate' => date('Y-m-d'),
                    'RequestSentCount' => 0,
                    'PositiveResponseCount' => 0,
                    'ActualDonationCount' => 0,
                    'PositiveDonationRatio' => 0,
                    'ActualDonationRatio' => 0,
                    'MobileNumber' => $this->input->get_post('mobileNo'),
                    'userlogin_id' => ''
                );

                $this->load->model('donor_model','donor');
                $result = $this->donor->save_donor($user_params, $donor_params);

                $this->form_validation->clear_field_data();
                $data=array(
                    'success'=>'Success. New donor has been added.',
                    'type' => 'add'
                );
                $this->add_view("content_body","admin/add_edit_donor", $data);
                $this->add_view("content_footer", "admin/add_edit_donor_ftr", $data);
                $this->render("admin/default");
            }

         }else{

             redirect('/pda/ngo/add-donor', 'refresh');
        }      
    }

    public function add_donation_center(){

        $data = array();
        
        $this->add_view("content_body", "admin/add_donation_center", $data);
        $this->render("admin/default");
        
    }

    public function add_donor(){

        $data=array('type' => 'add');
        
        $this->add_view("content_body", "admin/add_edit_donor", $data);
        $this->add_view("content_footer", "admin/add_edit_donor_ftr", $data);
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

