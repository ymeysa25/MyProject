<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('web');
        $this->load->helper('url_helper');
    }
 private function cekLogin(){
        if(!$this->session->userdata('id_mahasiswa')){
            redirect(site_url('auth'));
        }
    }
    public function mahasiswa_c($halaman = "home")
    {   
         $this->cekLogin();

        if(!file_exists(APPPATH."mahasiswa/".$halaman.'php'))
        {
        	$data = array(
                'data_mahasiswa' => $this->web->get_all_mahasiswa(), // menampilkan data mahasiswa
                'data_dosen' => $this->web->get_all_dosen(),
                'matkul' => $this->web->get_matkul(),
                'nilai' => $this->web->get_penilaian()
                ); // menampilan data dosen
    
        $this->load->view('template/head');
        $this->load->view('mahasiswa/topbar_m');
		$this->load->view('mahasiswa/sidebarmahasiswa');
        $this->load->view('mahasiswa/'.$halaman, $data);
        $this->load->view('template/foot');
        $this->load->view('template/js');
        
        }
        else 
        {
            show_404();
        }
    }

     
}

