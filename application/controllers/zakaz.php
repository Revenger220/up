<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zakaz extends CI_Controller {

  /* public function index()
        { $data['title']='Zakaz';
            $this->load->view('body/header_view', $data);
            $this->load->view('body/navigation_view');
            $this->load->view('zakaz_view');
            $this->load->view('body/footer_view');
        }
       */
	  public function __construct() {
		 parent::__construct();
		$this->load->model('Zakaz_model');
                $this->load->helper("url");
                 }
        	public function index(){
                    $data['title'] = 'Zakaz';
                    $this->load->view('body/header_view', $data);
                    $this->load->view('body/navigation_view');
                    $data["results"] = $this->Zakaz_model->fetch_guests();
                    $this->load->view('zakaz_list', $data);
                    $this->load->view('body/footer_view');
                }

	public function guest_form($id = false) {
		// When user submit data on view page, Then this function store data in array.
            $data['title']='Add';
             $this->load->view('body/header_view', $data);
             $this->load->view('body/navigation_view');
            
		$data['id'] = '';
		$data['name'] = '';
		$data['email'] = '';
		$data['comment'] = '';

		if ($id){
                $rows = $this->Zakaz_model->getGuestById($id);
			
			foreach ($rows as $row){
				$data['id'] = $row->id;
				$data['name'] = $row->name;
				$data['email'] = $row->email;
				$data['comment'] = $row->comment;
			}	

	    }
	    if ($this->input->post('name')){
			$data = array(
				'name'=> $this->input->post('name'),
				'email' => $this->input->post('email'),
				'comment' => $this->input->post('comment')
			);
			//send the submitted data to model
			$this->Zakaz_model->saveGuest($data, $id);
			redirect('zakaz/index', 'refresh');
		} else {
			// Show submitted data on view page again.
			$this->load->view("zakaz_form", $data);
		}
                $this->load->view('body/footer_view');
	}

	public function delete($id = false){
		$id = $this->uri->segment(3);
		$row = $this->Zakaz_model->getGuestById($id);
		if ($row){
			$this->Zakaz_model->deleteGuest($id);
			redirect('zakaz/index', 'refersh');
		}

	}
        

   
}