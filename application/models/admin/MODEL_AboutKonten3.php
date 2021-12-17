<?php 
class MODEL_AboutKonten3 extends CI_Model {
	
  function InsertData(){
		$data = array(
      'judul_about_konten3' => $this->input->post('judul_about_konten3'),
      'isi_about_konten3' => $this->input->post('isi_about_konten3'),
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_about_konten3', $data);
		redirect('about_konten3/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_about_konten3');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_about_konten3')->where('id_about_konten3',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_about_konten3')->where('id_about_konten3', $id);
		$this->db->where('id_about_konten3',$id);
		$this->db->delete('tb_about_konten3');
		redirect('about_konten3/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_about_konten3',$id);
		$this->db->update('tb_about_konten3');
		redirect('about_konten3/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_about_konten3',$id);
		$this->db->update('tb_about_konten3');
		redirect('about_konten3/index');
	}

	function UpdateData(){
		$id = $this->input->post('id_about_konten3');
		$data = array(
			'judul_about_konten3' =>$this->input->post('judul_about_konten3'),
			'isi_about_konten3' 	=> $this->input->post('isi_about_konten3'),
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_about_konten3', $id);
		$this->db->update('tb_about_konten3',$data);
		redirect('about_konten3/index');
	}
}