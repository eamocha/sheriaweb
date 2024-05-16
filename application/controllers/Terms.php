<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms extends CI_Controller {


	public function index()
	{ 	$data['active'] = "Terms and conditions";
        
		$this->load->view('default/partials/header',$data);
        $this->load->view('default/partials/topmenu');
		$this->load->view('default/files/terms-conditions.php');
  
		$this->load->view('default/partials/footer');
	}
}
