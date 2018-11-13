<?php
class Phonebook extends CI_Controller {

  public function __construct(){
       parent::__construct();
       $this->load->model('phonebook_model');
       $this->load->helper('url_helper');
    }


   public function index(){
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->load->helper('url_helper');
      $data['title'] = '';
      $data['act'] = 'ACT III-Phonebook';

      $this->form_validation->set_rules('contact', 'Contact', 'required|exact_length[11]');



          if ($this->form_validation->run() === FALSE)
      {
          $data['phonebook'] = $this->phonebook_model->get_phonebook();
          $data['title'] = '';
          $data['act'] = 'ACT III-Phonebook';

          $this->load->helper('url_helper');
          $this->load->view('templates/header2', $data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('phonebook/index' , $data);
          $this->load->view('templates/footer');

      }
      else
      {
          $data = array(
            'contact' => $this->input->post('contact'),
        );
          $this->view($data['contact']);
      }
    }

  public function view($slug= NULL){
          $this->load->helper('url');

          $data['phonebook_item'] = $this->phonebook_model->get_phonebook($slug);

          if (empty($data['phonebook_item']))
          {
                  show_404();
          }

       
          $data['act'] = 'ACT III-Phonebook';
          $data['title'] = '';

          $this->load->view('templates/header2', $data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('phonebook/viewpb', $data);
          $this->load->view('templates/footer');
  } 

  public function delete_row($id) {   
      $this->load->model("phonebook_model");
      $this->phonebook_model->deleterow($id);

       redirect($_SERVER['HTTP_REFERER']);  
      }

  public function editcontact($id){
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->load->helper('url_helper');
      $data['title'] = '';
      $data['act'] = 'ACT III-Phonebook';
      $data['id'] = $id;

      $this->form_validation->set_rules('firstname', 'Firstname', 'required|alpha_numeric_spaces');
      $this->form_validation->set_rules('middlename', 'Middlename', 'required|alpha_numeric_spaces');
      $this->form_validation->set_rules('lastname', 'Lastname', 'required|alpha_numeric_spaces');
      $this->form_validation->set_rules('gender', 'Gender', 'required');
      $this->form_validation->set_rules('contact', 'Contact', 'required|exact_length[11]');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('status', 'Status', 'required');
      $this->form_validation->set_rules('about', 'About', 'required|alpha_numeric_spaces');

      if ($this->form_validation->run() === FALSE)
      {
          $this->load->view('templates/header2',$data);
          $this->load->view('phonebook/editcontact',$data);
          $this->load->view('templates/footer');

      }
      else
      {
          $this->load->model("phonebook_model");
          $this->phonebook_model->update_phonebook($id);
          $this->load->view('templates/header2',$data);
          $this->load->view('phonebook/success');
        
          
      }
    }

  public function createcontact(){
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->load->helper('url_helper');
       $data['title'] = '';
        $data['act'] = 'ACT III-Phonebook';

      $this->form_validation->set_rules('firstname', 'Firstname', 'required|alpha_numeric_spaces');
      $this->form_validation->set_rules('middlename', 'Middlename', 'required|alpha_numeric_spaces');
      $this->form_validation->set_rules('lastname', 'Lastname', 'required|alpha_numeric_spaces');
      $this->form_validation->set_rules('gender', 'Gender', 'required');
      $this->form_validation->set_rules('contact', 'Contact', 'required|is_unique[phonebook.contact]|exact_length[11]');
      $this->form_validation->set_rules('email', 'Email', 'required|is_unique[phonebook.email]|valid_email');
      $this->form_validation->set_rules('status', 'Status', 'required');
      $this->form_validation->set_rules('about', 'About', 'required|alpha_numeric_spaces');

      if ($this->form_validation->run() === FALSE)
      {
          $this->load->view('templates/header2',$data);
          $this->load->view('phonebook/createcontact');
          $this->load->view('templates/footer');

      }
      else
      {
        
          $this->phonebook_model->set_phonebook();
          $this->load->view('templates/header2',$data);
          $this->load->view('phonebook/success');
          
          
      }
    }
}