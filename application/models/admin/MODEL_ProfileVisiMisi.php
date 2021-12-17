<?php 
class MODEL_ProfileVisiMisi extends CI_Model {
	
  function InsertData(){
		$data = array(
      'visi' => $this->input->post('visi'),
      'misi' => $this->input->post('misi'),
      'status' => $this->input->post('status')

			 );
		
		$this->db->insert('tb_profile_visimisi', $data);
		redirect('profile_visimisi/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_profile_visimisi');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_profile_visimisi')->where('id_visimisi',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_profile_visimisi')->where('id_visimisi', $id);
		$this->db->where('id_visimisi',$id);
		$this->db->delete('tb_profile_visimisi');
		redirect('profile_visimisi/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_visimisi',$id);
		$this->db->update('tb_profile_visimisi');
		redirect('profile_visimisi/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_visimisi',$id);
		$this->db->update('tb_profile_visimisi');
		redirect('profile_visimisi/index');
	}

	function UpdateData(){
		$id = $this->input->post('id_visimisi');
		$data = array(
			'id_visimisi' =>$this->input->post('id_visimisi'),
			'visi' 	=> $this->input->post('visi') ,
			'misi'		=> $this->input->post('misi'),
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_visimisi', $id);
		$this->db->update('tb_profile_visimisi',$data);
		redirect('profile_visimisi/index');
	}
}