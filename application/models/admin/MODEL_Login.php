<?php 
class MODEL_Login extends CI_Model {
	
	public function ValidasiLogin($username,$password,$level)
	{
		$this->db->where('username',$username)
				->where('password',$password)
				->where('level',$level);

		$row = $this->db->get('tb_admin');
		$res = $row->result();

		if ($row->num_rows() == 1) {
    return $row->row(0); // fix
		return true;
		}else{
    return false;
		}
	}

  function InsertData(){
		$data = array(
      'full_name'   => $this->input->post('full_name'),
      'email'       => $this->input->post('email'),
			'Username' 			=> $this->input->post('username') ,
			'Password' 		 	=> $this->input->post('password'),
			'level'			=> $this->input->post('level')
			 );
		
		$this->db->insert('tb_admin', $data);
		redirect('administrator/index');
	}
}