<?php
class MODEL_Gallery extends CI_Model {

	function GetHeader(){
		$this->db->select('*')->from('tb_gallery_h')->where('status="telah disetujui"')->order_by('id_gallery_h');
		$query = $this->db->get();
		return $query->result();
	}

	function GetDokumentasi(){
		$this->db->select('*')->from('tb_gallery')->where('status="telah disetujui"')->order_by('id_gallery');
		$query = $this->db->get();
		return $query->result();
	}
}