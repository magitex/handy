<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Banner_model extends CI_Model
{
    //Addition
    function bannerListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.bms_id, BaseTbl.created_dtm, BaseTbl.title, BaseTbl.description, BaseTbl.link, BaseTbl.image');
        $this->db->from('tbl_bms as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    // This function is used to get the user listing count
    function bannerListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.bms_id, BaseTbl.created_dtm, BaseTbl.title, BaseTbl.description, BaseTbl.link, BaseTbl.image');
        $this->db->from('tbl_bms as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.banner_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.bms_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function addBanner($userInfo1)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_bms', $userInfo1);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editBanner($userInfo1, $bms_id)
    {
        $this->db->where('bms_id', $bms_id);
        $this->db->update('tbl_bms', $userInfo1);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getBannerInfo($bms_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_bms');
        // $this->db->where('isDeleted', 0);
        $this->db->where('bms_id', $bms_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    public function deleteInfo($bms_id)
    {
        $sql = "UPDATE tbl_bms SET isdeleted = 1 WHERE bms_id='$bms_id';";
        $result = $this->db->query($sql);               
    }
}