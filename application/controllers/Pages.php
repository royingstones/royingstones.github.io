<?php
class Pages extends CI_Controller{

  public function index()
  { 
    $data['title'] = 'My Portfolio';

    $this->load->helper('url_helper');
    $this->load->view('templates/header');
    $this->load->view('pages/home');
    $this->load->view('pages/sched');
    $this->load->view('pages/portfolio', $data);
    $this->load->view('templates/footer');
  }

  public function activity1()
  {   

    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->helper('url_helper');

   

    $this->form_validation->set_rules('row', 'Row', 'required');
    $this->form_validation->set_rules('col', 'Column', 'required');

     if ($this->form_validation->run() === FALSE)
      {   

          $data['title'] = '';
          $data['act'] = 'ACT I-Multiplication Table';
          $this->load->view('templates/header2',$data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('pages/input_mul');
          $this->load->view('templates/footer');
      }
    else
      {

         $data = array(
            'row' => $this->input->post('row'),
            'col' => $this->input->post('col'),
        );

          $data['title'] = '';
          $data['act'] = 'ACT I-Multiplication Table';
          $this->load->helper('url_helper');
          $this->load->view('templates/header2', $data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('pages/input_mul');
          $this->load->view('pages/calculate_mul',$data);
          $this->load->view('templates/footer');
      }


   
  }

    public function activity2()
  {   

    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->helper('url_helper');

   

    $this->form_validation->set_rules('name1', 'First Name', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('name2', 'Second Name', 'required|alpha_numeric_spaces');

     if ($this->form_validation->run() === FALSE)
      {   

          $data['title'] = '';
          $data['act'] = 'ACT II-FLAMES';
          $this->load->view('templates/header2',$data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('pages/input_name');
          $this->load->view('templates/footer');
      }
      else
      {

         $data = array(
            'name1' => $this->input->post('name1'),
            'name2' => $this->input->post('name2'),
        );

          $data['title'] = '';
          $data['act'] = 'ACT II-FLAMES';
          $this->load->helper('url_helper');
          $this->load->view('templates/header2', $data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('pages/calculate_love',$data);
          $this->load->view('pages/input_name');
          $this->load->view('templates/footer');
      }
  }

  public function activity4()
  {   

    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->helper('url_helper');

   
    
    $this->form_validation->set_rules('firstname', 'First Name', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('lastname', 'Last Name', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('gender', 'Gender', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('firstname2', 'First Name', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('lastname2', 'Last Name', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('gender2', 'Gender', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('firstname3', 'First Name', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('lastname3', 'Last Name', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('gender3', 'Gender', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('relationship', 'Relation with you', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('adjective', 'Adjective to describe physical appearance', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('adjective2', 'Positive Adjective to describe character', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('adjective3', 'Negative Adjective to describe character', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('adjective4', 'Adjective to describe an object', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('location', 'Location', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('hobby', 'Hobby', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('bodypart', 'Body part', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('weapon', 'Weapon', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('object', 'An objecet', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('addict', 'Something you can be addicted to', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('job', 'Job', 'required|alpha_numeric_spaces');
    $this->form_validation->set_rules('job2', 'Second Job', 'required|alpha_numeric_spaces');


     if ($this->form_validation->run() === FALSE)
      {   

          $data['title'] = '';
          $data['act'] = 'ACT IV-Story Generator';
          $this->load->view('templates/header2',$data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('pages/input_story');
          $this->load->view('templates/footer');
      }
      else
      {

         $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'gender' => $this->input->post('gender'),
            'firstname2' => $this->input->post('firstname2'),
            'lastname2' => $this->input->post('lastname2'),
            'gender2' => $this->input->post('gender2'),
            'firstname3' => $this->input->post('firstname3'),
            'lastname3' => $this->input->post('lastname3'),
            'gender3' => $this->input->post('gender3'),
            'relationship' => $this->input->post('relationship'),
            'adjective' => $this->input->post('adjective'),
            'adjective2' => $this->input->post('adjective2'),
            'adjective3' => $this->input->post('adjective3'),
            'adjective4' => $this->input->post('adjective4'),
            'location' => $this->input->post('location'),
            'hobby' => $this->input->post('hobby'),
            'bodypart' => $this->input->post('bodypart'),
            'weapon' => $this->input->post('weapon'),
            'object' => $this->input->post('object'),
            'addict' => $this->input->post('addict'),
            'job' => $this->input->post('job'),
            'job2' => $this->input->post('job2'),
        );

          $data['title'] = '';
          $data['act'] = 'ACT IV-Story Generator';
          $this->load->helper('url_helper');
          $this->load->view('templates/header2', $data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('pages/input_story');
          $this->load->view('pages/generate_story',$data);
          $this->load->view('templates/footer');
      }
  }

}