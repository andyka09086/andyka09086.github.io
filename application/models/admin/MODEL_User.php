<?php 
class MODEL_User extends CI_Model {
	
  function InsertData(){
		$data = array(
      'full_name'   => $this->input->post('full_name'),
      'email'       => $this->input->post('email'),
			'Username' 			=> $this->input->post('username'),
			'Password' 		 	=> $this->input->post('password'),
			'level'				=> $this->input->post('level')
			 );
		
		$this->db->insert('tb_admin', $data);
		redirect('user/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_admin');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_admin')->where('user_id',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_admin')->where('user_id', $id);
		$this->db->where('user_id',$id);
		$this->db->delete('tb_admin');
		redirect('user/index');
	}

	function UpdateData(){
		$id = $this->input->post('user_id');
		$data = array(
			'user_id'			=> $this->input->post('user_id'),
			'full_name' 	=> $this->input->post('full_name') ,
			'email' 		 	=> $this->input->post('email') ,
			'username' 		=> $this->input->post('username'), 
			'password' 		=> $this->input->post('password'),
			'level'				=> $this->input->post('level')
			 );
		$this->db->where('user_id', $id);
		$this->db->update('tb_admin',$data);
		redirect('user/index');
	}
}