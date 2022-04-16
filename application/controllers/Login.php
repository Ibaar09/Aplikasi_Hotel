<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Login_m');

	}

	public function index()
	{
		$this->load->view('login_v');    
	}

	public function daftar()
	{
		$this->load->view('daftar');
	}

	public function proses_login()
	{
		$hasilcek = $this->Login_m->cekuser(); 
		if($hasilcek){
			//data diri
			$sess_data['id_user']     = $hasilcek[0]->id_user;
			$sess_data['hak_akses']   = $hasilcek[0]->hak_akses;
			$sess_data['username']    = $hasilcek[0]->username;

			$this->session->set_userdata($sess_data);

			if($sess_data['hak_akses'] == 'admin'){
				redirect (base_url('admin'));
			}else{
				redirect ('User');
			}

		}else{
			$this->session->set_flashdata('Pesan', '<div class="alert alert-secondary alert-dismissible fade show" role="alert"> Username atau Password Salah! <button type="button" class="close" data-dismiss="alert" 
			aria-label="Close" <span aria-hidden="true">&times;</span> </button> </div>');
			redirect('Login');
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}

	function proses_daftar()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = md5($password);
		$no_hp = $this->input->post('no_hp');

		$data = array(
			'username' => $username,
			'password' => $password,
			'no_hp'    => $no_hp,
			'aktivasi' => "1",
		);

		$this->db->insert('tbl_user',$data);
		redirect(base_url('Login'));
	}
	
	function proses_ganti_password()
	{
		$username  = $this->input->post('username');
		$password1 = $this->input->post('password1');
		$password2 = $this->input->post('password2');

		if ($password1 == $password2){

			$password1 = MD5($password1);
			
			$data = array(
				'password' => $password1
			);

			$where = array(
				'username' => $username
			);

			$this->db->where($where);
			$this->db->update('tbl_user',$data);
			redirect('Login');
		}else{
			echo"Password Tidak Saama";
			redirect('User/ubah_password');
		}

	}
}
