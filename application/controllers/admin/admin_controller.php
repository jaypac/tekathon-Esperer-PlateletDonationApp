<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_controller extends MY_Controller {

    function __construct() {
        parent::__construct();

        //Always first authenticate
        $this->session_auth();
    }

    /**
     * Redirect to 404 page is user navigates directly 
     * to the admin page.
     */
    public function index() {
        $this->show_404();
    }

    public function dashboard() {

        $data = array();
        $this->render("admin/default");
    }


    /**
     * Check if session is active
     */
    function session_auth() {
        $user_id = $this->session->userdata(CONST_SESSION_USER_ID);

        if (!(isset($user_id) && !empty($user_id))) {
            $this->session->sess_destroy();
            $this->load->helper('url');
            redirect(base_url());
        }
    }

}