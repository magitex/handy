<?php

class Home_model extends CI_Model
{
	function __construct() {
        parent::__construct();
		$this->load->database();
		
    }
    
    public function GetbnrListAll()
	{
		$sql="SELECT * FROM tbl_bms where isdeleted=0";
		$result = $this->db->query($sql);
		
		return $result->result();
	}
	
	
	
	public function UserDelete($id)
	{
		$sql = "DELETE FROM lorry_owner WHERE id='$id'";
		$result = $this->db->query($sql);
		
		//return $result->result();
	}
	
	public function GetUserData($id)
	{
		$this->db->from('lorry_owner');
		$this->db->where('id',$id);
		$result=$this->db->get();
		return $result->row();
	}
	//Our Mission
	// public function GetHomeData()
	// {
	// 	$sql="SELECT * FROM tbl_add WHERE isDeleted=0 ORDER BY id DESC LIMIT 2";
	// 	$result = $this->db->query($sql);
		
	// 	return $result->result();
	// }
	public function GetHomeData()
	{
		$id=20;
		$this->db->from('tbl_add');
		$this->db->where('id',$id);
		$result=$this->db->get();
		return $result->row();
	}
	
	public function GetHomeData1()
	{
		$id=21;
		$this->db->from('tbl_add');
		$this->db->where('id',$id);
		$result=$this->db->get();
		return $result->row();
	}
	function GetHomeInfoById($id)
	{
		$this->db->from('tbl_add');
		$this->db->where('id',$id);
		$this->db->where('isDeleted', 0);
		$result=$this->db->get();
		return $result->row();
	}
	function AboutUs()
	{
		$id=31;
		$this->db->from('tbl_add');
		$this->db->where('id',$id);
		$result=$this->db->get();
		return $result->row();
	}
	//Banner
	function GetBannerData(){
		$bms_id=3;
		$this->db->from('tbl_bms');
		$this->db->where('bms_id',$bms_id);
		$result=$this->db->get();
		return $result->row();
	}
	
	//News
	function GetNewsData(){
		$sql="SELECT * FROM tbl_news WHERE isDeleted=0 ORDER BY news_id DESC LIMIT 3";
		$result = $this->db->query($sql);
		
		return $result->result();
	}
	function GetAllNewsData(){
		$sql="SELECT * FROM tbl_news WHERE isDeleted=0 ORDER BY position ASC";
		$result = $this->db->query($sql);
		
		return $result->result();
	}
	function GetNewsInfoById($news_id)
	{
		$this->db->from('tbl_news');
		$this->db->where('news_id',$news_id);
		$result=$this->db->get();
		return $result->row();
	}

	//Blog
	function GetAllCategoryData(){
		$sql="SELECT * FROM tbl_category WHERE isdeleted=0";
		$result = $this->db->query($sql);
		
		return $result->result();
	}
	function GetAllBlogData(){
		$sql="SELECT * FROM tbl_blog WHERE isDeleted=0 ORDER BY created_dtm DESC LIMIT 3";
		$result = $this->db->query($sql);
		
		return $result->result();
	}
	function GetBlogData(){
		$sql="SELECT * FROM tbl_blog WHERE isDeleted=0 ORDER BY created_dtm DESC LIMIT 15";
		$result = $this->db->query($sql);
		
		return $result->result();
	}
	function GetBlogInfoById($blog_id)
	{
		$this->db->from('tbl_blog');
		$this->db->where('blog_id',$blog_id);
		$result=$this->db->get();
		return $result->row();
	}
	function GetAllCategoryBlog($category_id){
		$sql="SELECT * FROM tbl_blog WHERE category_id='".$category_id."' and isDeleted=0 ORDER BY created_dtm";
		$result = $this->db->query($sql);
		
		return $result->result();
	}

	//Funders
	function GetFundersData(){
		$sql="SELECT * FROM tbl_funders WHERE isdeleted=0";
		$result = $this->db->query($sql);
		
		return $result->result();
	}

	//Partners
	function GetPartnersData(){
		$sql="SELECT * FROM tbl_partners WHERE isdeleted=0";
		$result = $this->db->query($sql);
		
		return $result->result();
	}

	//Contact
	function GetContactData(){
		$contact_id=1;
		$this->db->from('tbl_contact');
		$this->db->where('contact_id',$contact_id);
		$result=$this->db->get();
		return $result->row();
	}

	//Mail
	// function GetContactQueryData(){
	// 	$sql="SELECT * FROM tbl_mail";
	// 	$result = $this->db->query($sql);
		
	// 	return $result->result();
	// }
	public function addContact($data)
	{
		if($this->db->insert('tbl_mail',$data))
   		{
           return $this->db->insert_id();
   		}
   		else
   		{
          return false;
   		}
	}

	//Team
	function GetTeamData(){
		$sql="SELECT * FROM tbl_team WHERE isdeleted=0";
		$result = $this->db->query($sql);
		
		return $result->result();
	}

	//Report
	function GetReportData(){
		$sql="SELECT * FROM tbl_report WHERE isDeleted=0";
		$result = $this->db->query($sql);
		
		return $result->result();
	}

	//hisoric
	function GetHistoricData(){
		$sql="SELECT * FROM tbl_historic WHERE isDeleted=0";
		$result = $this->db->query($sql);
		
		return $result->result();
	}
	function GetHistoricInfoById($historic_id)
	{
		$this->db->from('tbl_historic');
		$this->db->where('historic_id',$historic_id);
		$result=$this->db->get();
		return $result->row();
	}
}
?>