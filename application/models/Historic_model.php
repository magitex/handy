<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Historic_model extends CI_Model
{
    //Addition
    function historicListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.historic_id, BaseTbl.created_dtm, BaseTbl.meta_title, , BaseTbl.meta_description, BaseTbl.meta_tag, BaseTbl.historic_title, BaseTbl.historic_image, BaseTbl.historic_description, BaseTbl.short');
        $this->db->from('tbl_historic as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.historic_title  LIKE '%".$searchText."%'
                            OR  BaseTbl.meta_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    // This function is used to get the user listing count
    function historicListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.historic_id, BaseTbl.created_dtm, BaseTbl.meta_title, , BaseTbl.meta_description, BaseTbl.meta_tag, BaseTbl.historic_title, BaseTbl.historic_image, BaseTbl.historic_description, BaseTbl.short');
        $this->db->from('tbl_historic as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.historic_title  LIKE '%".$searchText."%'
                            OR  BaseTbl.meta_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->order_by('BaseTbl.historic_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function addConfig($userInfo1)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_historic', $userInfo1);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editCon($userInfo1, $historic_id)
    {
        $this->db->where('historic_id', $historic_id);
        $this->db->update('tbl_historic', $userInfo1);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getEditInfo($historic_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_historic');
        // $this->db->where('isDeleted', 0);
        $this->db->where('historic_id', $historic_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    /*function deleteInfo($id, $userInfo1)
    {
        $this->db->where('historic_id', $historic_id);
        $this->db->update('tbl_historic', $userInfo1);
        
        return $this->db->affected_rows();
    }*/
    public function deleteInfo($id)
	{
		$sql = "UPDATE tbl_historic SET isDeleted = 1 WHERE historic_id='$id';";
		$result = $this->db->query($sql);				
	}

}