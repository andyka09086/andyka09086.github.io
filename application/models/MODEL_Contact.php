<?php 
class MODEL_Contact extends CI_Model {
	
  function InsertData(){
    date_default_timezone_set("Asia/Jakarta");
		$date_time = date('Y-m-d H:i:s');
		$data = array(
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
			'subject' => $this->input->post('subject') ,
			'message' => $this->input->post('message') ,
			'tanggal' => $date_time
			 );
		
		$this->db->insert('tb_message', $data);
		redirect('contact/index');
	}

	function GetContactInfo(){
		$this->db->select('*')->from('tb_contact_info')->where('status="telah disetujui"')->order_by('id_contact_info');
		$query = $this->db->get();
		return $query->result();
	}
}
?>