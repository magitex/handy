<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model
{
    //Addition
    function categoryListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.category_id, BaseTbl.created_dtm, BaseTbl.category_name, BaseTbl.p_category');
        $this->db->from('tbl_category as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.report_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    // This function is used to get the user listing count
    function categoryListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_category as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.category_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.category_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function allcategoryListing()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('isdeleted', 0);
        $this->db->order_by('category_id', 'DESC');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    function addCategory($userInfo1)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_category', $userInfo1);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editCategory($userInfo1, $category_id)
    {
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $userInfo1);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getCategoryInfo($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        // $this->db->where('isDeleted', 0);
        $this->db->where('category_id', $category_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    function deleteCategory($category_id, $userInfo1)
    {
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $userInfo1);
        
        return $this->db->affected_rows();
    }
	
	public function deleteInfo($category_id)
	{
		$sql = "UPDATE tbl_category SET isdeleted = 1 WHERE category_id='$category_id';";
		$result = $this->db->query($sql);				
	}
    function chekcat($slug)
    {
        $this->db->where('cat_slug', $slug);
        $query = $this->db->get('tbl_category');
        if( $query->num_rows() > 0 )
        { 
            return TRUE; 
        } 
        else 
        { 
            return FALSE; 
        }
    }
    function chekcatedit($slug,$category_id)
    {
        $sql = "SELECT * FROM tbl_category WHERE cat_slug='".$slug."' AND category_id!='".$category_id."'";
        //$this->db->where('cat_slug', $slug);
        //$query = $this->db->get('tbl_category');
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