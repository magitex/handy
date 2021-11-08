<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Funders extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('funders_model');
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

    function fundersListing()
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
            
            $count = $this->funders_model->fundersListingCount($searchText);

            $returns = $this->paginationCompress ( "fundersListing/", $count, 10 );
            
            $data['fundersListing'] = $this->funders_model->fundersListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : User Listing';
            
            $this->loadViews("funders/fundersListing", $this->global, $data, NULL);
        }
    }
    function addFunders()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('funders_model');
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New User';

            $this->loadViews("funders/addFunders", $this->global, NULL);
        }
    }
    function addFundersConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('funders_name','Name','trim|required|max_length[128]');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->addFunders();
            }
            else
            {
                $funders_name = $this->input->post('funders_name');
                $data = array(); 
                if(!empty($_FILES['funders_image'])){ 
                     // Set preference 
                    $config['upload_path'] = 'funders_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $config['max_size'] = '10000'; // max_size in kb 
                    $config['file_name'] = $_FILES['funders_image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('funders_image')){ 
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
                $this->load->view('funders/addFunders',$data);

                $userInfo1 = array('funders_name'=>$funders_name, 'funders_image'=>$filename, 'created_dtm'=>date('Y-m-d'));
                
                $this->load->model('funders_model');
                $result = $this->funders_model->addFunders($userInfo1);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Add successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Creation failed');
                }
                redirect('fundersListing');
            }
        }
    }
    function editFunders($funders_id = NULL)
    {
        if($this->isAdmin() == TRUE && $funders_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($funders_id == null)
            {
                redirect('editFunders');
            }
            $data['userInfo1'] = $this->funders_model->getFundersInfo($funders_id);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit User';
            
            $this->loadViews("funders/editFunders", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editFundersConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $funders_id = $this->input->post('funders_id');
            
            $this->form_validation->set_rules('funders_name','Name','trim|required|max_length[128]');

            if($this->form_validation->run() == FALSE)
            {
                $this->editTeam($funders_id);
            }
            else
            {
                $funders_name = $this->input->post('funders_name');

                $userInfo1 = array('funders_name'=>$funders_name, 'created_dtm'=>date('Y-m-d'));

                $data = array(); 
                if($_FILES['funders_image']['name']!=""){ 
                     // Set preference 
                    $config['upload_path'] = 'funders_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $config['max_size'] = '10000'; // max_size in kb 
                    $config['file_name'] = $_FILES['funders_image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('funders_image')){ 
                        // Get data about the file
                        $uploadData = $this->upload->data(); 
                        $filename = $uploadData['file_name']; 
                        $data['response'] = 'successfully uploaded '.$filename; 
                        $userInfo1['funders_image']=$filename;
                    }else{ 
                        $data['response'] = 'failed'; 
                    } 
                }else{ 
                    $data['response'] = 'failed'; 
                } 
                // load view 
                $this->load->view('funders/editFunders',$data); 
                

                $result = $this->funders_model->editFunders($userInfo1, $funders_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                
                redirect('fundersListing');
            }
        }
    }
    
	function delete($funders_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->funders_model->deleteInfo($funders_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('fundersListing');
        }
    }
}
?>