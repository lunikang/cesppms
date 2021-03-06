<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Revision history
* 2017-26-11 Home() - Added a session checker for the appropriate
* access per page, designation_fkid will be used to check the
* appropriate account access.
*/
class Vpaa extends CI_Controller
{
	
	public function home() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 1 )
		{
			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role']	= $this->session->designation;
			
			$this->load->model('Proposal_AB');
			//$data['proplist']=$this->Proposal_AB->LoadProposals();

			$this->load->view('vpaa/vpaa_approve', $data);
		}else{
			redirect(site_url());
		}
	}

	public function profile_settings() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 1 )
		{
			$data = array();

			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role'] = $this->session->designation;

			$this->load->model('User');
			$user = new User();

			$user->user_id = $this->session->user_id;
					
			$data['user'] = $user->get_user();

			$this->load->view('Vpaa/vpaa_setting', $data);
		}else{
			redirect(site_url());
		}
	}

	public function process_settings() {
		if($this->input->post('save')) {
				  
			if($this->form_validation->run() === FALSE) {
				echo validation_errors();
			} else {
				  	
				$data = $this->input->post(NULL, TRUE);

				$this->load->model('User');
				$user = new User();

				$user->user_id 		= $this->session->user_id;
				$user->firstname 	= $data['firstname'];
				$user->lastname 	= $data['lastname'];
				$user->email 		= $data['email'];
				$user->contact_num  = $data['contact_num'];
				$user->office 		= $data['school'];
				$user->deparment 	= $data['department'];
				$user->username 	= $data['username'];
				$user->password 	= $data['password'];
				  	
				$state = $user->update_user();
				  	
				if ($state === TRUE) {
					// echo "<meta http-equiv='refresh' content='2; url=" . site_url('Representative/profile_settings') . "'>";
					// echo "<h1> Successfully updated your user profile!</h1>";

					$session_data = array(
					  	'session_id'	=> session_id(),
					  	'ip_address'	=> $_SERVER['REMOTE_ADDR'],
					  	'user_id' 		=> $this->session->user_id,
					  	'firstname' 	=> $user->firstname,
					  	'lastname' 		=> $user->lastname,
					  	'email' 		=> $user->email,
					  	'contact_num' 	=> $user->contact_num,
					  	'designation' 	=> $this->session->designation,
					  	'office' 		=> $user->office,
					  	'department'	=> $user->department,
					  	'organization'	=> $this->session->organization,
					  	'logged_in' 	=> TRUE
					);
				
				  	$this->session->set_userdata($session_data);

				  		// 	$this->session->set_flashdata('success_msg',
						// '<strong>Profile Updated!</strong> You have successfully updated your profile settings.');
						
					redirect(site_url('Vpaa/profile_settings'), "refresh");

				} else {
				  	echo "<meta http-equiv='refresh' content='2; url=" . site_url('Vpaa/profile_settings') . "'>";
				  	echo "<h3>No changes made.</h3>";
				}
				
			}
		}
	}
	
	public function getToBeEndorsedProposal()
	{
		$this->load->model('Proposal_AB');
		$proplist=$this->Proposal_AB->LoadProposalsVpaa(); 
		echo json_encode($proplist);
	}
	
	public function approveProposal()
	{
		$this->load->model('Proposal_AB');
		$proplist=$this->Proposal_AB->LoadApproveProposals(); 
		echo json_encode($proplist);
	}
}