<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Blog extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
        // $this->load->model('Salary_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index($contact_id=NULL) 
    {
        // $data['userInfo2'] = $this->blog_model->contact($contact_id);
        $this->global['pageTitle'] = 'Caucasus Heritage : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
    //This function is used to load the user list
    //blog

    function blogListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->blog_model->blogListingCount($searchText);

            $returns = $this->paginationCompress ( "blogListing/", $count, 10 );
            
            $data['blogListing'] = $this->blog_model->blogListing($searchText, $returns["page"], $returns["segment"]);
            $data['category'] = $this->blog_model->GetPageListAll(); 
            
            $this->global['pageTitle'] = 'Caucasus Heritage : User Listing';
            
            $this->loadViews("blog/blogListing", $this->global, $data, NULL);
        }
    }
    function addBlog()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('blog_model');
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New User';
            $data['category'] = $this->blog_model->GetPageListAll(); 

            $this->loadViews("blog/addBlog", $this->global, $data, NULL);
        }
    }
    function addBlogConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('blog_title','blog Title','trim|required');
            // $this->form_validation->set_rules('blog_image','Blog Image','required');
            $this->form_validation->set_rules('blog_description','blog Description','trim|required');
            $this->form_validation->set_rules('short','Short Description','trim|required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->addBlog();
            }
            else
            {
                // $ppage = $this->input->post('ppage');
                // if($ppage==""){ $par_page=0; }else{ $par_page=$ppage; }
                $page_name = $this->input->post('page_name');
                $meta_title = $this->input->post('meta_title');
                $meta_description = $this->input->post('meta_description');
                $meta_tag = $this->input->post('meta_tag');
                $blog_title = $this->input->post('blog_title');
                $blog_description = $this->input->post('blog_description');
                $short = $this->input->post('short');
                $created_dtm = $this->input->post('created_dtm');
                //For uploading
                $data = array(); 
                if(!empty($_FILES['blog_image'])){ 
                     // Set preference 
                    $config['upload_path'] = 'blog_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $config['max_size'] = '10000'; // max_size in kb 
                    $config['file_name'] = $_FILES['blog_image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('blog_image')){ 
                        // Get data about the file
                        $uploadData = $this->upload->data(); 
                        $filename = $uploadData['file_name']; 
                        $data['response'] = 'successfully uploaded '.$filename; 
                    }else{ 
                        $data['response'] = 'failed'; 
                    } 
                }else{ 
                     $data['response'] = 'failed'; 
                } 
                // load view 
                $this->load->view('blog/addBlog',$data); 

                $userInfo1 = array('category_id'=>$page_name, 'meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'blog_image'=>$filename, 'meta_tag'=>$meta_tag, 'created_dtm'=>$created_dtm, 'blog_title'=>$blog_title, 'blog_description'=>$blog_description, 'short'=>$short);
                
                $this->load->model('blog_model');
                $result = $this->blog_model->addConfig($userInfo1);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Add successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Creation failed');
                }
                
                redirect('blogListing');
            }
        }
    }
    function editBlog($blog_id = NULL)
    {
        if($this->isAdmin() == TRUE && $blog_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($blog_id == null)
            {
                redirect('blog/editBlog');
            }
            $data = array();
            $data['userInfo1'] = $this->blog_model->getEditInfo($blog_id);
            $data['category'] = $this->blog_model->GetPageListAll(); 
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit User';
            
            $this->loadViews("blog/editBlog", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editBlogConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $blog_id = $this->input->post('blog_id');
            
            // $this->form_validation->set_rules('meta_title','Meta Title','trim|required');
            // $this->form_validation->set_rules('meta_description','meta_description','trim|required');
            // $this->form_validation->set_rules('meta_tag','Meta Tag','trim|required');
            $this->form_validation->set_rules('blog_title','blog Title','trim|required');
            $this->form_validation->set_rules('blog_description','blog Description','trim|required');
            $this->form_validation->set_rules('short','Short Description','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->editblog($blog_id);
            }
            else
            {
                $page_name = $this->input->post('page_name');
                $meta_title = $this->input->post('meta_title');
                $meta_description = $this->input->post('meta_description');
                $meta_tag = $this->input->post('meta_tag');
                $blog_title = $this->input->post('blog_title');
                $blog_description = $this->input->post('blog_description');
                $short = $this->input->post('short');
                $created_dtm = $this->input->post('created_dtm');

                $userInfo1 = array('category_id'=>$page_name, 'meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'meta_tag'=>$meta_tag, 'created_dtm'=>$created_dtm, 'blog_title'=>$blog_title, 'blog_description'=>$blog_description, 'short'=>$short);
                
                //For uploading
                $data = array(); 
                if($_FILES['blog_image']['name']!=""){ 
                     // Set preference 
                    $config['upload_path'] = 'blog_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $config['max_size'] = '10000'; // max_size in kb 
                    $config['file_name'] = $_FILES['blog_image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('blog_image')){ 
                        // Get data about the file
                        $uploadData = $this->upload->data(); 
                        $filename = $uploadData['file_name']; 
                        $data['response'] = 'successfully uploaded '.$filename; 
                        $userInfo1['blog_image']=$filename;
                    }else{ 
                        $data['response'] = 'failed'; 
                    } 
                }else{ 
                    $data['response'] = 'failed'; 
                } 
                // load view 
                $this->load->view('blog/editBlog',$data); 

                $result = $this->blog_model->editCon($userInfo1, $blog_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                
                redirect('blogListing');
            }
        }
    }
    /*function delete($blog_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->blog_model->deleteInfo($blog_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('blogListing');
        }
    }*/
	
	function delete($blog_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->blog_model->deleteInfo($blog_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('blogListing');
        }
    }
}
?>