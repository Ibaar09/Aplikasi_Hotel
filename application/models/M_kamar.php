<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class M_kamar extends CI_Model{
        public function Data_kamar (){
            return $this->db->get('tbl_kamar')->result_array();
        }

        public function proses_tambah_data(){
            $data = [
                "id_kamar"    => $this->input->post('id_kamar'),
                "nomor_kamar" => $this->input->post('nomor_kamar'),
                "id_jenis"    => $this->input->post('id_jenis'),
            ];
            $this->db->insert('tbl_kamar',$data);
        }

        function get_data_jenis($id_jenis)
        {
          return $this->db->get_where('tbl_jenis_kamar',array('id_jenis'=>$id_jenis))->result();
        }

        public function simpan_edit_jenis()
        {
         
         $kamar      = $this->input->post('kamar');
         $keterangan = $this->input->post('keterangan');
         $harga      = $this->input->post('harga');
         $foto      = $this->input->post('foto');
         $id_jenis   = $this->input->post('id_jenis');
     
         $data = array(
             'kamar'      => $kamar,
             'keterangan' => $keterangan,
             'harga'      => $harga,
             'foto'       => $foto,
         );
           $this->db->where('id_jenis',$id_jenis);
           $this->db->update('tbl_jenis_kamar',$data);
        }   

        function get_data_kamar($id_kamar)
        {
          return $this->db->get_where('tbl_kamar',array('id_kamar'=>$id_kamar))->result();
        }

        function simpan_edit_kamar()
        {
         $nomor_kamar = $this->input->post('nomor_kamar');
         $id_jenis = $this->input->post('id_jenis');
         $id_kamar = $this->input->post('id_kamar');
     
         $data = array(
             'nomor_kamar'=>$nomor_kamar,
             'id_jenis'=>$id_jenis
         );
           $this->db->where('id_kamar',$id_kamar);
           $this->db->update('tbl_kamar',$data);
        }
    }