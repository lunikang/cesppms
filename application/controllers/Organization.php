<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Revision history
* 2017-26-11 Home() - Added a session checker for the appropriate
* access per page, designation_fkid will be used to check the
* appropriate account access.
*/

class Organization extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function home() {
		if(isset($_SESSION['designation']) && $_SESSION['designation_fkid'] == 8)
		{
			$data['fname'] 	= $this->session->firstname;
			$data['lname'] 	= $this->session->lastname;
			$data['role']	= $this->session->designation;
			$data['user_id']= $this->session->user_id;

			
			$this->load->model('Proposal_AB');

			//$data['proplist']=$this->Proposal_AB->LoadProposals(); 
			$data['proplist']=$this->Proposal_AB->loadDraftProposal($this->session->user_id);
			$data['submitted_prop'] = $this->Proposal_AB->loadSubmittedProposal($this->session->user_id);
			$data['assessor']=$this->Proposal_AB->validate_assessor();
			
			$this->load->view('representative/representative_proposal', $data);
		}else{
			redirect(site_url());
		}
}
}	
