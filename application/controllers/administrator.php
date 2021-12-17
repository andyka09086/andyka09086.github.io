<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class administrator extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');

		$this->load->helper('url','form');
		$this->load->model('admin/MODEL_Login', 'data');
	}

	public function index(){
		$this->load->view('admin/VIEW_Login');
	}

	public function validasi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level		= $this->input->post('level');
		$status = $this->data->ValidasiLogin($username,$password,$level);
		if($status != true){
			echo "<script>alert('Anda tidak memiliki akses masuk !');</script>";
			redirect('administrator', 'refresh');
		}else{
			$my_session = array(
				'user_id' => $status->user_id,
				'full_name' => $status->full_name,
				'email' => $status->email,
				'username' => $status->$username,
				'password' => $status->$password,
				'level'	=> $level
			);
			$this->session->set_userdata($my_session);
			redirect('administrator/dashboard');
		}
	}

	public function dashboard(){
		$data['content']='admin/VIEW_Home';
		$this->load->view('admin/sidebar/mainpage', $data);
	}

  public function register(){
		$this->load->view('admin/VIEW_Register');
	}

  public function SimpanData(){
		$this->data->InsertData();
	}

	public function Logout(){
		$this->session->sess_destroy();
		redirect('administrator');
	}
}
?>