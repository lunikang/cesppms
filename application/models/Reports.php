<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Reports extends CI_Model
{
	public function AddFormD() {
		// $this->db->select('*');
		// $this->db->from('proposal_header');


        $query = $this->db->insert('report_d', $this);
        return $query;
    }

	public function LoadReport_d(){
		$results = array();
	

		$this->db->select('*');
		$this->db->from('report_d');
		//$this->db->order_by("datecreated");
		//$this->db->join('user_account', 'user_account.user_id = report_d.creator_id', 'inner');
		//$this->db->where('who_created', '$completename');

		 // $query = $this->db->get_where('who_created =', $completename);
		$query = $this->db->get();

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;

	
	}

	function get_title($idsauser) {
 		 $where = "(status='1' OR status='3' OR status='4' OR status='5' OR status='6' OR status='10' OR status='11' OR status='12')";
 		 $this->db->where($where);
 		 $this->db->where('user_id', $idsauser);

 		 
		 $q = $this->db->get('proposal_json');

    	if ($q->num_rows() > 0)
    	{
        	foreach($q->result() as $row) {     
          		$data[] = $row;
        	}
        	return $data;
    	}
  }

	


	public function LoadReport_e(){
		$results = array();
		// Query #1
		$this->db->select('*');
		$this->db->from('report_e');
		//$this->db->join('user_account', 'user_account.user_id = report_d.creator_id', 'inner');

		 $query = $this->db->get();

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;
		
	}

	public function viewReport_e($reporte_id){
		$this->db->select('*');
		$this->db->from('report_e');

		$this->db->where('id', $reporte_id);

		 $query = $this->db->get();

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;

	}

	public function viewReport_d($reportd_id){
		$this->db->select('*');
		$this->db->from('report_d');

		$this->db->where('proposal_id', $reportd_id);

		 $query = $this->db->get();

		    if($query->num_rows() > 0) {
		        $results = $query->result();
		    }
		    return $results;

	}

	 

 public function AddFormE() {
 	 
        $query = $this->db->insert('report_e', $this);
        return $query;
    }
	
public function updateform_e(){
 
    $this->db->where('id',$this->id);
    $query=$this->db->update('report_e',$this);
    return $query;

}

public function updateform_d(){
 
    $this->db->where('id',$this->id);
    $query=$this->db->update('report_d',$this);
    return $query;

}


//for FORM E
 public function saveChanges_e(){
        if(isset($this->id)){
            $query=$this->updateform_e();
        }else{
            $query=$this->AddFormE();
        }
        return $query;
         }

//for FORM D
         public function saveChanges_d(){
        if(isset($this->id)){
            $query=$this->updateform_d();
        }else{
            $query=$this->AddFormD();
        }
        return $query;
         }
//for FORM E
	public function getOneForme(){
        $query=$this->db->get_where('report_e', array('id'=>$this->id));
        return $query->row_array();
    }
//for FORM D
    public function getOneFormd(){
        $query=$this->db->get_where('report_d', array('id'=>$this->id));
        return $query->row_array();
    }

  public function row_delete_e($id){
  	 $this->db->where('id', $id);
   $this->db->delete('report_e'); 
  }

  public function row_delete_d($id){
  	 $this->db->where('id', $id);
   $this->db->delete('report_d'); 
  }

  public function row_delete_proposals($id){
  	$this->db->where('id', $id);
   	$this->db->delete('proposal_header'); 
  }

}

