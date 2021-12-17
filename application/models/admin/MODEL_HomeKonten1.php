<?php 
class MODEL_HomeKonten1 extends CI_Model {
	
  function InsertData(){
    $image_save = addslashes(file_get_contents($_FILES['image_home_konten1']['tmp_name']));
    $image_name = addslashes($_FILES['image_home_konten1']['name']);
    $image_size = getimagesize($_FILES['image_home_konten1']['tmp_name']);
    move_uploaded_file($_FILES["image_home_konten1"]["tmp_name"], "assets/admin/upload/home/" . $_FILES["image_home_konten1"]["name"]);
    $location = "upload/home/" . $_FILES["image_home_konten1"]["name"];

		$data = array(
			'judul_home_konten1' 	=> $this->input->post('judul_home_konten1'),
      'isi_home_konten1' => $this->input->post('isi_home_konten1'),
			'image_home_konten1' 	=> $location,
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_home_konten1', $data);
		redirect('home_konten1/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_home_konten1');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_home_konten1')->where('id_home_konten1',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_home_konten1')->where('id_home_konten1', $id);
		$this->db->where('id_home_konten1',$id);
		$this->db->delete('tb_home_konten1');
		redirect('home_konten1/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_home_konten1',$id);
		$this->db->update('tb_home_konten1');
		redirect('home_konten1/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_home_konten1',$id);
		$this->db->update('tb_home_konten1');
		redirect('home_konten1/index');
	}

	function UpdateData(){
    $image = addslashes(file_get_contents($_FILES['image_home_konten1']['tmp_name']));
  $image_name = addslashes($_FILES['image_home_konten1']['name']);
  $image_size = getimagesize($_FILES['image_home_konten1']['tmp_name']);

 move_uploaded_file($_FILES["image_home_konten1"]["tmp_name"], "assets/admin/upload/home/" . $_FILES["image_home_konten1"]["name"]);
  $location = "upload/home/" . $_FILES["image_home_konten1"]["name"];

		$id = $this->input->post('id_home_konten1');
		$data = array(

      'judul_home_konten1'=> $this->input->post('judul_home_konten1'),
      'isi_home_konten1'=> $this->input->post('isi_home_konten1'),
			'image_home_konten1' 		 	=> $location,
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_home_konten1', $id);
		$this->db->update('tb_home_konten1',$data);
		redirect('home_konten1/index/');
	}
}