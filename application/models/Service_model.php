<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Service_model extends CI_Model
{
    //Addition
    function serviceListingCount($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_service as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.service_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    // This function is used to get the user listing count
    function serviceListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_service as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.service_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.service_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function allserviceListing()
    {
        $this->db->select('*');
        $this->db->from('tbl_service');
        $this->db->where('isdeleted', 0);
        $this->db->order_by('service_id', 'DESC');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    function addService($serviceInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_service', $serviceInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editCategory($serviceInfo, $service_id)
    {
        $this->db->where('service_id', $service_id);
        $this->db->update('tbl_service', $serviceInfo);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getServiceInfo($service_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_service');
        // $this->db->where('isDeleted', 0);
        $this->db->where('service_id', $service_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    function deleteService($service_id, $serviceInfo)
    {
        $this->db->where('service_id', $service_id);
        $this->db->update('tbl_service', $serviceInfo);
        
        return $this->db->affected_rows();
    }
	
	public function deleteInfo($service_id)
	{
		$sql = "UPDATE tbl_service SET isdeleted = 1 WHERE service_id='$service_id';";
		$result = $this->db->query($sql);				
	}
    function chekserv($slug)
    {
        $this->db->where('slug', $slug);
        $query = $this->db->get('tbl_service');
        if( $query->num_rows() > 0 )
        { 
            return TRUE; 
        } 
        else 
        { 
            return FALSE; 
        }
    }
    function chekservedit($slug,$service_id)
    {
        $sql = "SELECT * FROM tbl_service WHERE slug='".$slug."' AND service_id!='".$service_id."'";
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