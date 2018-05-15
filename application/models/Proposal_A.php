<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 	for all transactions regarding the proposal Form A
*/
class Proposal_A extends CI_Model
{
	private $record 								= array();
	public $user_id 								= NULL;
	public $proposal_header_id 						= NULL;
	public $rationale_and_contextualization 		= NULL;
	public $goal_objectives_and_outcomes 			= NULL;
	public $participants_partners_and_beneficiaries = NULL;
	public $outline_of_activities 					= array();
	public $outline_of_activities_ids 				= NULL;
	public $budgetary_requirements 					= array();
	public $budgetary_requirements_ids 				= NULL;
	public $meals_and_snacks 						= NULL;
	public $transportation 							= NULL;
	public $materials 								= NULL;
	public $grand_total								= NULL;

	
	public function get_last_created_proposal() {
		$this->db->select_max('id');
		
		$query = $this->db->get('proposal_header');
		
		return $query->result();
	}

	public function get_outline_of_activities_by_proposal() {
		$this->db->select('id')->where('proposal_header_fkid', $this->proposal_header_id);
		
		$query = $this->db->get('outline_of_activities');
		
		return $query;
	}

	public function get_meals_and_snacks() {
		$this->db->select('id')->where('proposal_header_fkid', $this->proposal_header_id);

		$query = $this->db->get('meals_and_snacks');

		return $query;
	}

	public function get_transportation() {
		$this->db->select('id')->where('proposal_header_fkid', $this->proposal_header_id);

		$query = $this->db->get('transportation');

		return $query;
	}

	public function get_materials() {
		$this->db->select('id')->where('proposal_header_fkid', $this->proposal_header_id);

		$query = $this->db->get('materials');

		return $query	;
	}

	public function get_budgetary_requirements_by_proposal() {
		$this->db->select('id')->where('proposal_header_fkid', $this->proposal_header_id);
		
		$query = $this->db->get('budgetary_requirements');
		
		return $query->row_array();
	}

	public function create_outline_of_activities() {
		$record = $this->outline_of_activities;

		$this->db->insert_batch('outline_of_activities', $record);

		return $this->db->affected_rows() > 0;
	}

	public function create_meals_and_snacks() {
		$record = $this->meals_and_snacks;

		$this->db->insert_batch('meals_and_snacks', $record);

		return $this->db->affected_rows() > 0;
	}

	public function create_transportation() {
		$record = $this->transportation;

		$this->db->insert_batch('transportation', $record);

		return $this->db->affected_rows() > 0;
	}

	public function create_materials() {
		$record = $this->materials;

		$this->db->insert_batch('materials', $record);

		return $this->db->affected_rows() > 0;
	}

	public function create_budgetary_requirements() {
		$record = $this->budgetary_requirements;

		$this->db->insert('budgetary_requirements', $record);

		return $this->db->affected_rows() > 0;
	}

	public function create_proposal_a() {
		$record = array(
					'proposal_header_fkid'						=> $this->proposal_header_id,
					'rationale_and_contextualization' 			=> $this->rationale_and_contextualization,  
					'goal_objectives_and_outcomes' 				=> $this->goal_objectives_and_outcomes, 
					'participants_partners_and_beneficiaries' 	=> $this->participants_partners_and_beneficiaries, 
					'grand_total'								=> $this->grand_total
				  );

		$this->db->insert('proposal_a', $record);
		
		return $this->db->affected_rows() > 0;
	}
	


	// LEIGH's changes

	public function addBudReq($forma_budreqdata){
		$this->db->insert('rationaletobudreq', $forma_budreqdata);
		$retbudreq_id = $this->db->insert_id();
        return $retbudreq_id;
	}

	public function addFormA(){
		$query = $this->db->insert('proposal_header', $this);
        return $query;
	}

	//Send Email to chair

	public function getChairEmail($department, $fkid){

		$condition = array('user_account.department' => $department, 'user_account.designation.fkid' => $fkid);

		$this->db->select('*');
		$this->db->from('user_account');
		$this->db->where($condition);
		$query = $this->db->get();

		foreach($query->result_array as $row){}


			return $row['email'];
	}
}