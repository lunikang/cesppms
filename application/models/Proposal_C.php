<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* for all transactions regarding the proposal Form C
*/
class Proposal_C extends CI_Model
{
	private $record = array();
	public $user_id;
	public $proposal_header_id;
	public $requester_id;
	public $requester;
	public $community;
	public $organization;
	public $institution;
	public $unit_from_usc = array();
	public $mode_of_request;
	public $nature_of_the_program;
	public $program_area;
	public $rationale_and_contextualization;
	public $goal_objectives_and_outcomes;
	public $participants_partners_and_beneficiaries;
	public $outline_of_activities 	= array();
	public $outline_of_activities_ids;
	public $budgetary_requirements 	= array();
	public $budgetary_requirements_ids;
	public $meals_and_snacks;
	public $transportation;
	public $materials;
	public $grand_total;

	public function get_last_created_proposal() {
		$this->db->select_max('id');
		
		$query = $this->db->get('proposal_header');
		
		return $query->result();
	}

	public function get_last_created_requester() {
		$this->db->select_max('id');
		
		$query = $this->db->get('requester');
		
		return $query->result();
	}

	public function get_outline_of_activities_by_proposal() {
		$this->db->select('id')->where('proposal_header_fkid', $this->proposal_header_id);
		
		$query = $this->db->get('outline_of_activities');
		
		return $query->result_array();
	}

	public function get_budgetary_requirements_by_proposal() {
		$this->db->select('id')->where('proposal_header_fkid', $this->proposal_header_id);
		
		$query = $this->db->get('budgetary_requirements');
		
		return $query->result_array();
	}

	public function fill_requester() {
		$record = $this->requester;

		$this->db->insert('requester', $record);

		return $this->db->affected_rows() > 0;
	}

	public function fill_outline_of_activities() {
		$record = $this->outline_of_activities;

		$this->db->insert_batch('outline_of_activities', $record);

		return $this->db->affected_rows() > 0;
	}

	public function fill_budgetary_requirements() {
		$record = $this->budgetary_requirements;

		$this->db->insert('budgetary_requirements', $record);

		return $this->db->affected_rows() > 0;
	}

	public function fill_proposal_c() {
		$record = array(
				'proposal_header_fkid'						=> $this->proposal_header_id,
				'requester'									=> $this->requester_id,
				'mode_of_request'							=> $this->mode_of_request,
				'nature_of_the_program'						=> $this->nature_of_the_program,
				'program_area'								=> $this->program_area,
				'rationale_and_contextualization' 			=> $this->rationale_and_contextualization,  
				'goal_objectives_and_outcomes' 				=> $this->goal_objectives_and_outcomes, 
				'participants_partners_and_beneficiaries' 	=> $this->participants_partners_and_beneficiaries, 
				'grand_total'								=> $this->grand_total
			);

		$this->db->insert('proposal_c', $record);

		return $this->db->affected_rows() > 0;
	}
}