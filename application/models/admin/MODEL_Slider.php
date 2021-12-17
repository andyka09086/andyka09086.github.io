<?php 
class MODEL_Slider extends CI_Model {
	
  function InsertData(){
    $image_save = addslashes(file_get_contents($_FILES['image_slider']['tmp_name']));
    $image_name = addslashes($_FILES['image_slider']['name']);
    $image_size = getimagesize($_FILES['image_slider']['tmp_name']);
    move_uploaded_file($_FILES["image_slider"]["tmp_name"], "assets/admin/upload/slider/" . $_FILES["image_slider"]["name"]);
    $location = "upload/slider/" . $_FILES["image_slider"]["name"];

		$data = array(
			'kategori_slider' 	=> $this->input->post('kategori_slider'),
      'nama_kategori' => $this->input->post('nama_kategori'),
      'deskripsi_slider' => $this->input->post('deskripsi_slider'),
			'image_slider' 	=> $location,
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_slider', $data);
		redirect('slider/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_slider');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_slider')->where('id_slider',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_slider')->where('id_slider', $id);
		$this->db->where('id_slider',$id);
		$this->db->delete('tb_slider');
		redirect('slider/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_slider',$id);
		$this->db->update('tb_slider');
		redirect('slider/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_slider',$id);
		$this->db->update('tb_slider');
		redirect('slider/index');
	}

	function UpdateData(){
    $image = addslashes(file_get_contents($_FILES['image_slider']['tmp_name']));
  $image_name = addslashes($_FILES['image_slider']['name']);
  $image_size = getimagesize($_FILES['image_slider']['tmp_name']);

 move_uploaded_file($_FILES["image_slider"]["tmp_name"], "assets/admin/upload/slider/" . $_FILES["image_slider"]["name"]);
  $location = "upload/slider/" . $_FILES["image_slider"]["name"];

		$id = $this->input->post('id_slider');
		$data = array(

      'kategori_slider'=> $this->input->post('kategori_slider'),
      'nama_kategori'=> $this->input->post('nama_kategori'),
      'deskripsi_slider'=> $this->input->post('deskripsi_slider'),
			'image_slider' 		 	=> $location,
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_slider', $id);
		$this->db->update('tb_slider',$data);
		redirect('slider/index/');
	}
}