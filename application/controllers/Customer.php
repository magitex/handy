<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Customer extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array("customer_model"));
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Handyman : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
    function customerListing()
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
            
            $count = $this->customer_model->customerListingCount($searchText);

            $returns = $this->paginationCompress ( "customerListing/", $count, 10 );
            
            $data['customerListing'] = $this->customer_model->customerListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Handyman : Customer Listing';
            
            $this->loadViews("customer/customerListing", $this->global, $data, NULL);
        }
    }
    function addCustomer()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New Customer';
            $data['customerlist'] = $this->customer_model->allcustomerListing();
            $this->loadViews("customer/addCustomer", $this->global, $data, NULL);
        }
    }
    function addCustomerConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
             $this->form_validation->set_rules('customer_name','Name','trim|required');
             $this->form_validation->set_rules('customer_email','Email','trim|required');
             $this->form_validation->set_rules('customer_phone','Phone','trim|required');
             $this->form_validation->set_rules('customer_dob','Dob','trim|required');
             $this->form_validation->set_rules('customer_address','Address','trim|required');
             
             
            if($this->form_validation->run() == FALSE)
            {
                $this->addCustomer();
            }
            else
            {
                $customer_name = $this->input->post('customer_name');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $customer_name) ));
                if($this->customer_model->chekcustomer($slug) == TRUE){
                    $this->session->set_flashdata('error', 'Customer is already exist');
                    $this->addProvider();
                    redirect('customerListing');
                }else{
                    if(!empty($_FILES['customer_image']['name'])){
                        $config['upload_path'] = 'uploads/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['file_name'] = $_FILES['customer_image']['name'];
                        
                        //Load upload library and initialize configuration
                        $this->load->library('upload',$config);
                        $this->upload->initialize($config);
                        
                        if($this->upload->do_upload('customer_image')){
                            $uploadData = $this->upload->data();
                            $customer_image = $uploadData['file_name'];
                        }else{
                            $customer_image = '';
                        }
                    }else{
                        $customer_image = '';
                    }
                    $customer_name = $this->input->post('customer_name');
                    $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $customer_name) ));
                    $customer_email = $this->input->post('customer_email');
                    $customer_phone = $this->input->post('customer_phone');
                    $customer_address = $this->input->post('customer_address');
                    $customer_dob = $this->input->post('customer_dob');
                    $customer_info = array('image'=>$customer_image, 'slug'=>$slug, 'name'=>$customer_name, 'email'=>$customer_email, 'phone'=>$customer_phone, 'address'=>$customer_address, 'dob'=>$customer_dob, 'created_date'=>date('Y-m-d'));
                    $result = $this->customer_model->addcustomer($customer_info);

                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'Add successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Creation failed');
                    }
                    redirect('customerListing');
                }
            }
        }
    }
    function editCustomer($customer_id = NULL)
    {
        if($this->isAdmin() == TRUE && $customer_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($customer_id == null)
            {
                redirect('editCustomer');
            }
            $data['customerinfo'] = $this->customer_model->getcustomerInfo($customer_id);
            $this->global['pageTitle'] = 'Handyman : Edit Customer';
            
            $this->loadViews("customer/editCustomer", $this->global, $data, NULL);
        }
    }
     // This function is used to edit the user information
     function editCustomerConfig()
     {
         if($this->isAdmin() == TRUE)
         {
             $this->loadThis();
         }
         else
         {
             $this->load->library('form_validation');
             
             $customer_id = $this->input->post('customer_id');
             
             $this->form_validation->set_rules('customer_name','Name','trim|required');
             $this->form_validation->set_rules('customer_email','Email','trim|required');
             $this->form_validation->set_rules('customer_phone','Phone','trim|required');
             $this->form_validation->set_rules('customer_address','Address','trim|required');
             $this->form_validation->set_rules('customer_dob','Dob','trim|required');
 
             if($this->form_validation->run() == FALSE)
             {
                 $this->editCustomer($customer_id);
             }
             else
             {
                $customer_name = $this->input->post('customer_name');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $customer_name) ));
                if($this->customer_model->chekcustomeredit($slug,$customer_id) == TRUE){
                    $this->session->set_flashdata('error', 'Customer is already exist');
                    $this->editCustomer($customer_id);
                    redirect('customerListing');
                }else{
                $customer_name = $this->input->post('customer_name');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $customer_name) ));
                $customer_email = $this->input->post('customer_email');
                $customer_phone = $this->input->post('customer_phone');
                $customer_address = $this->input->post('customer_address');
                $customer_dob = $this->input->post('customer_dob');
                 if(!empty($_FILES['customer_image']['name'])){
                    $config['upload_path'] = 'uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['file_name'] = $_FILES['customer_image']['name'];
                    
                    //Load upload library and initialize configuration
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    
                    if($this->upload->do_upload('customer_image')){
                        $uploadData = $this->upload->data();
                        $customer_image = $uploadData['file_name'];
                        $customer_info = array('image'=>$customer_image, 'slug'=>$slug, 'name'=>$customer_name, 'email'=>$customer_email, 'phone'=>$customer_phone, 'address'=>$customer_address, 'dob'=>$customer_dob, 'created_date'=>date('Y-m-d'));
                    }else{
                        $customer_info = array('slug'=>$slug, 'name'=>$customer_name, 'email'=>$customer_email, 'phone'=>$customer_phone, 'address'=>$customer_address, 'dob'=>$customer_dob, 'created_date'=>date('Y-m-d'));
                    }
                }else{
                    $customer_info = array('slug'=>$slug, 'name'=>$customer_name, 'email'=>$customer_email, 'phone'=>$customer_phone, 'address'=>$customer_address, 'dob'=>$customer_dob, 'created_date'=>date('Y-m-d'));
                }

                 
                 $result = $this->customer_model->editCustomer($customer_info, $customer_id);
                 
                 if($result == true)
                 {
                     $this->session->set_flashdata('success', 'Updated successfully');
                 }
                 else
                 {
                     $this->session->set_flashdata('error', 'Updation failed');
                 }
                 
                 redirect('customerListing');
                }
             }
         }
     }
     function delete($customer_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->customer_model->deleteInfo($customer_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('customerListing');
        }
    }
}