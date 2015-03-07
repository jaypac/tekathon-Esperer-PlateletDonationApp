<?php
class MY_Form_validation extends CI_Form_validation{    
     function __construct($config = array()){
          parent::__construct($config);
     }

     public function clear_field_data() {

        $this->_field_data = array();
        return $this;
    }

     function check_login_database($password){

     	$CI =& get_instance();

     	$email = $CI->input->post('email','');

     	if($email && $password){

     		$CI->load->model('user_model','user');
     		$is_valid_user = $CI->user->authenticate_login($email,$password);
     		return $is_valid_user;

     	}else{
 			  return false;
     	}

     }

     function check_valid_pincode($pincode){

          if(is_numeric($pincode)){
              return true;
          }else{
               return false;
          }

     }

     function check_mand_donor_pincode($email){

        $CI =& get_instance();
        $off_pincode = $CI->input->post('officePincode','');
        $res_pincode = $CI->input->post('residencePincode','');

        $is_set_ofc_pin = (isset($off_pincode) && !empty($off_pincode));
        $is_set_res_pin = (isset($res_pincode) && !empty($res_pincode));

        if($is_set_ofc_pin || $is_set_res_pin){
            return true;
        }else{
            return false;
        } 
     }
}