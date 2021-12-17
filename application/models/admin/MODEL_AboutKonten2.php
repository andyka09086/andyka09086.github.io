<?php 
class MODEL_AboutKonten2 extends CI_Model {
	
  function InsertData(){
    $image_save = addslashes(file_get_contents($_FILES['image_about_konten2']['tmp_name']));
    $image_name = addslashes($_FILES['image_about_konten2']['name']);
    $image_size = getimagesize($_FILES['image_about_konten2']['tmp_name']);
    move_uploaded_file($_FILES["image_about_konten2"]["tmp_name"], "assets/admin/upload/about/" . $_FILES["image_about_konten2"]["name"]);
    $location = "upload/about/" . $_FILES["image_about_konten2"]["name"];

		$data = array(
			'judul_about_konten2' 	=> $this->input->post('judul_about_konten2'),
      'isi_about_konten2' => $this->input->post('isi_about_konten2'),
			'image_about_konten2' 	=> $location,
      'status' => $this->input->post('status')
			 );
		
		$this->db->insert('tb_about_konten2', $data);
		redirect('about_konten2/index');
	}

	function GetAllData(){
		 $this->db->select('*')->from('tb_about_konten2');
		 $query = $this->db->get();         
     return $query->result();
	}

	function GetByID($id){
			$this->db->select('*')->from('tb_about_konten2')->where('id_about_konten2',$id);
			$rs=$this->db->get();
			return $rs->result();
	}

	function DeleteData($id){
		$this->db->select('*')->from('tb_about_konten2')->where('id_about_konten2', $id);
		$this->db->where('id_about_konten2',$id);
		$this->db->delete('tb_about_konten2');
		redirect('about_konten2/index');
	}

	function ValidData($id){
		$this->db->set('status', 'telah disetujui');
		$this->db->where('id_about_konten2',$id);
		$this->db->update('tb_about_konten2');
		redirect('about_konten2/index');
	}

	function DeclineData($id){
		$this->db->set('status', 'ditolak');
		$this->db->where('id_about_konten2',$id);
		$this->db->update('tb_about_konten2');
		redirect('about_konten2/index');
	}

	function UpdateData(){
    $image = addslashes(file_get_contents($_FILES['image_about_konten2']['tmp_name']));
  $image_name = addslashes($_FILES['image_about_konten2']['name']);
  $image_size = getimagesize($_FILES['image_about_konten2']['tmp_name']);

 move_uploaded_file($_FILES["image_about_konten2"]["tmp_name"], "assets/admin/upload/about/" . $_FILES["image_about_konten2"]["name"]);
  $location = "upload/about/" . $_FILES["image_about_konten2"]["name"];

		$id = $this->input->post('id_about_konten2');
		$data = array(

      'judul_about_konten2'=> $this->input->post('judul_about_konten2'),
      'isi_about_konten2'=> $this->input->post('isi_about_konten2'),
			'image_about_konten2' 		 	=> $location,
      'status' => $this->input->post('status')
			 );
		$this->db->where('id_about_konten2', $id);
		$this->db->update('tb_about_konten2',$data);
		redirect('about_konten2/index/');
	}
}