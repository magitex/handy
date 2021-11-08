<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Funders_model extends CI_Model
{
    //Addition
    function fundersListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.funders_id, BaseTbl.created_dtm, BaseTbl.funders_name, BaseTbl.funders_image');
        $this->db->from('tbl_funders as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.report_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    // This function is used to get the user listing count
    function fundersListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.funders_id, BaseTbl.created_dtm, BaseTbl.funders_name, BaseTbl.funders_image');
        $this->db->from('tbl_funders as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.funders_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.funders_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function addFunders($userInfo1)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_funders', $userInfo1);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editFunders($userInfo1, $funders_id)
    {
        $this->db->where('funders_id', $funders_id);
        $this->db->update('tbl_funders', $userInfo1);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getFundersInfo($funders_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_funders');
        // $this->db->where('isDeleted', 0);
        $this->db->where('funders_id', $funders_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    function deleteFunders($funders_id, $userInfo1)
    {
        $this->db->where('funders_id', $funders_id);
        $this->db->update('tbl_funders', $userInfo1);
        
        return $this->db->affected_rows();
    }
	
	public function deleteInfo($id)
	{
		$sql = "UPDATE tbl_funders SET isDeleted = 1 WHERE funders_id='$id';";
		$result = $this->db->query($sql);				
	}
}