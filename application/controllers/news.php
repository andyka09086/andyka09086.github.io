<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class news extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	  $this->load->model('MODEL_News', 'data');
	}

	public function index(){
		$data['header']=$this->data->GetHeader();
		$data['berita_terbaru']=$this->data->GetBeritaTerbaru();
		$data['best_service']=$this->data->GetBestService();
		$data['life_hacks']=$this->data->GetLifeHacks();
		$this->load->view('VIEW_Head');
    $this->load->view('VIEW_News', $data);
    $this->load->view('VIEW_Footer');
	}
}
?>