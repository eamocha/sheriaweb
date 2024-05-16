<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signin extends CI_Controller {


	public function index()
	{ 		$this->load->view('default/partials/header');
     
		$this->load->view('default/files/signin');
	
	}
}
