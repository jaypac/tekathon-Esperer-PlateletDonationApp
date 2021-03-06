<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// defined for neater syntax only
class Exception404 extends Exception {
}

class MY_Controller extends CI_Controller {

    protected $content_areas;

    function __construct() {
    	parent::__construct();
    	$this->load->database();
    }
    
    public function _remap($method, $params = array()) {
        try {
            if (!method_exists($this, $method))
                throw new Exception404();
            return call_user_func_array(array($this, $method), $params);
        } catch (Exception404 $e) {
            $this->show_404();
        }
    }

    function show_404() {
        
        $this->output->set_output('');
        $this->output->set_status_header('404');
        $this->load->view('errors/404');
    }

    function add_view($content_area, $view, $data = array()) {
        $this->add_content($content_area, $this->load->view($view, $data, TRUE));
    }

    function add_content($content_area, $content) {
        $this->content_areas[$content_area] = $content;
    }

    function render($layout = "default") {
        $this->load->view('layouts/' . $layout, $this->content_areas);
    }

}