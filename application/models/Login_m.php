<?php 
    class Login_m extends CI_Model{
        function cekuser(){
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
    
            return $this->db->get_where('tbl_user', array('username' => $username, 'password' => $password))->result();
        }
    }