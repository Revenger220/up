<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

   public function index()
        { $data['title']='Contacts';
            $this->load->view('body/header_view', $data);
            $this->load->view('body/navigation_view');
            $this->load->view('contacts_view');
            $this->load->view('body/footer_view');
        }
       
}

