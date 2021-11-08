<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Partners_model extends CI_Model
{
    //Addition
    function partnersListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.partners_id, BaseTbl.created_dtm, BaseTbl.partners_name, BaseTbl.partners_image, BaseTbl.partners_link');
        $this->db->from('tbl_partners as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.report_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    // This function is used to get the user listing count
    function partnersListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.partners_id, BaseTbl.created_dtm, BaseTbl.partners_name, BaseTbl.partners_image, BaseTbl.partners_link');
        $this->db->from('tbl_partners as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.partners_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.partners_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function addPartners($userInfo1)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_partners', $userInfo1);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editPartners($userInfo1, $partners_id)
    {
        $this->db->where('partners_id', $partners_id);
        $this->db->update('tbl_partners', $userInfo1);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getPartnersInfo($partners_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_partners');
        // $this->db->where('isDeleted', 0);
        $this->db->where('partners_id', $partners_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    function deleteFunders($partners_id, $userInfo1)
    {
        $this->db->where('partners_id', $partners_id);
        $this->db->update('tbl_partners', $userInfo1);
        
        return $this->db->affected_rows();
    }
	
	public function deleteInfo($id)
	{
		$sql = "UPDATE tbl_partners SET isDeleted = 1 WHERE partners_id='$id';";
		$result = $this->db->query($sql);				
	}
}