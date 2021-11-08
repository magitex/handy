<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Report_model extends CI_Model
{
    //Addition
    function reportListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.report_id, BaseTbl.created_dtm, BaseTbl.meta_title, , BaseTbl.meta_description, BaseTbl.meta_tag, BaseTbl.report_title, BaseTbl.month, BaseTbl.year, BaseTbl.report_file, BaseTbl.report_description');
        $this->db->from('tbl_report as BaseTbl');
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
    function reportListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.report_id, BaseTbl.created_dtm, BaseTbl.meta_title, , BaseTbl.meta_description, BaseTbl.meta_tag, BaseTbl.month, BaseTbl.year, BaseTbl.report_title, BaseTbl.report_file, BaseTbl.report_description');
        $this->db->from('tbl_report as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.report_title  LIKE '%".$searchText."%'
                            OR  BaseTbl.meta_title  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->order_by('BaseTbl.report_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function addReport($userInfo1)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_report', $userInfo1);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function editReport($userInfo1, $report_id)
    {
        $this->db->where('report_id', $report_id);
        $this->db->update('tbl_report', $userInfo1);
        
        return TRUE;
    }


    // This function used to get user information by id
    function getReportInfo($report_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_report');
        // $this->db->where('isDeleted', 0);
        $this->db->where('report_id', $report_id);
        $query = $this->db->get();
        
        return $query->row();
    }
    /*function deleteInfo($id, $userInfo1)
    {
		echo $id;
		exit;s
        $this->db->where('report_id', $report_id);
        $this->db->update('tbl_report', $userInfo1);
        
        return $this->db->affected_rows();
    }*/
	
	public function deleteInfo($id)
	{
		$sql = "UPDATE tbl_report SET isDeleted = 1 WHERE report_id='$id';";
		$result = $this->db->query($sql);				
	}
	
    function checkMonth($month, $year)
    {
        $this->db->where(array('month'=>$month, 'year'=>$year, 'isDeleted'=>0));
        $query = $this->db->get('tbl_report');
        $check=$query->num_rows();
        return $check; 
    }
}