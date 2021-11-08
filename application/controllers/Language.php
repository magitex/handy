<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Language extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('language_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Handyman : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL, NULL);
    }
//Team

    function languageListing()
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
            
            $count = $this->language_model->languageListingCount($searchText);

            $returns = $this->paginationCompress ( "languageListing/", $count, 10 );
            
            $data['languageListing'] = $this->language_model->languageListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Language Listing';
            
            $this->loadViews("language/languageListing", $this->global, $data, NULL);
        }
    }
    function addLanguage()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'Caucasus Heritage : Add New Language';
            $this->loadViews("language/addLanguage", $this->global, NULL);
        }
    }
    function addLanguageConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('language_title','Title','trim|required');
            $this->form_validation->set_rules('language_isocode','Isocode','trim|required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->addLanguage();
            }
            else
            {
                $language_title = $this->input->post('language_title');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $language_title) ));
                if($this->language_model->cheklanguage($slug) == TRUE){
                    $this->session->set_flashdata('error', 'Language is already exist');
                    $this->addLanguage();
                    redirect('languageListing');
                }else{
                    if(!empty($_FILES['language_image']['name'])){
                        $config['upload_path'] = 'uploads/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['file_name'] = $_FILES['language_image']['name'];
                        
                        //Load upload library and initialize configuration
                        $this->load->library('upload',$config);
                        $this->upload->initialize($config);
                        
                        if($this->upload->do_upload('language_image')){
                            $uploadData = $this->upload->data();
                            $language_image = $uploadData['file_name'];
                        }else{
                            $language_image = '';
                        }
                    }else{
                        $language_image = '';
                    }
                    $language_title = $this->input->post('language_title');
                    $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $language_title) ));
                    $language_isocode = $this->input->post('language_isocode');

                    $languageinfo = array('title'=>$language_title, 'slug'=>$slug, 'isocode'=>$language_isocode, 'image'=>$language_image, 'created_date'=>date('Y-m-d'));
                    $result = $this->language_model->addLanguage($languageinfo);

                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'Add successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Creation failed');
                    }
                    redirect('languageListing');
                }
            }
        }
    }
    function editLanguage($language_id = NULL)
    {
        if($this->isAdmin() == TRUE && $language_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($language_id == null)
            {
                redirect('editLanguage');
            }
            $data['languageInfo'] = $this->language_model->getlanguageInfo($language_id);
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit Language';
            
            $this->loadViews("language/editLanguage", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editLanguageConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $language_id = $this->input->post('language_id');
            
            $this->form_validation->set_rules('language_title','Title','trim|required');
            $this->form_validation->set_rules('language_isocode','Isocode','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->editLanguage($language_id);
            }
            else
            {
                $language_title = $this->input->post('language_title');
                $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $language_title) ));
                if($this->language_model->cheklanguageedit($slug,$language_id) == TRUE){
                    $this->session->set_flashdata('error', 'Language is already exist');
                    $this->editLanguage($language_id);
                    redirect('languageListing');
                }else{
                    $language_title = $this->input->post('language_title');
                    $slug = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '',preg_replace('/\s+/', '-', $language_title) ));
                    $language_isocode = $this->input->post('language_isocode');
                    if(!empty($_FILES['language_image']['name'])){
                        $config['upload_path'] = 'uploads/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $config['file_name'] = $_FILES['language_image']['name'];
                        
                        //Load upload library and initialize configuration
                        $this->load->library('upload',$config);
                        $this->upload->initialize($config);
                        
                        if($this->upload->do_upload('language_image')){
                            $uploadData = $this->upload->data();
                            $language_image = $uploadData['file_name'];
                            $languageinfo = array('title'=>$language_title, 'slug'=>$slug, 'image'=>$language_image, 'isocode'=>$language_isocode, 'created_date'=>date('Y-m-d'));
                        }else{
                            $languageinfo = array('title'=>$language_title, 'slug'=>$slug, 'isocode'=>$language_isocode, 'created_date'=>date('Y-m-d'));
                        }
                    }else{
                        $languageinfo = array('title'=>$language_title, 'slug'=>$slug, 'isocode'=>$language_isocode, 'created_date'=>date('Y-m-d'));
                    }

                    $result = $this->language_model->editlanguage($languageinfo, $language_id);
                    
                    if($result == true)
                    {
                        $this->session->set_flashdata('success', 'Updated successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Updation failed');
                    }
                    
                    redirect('languageListing');
                }
            }
        }
    }
    
	function delete($language_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->language_model->deleteInfo($language_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
			redirect('languageListing');
        }
    }
}
?>