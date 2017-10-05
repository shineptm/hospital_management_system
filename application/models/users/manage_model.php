<?php

if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Manage_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}



	public function addUser($login, $passwd, $level) {
		$hash = md5($passwd);
		$this->db->query("INSERT INTO users (login, passwd, level) VALUES ('$login', '$hash', '$level')");
	}





}
