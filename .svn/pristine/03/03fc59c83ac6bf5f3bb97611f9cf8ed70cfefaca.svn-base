<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * The base controller which should be extened for all 
 * admin pages.
 * 
 * Function:
 * --------
 * 
 * 1.)Auth -> Check if the specified user type has access to this page.
 * 2.)Has common functions for all admin pages.
 * 
 */
class Admin_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();

        //Always first authenticate
        //$this->session_auth();
    }

    function render($layout = "admin/default") {
        $this->load->view('layouts/' . $layout, $this->content_areas);
    }


    /**
     * Redirect to 404 page is user navigates directly 
     * to the admin page.
     */
    public function index() {
        $this->show_404();
    }

    /**
     * Default dashboard.
     * 
     * Populates all the menu's available to the given user.
     */
    public function dashboard() {

        $this->add_content("page_title", "Online Dashboard");
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