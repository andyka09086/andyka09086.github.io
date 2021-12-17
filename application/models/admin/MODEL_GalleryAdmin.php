<?php 
class MODEL_GalleryAdmin extends CI_Model {
	
  function InsertData(){
    $image_save = addslashes(file_get_contents($_FILES['image_gallery']['tmp_name']));
    $image_name = addslashes($_FILES['image_gallery']['name']);
    $image_size = getimagesize($_FILES['image_gallery']['tmp_name']);
    move_uploaded_file($_FILES["image_gallery"]["tmp_name"], "assets/admin/upload/gallery/" . $_FILES["image_gallery"]["name"]);
    $location = "upload/gallery/" . $_FILES["image_gallery"]["name"];

		$data = array(
			'judul_gallery' 	=> $this->input->post('judul_gallery'),
      'deskripsi_gallery' => $this->input->post('deskripsi_gallery'),
			'image_gallery' 	=> $location,
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_gallery', $data);
		redirect('gallery_admin/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_gallery');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_gallery')->where('id_gallery',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_gallery')->where('id_gallery', $id);
		$this->db->where('id_gallery',$id);
		$this->db->delete('tb_gallery');
		redirect('gallery_admin/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_gallery',$id);
		$this->db->update('tb_gallery');
		redirect('gallery_admin/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_gallery',$id);
		$this->db->update('tb_gallery');
		redirect('gallery_admin/index');
	}

	function UpdateData(){
    $image = addslashes(file_get_contents($_FILES['image_gallery']['tmp_name']));
  $image_name = addslashes($_FILES['image_gallery']['name']);
  $image_size = getimagesize($_FILES['image_gallery']['tmp_name']);

 move_uploaded_file($_FILES["image_gallery"]["tmp_name"], "assets/admin/upload/gallery/" . $_FILES["image_gallery"]["name"]);
  $location = "upload/gallery/" . $_FILES["image_gallery"]["name"];

		$id = $this->input->post('id_gallery');
		$data = array(

      'judul_gallery'=> $this->input->post('judul_gallery'),
      'deskripsi_gallery'=> $this->input->post('deskripsi_gallery'),
			'image_gallery' 		 	=> $location,
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_gallery', $id);
		$this->db->update('tb_gallery',$data);
		redirect('gallery_admin/index/');
	}
}