<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Partners extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('partners_model');
        // $this->load->model('Salary_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Caucasus Heritage : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
//Team

    function partnersListing()
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
            
            $count = $this->partners_model->partnersListingCount($searchText);

            $returns = $this->paginationCompress ( "partnersListing/", $count, 10 );
            
            $data['partnersListing'] = $this->partners_model->partnersListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : User Listing';
            
            $this->loadViews("partners/partnersListing", $this->global, $data, NULL);
        }
    }
    function addPartners()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('partners_model');
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New User';

            $this->loadViews("partners/addPartners", $this->global, NULL);
        }
    }
    function addPartnersConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('partners_name','Name','trim|required');
            $this->form_validation->set_rules('partners_link','Link','trim|required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->addpartners();
            }
            else
            {
                $partners_name = $this->input->post('partners_name');
                $partners_link = $this->input->post('partners_link');
                $data = array(); 
                if(!empty($_FILES['partners_image'])){ 
                     // Set preference 
                    $config['upload_path'] = 'partners_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $config['max_size'] = '10000'; // max_size in kb 
                    $config['file_name'] = $_FILES['partners_image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('partners_image')){ 
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
                $this->load->view('partners/addPartners',$data);

                $userInfo1 = array('partners_name'=>$partners_name, 'partners_image'=>$filename, 'created_dtm'=>date('Y-m-d'), 'partners_link'=>$partners_link);
                
                $this->load->model('partners_model');
                $result = $this->partners_model->addpartners($userInfo1);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Add successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Creation failed');
                }
                redirect('partnersListing');
            }
        }
    }
    function editPartners($partners_id = NULL)
    {
        if($this->isAdmin() == TRUE && $partners_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($partners_id == null)
            {
                redirect('editPartners');
            }
            $data['userInfo1'] = $this->partners_model->getpartnersInfo($partners_id);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit User';
            
            $this->loadViews("partners/editPartners", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editPartnersConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $partners_id = $this->input->post('partners_id');
            
            $this->form_validation->set_rules('partners_name','Name','trim|required');
            $this->form_validation->set_rules('partners_link','Link','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->editTeam($partners_id);
            }
            else
            {
                $partners_name = $this->input->post('partners_name');
                $partners_link = $this->input->post('partners_link');

                $userInfo1 = array('partners_name'=>$partners_name, 'created_dtm'=>date('Y-m-d'), 'partners_link'=>$partners_link);

                $data = array(); 
                if($_FILES['partners_image']['name']!=""){ 
                     // Set preference 
                    $config['upload_path'] = 'partners_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $config['max_size'] = '10000'; // max_size in kb 
                    $config['file_name'] = $_FILES['partners_image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('partners_image')){ 
                        // Get data about the file
                        $uploadData = $this->upload->data(); 
                        $filename = $uploadData['file_name']; 
                        $data['response'] = 'successfully uploaded '.$filename; 
                        $userInfo1['partners_image']=$filename;
                    }else{ 
                        $data['response'] = 'failed'; 
                    } 
                }else{ 
                    $data['response'] = 'failed'; 
                } 
                // load view 
                $this->load->view('partners/editPartners',$data); 
                

                $result = $this->partners_model->editPartners($userInfo1, $partners_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                
                redirect('partnersListing');
            }
        }
    }
    
	function delete($partners_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->partners_model->deleteInfo($partners_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('partnersListing');
        }
    }
}
?>