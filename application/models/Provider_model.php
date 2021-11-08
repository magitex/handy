<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Provider_model extends CI_Model{
    function providerListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.*');
        $this->db->from('tbl_provider as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    function providerListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_provider as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.package_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function getProviderInfo($provider_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_provider');
        $this->db->where('isDeleted', 0);
        $this->db->where('id', $provider_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    function addProvider($provider_info)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_provider', $provider_info);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editprovider($provider_info, $provider_id)
    {
        $this->db->where('id', $provider_id);
        $this->db->update('tbl_provider', $provider_info);
        
        return TRUE;
    }
    public function deleteInfo($provider_id)
	{
		$sql = "UPDATE tbl_provider SET isdeleted = 1 WHERE id='$provider_id';";
		$result = $this->db->query($sql);				
	}
    function chekprovider($slug)
    {
        $this->db->where('slug', $slug);
        $query = $this->db->get('tbl_provider');
        if( $query->num_rows() > 0 )
        { 
            return TRUE; 
        } 
        else 
        { 
            return FALSE; 
        }
    }
    function chekprovideredit($slug,$provider_id)
    {
        $sql = "SELECT * FROM tbl_provider WHERE slug='".$slug."' AND id!='".$provider_id."'";
        $query = $this->db->query($sql);
        if( $query->num_rows() > 0 )
        { 
            return TRUE; 
        } 
        else 
        { 
            return FALSE; 
        }
    }
}