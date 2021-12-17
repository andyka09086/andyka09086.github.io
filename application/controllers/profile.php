<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class profile extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	  $this->load->model('MODEL_Profile', 'data');
	}

	public function index(){
		$data['header']=$this->data->GetHeader();
		$data['visimisi']=$this->data->GetVisiMisi();
		$this->load->view('VIEW_Head');
    $this->load->view('VIEW_Profile', $data);
    $this->load->view('VIEW_Footer');
	}

}
?>