<?php 
class MODEL_NewsAdminService extends CI_Model {
	
  function InsertData(){
    $image_save = addslashes(file_get_contents($_FILES['image_news_service']['tmp_name']));
    $image_name = addslashes($_FILES['image_news_service']['name']);
    $image_size = getimagesize($_FILES['image_news_service']['tmp_name']);
    move_uploaded_file($_FILES["image_news_service"]["tmp_name"], "assets/admin/upload/news/" . $_FILES["image_news_service"]["name"]);
    $location = "upload/news/" . $_FILES["image_news_service"]["name"];
    $user_nama = $this->session->userdata("full_name");
    date_default_timezone_set("Asia/Jakarta");
		$date_time = date('Y-m-d H:i:s');

		$data = array(
			'user_id' 	=> $user_nama,
      'judul_news_service' => $this->input->post('judul_news_service'),
      'deskripsi_news_service' => $this->input->post('deskripsi_news_service'),
			'image_news_service' 	=> $location,
      'date_news_service'  => $date_time,
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_news_service', $data);
		redirect('news_admin_service/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_news_service');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_news_service')->where('id_news_service',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_news_service')->where('id_news_service', $id);
		$this->db->where('id_news_service',$id);
		$this->db->delete('tb_news_service');
		redirect('news_admin_service/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_news_service',$id);
		$this->db->update('tb_news_service');
		redirect('news_admin_service/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_news_service',$id);
		$this->db->update('tb_news_service');
		redirect('news_admin_service/index');
	}

	function UpdateData(){
    $image = addslashes(file_get_contents($_FILES['image_news_service']['tmp_name']));
  $image_name = addslashes($_FILES['image_news_service']['name']);
  $image_size = getimagesize($_FILES['image_news_service']['tmp_name']);

 move_uploaded_file($_FILES["image_news_service"]["tmp_name"], "assets/admin/upload/news/" . $_FILES["image_news_service"]["name"]);
  $location = "upload/news/" . $_FILES["image_news_service"]["name"];

		$id = $this->input->post('id_news_service');
    $user_nama = $this->session->userdata("full_name");
		date_default_timezone_set("Asia/Jakarta");
		$date_time = date('Y-m-d H:i:s');
		$data = array(

      'user_id'=> $user_nama,
      'judul_news_service'=> $this->input->post('judul_news_service'),
      'deskripsi_news_service'=> $this->input->post('deskripsi_news_service'),
			'image_news_service' 		 	=> $location,
      'date_news_service' => $date_time,
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_news_service', $id);
		$this->db->update('tb_news_service',$data);
		redirect('news_admin_service/index/');
	}
}