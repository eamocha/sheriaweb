<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	public function index()
	{ 	$data['active'] = "Contact Us";
		$this->load->view('default/partials/header',$data);
		$this->load->view('default/partials/topmenu');
		$this->load->view('default/files/contact');
		$this->load->view('default/partials/footer');
	}
	public function register()
	{ 	$data['active'] = "Contact Us";
		$this->load->view('default/partials/header',$data);
		$this->load->view('default/files/signup');
	//	$this->load->view('default/partials/footer');
	}
}
