<?php

if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> helper('url');
		$this -> load -> helper('form');
		$this -> load -> library('form_validation');
                $this->load->model('users/login_model'); 
                $this->load->library('session');
                $this->load->library("pagination");
                $this->load->helper('file'); 
	}

	public function index() {
		$this->load->view('users/login_view');
	}

	
	public function login_process(){		
		
            if ($this->input->post('username') && $this->input->post('password')) {
                    $username=$this->input->post('username');
                    $password=$this->input->post('password');  

                    $this->form_validation->set_rules('username', 'Username', 'trim|required');
                    $this->form_validation->set_rules('password', 'Password', 'trim|required');

                    if($this->form_validation->run() == FALSE){
                        $this->session->set_flashdata('notice',
                                array('type'=>'error','message'=>'All the fields are mandatory.'));
                        redirect('users/user/login', 'refresh');
                    }else{
                    
                        $result = $this -> login_model -> signin();

                        if($result > 0){  
                                $this -> session -> set_userdata('user_id', $result);   
                                redirect('users/user/dashboard', 'refresh'); 
                        }else{ 
                                $this->session->set_flashdata('notice',array('type'=>'error','message'=>'Invalid username or password!'));
                                redirect('users/user/login' , 'refresh'); 
                        }                  
                    }
            }
		
		
    }
	
	
}
