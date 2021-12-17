<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class about extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	  $this->load->model('MODEL_About', 'data');
	}

	public function index(){
		$data['header']=$this->data->GetHeader();
		$data['konten1']=$this->data->GetKonten1();
		$data['konten2']=$this->data->GetKonten2();
		$data['konten3']=$this->data->GetKonten3();
		$this->load->view('VIEW_Head');
    $this->load->view('VIEW_About', $data);
    $this->load->view('VIEW_Footer');
	}

}
?>