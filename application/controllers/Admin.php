<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('partisi_admin/head');
		$this->load->view('partisi_admin/navbar');
		$this->load->view('partisi_admin/index');
		$this->load->view('partisi_admin/footer');
		$this->load->view('partisi_admin/js');
	}
	public function dashboard()
	{
		$this->load->view('partisi_admin/head');
		$this->load->view('partisi_admin/navbar');
		$this->load->view('partisi_admin/index');
		$this->load->view('partisi_admin/footer');
		$this->load->view('partisi_admin/js');
		
	}
	public function jenis_kamar()
	{
		$this->load->model('M_admin');
		$data['jenis_kamar']= $this->M_admin->jenis_kamar()->result();
		$this->load->view('partisi_admin/head');
		$this->load->view('partisi_admin/navbar');
		$this->load->view('jenis_kamar_v',$data);
		$this->load->view('partisi_admin/footer');
		$this->load->view('partisi_admin/js');
	}

	public function tambah_jenis_kamar()
	{
		$this->load->view('partisi_admin/head');
		$this->load->view('partisi_admin/navbar');
		$this->load->view('tambah_jenis_kamar_v');
		$this->load->view('partisi_admin/footer');
		$this->load->view('partisi_admin/js');
	}

	function hapus_datajenis($id_jenis)
	{
		$id_jenis = $id_jenis;
		$this->db->delete('tbl_jenis_kamar',['id_jenis' => $id_jenis]);
		redirect('Admin/jenis_kamar');
	   }

	   public function proses_tambah_jenis_kamar()
	{
		// $add =
		// [
		// 	'kamar'         => $this->input->post('kamar'),
		// 	'keterangan'    => $this->input->post('keterangan'),
		// 	'harga'         => $this->input->post('harga'),
		// 	'foto'          => $this->input->post('foto'),
		// ];

		// $this->db->insert('tbl_jenis_kamar', $add);
		// redirect('Admin/jenis_kamar');

		
        //deklarasi variabel
        $kamar      = $this->input->post('kamar');
        $keterangan = $this->input->post('keterangan');
        $harga      = $this->input->post('harga');
        
        //proses upload
        $config['upload_path']          = "./assets/img/";
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 5000;
 
        $this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto')){
            //jika gagal upload
             $data = array(
            'kamar' => $kamar,
            'keterangan' => $keterangan,
            'harga' => $harga
              );
            $this->db->insert('tbl_jenis_kamar', $data);
            redirect('Admin/jenis_kamar');

		}else{
            //proses upload ke folder
			$data = array('upload_data' => $this->upload->data());
            $namafile =  $this->upload->data("file_name");

            //update ke database
            $data = array(
            'foto' => $namafile,
            'keterangan' => $keterangan,
			'harga' => $harga
            );
			
            $this->db->insert('tbl_jenis_kamar', $data);
            redirect('Admin/jenis_kamar');
		}
	}

	public function update_datajenis($id_jenis)
	{
		$this->load->model('M_kamar');
		$data['data_jenis'] = $this->M_kamar->get_data_jenis($id_jenis);
		$this->load->view('partisi_admin/head');
		$this->load->view('partisi_admin/navbar');
		$this->load->view('v_update_jenis_kamar',$data);
		$this->load->view('partisi_admin/footer');
		$this->load->view('partisi_admin/js');
	}

	public function proses_update_jenis_kamar()
	{
		$this->load->model('M_kamar');
		$this->M_kamar->simpan_edit_jenis();
		redirect('Admin/jenis_kamar');
	}

    public function data_kamar()
	{
		$this->load->model('M_admin');
		$data['kamar']= $this->M_admin->data_kamar()->result();
		$data['join']= $this->M_admin->join_kamar()->result();
		$this->load->view('partisi_admin/head');
		$this->load->view('partisi_admin/navbar');
		$this->load->view('data_kamar_v',$data);
		$this->load->view('partisi_admin/footer');
		$this->load->view('partisi_admin/js');
		
	}

	public function tambah_data_kamar()
	{
		$this->load->view('partisi_admin/head');
		$this->load->view('partisi_admin/navbar');
		$this->load->view('tambah_data_kamar_v');
		$this->load->view('partisi_admin/footer');
		$this->load->view('partisi_admin/js');
		
	}
	public function proses_tambah_kamar()
	{
		$add =
		[
			'nomor_kamar'  => $this->input->post('nomor_kamar'),
			'id_jenis'     => $this->input->post('id_jenis'),
		];

		$this->db->insert('tbl_kamar', $add);
		redirect('Admin/data_kamar');
	}

	function hapus_kamar($id_kamar)
	{
		$id_kamar = $id_kamar;
		$this->db->delete('tbl_kamar',['id_kamar' => $id_kamar]);
		redirect('Admin/data_kamar');
	}

	   public function update_kamar($id_kamar)
	{
		$this->load->model('M_kamar');
		$data['data_kamar'] = $this->M_kamar->get_data_kamar($id_kamar);
		$this->load->view('partisi_admin/head');
		$this->load->view('partisi_admin/navbar');
		$this->load->view('v_update_data_kamar',$data);
		$this->load->view('partisi_admin/footer');
		$this->load->view('partisi_admin/js');
	}

	function proses_update_kamar()
	{
		$this->load->model('M_kamar');
		$this->M_kamar->simpan_edit_kamar();
		redirect('Admin/data_kamar');
	}
   
	public function data_user()
	{
		$this->load->model('M_admin');
		$data['user'] = $this->M_admin->data_user()->result();
		$this->load->view('partisi_admin/head');
		$this->load->view('partisi_admin/navbar');
		$this->load->view('data_user_v',$data);
		$this->load->view('partisi_admin/js');
	}

	function hapususer($id_user)
	{
            $id_user = $id_user;
            $this->db->delete('tbl_user',['id_user' => $id_user]);
            redirect('Admin/data_user');
	}
    public function data_konsumen()
	{
		$this->load->model('M_admin');
		$data['konsumen'] = $this->M_admin->data_konsumen()->result();
		$this->load->view('partisi_admin/head');
		$this->load->view('partisi_admin/navbar');
		$this->load->view('data_konsumen_v',$data);
		$this->load->view('partisi_admin/footer');
		$this->load->view('partisi_admin/js');
	}

	function hapus_konsumen($id_konsumen){
		$id_konsumen = $id_konsumen;
		$this->db->delete('tbl_konsumen', ['id_konsumen' => $id_konsumen]);
		redirect('Admin/data_konsumen');
	}
}