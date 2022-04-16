<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
    public function index()
    {
        $this->load->model('M_pesan');
		$data['provinsi'] = $this->M_pesan->data_provinsi();
        $this->load->view('partisi_user/head');    
        $this->load->view('partisi_user/navigasi');     
        $this->load->view('standar/pesan1_v');    
        $this->load->view('formpesan_v',$data);    
        $this->load->view('partisi_user/footer');    
    }
    public function pesan2()
    {
        $this->load->model('M_pesan');
		$data['provinsi'] = $this->M_pesan->data_provinsi();
        $this->load->view('partisi_user/head');    
        $this->load->view('partisi_user/navigasi');     
        $this->load->view('standar/pesan2_v');    
        $this->load->view('formpesan_v',$data);    
        $this->load->view('partisi_user/footer');    
    }
    public function booking()
    {
        $this->load->model('M_pesan');
		$data['booking'] = $this->M_pesan->data_transaksi();
        $this->load->view('partisi_user/head');    
        $this->load->view('partisi_user/navigasi');        
        $this->load->view('formbooking_v',$data);    
        $this->load->view('partisi_user/footer');    
    }

    public function simpan_konsumen()
	{
		$add =
		[
			'nama_depan'      => $this->input->post('nama_depan'),
			'nama_tengah'     => $this->input->post('nama_tengah'),
			'nama_belakang'   => $this->input->post('nama_belakang'),
			'alamat'          => $this->input->post('alamat'),
			'kota'            => $this->input->post('kota'),
			'provinsi'        => $this->input->post('provinsi'),
			'negara'          => $this->input->post('negara'),
			'no_identitas'    => $this->input->post('no_identitas'),
			'no_telp'         => $this->input->post('no_telp'),
			'email'           => $this->input->post('email'),
		];

		$this->db->insert('tbl_konsumen', $add);
		redirect('Pesan/booking');
	}
}
