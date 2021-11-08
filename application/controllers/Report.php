<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Report extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('report_model');
        // $this->load->model('Salary_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index($contact_id=NULL) 
    {
        // $data['userInfo2'] = $this->report_model->contact($contact_id);
        $this->global['pageTitle'] = 'Caucasus Heritage : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
    //This function is used to load the user list
    //Report

    function reportListing()
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
            
            $count = $this->report_model->reportListingCount($searchText);

            $returns = $this->paginationCompress ( "reportListing/", $count, 10 );
            
            $data['reportListing'] = $this->report_model->reportListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : User Listing';
            
            $this->loadViews("report/reportListing", $this->global, $data, NULL);
        }
    }
    function addReport()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('report_model');
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New User';

            $this->loadViews("report/addReport", $this->global, NULL);
        }
    }
    function addReportConfig()
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
            $this->form_validation->set_rules('report_title','Report Title','trim|required');
            $this->form_validation->set_rules('report_description','News Description','trim|required');
            // $this->form_validation->set_rules('report_file','Report File','trim|required');
            $this->form_validation->set_rules('month','Month','trim|required');
            $this->form_validation->set_rules('year','Year','trim|required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('error', 'Creation failed');
            }
            else
            {
                if ( $this->report_model->checkMonth($this->input->post('month'),$this->input->post('year')) > 0)
                {
                    $this->session->set_flashdata('error', 'Month & Year already exist');
                }
                else{
                    $meta_title = $this->input->post('meta_title');
                    $meta_description = $this->input->post('meta_description');
                    $meta_tag = $this->input->post('meta_tag');
                    $report_title = $this->input->post('report_title');
                    $report_description = $this->input->post('report_description');
                    $report_file = $this->input->post('report_file');
                    $month = $this->input->post('month');
                    $year = $this->input->post('year');
                    //For uploading
                    // $data = array(); 
                    // if(!empty($_FILES['report_file'])){ 
                    //      // Set preference 
                    //     $config['upload_path'] = 'report_uploads/';
                    //     $config['allowed_types'] = 'pdf|jpg|jpeg|png'; 
                    //     $config['max_size'] = '1000000'; // max_size in kb 
                    //     $config['file_name'] = $_FILES['report_file']['name']; 

                    //      // Load upload library 
                    //     $this->load->library('upload',$config); 
                   
                    //      // File upload
                    //     if($this->upload->do_upload('report_file')){ 
                    //         // Get data about the file
                    //         $uploadData = $this->upload->data(); 
                    //         $filename = $uploadData['file_name']; 
                    //         $data['response'] = 'successfully uploaded '.$filename; 
                    //     }else{ 
                    //         $data['response'] = 'failed'; 
                    //     } 
                    // }else{ 
                    //      $data['response'] = 'failed'; 
                    // } 
                    // // load view 
                    // $this->load->view('report/addReport',$data); 

                    $userInfo1 = array('meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'report_file'=>$report_file, 'meta_tag'=>$meta_tag, 'created_dtm'=>date('Y-m-d'), 'report_title'=>$report_title, 'report_description'=>$report_description, 'month'=>$month, 'year'=>$year);
                    
                    $this->load->model('report_model');
                    $result = $this->report_model->addReport($userInfo1);

                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'Add successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Creation failed');
                    }
                }
                redirect('reportListing');
            }
        }
    }
    function editReport($report_id = NULL)
    {
        if($this->isAdmin() == TRUE && $report_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($report_id == null)
            {
                redirect('report/editReport');
            }
            $data['userInfo1'] = $this->report_model->getReportInfo($report_id);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit User';
            
            $this->loadViews("report/editReport", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editReportConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $report_id = $this->input->post('report_id');
            
            $this->form_validation->set_rules('meta_title','Meta Title','trim|required');
            $this->form_validation->set_rules('meta_description','meta_description','trim|required');
            $this->form_validation->set_rules('meta_tag','Meta Tag','trim|required');
            $this->form_validation->set_rules('report_title','News Title','trim|required');
            $this->form_validation->set_rules('report_description','News Description','trim|required');
            //$this->form_validation->set_rules('report_file','report_file','trim|required|max_length[128]');
            // $this->form_validation->set_rules('year','Year','trim|required|max_length[128]');

            if($this->form_validation->run() == FALSE)
            {
                $this->editReport($report_id);
            }
            else
            {
                $meta_title = $this->input->post('meta_title');
                $meta_description = $this->input->post('meta_description');
                $meta_tag = $this->input->post('meta_tag');
                $report_title = $this->input->post('report_title');
                $report_file = $this->input->post('report_file');
                $report_description = $this->input->post('report_description');


                $userInfo1 = array('meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'meta_tag'=>$meta_tag, 'created_dtm'=>date('Y-m-d'), 'report_title'=>$report_title, 'report_description'=>$report_description, 'report_file'=>$report_file);
                
                //For uploading
                // $data = array(); 
                // if($_FILES['report_file']['name']!=""){ 
                //      // Set preference 
                //     $config['upload_path'] = 'report_uploads/';
                //     $config['allowed_types'] = 'pdf|jpg|jpeg|png'; 
                //     $config['max_size'] = '10000000'; // max_size in kb 
                //     $config['file_name'] = $_FILES['report_file']['name']; 

                //      // Load upload library 
                //     $this->load->library('upload',$config); 
               
                //      // File upload
                //     if($this->upload->do_upload('report_file')){ 
                //         // Get data about the file
                //         $uploadData = $this->upload->data(); 
                //         $filename = $uploadData['file_name']; 
                //         $data['response'] = 'successfully uploaded '.$filename; 
                //         $userInfo1['report_file']=$filename;
                //     }else{ 
                //         $data['response'] = 'failed'; 
                //     } 
                // }else{ 
                //     $data['response'] = 'failed'; 
                // } 
                // // load view 
                // $this->load->view('report/editReport',$data); 

                $result = $this->report_model->editReport($userInfo1, $report_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                
                redirect('reportListing');
            }
        }
    }
    function delete($report_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->report_model->deleteInfo($report_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('reportListing');
        }
    }
}
?>