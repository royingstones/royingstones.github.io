<?php  
class atm_model extends CI_Model{
   


     public function __construct()
        {
                $this->load->database();
        }

	public function set_atm()
		{
		    $this->load->helper('url');

		    $data = array(
		        'firstname' => $this->input->post('firstname'),
		        'lastname' => $this->input->post('lastname'),
		        'gender' => $this->input->post('gender'),
		        'password' => md5($this->input->post('password')),
		        'cash' => $this->input->post('cash'),
		    );

		    $this->db->insert('atm', $data);
		    $id = $this->db->insert_id();
		    redirect('atm/login_page/'.$id);
		}

	public function checkloginauth($id, $password)
 		{
		   $this ->db-> select('id, password');
		   $this ->db-> where('id', $id);
		   $this ->db-> where('password', $password);
		   $this ->db-> limit(1);
		   $query = $this ->db-> get('atm');
		 
		   if($query -> num_rows() == 1)
		   {
		     redirect('atm/view_account/'.$id);
		   }
		   else
		   {
		   

		     redirect('atm/login_page/');
		   }
		}

	public function get_atm($id)
		{
		        $query = $this->db->get_where('atm', array('id' => $id));
		        return $query->row_array();
		}
	public function deleterow($id)
		{
  			 	$this->db->where('id', $id);
   				$this->db->delete('atm'); 
		}
 }
