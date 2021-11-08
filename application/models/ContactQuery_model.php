<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class ContactQuery_model extends CI_Model
{
	function contactQueryListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.id, BaseTbl.created_dtm, BaseTbl.name, BaseTbl.email, BaseTbl.message');
        $this->db->from('tbl_mail as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        // $this->db->where('BaseTbl.isdeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    function contactQueryListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.id, BaseTbl.created_dtm, BaseTbl.name, BaseTbl.email, BaseTbl.message');
        $this->db->from('tbl_mail as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        // $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
}