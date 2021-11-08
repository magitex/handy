<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Faq extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('faq_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Handyman : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
//Team

    function faqListing()
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
            
            $count = $this->faq_model->faqListingCount($searchText);

            $returns = $this->paginationCompress ( "faqListing/", $count, 10 );
            
            $data['faqListing'] = $this->faq_model->faqListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Faq Listing';
            
            $this->loadViews("faq/faqListing", $this->global, $data, NULL);
        }
    }
    function addFaq()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New Faq';
            $this->loadViews("faq/addFaq", $this->global, NULL);
        }
    }
    function addFaqConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('faq_question','Title','trim|required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->addFaq();
            }
            else
            {
                $faq_question = $this->input->post('faq_question');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $faq_question) ));
                $faq_answer = $this->input->post('faq_answer');
                if($this->faq_model->chekfaq($slug) == TRUE){
                    $this->session->set_flashdata('error', 'Faq is already exist');
                    $this->addFaq();
                    redirect('faqListing');
                }else{
                    $faqinfo = array('slug'=>$slug, 'question'=>$faq_question, 'answer'=>$faq_answer, 'created_date'=>date('Y-m-d'));
                    $result = $this->faq_model->addFaq($faqinfo);

                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'Add successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Creation failed');
                    }
                    redirect('faqListing');
                }
            }
        }
    }
    function editFaq($faq_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($faq_id == null)
            {
                redirect('editFaq');
            }
            $data['faqInfo'] = $this->faq_model->getfaqInfo($faq_id);
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit Faq';
            
            $this->loadViews("faq/editFaq", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editFaqConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $faq_id = $this->input->post('faq_id');
            
            $this->form_validation->set_rules('faq_question','Title','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->editFaq($faq_id);
            }
            else
            {
                $faq_question = $this->input->post('faq_question');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $faq_question) ));
                $faq_answer = $this->input->post('faq_answer');
                if($this->faq_model->chekfaqedit($slug,$faq_id) == TRUE){
                    $this->session->set_flashdata('error', 'Faq is already exist');
                    $this->editFaq($faq_id);
                    redirect('faqListing');
                }else{
                    $faqinfo = array('slug'=>$slug, 'question'=>$faq_question, 'answer'=>$faq_answer, 'created_date'=>date('Y-m-d'));
                    $result = $this->faq_model->editfaq($faqinfo, $faq_id);
                    
                    if($result == true)
                    {
                        $this->session->set_flashdata('success', 'Updated successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Updation failed');
                    }
                    
                    redirect('faqListing');
                }
            }
        }
    }
    
	function delete($faq_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->faq_model->deleteInfo($faq_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('faqListing');
        }
    }
}
?>