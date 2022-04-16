<?php 
    class User extends CI_Controller {
        public function index()
        {
            $this->load->view('partisi_user/head');    
            $this->load->view('partisi_user/navigasi');    
            $this->load->view('partisi_user/header');    
            $this->load->view('home_v');    
            $this->load->view('partisi_user/footer');    
        }
        
        public function profile()
        {
            $user = $this->session->userdata('username');

            $data['user']= $this->db->get_where('tbl_user',['username'=> $user])->row_array();

            $this->load->view('partisi_user/head');    
            $this->load->view('partisi_user/navigasi');    
            $this->load->view('profile_v',$data);      
             $this->load->view('partisi_user/footer');  
        }

        public function update_profile()
    {
        $user = $this->session->userdata('username');

        $data['user'] = $this->db->get_where('tbl_user', ['username' => $user])->row_array();

        $this->load->view('partisi_user/head');    
        $this->load->view('partisi_user/navigasi');    
        $this->load->view('v_update_profile',$data);      
        $this->load->view('partisi_user/footer'); 
    }

    public function proses_update_profile(){
      $username       = $this->input->post('username');
       $no_hp         = $this->input->post('no_hp');
       
       $data = array(
        'username'  => $username,
         'no_hp'    => $no_hp,
       );

       $where = array(
        'username' => $username

       );

       $this->db->where($where);
       $this->db->update('tbl_user' , $data);

       redirect('user/profile');
           
    }

        public function tentang()
	{
		$this->load->view('partisi/head');    
		$this->load->view('partisi_user/navigasi');    
		$this->load->view('partisi/tentang');    
		$this->load->view('tentang_v');    
		$this->load->view('partisi/footer');    
	}
    public function ubah_password()
        {
            $user = $this->session->userdata('username');

            $data['user'] = $this->db->get_where('tbl_user', ['username' => $user])->row_array();
    
            $this->load->view('partisi_user/head');    
            $this->load->view('partisi_user/navigasi');       
            $this->load->view('partisi_user/ubah_password_v',$data);    
            $this->load->view('partisi_user/footer');    
        }
        
 }