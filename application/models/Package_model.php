<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Package_model extends CI_Model{

    function packageListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.package_id, BaseTbl.created_dtm, BaseTbl.package_name, BaseTbl.package_price');
        $this->db->from('tbl_package as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.package_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    function packageListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_package as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.package_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.package_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function allpackageListing()
    {
        $this->db->select('*');
        $this->db->from('tbl_package');
        $this->db->where('isdeleted', 0);
        $this->db->order_by('package_id', 'DESC');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }
    function getPackageInfo($package_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_package');
        // $this->db->where('isDeleted', 0);
        $this->db->where('package_id', $package_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editPackage($package_info, $package_id)
    {
        $this->db->where('package_id', $package_id);
        $this->db->update('tbl_package', $package_info);
        
        return TRUE;
    }
}