<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Banner extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('banner_model');
        // $this->load->model('Salary_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Caucasus Heritage : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
    //This function is used to load the user list






//Banner Management System

    function bannerListing()
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
            
            $count = $this->banner_model->bannerListingCount($searchText);

            $returns = $this->paginationCompress ( "bannerListing/", $count, 10 );
            
            $data['bannerListing'] = $this->banner_model->bannerListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : User Listing';
            
            $this->loadViews("banner/bannerListing", $this->global, $data, NULL);
        }
    }
    function addBanner()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('banner_model');
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New User';

            $this->loadViews("banner/addBanner", $this->global, NULL);
        }
    }
    function addBannerConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('title','Title','trim|required');
            $this->form_validation->set_rules('description','Description','trim|required');
            $this->form_validation->set_rules('link','Link','trim|required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->addBanner();
            }
            else
            {
                $title = $this->input->post('title');
                $description = $this->input->post('description');
                $link = $this->input->post('link');
                //For uploading
                $data = array(); 
                if(!empty($_FILES['image'])){ 
                     // Set preference 
                    $config['upload_path'] = 'banner_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png'; 
                    $config['max_size'] = '10000'; // max_size in kb 
                    $config['file_name'] = $_FILES['image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('image')){ 
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
                $this->load->view('banner/addBanner',$data); 

                $userInfo1 = array('title'=>$title, 'description'=>$description, 'image'=>$filename, 'link'=>$link, 'created_dtm'=>date('Y-m-d'));
                $this->load->model('banner_model');
                $result = $this->banner_model->addBanner($userInfo1);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Add successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Creation failed');
                }
                
                redirect('bannerListing');
            }
        }
    }
    function editBanner($bms_id = NULL)
    {
        if($this->isAdmin() == TRUE && $bms_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($bms_id == null)
            {
                redirect('news/editBanner');
            }
            $data['userInfo1'] = $this->banner_model->getBannerInfo($bms_id);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit User';
            
            $this->loadViews("banner/editBanner", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editBannerConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $bms_id = $this->input->post('bms_id');
            
            $this->form_validation->set_rules('title','Title','trim|required');
            $this->form_validation->set_rules('description','Description','trim|required');
            $this->form_validation->set_rules('link','Link','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->editBanner($bms_id);
            }
            else
            {
                $title = $this->input->post('title');
                $description = $this->input->post('description');
                $link = $this->input->post('link');

                $userInfo1 = array('title'=>$title, 'description'=>$description, 'link'=>$link, 'created_dtm'=>date('Y-m-d'));
                
                //For uploading
                $data = array(); 
                if($_FILES['image']['name']!=""){ 
                     // Set preference 
                    $config['upload_path'] = 'banner_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png'; 
                    $config['max_size'] = '100000'; // max_size in kb 
                    $config['file_name'] = $_FILES['image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('image')){ 
                        // Get data about the file
                        $uploadData = $this->upload->data(); 
                        $filename = $uploadData['file_name']; 
                        $data['response'] = 'successfully uploaded '.$filename; 
                        $userInfo1['image']=$filename;
                    }else{ 
                        $data['response'] = 'failed'; 
                    } 
                }else{ 
                    $data['response'] = 'failed'; 
                } 
                // load view 
                // $this->load->view('banner/editBanner',$data); 

                $result = $this->banner_model->editBanner($userInfo1, $bms_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                
                redirect('bannerListing');
            }
        }
    }
    function delete($bms_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->banner_model->deleteInfo($bms_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
            redirect('bannerListing');
        }
    }
}
?>