<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Login_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

        /*
	public function init() {
		$this->load->database();
		$this->load->library('session');
                
		if ($this->session->userdata('user_id')) {
			$this->loadUserData();
			$this->signout();
		} else {
			$this->signin();
		}
               
	}
        */
	
        public function addUser($username,$password,$email,$name) {
				
		$this->db->query("INSERT INTO shine_hospital_users "
                        . "(username, password, email, uname) VALUES ('$username','$password','$email','$name')");
	}
 

	public function signin() {
		
		if ($this->input->post('username') && $this->input->post('password')) {
			
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->db->query("SELECT id FROM shine_hospital_users "
                        . "WHERE username='$username' AND password='$password'");
		$result = 0;
                
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$this->session->set_userdata('user_id', $row->id);
				$this->loadUserData();
				$result = $query->num_rows();
				
			}
		}
		
		return $result;
		
	}
/*
	public function signout() {
		if ($this->input->post('logout') || $this->input->get('logout')) {
			$this->session->sess_destroy();
			redirect(base_url(), 'refresh');
		}
	}
*/
	public function loadUserData() {
            
            $id = $this->session->userdata('user_id');
            $query = $this->db->query("SELECT * FROM shine_hospital_users WHERE id = $id");

            if ($query->num_rows() > 0) {
                $row = $query->row();
                $this->session->set_userdata('user_logged_name', $row->uname);
                $this->session->set_userdata('user_logged_email', $row->email);
            }
            
	}

}
