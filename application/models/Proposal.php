<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 	genearal actions applicable for all proposals
*/

class Proposal extends CI_Model
{
	public $user_id;
	public $form_type;
	public $title;
	public $department;
	public $school;
	public $inclusive_date;
	public $venue;
	public $proposal_header_id;
	public $form_completeness;

	public function create_proposal() {
		$record = array(
					'user_fkid'			=> $this->user_id,
					'form_type'			=> $this->form_type,
					'title' 			=> $this->title,  
					'school' 			=> $this->school, 
					'department' 		=> $this->department, 
					'inclusive_date'	=> $this->inclusive_date, 
					'venue' 			=> $this->venue,
					'form_completeness'	=> $this->form_completeness
				  );

		$this->db->insert('proposal_header', $record);
		
		return $this->db->affected_rows() > 0;
	}

	public function get_lists_of_proposals_by_user() {
		$record = array();
		$record = array('user_fkid' => $this->user_id, 'status' => 1);
		
		$this->db->select('id, form_type, title, datetime_created')->where($record)->order_by("datetime_created", "desc");
		$query = $this->db->get('proposal_header');

		return $query;
	}

	public function get_proposal_header_id() {

	}

	public function get_proposal_info() {
		$query = array();
		
		if ($this->form_type === 'a') {
			$query 	= $this->get_proposal_a();
			$query['outline_of_activities']	= $this->get_outline_of_activities();
		}

		if ($this->form_type === 'ab') {
			$query1 = $this->get_proposal_a();
			$query2 = $this->get_proposal_b();
			$query 	= array_merge($query1, $query2);
		}

		if ($this->form_type === 'c')
			$query 	= $this->get_proposal_c();

		return $query;
	}

	private function get_proposal_a() {
		$record = array('ph.id' => $this->proposal_header_id);

		$this->db->select('*')->from('proposal_header AS ph')->where($record);
		$this->db->join('proposal_a AS a', 'a.proposal_header_fkid = ph.id', 'left');

		$query = $this->db->get();

		return $query->row_array();
	}

	private function get_proposal_b() {

	}

	private function get_proposal_c() {
		$record = array('ph.id' => $this->proposal_header_id);

		$this->db->select('*')->from('proposal_header AS ph')->where($record);
		$this->db->join('proposal_c AS c', 'c.proposal_header_fkid = ph.id', 'left');
		$this->db->join('requester AS reqr', 'reqr.id = ph.id', 'left');
		$query = $this->db->get();

		return $query->row_array();
	}

	private function get_outline_of_activities() {
		$record = array('proposal_header_fkid' => $this->proposal_header_id);

		$query = $this->db->get_where('outline_of_activities', $record);

		return $query->result_array();
	}
	
	
}