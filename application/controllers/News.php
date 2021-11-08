<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class News extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        // $this->load->model('Salary_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index($contact_id=NULL) 
    {
        // $data['userInfo2'] = $this->news_model->contact($contact_id);
        $this->global['pageTitle'] = 'Caucasus Heritage : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
    //This function is used to load the user list
    //News

    function newsListing()
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
            
            $count = $this->news_model->newsListingCount($searchText);

            $returns = $this->paginationCompress ( "newsListing/", $count, 10 );
            
            $data['newsListing'] = $this->news_model->newsListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : User Listing';
            
            $this->loadViews("news/newsListing", $this->global, $data, NULL);
        }
    }
    function addNews()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('news_model');
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New User';

            $this->loadViews("news/addNews", $this->global, NULL);
        }
    }
    function addNewsConfig()
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
            $this->form_validation->set_rules('position','Position','trim|required');
            $this->form_validation->set_rules('meta_tag','Meta Tag','trim|required');
            $this->form_validation->set_rules('news_title','News Title','trim|required');
            $this->form_validation->set_rules('news_description','News Description','trim|required');
            $this->form_validation->set_rules('short','Short Description','trim|required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNews();
            }
            else
            {
                $meta_title = $this->input->post('meta_title');
                $meta_description = $this->input->post('meta_description');
                $meta_tag = $this->input->post('meta_tag');
                $position = $this->input->post('position');
                $news_title = $this->input->post('news_title');
                $news_description = $this->input->post('news_description');
                $short = $this->input->post('short');
                $created_dtm = $this->input->post('created_dtm');
                //For uploading
                $data = array(); 
                if(!empty($_FILES['news_image'])){ 
                     // Set preference 
                    $config['upload_path'] = 'news_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $config['max_size'] = '10000'; // max_size in kb 
                    $config['file_name'] = $_FILES['news_image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('news_image')){ 
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
                $this->load->view('news/addNews',$data); 

                $userInfo1 = array('meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'position'=>$position, 'news_image'=>$filename, 'meta_tag'=>$meta_tag, 'created_dtm'=>$created_dtm, 'news_title'=>$news_title, 'news_description'=>$news_description, 'short'=>$short);
                
                $this->load->model('news_model');
                $result = $this->news_model->addConfig($userInfo1);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Add successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Creation failed');
                }
                
                redirect('newsListing');
            }
        }
    }
    function editNews($news_id = NULL)
    {
        if($this->isAdmin() == TRUE && $news_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($news_id == null)
            {
                redirect('news/editNews');
            }
            $data['userInfo1'] = $this->news_model->getEditInfo($news_id);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit User';
            
            $this->loadViews("news/editNews", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editNewsConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $news_id = $this->input->post('news_id');
            
            $this->form_validation->set_rules('meta_title','Meta Title','trim|required');
            $this->form_validation->set_rules('meta_description','meta_description','trim|required');
            $this->form_validation->set_rules('meta_tag','Meta Tag','trim|required');
            $this->form_validation->set_rules('meta_tag','Meta Tag','trim|required');
            $this->form_validation->set_rules('news_title','News Title','trim|required');
            $this->form_validation->set_rules('news_description','News Description','trim|required');
            $this->form_validation->set_rules('short','Short Description','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->editNews($news_id);
            }
            else
            {
                $meta_title = $this->input->post('meta_title');
                $meta_description = $this->input->post('meta_description');
                $meta_tag = $this->input->post('meta_tag');
                $position = $this->input->post('position');
                $news_title = $this->input->post('news_title');
                $news_description = $this->input->post('news_description');
                $short = $this->input->post('short');
                $created_dtm = $this->input->post('created_dtm');

                $userInfo1 = array('meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'meta_tag'=>$meta_tag, 'created_dtm'=>$created_dtm, 'position'=>$position, 'news_title'=>$news_title, 'news_description'=>$news_description, 'short'=>$short);
                
                //For uploading
                $data = array(); 
                if($_FILES['news_image']['name']!=""){ 
                     // Set preference 
                    $config['upload_path'] = 'news_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    $config['max_size'] = '10000'; // max_size in kb 
                    $config['file_name'] = $_FILES['news_image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('news_image')){ 
                        // Get data about the file
                        $uploadData = $this->upload->data(); 
                        $filename = $uploadData['file_name']; 
                        $data['response'] = 'successfully uploaded '.$filename; 
                        $userInfo1['news_image']=$filename;
                    }else{ 
                        $data['response'] = 'failed'; 
                    } 
                }else{ 
                    $data['response'] = 'failed'; 
                } 
                // load view 
                $this->load->view('news/editNews',$data); 

                $result = $this->news_model->editCon($userInfo1, $news_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                
                redirect('newsListing');
            }
        }
    }
    /*function delete($news_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->news_model->deleteInfo($news_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('newsListing');
        }
    }*/
	
	function delete($news_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->news_model->deleteInfo($news_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('newsListing');
        }
    }
}
?>