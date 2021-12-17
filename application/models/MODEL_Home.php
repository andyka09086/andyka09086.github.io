<?php
class MODEL_Home extends CI_Model {

	function GetSlider(){
		$this->db->select('*')->from('tb_slider')->where('status="telah disetujui"')->order_by('id_slider');
		$query = $this->db->get();
		return $query->result();
	}

	function GetKonten1(){
		$this->db->select('*')->from('tb_home_konten1')->where('status="telah disetujui"')->order_by('id_home_konten1');
		$query = $this->db->get();
		return $query->result();
	}
}