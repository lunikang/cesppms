<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Approval_Cycle extends CI_Model
{	
	private $record;
	public $proposal_header_id;
	public $procedure;

	public function create_approval_cycle() {
		$record = array('proposal_header_fkid' => $this->proposal_header_id);
		
		if ($this->procedure == '')
	}
}