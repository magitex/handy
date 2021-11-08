<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Historic extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('historic_model');
        // $this->load->model('Salary_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index($contact_id=NULL) 
    {
        // $data['userInfo2'] = $this->historic_model->contact($contact_id);
        $this->global['pageTitle'] = 'Caucasus Heritage : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
    //This function is used to load the user list
    //historic

    function historicListing()
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
            
            $count = $this->historic_model->historicListingCount($searchText);

            $returns = $this->paginationCompress ( "historicListing/", $count, 10 );
            
            $data['historicListing'] = $this->historic_model->historicListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : User Listing';
            
            $this->loadViews("historic/historicListing", $this->global, $data, NULL);
        }
    }
    function addhistoric()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('historic_model');
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New User';

            $this->loadViews("historic/addHistoric", $this->global, NULL);
        }
    }
    function addhistoricConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('meta_title','Meta Title','trim|required');
            $this->form_validation->set_rules('meta_description','meta_description','trim|required');
            $this->form_validation->set_rules('meta_tag','Meta Tag','trim|required');
            $this->form_validation->set_rules('historic_title','historic Title','trim|required');
            $this->form_validation->set_rules('historic_description','historic Description','trim|required');
            $this->form_validation->set_rules('short','Short Description','trim|required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->addhistoric();
            }
            else
            {
                $meta_title = $this->input->post('meta_title');
                $meta_description = $this->input->post('meta_description');
                $meta_tag = $this->input->post('meta_tag');
                $historic_title = $this->input->post('historic_title');
                $historic_description = $this->input->post('historic_description');
                $short = $this->input->post('short');
                //For uploading
                $data = array(); 
                if(!empty($_FILES['historic_image'])){ 
                     // Set preference 
                    $config['upload_path'] = 'historic_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $config['max_size'] = '10000'; // max_size in kb 
                    $config['file_name'] = $_FILES['historic_image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('historic_image')){ 
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
                $this->load->view('historic/addHistoric',$data); 

                $userInfo1 = array('meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'historic_image'=>$filename, 'meta_tag'=>$meta_tag, 'created_dtm'=>date('Y-m-d'), 'historic_title'=>$historic_title, 'historic_description'=>$historic_description, 'short'=>$short);
                
                $this->load->model('historic_model');
                $result = $this->historic_model->addConfig($userInfo1);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Add successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Creation failed');
                }
                
                redirect('historicListing');
            }
        }
    }
    function edithistoric($historic_id = NULL)
    {
        if($this->isAdmin() == TRUE && $historic_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($historic_id == null)
            {
                redirect('historic/edithistoric');
            }
            $data['userInfo1'] = $this->historic_model->getEditInfo($historic_id);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit User';
            
            $this->loadViews("historic/editHistoric", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function edithistoricConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $historic_id = $this->input->post('historic_id');
            
            $this->form_validation->set_rules('meta_title','Meta Title','trim|required');
            $this->form_validation->set_rules('meta_description','meta_description','trim|required');
            $this->form_validation->set_rules('meta_tag','Meta Tag','trim|required');
            $this->form_validation->set_rules('historic_title','historic Title','trim|required');
            $this->form_validation->set_rules('historic_description','historic Description','trim|required');
            $this->form_validation->set_rules('short','Short Description','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->edithistoric($historic_id);
            }
            else
            {
                $meta_title = $this->input->post('meta_title');
                $meta_description = $this->input->post('meta_description');
                $meta_tag = $this->input->post('meta_tag');
                $historic_title = $this->input->post('historic_title');
                $historic_description = $this->input->post('historic_description');
                $short = $this->input->post('short');

                $userInfo1 = array('meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'meta_tag'=>$meta_tag, 'created_dtm'=>date('Y-m-d'), 'historic_title'=>$historic_title, 'historic_description'=>$historic_description, 'short'=>$short);
                
                //For uploading
                $data = array(); 
                if($_FILES['historic_image']['name']!=""){ 
                     // Set preference 
                    $config['upload_path'] = 'historic_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $config['max_size'] = '10000'; // max_size in kb 
                    $config['file_name'] = $_FILES['historic_image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('historic_image')){ 
                        // Get data about the file
                        $uploadData = $this->upload->data(); 
                        $filename = $uploadData['file_name']; 
                        $data['response'] = 'successfully uploaded '.$filename; 
                        $userInfo1['historic_image']=$filename;
                    }else{ 
                        $data['response'] = 'failed'; 
                    } 
                }else{ 
                    $data['response'] = 'failed'; 
                } 
                // load view 
                $this->load->view('historic/editHistoric',$data); 

                $result = $this->historic_model->editCon($userInfo1, $historic_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                
                redirect('historicListing');
            }
        }
    }
	
	function delete($historic_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->historic_model->deleteInfo($historic_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('historicListing');
        }
    }
}
?>