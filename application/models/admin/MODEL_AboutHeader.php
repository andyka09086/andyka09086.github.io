<?php 
class MODEL_AboutHeader extends CI_Model {
	
  function InsertData(){
    $image_save = addslashes(file_get_contents($_FILES['image_about_h']['tmp_name']));
    $image_name = addslashes($_FILES['image_about_h']['name']);
    $image_size = getimagesize($_FILES['image_about_h']['tmp_name']);
    move_uploaded_file($_FILES["image_about_h"]["tmp_name"], "assets/admin/upload/about/" . $_FILES["image_about_h"]["name"]);
    $location = "upload/about/" . $_FILES["image_about_h"]["name"];

		$data = array(
			'kategori_about_h' 	=> $this->input->post('kategori_about_h'),
      'nama_about_h' => $this->input->post('nama_about_h'),
      'deskripsi_about_h' => $this->input->post('deskripsi_about_h'),
			'image_about_h' 	=> $location,
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_about_h', $data);
		redirect('about_header/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_about_h');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_about_h')->where('id_about_h',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_about_h')->where('id_about_h', $id);
		$this->db->where('id_about_h',$id);
		$this->db->delete('tb_about_h');
		redirect('about_header/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_about_h',$id);
		$this->db->update('tb_about_h');
		redirect('about_header/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_about_h',$id);
		$this->db->update('tb_about_h');
		redirect('about_header/index');
	}

	function UpdateData(){
    $image = addslashes(file_get_contents($_FILES['image_about_h']['tmp_name']));
  $image_name = addslashes($_FILES['image_about_h']['name']);
  $image_size = getimagesize($_FILES['image_about_h']['tmp_name']);

 move_uploaded_file($_FILES["image_about_h"]["tmp_name"], "assets/admin/upload/about/" . $_FILES["image_about_h"]["name"]);
  $location = "upload/about/" . $_FILES["image_about_h"]["name"];

		$id = $this->input->post('id_about_h');
		$data = array(

      'kategori_about_h'=> $this->input->post('kategori_about_h'),
      'nama_about_h'=> $this->input->post('nama_about_h'),
      'deskripsi_about_h'=> $this->input->post('deskripsi_about_h'),
			'image_about_h' 		 	=> $location,
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_about_h', $id);
		$this->db->update('tb_about_h',$data);
		redirect('about_header/index/');
	}
}