<?php 
class MODEL_AboutKonten1 extends CI_Model {
	
  function InsertData(){
		$data = array(
      'judul_about_konten1' => $this->input->post('judul_about_konten1'),
      'isi_about_konten1' => $this->input->post('isi_about_konten1'),
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_about_konten1', $data);
		redirect('about_konten1/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_about_konten1');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_about_konten1')->where('id_about_konten1',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_about_konten1')->where('id_about_konten1', $id);
		$this->db->where('id_about_konten1',$id);
		$this->db->delete('tb_about_konten1');
		redirect('about_konten1/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_about_konten1',$id);
		$this->db->update('tb_about_konten1');
		redirect('about_konten1/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_about_konten1',$id);
		$this->db->update('tb_about_konten1');
		redirect('about_konten1/index');
	}

	function UpdateData(){
		$id = $this->input->post('id_about_konten1');
		$data = array(
			'judul_about_konten1' =>$this->input->post('judul_about_konten1'),
			'isi_about_konten1' 	=> $this->input->post('isi_about_konten1'),
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_about_konten1', $id);
		$this->db->update('tb_about_konten1',$data);
		redirect('about_konten1/index');
	}
}