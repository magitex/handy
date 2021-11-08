<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Currency extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('currency_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Handyman : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
//Team

    function currencyListing()
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
            
            $count = $this->currency_model->currencyListingCount($searchText);

            $returns = $this->paginationCompress ( "currencyListing/", $count, 10 );
            
            $data['currencyListing'] = $this->currency_model->currencyListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Handyman : Currency Listing';
            
            $this->loadViews("currency/currencyListing", $this->global, $data, NULL);
        }
    }
    function addCurrency()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'Handyman : Add New Currency';
            $this->loadViews("currency/addCurrency", $this->global, NULL);
        }
    }
    function addCurrencyConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('currency_title','Title','trim|required');
            $this->form_validation->set_rules('currency_code','Title','trim|required');
            $this->form_validation->set_rules('currency_symbol','Title','trim|required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addCurrency();
            }
            else
            {
                $currency_title = $this->input->post('currency_title');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $currency_title) ));
                $currency_code = $this->input->post('currency_code');
                $currency_symbol = $this->input->post('currency_symbol');
                if($this->currency_model->chekcurrency($slug) == TRUE){
                    $this->session->set_flashdata('error', 'Currency is already exist');
                    $this->addCurrency();
                    redirect('currencyListing');
                }else{
                    $currencyinfo = array('slug'=>$slug, 'currency_title'=>$currency_title, 'currency_code'=>$currency_code, 'currency_symbol'=>$currency_symbol, 'created_date'=>date('Y-m-d'));
                    $result = $this->currency_model->addCurrency($currencyinfo);

                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'Add successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Creation failed');
                    }
                    redirect('currencyListing');
                }
            }
        }
    }
    function editCurrency($currency_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($currency_id == null)
            {
                redirect('editCurrency');
            }
            $data['currencyInfo'] = $this->currency_model->getcurrencyInfo($currency_id);
            $this->global['pageTitle'] = 'Handyman : Edit Currency';
            
            $this->loadViews("currency/editCurrency", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editCurrencyConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $currency_id = $this->input->post('currency_id');
            
            $this->form_validation->set_rules('currency_title','Title','trim|required');
            $this->form_validation->set_rules('currency_code','Title','trim|required');
            $this->form_validation->set_rules('currency_symbol','Title','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->editCurrency($currency_id);
            }
            else
            {
                $currency_title = $this->input->post('currency_title');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $currency_title) ));
                $currency_code = $this->input->post('currency_code');
                $currency_symbol = $this->input->post('currency_symbol');
                if($this->currency_model->chekcurrencyedit($slug,$currency_id) == TRUE){
                    $this->session->set_flashdata('error', 'Currency is already exist');
                    $this->editCurrency($currency_id);
                    redirect('currencyListing');
                }else{
                    $currencyinfo = array('slug'=>$slug, 'currency_title'=>$currency_title, 'currency_code'=>$currency_code, 'currency_symbol'=>$currency_symbol, 'created_date'=>date('Y-m-d'));
                    $result = $this->currency_model->editcurrency($currencyinfo, $currency_id);
                    
                    if($result == true)
                    {
                        $this->session->set_flashdata('success', 'Updated successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Updation failed');
                    }
                    
                    redirect('currencyListing');
                }
            }
        }
    }
    
	function delete($currency_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->currency_model->deleteInfo($currency_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('currencyListing');
        }
    }
}
?>