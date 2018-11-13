<?php
class atm extends CI_Controller{

   public function __construct(){
       parent::__construct();
       $this->load->model('atm_model');
       $this->load->helper('url_helper');
    }

  public function index()
  {       
          $this->load->helper('form');
          $this->load->library('form_validation');
          $this->load->helper('url_helper');
          $data['title'] = '';
          $data['act'] = 'Midterm ATM';

      $this->form_validation->set_rules('lastname', 'Lastname', 'required|alpha_numeric_spaces');      
      $this->form_validation->set_rules('firstname', 'Firstname', 'required|alpha_numeric_spaces');
      $this->form_validation->set_rules('gender', 'Gender', 'required');
      $this->form_validation->set_rules('cash', 'Cash', 'required|exact_length[3]|numeric|greater_than[0]');
      $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric_spaces');
      $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]|alpha_numeric_spaces');
      
        if ($this->form_validation->run() === FALSE)
      {
          $this->load->helper('url_helper');
          $this->load->view('templates/header2', $data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('atm/index');
          $this->load->view('templates/footer');

      }
        else
      {
          $this->atm_model->set_atm(); 

      }      
  }

  public function login_page($id=NULL)
  {

          $this->load->helper('form');
          $this->load->library('form_validation');
          $this->load->helper('url_helper');
          $data['title'] = '';
          $data['act'] = 'Midterm ATM';
          $data['id']=$id;

          $this->form_validation->set_rules('id', 'ID', 'required|numeric');
          $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric_spaces');
          
           if ($this->form_validation->run() === FALSE)
      {
         
          $this->load->view('templates/header2', $data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('atm/login',$data);
          $this->load->view('templates/footer');

      }
          else
      {
          
          $id = $this->input->post('id');
          $password = md5($this->input->post('password'));
          $this->atm_model->checkloginauth($id,$password);
      }  

  }

  public function view_account($id)
  {


    $data['atm_item'] = $this->atm_model->get_atm($id);

      if (empty($data['atm_item']))
          {
                  show_404();
          }

          $data['title'] = '';
          $data['act'] = 'Midterm ATM';

          $this->load->view('templates/header2', $data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('atm/account',$data);
          $this->load->view('templates/footer');
  }


  public function withdraw($id)
  {

          $this->load->helper('form');
          $this->load->library('form_validation');
          $this->load->helper('url_helper');
          $data['title'] = '';
          $data['act'] = 'Midterm ATM';
          $data['id']=$id;

          $data['title'] = '';
          $data['act'] = 'Midterm ATM';
          $data['id']=$id;
          $query = $this->db->get_where('atm', array('id' => $id));

          foreach ($query->result() as $row)
          {
              $data['cash1']=$row->cash;
          }

          $cashes=$data['cash1'];
          $this->form_validation->set_rules('cash', 'Cash', 'required|numeric|less_than_equal_to['.$data['cash1'].']');
          
           if ($this->form_validation->run() === FALSE)
      {
         
          $this->load->view('templates/header2', $data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('atm/withdraw_cash',$data);
          $this->load->view('templates/footer');

      }
          else
      {
         

            $data['cash'] = $this->input->post('cash');
       


          

          $data['cash'] = $data['cash1'] - $data['cash'];

          $this->db->set('cash', $data['cash']);
          $this->db->where('id', $id);
          $this->db->update('atm'); 
          $this->view_account($id);
          
      }  

  }

  public function deposit($id)
  {

          $this->load->helper('form');
          $this->load->library('form_validation');
          $this->load->helper('url_helper');
          $data['title'] = '';
          $data['act'] = 'Midterm ATM';
          $data['id']=$id;

          $this->form_validation->set_rules('cash', 'Cash', 'required|numeric');
          
           if ($this->form_validation->run() === FALSE)
      {
         
          $this->load->view('templates/header2', $data);
          $this->load->view('pages/portfolio', $data);
          $this->load->view('atm/deposit_cash',$data);
          $this->load->view('templates/footer');

      }
          else
      {
           $data = array(

            'cash' => $this->input->post('cash'),
        );


          $data['title'] = '';
          $data['act'] = 'Midterm ATM';
          $data['id']=$id;
          $query = $this->db->get_where('atm', array('id' => $id));

          foreach ($query->result() as $row)
          {
              $data['cash1']=$row->cash;
          }

          $data['cash'] = $data['cash1'] + $data['cash'];

          $this->db->set('cash', $data['cash']);
          $this->db->where('id', $id);
          $this->db->update('atm'); 
          $this->view_account($id);
          
      }  

  }
   public function delete_row($id)
    {   
      $this->load->model("atm_model");
      $this->atm_model->deleterow($id);

       redirect('atm/index/');  
      }



    public function logout(){


      $this->session->sess_destroy();
      redirect('atm/index');
    }
}
