<?php 
class MODEL_ProfileHeader extends CI_Model {
	
  function InsertData(){
    $image_save = addslashes(file_get_contents($_FILES['image_profile_h']['tmp_name']));
    $image_name = addslashes($_FILES['image_profile_h']['name']);
    $image_size = getimagesize($_FILES['image_profile_h']['tmp_name']);
    move_uploaded_file($_FILES["image_profile_h"]["tmp_name"], "assets/admin/upload/profile/" . $_FILES["image_profile_h"]["name"]);
    $location = "upload/profile/" . $_FILES["image_profile_h"]["name"];

		$data = array(
			'kategori_profile_h' 	=> $this->input->post('kategori_profile_h'),
      'nama_profile_h' => $this->input->post('nama_profile_h'),
      'deskripsi_profile_h' => $this->input->post('deskripsi_profile_h'),
			'image_profile_h' 	=> $location,
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_profile_h', $data);
		redirect('profile_header/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_profile_h');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_profile_h')->where('id_profile_h',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_profile_h')->where('id_profile_h', $id);
		$this->db->where('id_profile_h',$id);
		$this->db->delete('tb_profile_h');
		redirect('profile_header/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_profile_h',$id);
		$this->db->update('tb_profile_h');
		redirect('profile_header/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_profile_h',$id);
		$this->db->update('tb_profile_h');
		redirect('profile_header/index');
	}

	function UpdateData(){
    $image = addslashes(file_get_contents($_FILES['image_profile_h']['tmp_name']));
  $image_name = addslashes($_FILES['image_profile_h']['name']);
  $image_size = getimagesize($_FILES['image_profile_h']['tmp_name']);

 move_uploaded_file($_FILES["image_profile_h"]["tmp_name"], "assets/admin/upload/profile/" . $_FILES["image_profile_h"]["name"]);
  $location = "upload/profile/" . $_FILES["image_profile_h"]["name"];

		$id = $this->input->post('id_profile_h');
		$data = array(

      'kategori_profile_h'=> $this->input->post('kategori_profile_h'),
      'nama_profile_h'=> $this->input->post('nama_profile_h'),
      'deskripsi_profile_h'=> $this->input->post('deskripsi_profile_h'),
			'image_profile_h' 		 	=> $location,
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_profile_h', $id);
		$this->db->update('tb_profile_h',$data);
		redirect('profile_header/index/');
	}
}