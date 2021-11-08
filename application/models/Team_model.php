<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Team_model extends CI_Model
{
    //Addition
    function teamListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.team_id, BaseTbl.created_dtm, BaseTbl.team_name, BaseTbl.team_image, BaseTbl.designation, BaseTbl.col2');
        $this->db->from('tbl_team as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.report_title  LIKE '%".$searchText."%'
                            OR  BaseTbl.meta_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    // This function is used to get the user listing count
    function teamListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.team_id, BaseTbl.created_dtm, BaseTbl.team_name, BaseTbl.team_image, BaseTbl.designation, BaseTbl.col2');
        $this->db->from('tbl_team as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.team_name  LIKE '%".$searchText."%'
                            OR  BaseTbl.designation  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isdeleted', 0);
        $this->db->order_by('BaseTbl.team_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function addTeam($userInfo1)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_team', $userInfo1);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editTeam($userInfo1, $team_id)
    {
        $this->db->where('team_id', $team_id);
        $this->db->update('tbl_team', $userInfo1);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getTeamInfo($team_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_team');
        // $this->db->where('isDeleted', 0);
        $this->db->where('team_id', $team_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    function deleteTeam($team_id, $userInfo1)
    {
        $this->db->where('team_id', $team_id);
        $this->db->update('tbl_team', $userInfo1);
        
        return $this->db->affected_rows();
    }
	
	public function deleteInfo($id)
	{
		$sql = "UPDATE tbl_team SET isDeleted = 1 WHERE team_id='$id';";
		$result = $this->db->query($sql);				
	}
}