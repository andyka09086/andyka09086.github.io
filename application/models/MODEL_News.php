<?php
class MODEL_News extends CI_Model {

	function GetHeader(){
		$this->db->select('*')->from('tb_news_h')->where('status="telah disetujui"')->order_by('id_news_h');
		$query = $this->db->get();
		return $query->result();
	}

  function GetBeritaTerbaru(){
		$this->db->select('*')->from('tb_news')->where('status="telah disetujui"')->order_by('id_news');
		$query = $this->db->get();
		return $query->result();
	}

	function GetBestService(){
		$this->db->select('*')->from('tb_news_service')->where('status="telah disetujui"')->order_by('id_news_service');
		$query = $this->db->get();
		return $query->result();
	}

  function GetLifeHacks(){
		$this->db->select('*')->from('tb_news_tips')->where('status="telah disetujui"')->order_by('id_news_tips');
		$query = $this->db->get();
		return $query->result();
	}
}