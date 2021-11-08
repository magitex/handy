<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

// require APPPATH . '/libraries/BaseController.php';
class Home extends CI_Controller
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        // $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Caucasus Heritage';
		// $data['mission']=$this->home_model->GetHomeData();
        $data['wwd']=$this->home_model->GetHomeData();
        $data['wwr']=$this->home_model->GetHomeData1();
        $data['banner']=$this->home_model->GetbnrListAll();        
        $data['news']=$this->home_model->GetNewsData();        
        $data['funders']=$this->home_model->GetFundersData();
		$data['about']=$this->home_model->AboutUs();
        $data['contact']=$this->home_model->GetContactData();
        
        $this->load->view("home/home", $data);
    }
    public function omission($id = NULL){
        if($id == null)
        {
            redirect('home/home');
        }
        $data['contact']=$this->home_model->GetContactData();
        $data['homeInfo']=$this->home_model->GetHomeInfoById($id);
		$data['about']=$this->home_model->AboutUs();
        $data['id']=$id;
        $this->load->view("home/omission", $data);
    }
    public function contact()
    {
        $data['contact']=$this->home_model->GetContactData();
		$data['about']=$this->home_model->AboutUs();
        $this->load->view('home/contact', $data);
    }
    public function add()
   {       
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $message=$this->input->post('message');
            
            $professionals_data=array('name'=>$name, 'email'=>$email, 'message'=>$message, 'created_dtm'=>date('Y-m-d'));

            
            $result=$this->home_model->addContact($professionals_data);    
            if($result > 0)
            {               
                $this->session->set_flashdata('success', '<b>Your query send successfully, Our team will get back to you soon.</b>');
            }
            else
            {
                $this->session->set_flashdata('error', '<b>Trying again...</b>');
            }
        redirect('contact');   
   }
   public function newsDetails($news_id=NULL)
   {
        if($news_id == null)
        {
            redirect('home/home');
        }
        $data['contact']=$this->home_model->GetContactData();
        $data['newsInfo'] = $this->home_model->GetNewsInfoById($news_id);
		$data['about']=$this->home_model->AboutUs();
		$data['news_id']=$news_id;
		
		//print_r($data);exit;
		
        $this->load->view('home/newsDetails', $data);
   }
   
   public function allnews()
   {
        $data['contact']=$this->home_model->GetContactData();
   		$data['news']=$this->home_model->GetAllNewsData();
		$data['about']=$this->home_model->AboutUs();
		
        $this->load->view('home/news', $data);
   }

   public function blog()
   {
        $data['contact']=$this->home_model->GetContactData();
        $data['category']=$this->home_model->GetAllCategoryData();
        $data['blog']=$this->home_model->GetAllBlogData();
        $data['blogdetails']=$this->home_model->GetBlogData();
        $data['about']=$this->home_model->AboutUs();
        
        $this->load->view('home/blog', $data);
   }
   public function blogDetails($blog_id=NULL)
   {
        if($blog_id == null)
        {
            redirect('home/home');
        }
        $data['contact']=$this->home_model->GetContactData();
        $data['blogInfo'] = $this->home_model->GetBlogInfoById($blog_id);
        $data['about']=$this->home_model->AboutUs();
        $data['blog_id']=$blog_id;
        
        //print_r($data);exit;
        
        $this->load->view('home/blogDetails', $data);
   }
   public function blogCategory($cat=NULL)
   {
   		if($cat == null)
        {
            redirect('home/home');
        }
		$cat_dtls=$this->db->query("SELECT * FROM tbl_category WHERE category_id='".$cat."'");
		$cat_dtl_rs=$cat_dtls->row();
		$category_name=$cat_dtl_rs->category_name;
        $data['contact']=$this->home_model->GetContactData();
        $data['category']=$this->home_model->GetAllCategoryData();
        $data['blog']=$this->home_model->GetAllBlogData();
        $data['blogdetails']=$this->home_model->GetAllCategoryBlog($cat);
        $data['about']=$this->home_model->AboutUs();
		$data['category_name']=$category_name;
		//print_r($data['blogdetails']);
		//exit;
        
        $this->load->view('home/blgcat', $data);
   }

   public function teams()
   {
        $data['contact']=$this->home_model->GetContactData();
        $data['team']=$this->home_model->GetTeamData();
		$data['about']=$this->home_model->AboutUs();
		
        $this->load->view('home/teams', $data);
   }
   public function funders()
   {
        $data['contact']=$this->home_model->GetContactData();
        $data['funders']=$this->home_model->GetFundersData();
        $data['about']=$this->home_model->AboutUs();
        
        $this->load->view('home/funders', $data);
   }
   public function partners()
   {
        $data['contact']=$this->home_model->GetContactData();
        $data['partners']=$this->home_model->GetPartnersData();
        $data['about']=$this->home_model->AboutUs();
        
        $this->load->view('home/partners', $data);
   }
   public function report(){
        $data['contact']=$this->home_model->GetContactData();
        $data['report']=$this->home_model->GetReportData();
		$data['about']=$this->home_model->AboutUs();
		
        $this->load->view('home/report', $data);
   }
   public function historic(){
        $data['contact']=$this->home_model->GetContactData();
        $data['historic']=$this->home_model->GetHistoricData();
		$data['about']=$this->home_model->AboutUs();
		
        $this->load->view('home/historic', $data);
   }
   public function historicDetails($historic_id=NULL)
   {
        if($historic_id == null)
        {
            redirect('home/home');
        }
        $data['contact']=$this->home_model->GetContactData();
        $data['historicInfo'] = $this->home_model->GetHistoricInfoById($historic_id);
		$data['about']=$this->home_model->AboutUs();
        $data['historic_id']=$historic_id;
        
        //print_r($data);exit;
        
        $this->load->view('home/historicDetails', $data);
   }
   
   public function projects(){
        $data['contact']=$this->home_model->GetContactData();
		$data['about']=$this->home_model->AboutUs();
		
        $this->load->view('home/projects', $data);
   }
}
?>