<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Form Validation
|--------------------------------------------------------------------------
| This config file sets all rules for forms that need validation.
| 
*/
$config = array(
			'Users/process_reg' =>	array(
				array(
					'field' => 'lastname',
					'label' => 'Lastname',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'firstname',
					'label' => 'Firstname',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'school',
					'label' => 'School',
					'rules' => 'trim|required' 
					),
				array(
					'field' => 'department',
					'label' => 'Department',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'organization',
					'label' => 'Organization',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'email',
					'label' => 'Email Address',
					'rules' => 'trim|required|valid_email|is_unique[user_account.email]'
					),
				array(
					'field' => 'contact_num',
					'label' => 'Contact Number',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'trim|required|min_length[5]|max_length[12]|is_unique[user_account.username]'
					),
				array(
					'field' => 'password1',
					'label' => 'Password',
					'rules' => 'trim|required|matches[password2]'
					),
				array(
					'field' => 'password2',
					'label' => 'Password Confirmation',
					'rules' => 'trim|required'
					)
				),
			'Users/login' 	=>	array(
				array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|required'
					),
				),
			'Representative/process_settings' => array(
				array(
					'field' => 'lastname',
					'label' => 'Lastname',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'firstname',
					'label' => 'Firstname',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'email',
					'label' => 'Email Address',
					'rules' => 'trim|required|valid_email'
					),
				array(
					'field' => 'contact_num',
					'label' => 'Contact Number',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'trim|required|min_length[5]'
					),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'confirm_password',
					'label' => 'Confirm Password',
					'rules' => 'trim|required|matches[password]'
					)
				)
		);


?>