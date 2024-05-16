<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {


	public function index()
	{ 		$this->load->view('default/partials/header');
     
		$this->load->view('default/files/password');
		
	}
}
