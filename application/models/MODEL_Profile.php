<?php
class MODEL_Profile extends CI_Model {

	function GetHeader(){
		$this->db->select('*')->from('tb_profile_h')->where('status="telah disetujui"')->order_by('id_profile_h');
		$query = $this->db->get();
		return $query->result();
	}

	function GetVisiMisi(){
		$this->db->select('*')->from('tb_profile_visimisi')->where('status="telah disetujui"')->order_by('id_visimisi');
		$query = $this->db->get();
		return $query->result();
	}

}