<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_jenis extends CI_Controller {
    public function tampil_standard()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/standard');
		$this->load->view('partisi_user/footer');
		
	}

	public function tampil_superior()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/superior');
		$this->load->view('partisi_user/footer');
		
	}

	public function tampil_deluxe()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/deluxe');
		$this->load->view('partisi_user/footer');
		
	}

	public function tampil_single()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/single');
		$this->load->view('partisi_user/footer');
		
	}

	public function tampil_junior()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/junior');
		$this->load->view('partisi_user/footer');
		
	} 

	public function tampil_suite()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/suite');
		$this->load->view('partisi_user/footer');
		
	}

	public function tampil_presidential()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/presidential');
		$this->load->view('partisi_user/footer');
		
	}

	public function tampil_twin()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/twin');
		$this->load->view('partisi_user/footer');
		
	}

	public function tampil_double()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/double');
		$this->load->view('partisi_user/footer');
		
	}

    public function tampil_family()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/family');
		$this->load->view('partisi_user/footer');
		
	}

    public function tampil_connecting()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/connecting');
		$this->load->view('partisi_user/footer');
		
	}

    public function tampil_murphy()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/murphy');
		$this->load->view('partisi_user/footer');
		
	}

    public function tampil_accessible()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/accessible');
		$this->load->view('partisi_user/footer');
		
	}

    public function tampil_smoking()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/smoking');
		$this->load->view('partisi_user/footer');
		
	}

    public function tampil_cabana()
	{
		$this->load->view('partisi_user/head');
		$this->load->view('partisi_user/navigasi');
		$this->load->view('partisi_user/header');
		$this->load->view('jenis_kamar/cabana');
		$this->load->view('partisi_user/footer');
		
	}
}