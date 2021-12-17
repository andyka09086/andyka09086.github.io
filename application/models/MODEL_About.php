<?php
class MODEL_About extends CI_Model {

	function GetHeader(){
		$this->db->select('*')->from('tb_about_h')->where('status="telah disetujui"')->order_by('id_about_h');
		$query = $this->db->get();
		return $query->result();
	}

  function GetKonten1(){
		$this->db->select('*')->from('tb_about_konten1')->where('status="telah disetujui"')->order_by('id_about_konten1');
		$query = $this->db->get();
		return $query->result();
	}

  function GetKonten2(){
		$this->db->select('*')->from('tb_about_konten2')->where('status="telah disetujui"')->order_by('id_about_konten2');
		$query = $this->db->get();
		return $query->result();
	}

  function GetKonten3(){
		$this->db->select('*')->from('tb_about_konten3')->where('status="telah disetujui"')->order_by('id_about_konten3');
		$query = $this->db->get();
		return $query->result();
	}

}