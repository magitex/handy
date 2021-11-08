<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Language_model extends CI_Model
{
    //Addition
    function languageListingCount($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_language as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.title  LIKE '%".$searchText."%')";
            $likeCriteria = "(BaseTbl.isocode  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    // This function is used to get the user listing count
    function languageListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_language as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.title  LIKE '%".$searchText."%')";
            $likeCriteria = "(BaseTbl.isocode  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function alllanguageListing()
    {
        $this->db->select('*');
        $this->db->from('tbl_language');
        $this->db->where('isdeleted', 0);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    function addLanguage($languageinfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_language', $languageinfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editLanguage($languageinfo, $language_id)
    {
        $this->db->where('id', $language_id);
        $this->db->update('tbl_language', $languageinfo);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getLanguageInfo($language_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_language');
        // $this->db->where('isDeleted', 0);
        $this->db->where('id', $language_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    function deleteLanguage($language_id, $languageinfo)
    {
        $this->db->where('id', $language_id);
        $this->db->update('tbl_language', $languageinfo);
        
        return $this->db->affected_rows();
    }
	
	public function deleteInfo($language_id)
	{
		$sql = "UPDATE tbl_language SET isdeleted = 1 WHERE id='$language_id';";
		$result = $this->db->query($sql);				
	}
    function cheklanguage($slug)
    {
        $this->db->where('slug', $slug);
        $query = $this->db->get('tbl_language');
        if( $query->num_rows() > 0 )
        { 
            return TRUE; 
        } 
        else 
        { 
            return FALSE; 
        }
    }
    function cheklanguageedit($slug,$language_id)
    {
        $sql = "SELECT * FROM tbl_language WHERE slug='".$slug."' AND id!='".$language_id."'";
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