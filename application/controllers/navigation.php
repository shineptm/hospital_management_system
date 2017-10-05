<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navigation extends CI_Controller {
	
	
	 public function __construct() {
		 
		parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->library("pagination");
			$this->load->helper('file'); 
        }

	public function index()
	{
		$this->load->view('themes/header');
	}
	
	
	
	
	
	
}

