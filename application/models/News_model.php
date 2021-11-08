<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model
{
    //Addition
    function newsListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.news_id, BaseTbl.position, BaseTbl.created_dtm, BaseTbl.meta_title, , BaseTbl.meta_description, BaseTbl.meta_tag, BaseTbl.news_title, BaseTbl.news_image, BaseTbl.news_description, BaseTbl.short');
        $this->db->from('tbl_news as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.news_title  LIKE '%".$searchText."%'
                            OR  BaseTbl.meta_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    // This function is used to get the user listing count
    function newsListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.news_id, BaseTbl.position, BaseTbl.created_dtm, BaseTbl.meta_title, , BaseTbl.meta_description, BaseTbl.meta_tag, BaseTbl.news_title, BaseTbl.news_image, BaseTbl.news_description, BaseTbl.short');
        $this->db->from('tbl_news as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.news_title  LIKE '%".$searchText."%'
                            OR  BaseTbl.meta_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->order_by('BaseTbl.news_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function addConfig($userInfo1)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_news', $userInfo1);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editCon($userInfo1, $news_id)
    {
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news', $userInfo1);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getEditInfo($news_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        // $this->db->where('isDeleted', 0);
        $this->db->where('news_id', $news_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    /*function deleteInfo($id, $userInfo1)
    {
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news', $userInfo1);
        
        return $this->db->affected_rows();
    }*/
    public function deleteInfo($id)
	{
		$sql = "UPDATE tbl_news SET isDeleted = 1 WHERE news_id='$id';";
		$result = $this->db->query($sql);				
	}

}