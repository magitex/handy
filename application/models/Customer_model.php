<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model{
    function customerListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.*');
        $this->db->from('tbl_customer as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    function customerListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function allcustomerListing()
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('isdeleted', 0);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }
    function getCustomerInfo($customer_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('isDeleted', 0);
        $this->db->where('id', $customer_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    function addCustomer($customer_info)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_customer', $customer_info);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editcustomer($customer_info, $customer_id)
    {
        $this->db->where('id', $customer_id);
        $this->db->update('tbl_customer', $customer_info);
        
        return TRUE;
    }
    public function deleteInfo($customer_id)
	{
		$sql = "UPDATE tbl_customer SET isdeleted = 1 WHERE id='$customer_id';";
		$result = $this->db->query($sql);				
	}
    function chekcustomer($slug)
    {
        $this->db->where('slug', $slug);
        $query = $this->db->get('tbl_customer');
        if( $query->num_rows() > 0 )
        { 
            return TRUE; 
        } 
        else 
        { 
            return FALSE; 
        }
    }
    function chekcustomeredit($slug,$customer_id)
    {
        $sql = "SELECT * FROM tbl_customer WHERE slug='".$slug."' AND id!='".$customer_id."'";
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