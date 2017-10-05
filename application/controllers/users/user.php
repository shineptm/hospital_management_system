<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	
	 public function __construct() {
		 
		parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->library("pagination");
			$this->load->helper('file'); 
			$this->load->database();
                        $this->load->model('users/login_model'); 
		
		}


	public function index(){
		$this->load->view('users/login_view');
		
		// redirect('views/login');
	}

	
	public function login(){
		$this->load->view('users/login_view');
	}
	
	public function register(){
		$this->load->view('users/register_view');
	}
	
	public function dashboard(){
            $this->load->view('dashboard_view');
	}
	
	public function logout(){
               // $this->load->model('users/login_model');
                $this->session->sess_destroy();
		$this->load->view('users/login_view');
	}
        
        public function addNewUser(){
            if ($this->input->post('adduser')) {
                $this->form_validation->set_rules('uname', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username',
                        'required|min_length[5]|max_length[12]|is_unique[shine_hospital_users.username]');
                $this->form_validation->set_rules('uemail', 'Email', 
                        'required|valid_email|is_unique[shine_hospital_users.email]');
		$this->form_validation->set_rules('upassword', 'Password', 'required|matches[uconfpassword]');
		$this->form_validation->set_rules('uconfpassword', 'Password Confirmation', 'required');
               
      
   
                if($this->form_validation->run() == FALSE){
                     $this->session->set_flashdata('response',"Username should be minimum 5 characters. </br> Also both passwords should match.");
                      redirect('users/user/register/', 'refresh');
                }else{
                    $this-> login_model->addUser($this->input->post('username'), 
                            $this->input->post('upassword') , $this->input->post('uemail') , $this->input->post('uname'));

                    $this->session->set_flashdata('response',"You have registered successfully");
                    redirect('users/user/login/', 'refresh');
                }
	    }    
        }
	
	
	
}

