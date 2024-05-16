<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends CI_Controller {


	public function index()
	{ 	$data['active'] = "Sheria360 Features list";
        
		$this->load->view('default/partials/header',$data);
        $this->load->view('default/partials/topmenu');
		$this->load->view('default/files/features');
  
		$this->load->view('default/partials/footer');
	}
}
