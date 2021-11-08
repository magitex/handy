<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Cmspage_model extends CI_Model{

    function cmspageListingCount($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('cmspage as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.page_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    function cmspageListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('cmspage as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.page_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('BaseTbl.page_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function getCmspageInfo($page_id)
    {
        $this->db->select('*');
        $this->db->from('cmspage');
        // $this->db->where('isDeleted', 0);
        $this->db->where('page_id', $page_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editCmspage($page_info, $page_id)
    {
        $this->db->where('page_id', $page_id);
        $this->db->update('cmspage', $page_info);
        
        return TRUE;
    }
}