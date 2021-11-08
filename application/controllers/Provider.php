<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Provider extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array("provider_model", "package_model"));
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Handyman : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
    function providerListing()
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
            
            $count = $this->provider_model->providerListingCount($searchText);

            $returns = $this->paginationCompress ( "packageListing/", $count, 10 );
            
            $data['providerListing'] = $this->provider_model->providerListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Handyman : Provider Listing';
            
            $this->loadViews("provider/providerListing", $this->global, $data, NULL);
        }
    }
    function addProvider()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New Provider';
            $data['packagelist'] = $this->package_model->allpackageListing();
            $this->loadViews("provider/addProvider", $this->global, $data, NULL);
        }
    }
    function addProviderConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
             $this->form_validation->set_rules('provider_name','Name','trim|required');
             $this->form_validation->set_rules('provider_age','Age','trim|required');
             $this->form_validation->set_rules('provider_phone','Phone','trim|required');
             $this->form_validation->set_rules('provider_address','Address','trim|required');
             $this->form_validation->set_rules('provider_hourly_rate','Rate','trim|required');
             $this->form_validation->set_rules('provider_work_ecperiance','Experiance','trim|required');
             $this->form_validation->set_rules('provider_work_done','Work','trim|required');
             $this->form_validation->set_rules('package_id','Package','trim|required');
             $this->form_validation->set_rules('provider_package_start_date','Start Date','trim|required');
             $this->form_validation->set_rules('provider_package_end_date','End Date','trim|required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->addProvider();
            }
            else
            {
                $provider_name = $this->input->post('provider_name');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $provider_name) ));
                if($this->provider_model->chekprovider($slug) == TRUE){
                    $this->session->set_flashdata('error', 'Provider is already exist');
                    $this->addProvider();
                    redirect('providerListing');
                }else{
                    if(!empty($_FILES['provider_image']['name'])){
                        $config['upload_path'] = 'uploads/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['file_name'] = $_FILES['provider_image']['name'];
                        
                        //Load upload library and initialize configuration
                        $this->load->library('upload',$config);
                        $this->upload->initialize($config);
                        
                        if($this->upload->do_upload('provider_image')){
                            $uploadData = $this->upload->data();
                            $provider_image = $uploadData['file_name'];
                        }else{
                            $provider_image = '';
                        }
                    }else{
                        $provider_image = '';
                    }
                    $provider_name = $this->input->post('provider_name');
                    $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $provider_name) ));
                    $provider_age = $this->input->post('provider_age');
                    $provider_phone = $this->input->post('provider_phone');
                    $provider_address = $this->input->post('provider_address');
                    $provider_hourly_rate = $this->input->post('provider_hourly_rate');
                    $provider_work_ecperiance = $this->input->post('provider_work_ecperiance');
                    $provider_work_done = $this->input->post('provider_work_done');
                    $provider_description = $this->input->post('provider_description');
                    $provider_package_id = $this->input->post('package_id');
                    $provider_package_start_date = $this->input->post('provider_package_start_date');
                    $provider_package_end_date = $this->input->post('provider_package_end_date');

                    $provider_info = array('image'=>$provider_image, 'slug'=>$slug, 'name'=>$provider_name, 'age'=>$provider_age, 'phone'=>$provider_phone, 'address'=>$provider_address, 'hourly_rate'=>$provider_hourly_rate, 'work_ecperiance'=>$provider_work_ecperiance, 'work_done'=>$provider_work_done, 'description'=>$provider_description, 'package_id'=>$provider_package_id, 'package_start_date'=>$provider_package_start_date, 'package_end_date'=>$provider_package_end_date, 'created_date'=>date('Y-m-d'));
                    $result = $this->provider_model->addprovider($provider_info);

                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'Add successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Creation failed');
                    }
                    redirect('providerListing');
                }
            }
        }
    }
    function editProvider($provider_id = NULL)
    {
        if($this->isAdmin() == TRUE && $provider_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($provider_id == null)
            {
                redirect('editProvider');
            }
            $data['providerinfo'] = $this->provider_model->getproviderInfo($provider_id);
            $data['packagelist'] = $this->package_model->allpackageListing();
            $this->global['pageTitle'] = 'Handyman : Edit Provider';
            
            $this->loadViews("provider/editProvider", $this->global, $data, NULL);
        }
    }
     // This function is used to edit the user information
     function editProviderConfig()
     {
         if($this->isAdmin() == TRUE)
         {
             $this->loadThis();
         }
         else
         {
             $this->load->library('form_validation');
             
             $provider_id = $this->input->post('provider_id');
             
             $this->form_validation->set_rules('provider_name','Name','trim|required');
             $this->form_validation->set_rules('provider_age','Age','trim|required');
             $this->form_validation->set_rules('provider_phone','Phone','trim|required');
             $this->form_validation->set_rules('provider_address','Address','trim|required');
             $this->form_validation->set_rules('provider_hourly_rate','Rate','trim|required');
             $this->form_validation->set_rules('provider_work_ecperiance','Experiance','trim|required');
             $this->form_validation->set_rules('provider_work_done','Work','trim|required');
             $this->form_validation->set_rules('package_id','Package','trim|required');
             $this->form_validation->set_rules('provider_package_start_date','Start Date','trim|required');
             $this->form_validation->set_rules('provider_package_end_date','End Date','trim|required');
 
             if($this->form_validation->run() == FALSE)
             {
                 $this->editProvider($provider_id);
             }
             else
             {
                $provider_name = $this->input->post('provider_name');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $provider_name) ));
                if($this->provider_model->chekprovideredit($slug,$provider_id) == TRUE){
                    $this->session->set_flashdata('error', 'Provider is already exist');
                    $this->editProvider($provider_id);
                    redirect('providerListing');
                }else{
                 $provider_name = $this->input->post('provider_name');
                 $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $provider_name) ));
                 $provider_age = $this->input->post('provider_age');
                 $provider_phone = $this->input->post('provider_phone');
                 $provider_address = $this->input->post('provider_address');
                 $provider_hourly_rate = $this->input->post('provider_hourly_rate');
                 $provider_work_ecperiance = $this->input->post('provider_work_ecperiance');
                 $provider_work_done = $this->input->post('provider_work_done');
                 $provider_description = $this->input->post('provider_description');
                 $provider_package_id = $this->input->post('package_id');
                 $provider_package_start_date = $this->input->post('provider_package_start_date');
                 $provider_package_end_date = $this->input->post('provider_package_end_date');
                 if(!empty($_FILES['provider_image']['name'])){
                    $config['upload_path'] = 'uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['file_name'] = $_FILES['provider_image']['name'];
                    
                    //Load upload library and initialize configuration
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    
                    if($this->upload->do_upload('provider_image')){
                        $uploadData = $this->upload->data();
                        $provider_image = $uploadData['file_name'];
                        $provider_info = array('image'=>$provider_image, 'slug'=>$slug, 'name'=>$provider_name, 'age'=>$provider_age, 'phone'=>$provider_phone, 'address'=>$provider_address, 'hourly_rate'=>$provider_hourly_rate, 'work_ecperiance'=>$provider_work_ecperiance, 'work_done'=>$provider_work_done, 'description'=>$provider_description, 'package_id'=>$provider_package_id, 'package_start_date'=>$provider_package_start_date, 'package_end_date'=>$provider_package_end_date, 'created_date'=>date('Y-m-d'));
                    }else{
                        $provider_info = array('slug'=>$slug, 'name'=>$provider_name, 'age'=>$provider_age, 'phone'=>$provider_phone, 'address'=>$provider_address, 'hourly_rate'=>$provider_hourly_rate, 'work_ecperiance'=>$provider_work_ecperiance, 'work_done'=>$provider_work_done, 'description'=>$provider_description, 'package_id'=>$provider_package_id, 'package_start_date'=>$provider_package_start_date, 'package_end_date'=>$provider_package_end_date, 'created_date'=>date('Y-m-d'));
                    }
                }else{
                    $provider_info = array('slug'=>$slug, 'name'=>$provider_name, 'age'=>$provider_age, 'phone'=>$provider_phone, 'address'=>$provider_address, 'hourly_rate'=>$provider_hourly_rate, 'work_ecperiance'=>$provider_work_ecperiance, 'work_done'=>$provider_work_done, 'description'=>$provider_description, 'package_id'=>$provider_package_id, 'package_start_date'=>$provider_package_start_date, 'package_end_date'=>$provider_package_end_date, 'created_date'=>date('Y-m-d'));
                }

                 
                 $result = $this->provider_model->editProvider($provider_info, $provider_id);
                 
                 if($result == true)
                 {
                     $this->session->set_flashdata('success', 'Updated successfully');
                 }
                 else
                 {
                     $this->session->set_flashdata('error', 'Updation failed');
                 }
                 
                 redirect('providerListing');
                }
             }
         }
     }
     function delete($provider_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->provider_model->deleteInfo($provider_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('providerListing');
        }
    }
}