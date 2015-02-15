<?php
class MY_Form_validation extends CI_Form_validation{    
     function __construct($config = array()){
          parent::__construct($config);
     }

     function check_login_database($password){

     	$CI =& get_instance();

     	$email = $CI->input->post('email','');

     	if($email && $password){

     		$user = $CI->load->model('user_model','user');
     		$is_valid_user = $CI->user->authenticate_login($email,$password);
     		return $is_valid_user;

     	}else{
 			return false;
     	}

     }
}