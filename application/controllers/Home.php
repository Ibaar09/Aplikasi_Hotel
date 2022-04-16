<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('partisi/head');    
		$this->load->view('partisi/navigasi');    
		$this->load->view('partisi/header');    
		$this->load->view('home_v');    
		$this->load->view('partisi/footer');    
	}

	public function tentang()
	{
		$this->load->view('partisi/head');    
		$this->load->view('partisi/nav_tentang');    
		$this->load->view('partisi/tentang');    
		$this->load->view('tentang_v');    
		$this->load->view('partisi/footer');    
	}
}
