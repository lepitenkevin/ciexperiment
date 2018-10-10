<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('template/header');
		$this->load->view('pages/about');
		$this->load->view('template/footer');
	}

}