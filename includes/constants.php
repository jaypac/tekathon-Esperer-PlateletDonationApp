<?php

/*
 * ---------------------------------------------------------------
 * PATH CONSTANTS
 * ---------------------------------------------------------------
 *
 * Constants to commonly used paths for includes.
 */
$VAR_DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];


/* SESSION VARIABLES */
define('CONST_SESSION_USER_ID', 'user_id');
define('CONST_SESSION_USER_TYPE', 'user_type');


/* USER LOGIN TYPES */
define('CONST_USER_TYPE_ADMIN', 'admin');
define('CONST_USER_TYPE_NGO', 'NGO');
define('CONST_USER_TYPE_DONOR', 'Donor');


/* AUTHENTICATION */
define('CONST_USER_IS_ACTIVE', 'Y');
define('CONST_USER_IS_NOT_ACTIVE', 'N');