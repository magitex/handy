<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Team extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('team_model');
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

    function teamListing()
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
            
            $count = $this->team_model->teamListingCount($searchText);

            $returns = $this->paginationCompress ( "teamListing/", $count, 10 );
            
            $data['teamListing'] = $this->team_model->teamListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : User Listing';
            
            $this->loadViews("team/teamListing", $this->global, $data, NULL);
        }
    }
    function addTeam()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('team_model');
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New User';

            $this->loadViews("team/addTeam", $this->global, NULL);
        }
    }
    function addTeamConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('team_name','Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('designation','Designation','trim|required|max_length[128]');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->addTeam();
            }
            else
            {
                $team_name = $this->input->post('team_name');
                $designation = $this->input->post('designation');
                $col2 = $this->input->post('col2');
                //For uploading
                $data = array(); 
                if(!empty($_FILES['team_image'])){ 
                    // Set preference 
                    $config['upload_path'] = 'team_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png'; 
                    $config['max_size'] = '100000'; // max_size in kb 
                    $config['file_name'] = $_FILES['team_image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('team_image')){ 
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
                $this->load->view('team/addTeam',$data); 

                $userInfo1 = array('team_name'=>$team_name, 'designation'=>$designation, 'team_image'=>$filename, 'col2'=>$col2, 'created_dtm'=>date('Y-m-d'));
                
                $this->load->model('team_model');
                $result = $this->team_model->addTeam($userInfo1);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Add successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Creation failed');
                }
                redirect('teamListing');
            }
        }
    }
    function editTeam($team_id = NULL)
    {
        if($this->isAdmin() == TRUE && $team_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($team_id == null)
            {
                redirect('editTeam');
            }
            $data['userInfo1'] = $this->team_model->getTeamInfo($team_id);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit User';
            
            $this->loadViews("team/editTeam", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editTeamConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $team_id = $this->input->post('team_id');
            
            $this->form_validation->set_rules('team_name','Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('designation','Designation','trim|required|max_length[128]');

            if($this->form_validation->run() == FALSE)
            {
                $this->editTeam($team_id);
            }
            else
            {
                $team_name = $this->input->post('team_name');
                $designation = $this->input->post('designation');
                $col2 = $this->input->post('col2');

                $userInfo1 = array('team_name'=>$team_name, 'designation'=>$designation, 'col2'=>$col2, 'created_dtm'=>date('Y-m-d'));
                
                //For uploading
                $data = array(); 
                if($_FILES['team_image']['name']!=""){ 
                     // Set preference 
                    $config['upload_path'] = 'team_uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png'; 
                    $config['max_size'] = '10000'; // max_size in kb 
                    $config['file_name'] = $_FILES['team_image']['name']; 

                     // Load upload library 
                    $this->load->library('upload',$config); 
               
                     // File upload
                    if($this->upload->do_upload('team_image')){ 
                        // Get data about the file
                        $uploadData = $this->upload->data(); 
                        $filename = $uploadData['file_name']; 
                        $data['response'] = 'successfully uploaded '.$filename; 
                        $userInfo1['team_image']=$filename;
                    }else{ 
                        $data['response'] = 'failed'; 
                    } 
                }else{ 
                    $data['response'] = 'failed'; 
                } 
                // load view 
                $this->load->view('team/editTeam',$data); 

                $result = $this->team_model->editTeam($userInfo1, $team_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                
                redirect('teamListing');
            }
        }
    }
    function delete($team_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->team_model->deleteInfo($team_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
            redirect('teamListing');
        }
    }
}
?>