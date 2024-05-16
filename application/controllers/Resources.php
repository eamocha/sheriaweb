<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {


	public function faq()
	{ 	$data['active'] = "home";
		$this->load->view('default/partials/header',$data);
		$this->load->view('default/partials/topmenu');
		$this->load->view('default/files/frequently-asked-questions');
		$this->load->view('default/partials/footer');
	}
	public function contact()
	{ 	$data['active'] = "home";
		$this->load->view('default/partials/header',$data);
		$this->load->view('default/partials/topmenu');
		$this->load->view('default/files/contact');
		$this->load->view('default/partials/footer');
	}
	public function integrations()
	{ 	$data['active'] = "home";
		$this->load->view('default/partials/header',$data);
		$this->load->view('default/partials/topmenu');
		$this->load->view('default/files/integrations');
		$this->load->view('default/partials/footer');
	}
}
