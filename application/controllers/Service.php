<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Service extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('service_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Handyman : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
//Team

    function serviceListing()
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
            
            $count = $this->service_model->serviceListingCount($searchText);

            $returns = $this->paginationCompress ( "serviceListing/", $count, 10 );
            
            $data['serviceListing'] = $this->service_model->serviceListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Service Listing';
            
            $this->loadViews("service/serviceListing", $this->global, $data, NULL);
        }
    }
    function addService()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New Service';
            $data['servlist'] = $this->service_model->allserviceListing();
            $this->loadViews("service/addService", $this->global, $data, NULL);
        }
    }
    function addServiceConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('service_name','Name','trim|required');
            if($this->form_validation->run() == FALSE)
            {
                $this->addService();
            }
            else
            {
                $service_name = $this->input->post('service_name');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $service_name) ));
                $p_service = $this->input->post('p_service');
                if($p_service!=''){
                $p_arr = explode ("_", $p_service); 
                $pserv_id = $p_arr[0];
                $pserv_name = $p_arr[1];
                }else{
                $pserv_id = '';
                $pserv_name = '';  
                }
                $service_description = $this->input->post('service_description');
                if($this->service_model->chekserv($slug) == TRUE){
                    $this->session->set_flashdata('error', 'Service is already exist');
                    $this->addService();
                    redirect('serviceListing');
                }else{
                    if(!empty($_FILES['service_image']['name'])){
                        $config['upload_path'] = 'uploads/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['file_name'] = $_FILES['service_image']['name'];
                        
                        //Load upload library and initialize configuration
                        $this->load->library('upload',$config);
                        $this->upload->initialize($config);
                        
                        if($this->upload->do_upload('service_image')){
                            $uploadData = $this->upload->data();
                            $service_image = $uploadData['file_name'];
                        }else{
                            $service_image = '';
                        }
                    }else{
                        $service_image = '';
                    }

                    $serviceInfo = array('service_name'=>$service_name, 'slug'=>$slug, 'service_image'=>$service_image, 'created_date'=>date('Y-m-d'), 'p_service'=>$pserv_id,'p_service_name'=>$pserv_name,'service_description'=>$service_description);
                    $result = $this->service_model->addservice($serviceInfo);

                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'Add successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Creation failed');
                    }
                    redirect('serviceListing');
                }
            }
        }
    }
    function editService($service_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($service_id == null)
            {
                redirect('editService');
            }
            $data['serviceInfo'] = $this->service_model->getserviceInfo($service_id);
            $data['servlist'] = $this->service_model->allserviceListing();
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit Service';
            
            $this->loadViews("service/editService", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editServiceConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $service_id = $this->input->post('service_id');
            
            $this->form_validation->set_rules('service_name','Name','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->editService($service_id);
            }
            else
            {
                $service_name = $this->input->post('service_name');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $service_name) ));
                $p_service = $this->input->post('p_service');
                $p_arr = explode ("_", $p_service); 
                $pserv_id = $p_arr[0];
                $pserv_name = $p_arr[1];
                $service_description = $this->input->post('service_description');
                if($this->service_model->chekservedit($slug,$service_id) == TRUE){
                    $this->session->set_flashdata('error', 'Service is already exist');
                    $this->editService($service_id);
                    redirect('serviceListing');
                }else{
                    if(!empty($_FILES['service_image']['name'])){
                        $config['upload_path'] = 'uploads/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['file_name'] = $_FILES['service_image']['name'];
                        
                        //Load upload library and initialize configuration
                        $this->load->library('upload',$config);
                        $this->upload->initialize($config);
                        
                        if($this->upload->do_upload('service_image')){
                            $uploadData = $this->upload->data();
                            $service_image = $uploadData['file_name'];
                            $serviceInfo = array('service_name'=>$service_name, 'slug'=>$slug, 'service_image'=>$service_image, 'created_date'=>date('Y-m-d'), 'p_service'=>$p_service,'p_service_name'=>$pserv_name,'service_description'=>$service_description);
                        }else{
                            $serviceInfo = array('service_name'=>$service_name, 'slug'=>$slug, 'created_date'=>date('Y-m-d'), 'p_service'=>$p_service,'p_service_name'=>$pserv_name,'service_description'=>$service_description);
                        }
                    }else{
                        $serviceInfo = array('service_name'=>$service_name, 'slug'=>$slug, 'created_date'=>date('Y-m-d'), 'p_service'=>$p_service,'p_service_name'=>$pserv_name,'service_description'=>$service_description);
                    }

                    $result = $this->service_model->editcategory($serviceInfo, $service_id);
                    
                    if($result == true)
                    {
                        $this->session->set_flashdata('success', 'Updated successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Updation failed');
                    }
                    
                    redirect('serviceListing');
                }
            }
        }
    }
    
	function delete($service_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->service_model->deleteInfo($service_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('serviceListing');
        }
    }
}
?>