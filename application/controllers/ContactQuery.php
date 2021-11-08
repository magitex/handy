<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class ContactQuery extends BaseController
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('ContactQuery_model');
        $this->isLoggedIn();   
    }
    public function index() 
    {
        $this->global['pageTitle'] = 'Caucasus Heritage : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
    function contactQueryListing()
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
            
            $count = $this->ContactQuery_model->contactQueryListingCount($searchText);

            $returns = $this->paginationCompress ( "contactQueryListing/", $count, 10 );
            
            $data['contact'] = $this->ContactQuery_model->contactQueryListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : User Listing';
            
            $this->loadViews("contact_query/contactQueryListing", $this->global, $data, NULL);
        }
    }
}