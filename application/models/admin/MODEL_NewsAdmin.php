<?php 
class MODEL_NewsAdmin extends CI_Model {
	
  function InsertData(){
    $image_save = addslashes(file_get_contents($_FILES['image_news']['tmp_name']));
    $image_name = addslashes($_FILES['image_news']['name']);
    $image_size = getimagesize($_FILES['image_news']['tmp_name']);
    move_uploaded_file($_FILES["image_news"]["tmp_name"], "assets/admin/upload/news/" . $_FILES["image_news"]["name"]);
    $location = "upload/news/" . $_FILES["image_news"]["name"];
    $user_nama = $this->session->userdata("full_name");
    date_default_timezone_set("Asia/Jakarta");
		$date_time = date('Y-m-d H:i:s');

		$data = array(
			'user_id' 	=> $user_nama,
      'judul_news' => $this->input->post('judul_news'),
      'deskripsi_news' => $this->input->post('deskripsi_news'),
			'image_news' 	=> $location,
      'date_news'  => $date_time,
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_news', $data);
		redirect('news_admin/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_news');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_news')->where('id_news',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_news')->where('id_news', $id);
		$this->db->where('id_news',$id);
		$this->db->delete('tb_news');
		redirect('news_admin/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_news',$id);
		$this->db->update('tb_news');
		redirect('news_admin/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_news',$id);
		$this->db->update('tb_news');
		redirect('news_admin/index');
	}

	function UpdateData(){
    $image = addslashes(file_get_contents($_FILES['image_news']['tmp_name']));
  $image_name = addslashes($_FILES['image_news']['name']);
  $image_size = getimagesize($_FILES['image_news']['tmp_name']);

 move_uploaded_file($_FILES["image_news"]["tmp_name"], "assets/admin/upload/news/" . $_FILES["image_news"]["name"]);
  $location = "upload/news/" . $_FILES["image_news"]["name"];

		$id = $this->input->post('id_news');
    $user_nama = $this->session->userdata("full_name");
		date_default_timezone_set("Asia/Jakarta");
		$date_time = date('Y-m-d H:i:s');
		$data = array(

      'user_id'=> $user_nama,
      'judul_news'=> $this->input->post('judul_news'),
      'deskripsi_news'=> $this->input->post('deskripsi_news'),
			'image_news' 		 	=> $location,
      'date_news' => $date_time,
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_news', $id);
		$this->db->update('tb_news',$data);
		redirect('news_admin/index/');
	}
}