<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
            $data['title']='Home';
		$this->load->view('body/header_view', $data);
		$this->load->view('body/navigation_view');
		$this->load->view('body/content_view');
		$this->load->view('body/footer_view');
	}
        
}

