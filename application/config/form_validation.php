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
                                         ),
                                    array(
                                            'field' => 'centerCity',
                                            'label' => 'Center City',
                                            'rules' => 'trim|required'
                                         )
                                    ),
                 'save_donor' => array(
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'trim|required|check_mand_donor_pincode'
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'trim|required'
                                         ),
                                    array(
                                            'field' => 'firstName',
                                            'label' => 'First Name',
                                            'rules' => 'trim|required'
                                         ),
                                    array(
                                            'field' => 'lastName',
                                            'label' => 'Last Name',
                                            'rules' => 'trim|required'
                                         ),
                                    array(
                                            'field' => 'mobileNo',
                                            'label' => 'Mobile Number',
                                            'rules' => 'trim|required'
                                         ), 
                                    array(
                                            'field' => 'officePincode',
                                            'label' => 'Office Pincode',
                                            'rules' => 'trim|check_valid_pincode'
                                         ), 
                                    array(
                                            'field' => 'residencePincode',
                                            'label' => 'Residence Pincode',
                                            'rules' => 'trim|check_valid_pincode'
                                         ),
                                    array(
                                            'field' => 'birthDate',
                                            'label' => 'Birth Date',
                                            'rules' => 'trim|required'
                                         ),
                                    array(
                                            'field' => 'bloodGroup',
                                            'label' => 'Blood Group',
                                            'rules' => 'trim|required'
                                         ),
                                    array(
                                            'field' => 'gender',
                                            'label' => 'Gender',
                                            'rules' => 'trim|required'
                                         )
                                    )                          
               );