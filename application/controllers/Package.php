<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Package extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('package_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Handyman : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
    function packageListing()
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
            
            $count = $this->package_model->packageListingCount($searchText);

            $returns = $this->paginationCompress ( "packageListing/", $count, 10 );
            
            $data['packageListing'] = $this->package_model->packageListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Handyman : Package Listing';
            
            $this->loadViews("package/packageListing", $this->global, $data, NULL);
        }
    }
    function editPackage($package_id = NULL)
    {
        if($this->isAdmin() == TRUE && $package_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($package_id == null)
            {
                redirect('editPackage');
            }
            $data['packageinfo'] = $this->package_model->getpackageInfo($package_id);
            $this->global['pageTitle'] = 'Handyman : Edit Package';
            
            $this->loadViews("package/editPackage", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editPackageConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $package_id = $this->input->post('package_id');
            
            $this->form_validation->set_rules('package_name','Name','trim|required');
            $this->form_validation->set_rules('package_price','Price','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->editPackage($package_id);
            }
            else
            {
                
                $package_name = $this->input->post('package_name');
                $package_price = $this->input->post('package_price');
                $package_info = array('package_name'=>$package_name, 'package_price'=>$package_price, 'created_dtm'=>date('Y-m-d'));
                $result = $this->package_model->editPackage($package_info, $package_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                
                redirect('packageListing');
            }
        }
    }

}