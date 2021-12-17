<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class about_konten3 extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('admin/MODEL_AboutKonten3', 'data');

		if ($this->session->userdata('level')==null){
			redirect('administrator','refresh');
		}
	}

	public function index(){
		$data['info_detail'] = $this->data->GetAllData();
    $data['content']='admin/VIEW_AboutKonten3';
		$this->load->view('admin/sidebar/mainpage', $data);
	}

	public function GetData()
	{
		$id = $this->uri->segment(3);
		$data['isi'] = $this->data->GetByID($id);
		$this->load->view('admin/VIEW_EditAboutKonten3',$data);
	}
  
	public function HapusData()
	{
		$id = $this->uri->segment(3);
		$this->data->DeleteData($id);
	}

	public function ValidasiData()
	{
		$id = $this->uri->segment(3);
		$this->data->ValidData($id);
	}

	public function TolakData()
	{
		$id = $this->uri->segment(3);
		$this->data->DeclineData($id);
	}

	public function SimpanData()
	{
    $this->data->InsertData();
  }

  public function EditData()
	{
		$this->data->UpdateData();
  }


	public function Logout(){
		$this->session->sess_destroy();
		redirect('administrator/index');
	}
}
?>