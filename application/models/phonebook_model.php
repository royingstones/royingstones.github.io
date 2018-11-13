<?php
class Phonebook_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }



        public function get_phonebook($slug = FALSE)
		{
		        if ($slug === FALSE)
		        {
		                $query = $this->db->get('phonebook');
		                return $query->result_array();
		        }

		        $query = $this->db->get_where('phonebook', array('slug' => $slug));
		        return $query->row_array();
		}

		public function set_phonebook()
		{
		    $this->load->helper('url');

		    $slug = url_title($this->input->post('contact'), 'dash', TRUE);

		    $data = array(
		        'firstname' => $this->input->post('firstname'),
		        'slug' => $slug,
		        'middlename' => $this->input->post('middlename'),
		        'lastname' => $this->input->post('lastname'),
		        'gender' => $this->input->post('gender'),
		        'contact' => $this->input->post('contact'),
		        'email' => $this->input->post('email'),
		        'status' => $this->input->post('status'),
		        'about' => $this->input->post('about'),
		    );

		    return $this->db->insert('phonebook', $data);
		}


		public function update_phonebook($id)
		{
		    $this->load->helper('url');

		    $slug = url_title($this->input->post('contact'), 'dash', TRUE);

		    $data = array(
		        'firstname' => $this->input->post('firstname'),
		        'slug' => $slug,
		        'middlename' => $this->input->post('middlename'),
		        'lastname' => $this->input->post('lastname'),
		        'gender' => $this->input->post('gender'),
		        'contact' => $this->input->post('contact'),
		        'email' => $this->input->post('email'),
		        'status' => $this->input->post('status'),
		        'about' => $this->input->post('about'),
		    );

		    $this->db->where('id', $id);
		    $this->db->update('phonebook', $data);
		}

		public function deleterow($id)
		{
  			 	$this->db->where('id', $id);
   				$this->db->delete('phonebook'); 
		}
	
}