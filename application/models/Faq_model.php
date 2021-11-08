<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Faq_model extends CI_Model
{
    //Addition
    function faqListingCount($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_faq as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.question  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    // This function is used to get the user listing count
    function faqListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_faq as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.question  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function allfaqListing()
    {
        $this->db->select('*');
        $this->db->from('tbl_faq');
        $this->db->where('isdeleted', 0);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    function addFaq($faqinfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_faq', $faqinfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editFaq($faqinfo, $faq_id)
    {
        $this->db->where('id', $faq_id);
        $this->db->update('tbl_faq', $faqinfo);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getFaqInfo($faq_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_faq');
        // $this->db->where('isDeleted', 0);
        $this->db->where('id', $faq_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    function deleteFaq($faq_id, $faqinfo)
    {
        $this->db->where('id', $faq_id);
        $this->db->update('tbl_faq', $faqinfo);
        
        return $this->db->affected_rows();
    }
	
	public function deleteInfo($faq_id)
	{
		$sql = "UPDATE tbl_faq SET isdeleted = 1 WHERE id='$faq_id';";
		$result = $this->db->query($sql);				
	}
    function chekfaq($slug)
    {
        $this->db->where('slug', $slug);
        $query = $this->db->get('tbl_faq');
        if( $query->num_rows() > 0 )
        { 
            return TRUE; 
        } 
        else 
        { 
            return FALSE; 
        }
    }
    function chekfaqedit($slug,$faq_id)
    {
        $sql = "SELECT * FROM tbl_faq WHERE slug='".$slug."' AND id!='".$faq_id."'";
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