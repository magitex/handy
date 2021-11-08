<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Cmspage extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cmspage_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Handyman : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
    function cmspageListing()
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
            
            $count = $this->cmspage_model->cmspageListingCount($searchText);

            $returns = $this->paginationCompress ( "cmspageListing/", $count, 10 );
            
            $data['cmspageListing'] = $this->cmspage_model->cmspageListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Handyman : Cmspage Listing';
            
            $this->loadViews("cmspage/cmspageListing", $this->global, $data, NULL);
        }
    }
    function editCmspage($page_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($page_id == null)
            {
                redirect('editCmspage');
            }
            $data['pageinfo'] = $this->cmspage_model->getCmspageInfo($page_id);
            $this->global['pageTitle'] = 'Handyman : Edit Cms Page';
            
            $this->loadViews("cmspage/editCmspage", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editCmspageConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $page_id = $this->input->post('page_id');
            
            $this->form_validation->set_rules('page_name','Name','trim|required');
            $this->form_validation->set_rules('page_title','Price','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->editPackage($package_id);
            }
            else
            {
                
                $page_name = $this->input->post('page_name');
                $page_title = $this->input->post('page_title');
                $page_description = $this->input->post('page_description');
                $meta_title = $this->input->post('meta_title');
                $meta_keyword = $this->input->post('meta_keyword');
                $meta_description = $this->input->post('meta_description');
                $page_info = array('page_name'=>$page_name, 'page_title'=>$page_title, 'page_description'=>$page_description, 'meta_title'=>$meta_title, 'meta_keyword'=>$meta_keyword, 'meta_description'=>$meta_description,'date_modified'=>date('Y-m-d'));
                $result = $this->cmspage_model->editCmspage($page_info, $page_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                
                redirect('cmspageListing');
            }
        }
    }

}