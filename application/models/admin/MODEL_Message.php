<?php 
class MODEL_Message extends CI_Model {
	
  function InsertData(){
    date_default_timezone_set("Asia/Jakarta");
		$date_time = date('Y-m-d H:i:s');
		$data = array(
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
			'subject' => $this->input->post('subject') ,
			'message' => $this->input->post('message') ,
			'tanggal' => $date_time,
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_message', $data);
		redirect('message/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_message');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_message')->where('name_id',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_message')->where('name_id', $id);
		$this->db->where('name_id',$id);
		$this->db->delete('tb_message');
		redirect('message/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('name_id',$id);
		$this->db->update('tb_message');
		redirect('message/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('name_id',$id);
		$this->db->update('tb_message');
		redirect('message/index');
	}

	function UpdateData(){
		$id = $this->input->post('name_id');
		date_default_timezone_set("Asia/Jakarta");
		$date_time = date('Y-m-d H:i:s');
		$data = array(
			'name_id' =>$this->input->post('name_id'),
			'nama' 	=> $this->input->post('nama') ,
			'email'		=> $this->input->post('email'),
      'subject' => $this->input->post('subject'),
      'message' => $this->input->post('message'),
			'tanggal' 		 	=> $date_time,
      'status' => $this->input->post('status')
			 );
		$this->db->where('name_id', $id);
		$this->db->update('tb_message',$data);
		redirect('message/index');
	}
}