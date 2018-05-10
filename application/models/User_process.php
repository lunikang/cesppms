<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User_process extends CI_Model
{
	public function addNewRep(){
		  $query = $this->db->insert('user_account', $this);
        return $query;
	}

	public function active_users(){
		$results = array();
		$this->db->select('*');
		$this->db->from('user_account');
		$this->db->where('status', 1);
		$this->db->join('user_designation', 'user_designation.id = user_account.designation_fkid', 'left');

		$query = $this->db->get();

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	public function applying_users(){
		$results = array();
		$this->db->select('*');
		$this->db->from('user_account');
		$this->db->where('status', 2);
		$this->db->join('user_designation', 'user_designation.id = user_account.designation_fkid', 'left');

		$query = $this->db->get();

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
	}

	public function changependingtoactive(){
	 $this->db->where('user_id',$this->user_id);
    $query=$this->db->update('user_account',$this);
    return $query;
	}
}
?>