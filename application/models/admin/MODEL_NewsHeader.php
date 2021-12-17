<?php 
class MODEL_NewsHeader extends CI_Model {
	
  function InsertData(){
    $image_save = addslashes(file_get_contents($_FILES['image_news_h']['tmp_name']));
    $image_name = addslashes($_FILES['image_news_h']['name']);
    $image_size = getimagesize($_FILES['image_news_h']['tmp_name']);
    move_uploaded_file($_FILES["image_news_h"]["tmp_name"], "assets/admin/upload/news/" . $_FILES["image_news_h"]["name"]);
    $location = "upload/news/" . $_FILES["image_news_h"]["name"];

		$data = array(
			'kategori_news_h' 	=> $this->input->post('kategori_news_h'),
      'nama_news_h' => $this->input->post('nama_news_h'),
      'deskripsi_news_h' => $this->input->post('deskripsi_news_h'),
			'image_news_h' 	=> $location,
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_news_h', $data);
		redirect('news_header/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_news_h');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_news_h')->where('id_news_h',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_news_h')->where('id_news_h', $id);
		$this->db->where('id_news_h',$id);
		$this->db->delete('tb_news_h');
		redirect('news_header/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_news_h',$id);
		$this->db->update('tb_news_h');
		redirect('news_header/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_news_h',$id);
		$this->db->update('tb_news_h');
		redirect('news_header/index');
	}

	function UpdateData(){
    $image = addslashes(file_get_contents($_FILES['image_news_h']['tmp_name']));
  $image_name = addslashes($_FILES['image_news_h']['name']);
  $image_size = getimagesize($_FILES['image_news_h']['tmp_name']);

 move_uploaded_file($_FILES["image_news_h"]["tmp_name"], "assets/admin/upload/news/" . $_FILES["image_news_h"]["name"]);
  $location = "upload/news/" . $_FILES["image_news_h"]["name"];

		$id = $this->input->post('id_news_h');
		$data = array(

      'kategori_news_h'=> $this->input->post('kategori_news_h'),
      'nama_news_h'=> $this->input->post('nama_news_h'),
      'deskripsi_news_h'=> $this->input->post('deskripsi_news_h'),
			'image_news_h' 		 	=> $location,
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_news_h', $id);
		$this->db->update('tb_news_h',$data);
		redirect('news_header/index/');
	}
}