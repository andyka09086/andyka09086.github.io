<?php 
class MODEL_ContactInfo extends CI_Model {
	
  function InsertData(){
		$data = array(
      'alamat' => $this->input->post('alamat'),
      'email' => $this->input->post('email'),
      'telp' => $this->input->post('telp'),
      'website' => $this->input->post('website'),
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_contact_info', $data);
		redirect('contact_info/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_contact_info');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_contact_info')->where('id_contact_info',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_contact_info')->where('id_contact_info', $id);
		$this->db->where('id_contact_info',$id);
		$this->db->delete('tb_contact_info');
		redirect('contact_info/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_contact_info',$id);
		$this->db->update('tb_contact_info');
		redirect('contact_info/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_contact_info',$id);
		$this->db->update('tb_contact_info');
		redirect('contact_info/index');
	}

	function UpdateData(){
		$id = $this->input->post('id_contact_info');
		$data = array(
			'alamat' =>$this->input->post('alamat'),
			'email' 	=> $this->input->post('email'),
      'telp' => $this->input->post('telp'),
      'website' => $this->input->post('website'),
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_contact_info', $id);
		$this->db->update('tb_contact_info',$data);
		redirect('contact_info/index');
	}
}