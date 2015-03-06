<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$config = array(
                 'do_login' => array(
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required|check_login_database'
                                         )
                                    ),
                 'save_donation_center' => array(
                                    array(
                                            'field' => 'centerName',
                                            'label' => 'Center Name',
                                            'rules' => 'trim|required'
                                         ),
                                    array(
                                            'field' => 'centerAddress',
                                            'label' => 'Center Address',
                                            'rules' => 'trim|required'
                                         ),
                                    array(
                                            'field' => 'centerPincode',
                                            'label' => 'Center Pincode',
                                            'rules' => 'trim|required|check_valid_pincode'
                                         )
                                    )                          
               );