<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Currency_model extends CI_Model
{
    //Addition
    function currencyListingCount($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_currency as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.currency_title  LIKE '%".$searchText."%')";
            $likeCriteria = "(BaseTbl.currency_code  LIKE '%".$searchText."%')";
            $likeCriteria = "(BaseTbl.currency_symbol  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    // This function is used to get the user listing count
    function currencyListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_currency as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.currency_title  LIKE '%".$searchText."%')";
            $likeCriteria = "(BaseTbl.currency_code  LIKE '%".$searchText."%')";
            $likeCriteria = "(BaseTbl.currency_symbol  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.currency_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function allcurrencyListing()
    {
        $this->db->select('*');
        $this->db->from('tbl_currency');
        $this->db->where('isdeleted', 0);
        $this->db->order_by('currency_id', 'DESC');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    function addCurrency($faqinfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_currency', $faqinfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editCurrency($currencyinfo, $currency_id)
    {
        $this->db->where('currency_id', $currency_id);
        $this->db->update('tbl_currency', $currencyinfo);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getCurrencyInfo($currency_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_currency');
        // $this->db->where('isDeleted', 0);
        $this->db->where('currency_id', $currency_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    function deleteCurrency($currency_id, $faqinfo)
    {
        $this->db->where('id', $currency_id);
        $this->db->update('tbl_currency', $faqinfo);
        
        return $this->db->affected_rows();
    }
	
	public function deleteInfo($currency_id)
	{
		$sql = "UPDATE tbl_currency SET isdeleted = 1 WHERE currency_id='$currency_id';";
		$result = $this->db->query($sql);				
	}
    function chekcurrency($slug)
    {
        $this->db->where('slug', $slug);
        $query = $this->db->get('tbl_currency');
        if( $query->num_rows() > 0 )
        { 
            return TRUE; 
        } 
        else 
        { 
            return FALSE; 
        }
    }
    function chekcurrencyedit($slug,$currency_id)
    {
        $sql = "SELECT * FROM tbl_currency WHERE slug='".$slug."' AND currency_id!='".$currency_id."'";
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