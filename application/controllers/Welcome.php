<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$data['title'] = 'My Portfolio';

		$this->load->helper('url_helper');
		$this->load->view('templates/header');
		$this->load->view('welcome_message');
        $this->load->view('pages/sched');
        $this->load->view('pages/portfolio', $data);
        $this->load->view('templates/footer');
	}

		public function viewcontact($slug = NULL)
  {


   		$data['phonebook_item'] = $this->phonebook_model->get_phonebook($slug);

        if (empty($data['phonebook_item']))
        {
                show_404();
        }

        $data['title'] = $data['phonebook_item']['title'];

        $this->load->view('templates/header');
        $this->load->view('pages/viewpb', $data);
        $this->load->view('templates/footer');
  } 

	public function activity1()
  {		
  		$data['title'] = '';
  		$data['act'] = 'ACT I-Multiplication Table';
  		$this->load->helper('url_helper');
		$this->load->view('templates/header2', $data);
        $this->load->view('pages/portfolio', $data);
   		$this->load->view('pages/multiplication');
        $this->load->view('templates/footer');
  }

  	public function activity2()
  {		
  		$data['title'] = '';
  		$data['act'] = 'ACT II-FLAMES';
  		$this->load->helper('url_helper');
		$this->load->view('templates/header2',$data);
        $this->load->view('pages/portfolio', $data);
   		$this->load->view('pages/flames');
        $this->load->view('templates/footer');
  }

  	public function __construct()
  {
		 parent::__construct();
		 $this->load->model('phonebook_model');
		 $this->load->helper('url_helper');
  }

  	public function activity3()
  {
  		$data['phonebook'] = $this->phonebook_model->get_phonebook();
  		$data['title'] = '';
  		$data['act'] = 'ACT III-Phonebook';

  		$this->load->helper('url_helper');
        $this->load->view('templates/header2', $data);
       	$this->load->view('pages/portfolio', $data);
        $this->load->view('pages/phonebook' , $data);
        $this->load->view('templates/footer');
  }



  public function createcontact()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->helper('url_helper');
    $data['act'] = 'ACT III-Phonebook';

    $this->form_validation->set_rules('firstname', 'Firstname', 'required');
    $this->form_validation->set_rules('middlename', 'Middlename', 'required');
    $this->form_validation->set_rules('lastname', 'Lastname', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('contact', 'Contact', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('about', 'About', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header2',$data);
        $this->load->view('pages/createcontact');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->phonebook_model->set_phonebook();
        $this->load->view('templates/header2');
        $this->load->view('pages/success');
        $this->load->view('templates/footer');
        
    }
  }



}
