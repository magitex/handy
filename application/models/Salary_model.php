 <?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
 class Salary_model extends CI_Model  
 {  
      function test_main()  
      {  
           echo "This is model function";  
      }  
      function insert_data($data)  
      {  
           $this->db->insert("tbl_salary", $data);  
      }  
      function fetch_data()  
      {  
           //$query = $this->db->get("tbl_salary");  
           //select * from tbl_salary  
           //$query = $this->db->query("SELECT * FROM tbl_salary ORDER BY id DESC");  
           $this->db->select("*");  
           $this->db->from("tbl_salary");  
           $query = $this->db->get();  
           return $query;  
      }  
      function delete_data($id){  
           $this->db->where("id", $id);  
           $this->db->delete("tbl_salary");  
           //DELETE FROM tbl_salary WHERE id = $id  
      }  
      function fetch_single_data($id)  
      {  
           $this->db->where("id", $id);  
           $query = $this->db->get("tbl_salary");  
           return $query;  
           //Select * FROM tbl_salary where id = '$id'  
      }  
      function update_data($data, $id)  
      {  
           $this->db->where("id", $id);  
           $this->db->update("tbl_salary", $data);  
           //UPDATE tbl_salary SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
      }  
 }  