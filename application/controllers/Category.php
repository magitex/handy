<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Category extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Handyman : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
//Team

    function categoryListing()
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
            
            $count = $this->category_model->categoryListingCount($searchText);

            $returns = $this->paginationCompress ( "categoryListing/", $count, 10 );
            
            $data['categoryListing'] = $this->category_model->categoryListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Category Listing';
            
            $this->loadViews("category/categoryListing", $this->global, $data, NULL);
        }
    }
    function addCategory()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('category_model');
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New User';
            $data['catlist'] = $this->category_model->allcategoryListing();
            $this->loadViews("category/addCategory", $this->global, $data, NULL);
        }
    }
    function addCategoryConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('category_name','Name','trim|required');
            //$this->form_validation->set_rules('p_category','Link','trim|required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->addCategory();
            }
            else
            {
                $category_name = $this->input->post('category_name');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $category_name) ));
                if($this->category_model->chekcat($slug) == TRUE){
                    $this->session->set_flashdata('error', 'Category is already exist');
                    $this->addCategory();
                    redirect('categoryListing');
                }else{
                    if(!empty($_FILES['category_icon']['name'])){
                        $config['upload_path'] = 'uploads/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['file_name'] = $_FILES['category_icon']['name'];
                        
                        //Load upload library and initialize configuration
                        $this->load->library('upload',$config);
                        $this->upload->initialize($config);
                        
                        if($this->upload->do_upload('category_icon')){
                            $uploadData = $this->upload->data();
                            $category_icon = $uploadData['file_name'];
                        }else{
                            $category_icon = '';
                        }
                    }else{
                        $category_icon = '';
                    }
                    $category_name = $this->input->post('category_name');
                    $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $category_name) ));
                    $p_category = $this->input->post('p_category');
                    $p_arr = explode ("_", $p_category); 
                    $pcat_id = $p_arr[0];
                    $pcat_name = $p_arr[1];

                    $userInfo1 = array('category_name'=>$category_name, 'cat_slug'=>$slug, 'category_icon'=>$category_icon, 'created_dtm'=>date('Y-m-d'), 'p_category'=>$pcat_id,'p_category_name'=>$pcat_name);
                    
                    $this->load->model('category_model');
                    $result = $this->category_model->addcategory($userInfo1);

                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'Add successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Creation failed');
                    }
                    redirect('categoryListing');
                }
            }
        }
    }
    function editCategory($category_id = NULL)
    {
        if($this->isAdmin() == TRUE && $category_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($category_id == null)
            {
                redirect('editCategory');
            }
            $data['userInfo1'] = $this->category_model->getcategoryInfo($category_id);
            $data['catlist'] = $this->category_model->allcategoryListing();
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit User';
            
            $this->loadViews("category/editCategory", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editCategoryConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $category_id = $this->input->post('category_id');
            
            $this->form_validation->set_rules('category_name','Name','trim|required');
            //$this->form_validation->set_rules('p_category','Link','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->editCategory($category_id);
            }
            else
            {
                $category_name = $this->input->post('category_name');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $category_name) ));
                if($this->category_model->chekcatedit($slug,$category_id) == TRUE){
                    $this->session->set_flashdata('error', 'Category is already exist');
                    $this->editCategory($category_id);
                    redirect('categoryListing');
                }else{
                    $category_name = $this->input->post('category_name');
                    $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $category_name) ));
                    $p_category = $this->input->post('p_category');
                    $p_arr = explode ("_", $p_category); 
                    $pcat_id = $p_arr[0];
                    $pcat_name = $p_arr[1];
                    if(!empty($_FILES['category_icon']['name'])){
                        $config['upload_path'] = 'uploads/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['file_name'] = $_FILES['category_icon']['name'];
                        
                        //Load upload library and initialize configuration
                        $this->load->library('upload',$config);
                        $this->upload->initialize($config);
                        
                        if($this->upload->do_upload('category_icon')){
                            $uploadData = $this->upload->data();
                            $category_icon = $uploadData['file_name'];
                            $userInfo1 = array('category_name'=>$category_name, 'cat_slug'=>$slug, 'category_icon'=>$category_icon, 'created_dtm'=>date('Y-m-d'), 'p_category'=>$pcat_id,'p_category_name'=>$pcat_name);
                        }else{
                            $userInfo1 = array('category_name'=>$category_name, 'cat_slug'=>$slug, 'created_dtm'=>date('Y-m-d'), 'p_category'=>$pcat_id,'p_category_name'=>$pcat_name);
                        }
                    }else{
                        $userInfo1 = array('category_name'=>$category_name, 'cat_slug'=>$slug, 'created_dtm'=>date('Y-m-d'), 'p_category'=>$pcat_id,'p_category_name'=>$pcat_name);
                    }

                    $result = $this->category_model->editcategory($userInfo1, $category_id);
                    
                    if($result == true)
                    {
                        $this->session->set_flashdata('success', 'Updated successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Updation failed');
                    }
                    
                    redirect('categoryListing');
                }
            }
        }
    }
    
	function delete($category_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->category_model->deleteInfo($category_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('categoryListing');
        }
    }
}
?>