<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	  $this->load->model('MODEL_Home', 'data');
	}

	public function index(){
		$data['slider']=$this->data->GetSlider();
		$data['konten1']=$this->data->GetKonten1();
		$this->load->view('VIEW_Head');
    $this->load->view('VIEW_Home', $data);
    $this->load->view('VIEW_Footer');
	}

}
?>