<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class gallery extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	  $this->load->model('MODEL_Gallery', 'data');
	}

	public function index(){
		$data['header']=$this->data->GetHeader();
		$data['dokumentasi']=$this->data->GetDokumentasi();
		$this->load->view('VIEW_Head');
    $this->load->view('VIEW_Gallery', $data);
    $this->load->view('VIEW_Footer');
	}

}
?>