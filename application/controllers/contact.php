<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class contact extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	  $this->load->model('MODEL_Contact', 'data');
	}

	public function index(){
		$data['contact_info']=$this->data->GetContactInfo();
		$this->load->view('VIEW_Head');
    $this->load->view('VIEW_Contact', $data);
    $this->load->view('VIEW_Footer');
	}
	
	public function SimpanData()
	{
    $this->data->InsertData();
  }

}
?>