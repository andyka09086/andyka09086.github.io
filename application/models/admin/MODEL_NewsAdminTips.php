<?php 
class MODEL_NewsAdminTips extends CI_Model {
	
  function InsertData(){
    $image_save = addslashes(file_get_contents($_FILES['image_news_tips']['tmp_name']));
    $image_name = addslashes($_FILES['image_news_tips']['name']);
    $image_size = getimagesize($_FILES['image_news_tips']['tmp_name']);
    move_uploaded_file($_FILES["image_news_tips"]["tmp_name"], "assets/admin/upload/news/" . $_FILES["image_news_tips"]["name"]);
    $location = "upload/news/" . $_FILES["image_news_tips"]["name"];
    $user_nama = $this->session->userdata("full_name");
    date_default_timezone_set("Asia/Jakarta");
		$date_time = date('Y-m-d H:i:s');

		$data = array(
			'user_id' 	=> $user_nama,
      'judul_news_tips' => $this->input->post('judul_news_tips'),
      'deskripsi_news_tips' => $this->input->post('deskripsi_news_tips'),
			'image_news_tips' 	=> $location,
      'date_news_tips'  => $date_time,
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_news_tips', $data);
		redirect('news_admin_tips/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_news_tips');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_news_tips')->where('id_news_tips',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_news_tips')->where('id_news_tips', $id);
		$this->db->where('id_news_tips',$id);
		$this->db->delete('tb_news_tips');
		redirect('news_admin_tips/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_news_tips',$id);
		$this->db->update('tb_news_tips');
		redirect('news_admin_tips/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_news_tips',$id);
		$this->db->update('tb_news_tips');
		redirect('news_admin_tips/index');
	}

	function UpdateData(){
    $image = addslashes(file_get_contents($_FILES['image_news_tips']['tmp_name']));
  $image_name = addslashes($_FILES['image_news_tips']['name']);
  $image_size = getimagesize($_FILES['image_news_tips']['tmp_name']);

 move_uploaded_file($_FILES["image_news_tips"]["tmp_name"], "assets/admin/upload/news/" . $_FILES["image_news_tips"]["name"]);
  $location = "upload/news/" . $_FILES["image_news_tips"]["name"];

		$id = $this->input->post('id_news_tips');
    $user_nama = $this->session->userdata("full_name");
		date_default_timezone_set("Asia/Jakarta");
		$date_time = date('Y-m-d H:i:s');
		$data = array(

      'user_id'=> $user_nama,
      'judul_news_tips'=> $this->input->post('judul_news_tips'),
      'deskripsi_news_tips'=> $this->input->post('deskripsi_news_tips'),
			'image_news_tips' 		 	=> $location,
      'date_news_tips' => $date_time,
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_news_tips', $id);
		$this->db->update('tb_news_tips',$data);
		redirect('news_admin_tips/index/');
	}
}