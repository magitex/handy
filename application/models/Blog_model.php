<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class blog_model extends CI_Model
{
    //Addition
    function blogListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.blog_id, BaseTbl.page_name, BaseTbl.created_dtm, BaseTbl.meta_title, , BaseTbl.meta_description, BaseTbl.meta_tag, BaseTbl.blog_title, BaseTbl.blog_image, BaseTbl.blog_description, BaseTbl.short');
        $this->db->from('tbl_blog as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.blog_title  LIKE '%".$searchText."%'
                            OR  BaseTbl.meta_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    // This function is used to get the user listing count
    function blogListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.blog_id, BaseTbl.page_name, BaseTbl.created_dtm, BaseTbl.meta_title, , BaseTbl.meta_description, BaseTbl.meta_tag, BaseTbl.blog_title, BaseTbl.blog_image, BaseTbl.blog_description, BaseTbl.short');
        $this->db->from('tbl_blog as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.blog_title  LIKE '%".$searchText."%'
                            OR  BaseTbl.meta_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->order_by('BaseTbl.blog_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function addConfig($userInfo1)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_blog', $userInfo1);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editCon($userInfo1, $blog_id)
    {
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog', $userInfo1);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getEditInfo($blog_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        // $this->db->where('isDeleted', 0);
        $this->db->where('blog_id', $blog_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    /*function deleteInfo($id, $userInfo1)
    {
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog', $userInfo1);
        
        return $this->db->affected_rows();
    }*/
    public function deleteInfo($blog_id)
	{
		$sql = "UPDATE tbl_blog SET isDeleted = 1 WHERE blog_id='$blog_id';";
		$result = $this->db->query($sql);				
	}
    public function GetPageListAll()
    {
        $sql="SELECT * FROM tbl_category where isdeleted=0";
        $result = $this->db->query($sql);
        
        return $result->result();
    }

}