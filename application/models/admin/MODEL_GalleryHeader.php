<?php 
class MODEL_GalleryHeader extends CI_Model {
	
  function InsertData(){
    $image_save = addslashes(file_get_contents($_FILES['image_gallery_h']['tmp_name']));
    $image_name = addslashes($_FILES['image_gallery_h']['name']);
    $image_size = getimagesize($_FILES['image_gallery_h']['tmp_name']);
    move_uploaded_file($_FILES["image_gallery_h"]["tmp_name"], "assets/admin/upload/gallery/" . $_FILES["image_gallery_h"]["name"]);
    $location = "upload/gallery/" . $_FILES["image_gallery_h"]["name"];

		$data = array(
			'kategori_gallery_h' 	=> $this->input->post('kategori_gallery_h'),
      'nama_gallery_h' => $this->input->post('nama_gallery_h'),
      'deskripsi_gallery_h' => $this->input->post('deskripsi_gallery_h'),
			'image_gallery_h' 	=> $location,
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_gallery_h', $data);
		redirect('gallery_header/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_gallery_h');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_gallery_h')->where('id_gallery_h',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_gallery_h')->where('id_gallery_h', $id);
		$this->db->where('id_gallery_h',$id);
		$this->db->delete('tb_gallery_h');
		redirect('gallery_header/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_gallery_h',$id);
		$this->db->update('tb_gallery_h');
		redirect('gallery_header/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_gallery_h',$id);
		$this->db->update('tb_gallery_h');
		redirect('gallery_header/index');
	}

	function UpdateData(){
    $image = addslashes(file_get_contents($_FILES['image_gallery_h']['tmp_name']));
  $image_name = addslashes($_FILES['image_gallery_h']['name']);
  $image_size = getimagesize($_FILES['image_gallery_h']['tmp_name']);

 move_uploaded_file($_FILES["image_gallery_h"]["tmp_name"], "assets/admin/upload/gallery/" . $_FILES["image_gallery_h"]["name"]);
  $location = "upload/gallery/" . $_FILES["image_gallery_h"]["name"];

		$id = $this->input->post('id_gallery_h');
		$data = array(

      'kategori_gallery_h'=> $this->input->post('kategori_gallery_h'),
      'nama_gallery_h'=> $this->input->post('nama_gallery_h'),
      'deskripsi_gallery_h'=> $this->input->post('deskripsi_gallery_h'),
			'image_gallery_h' 		 	=> $location,
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_gallery_h', $id);
		$this->db->update('tb_gallery_h',$data);
		redirect('gallery_header/index/');
	}
}