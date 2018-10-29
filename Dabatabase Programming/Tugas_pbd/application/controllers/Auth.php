<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

     private function cekLogin(){
        if(!$this->session->userdata('id_admin')){
            redirect(site_url('auth'));
        }
    }

     private function ccd(){
        echo "string";
        // if(!$this->session->userdata('id_admin')){
        //     redirect(site_url('auth'));
        // }
    }


	public function index(){
         
        if ($this->session->userdata('id_admin')) {
            $this->cekLogin();
            redirect(site_url('pages/home')); }

        else {

		$this->load->view('login');
	           }
    }
        
	public function login(){
        if($this->input->post('login')){
        	$this->load->model('auth_model');

        	$cek = $this->auth_model->checkAdmin();

        	if($cek->num_rows() > 0){
        		$data_admin = $this->auth_model->getAdmin();

        		if( password_verify($this->input->post('password'), $data_admin->password) ){
        			$data_session = array(
        				'username' => $data_admin->username,
        				'id_admin' => $data_admin->id_admin,
        				'nama_admin' => $data_admin->nama,
                        'foto_admin' => $data_admin->foto
        			);

        			$this->session->set_userdata($data_session);

        			redirect(site_url('dashboard1'));
        		}
        		else {
        			echo "Password salah";
        		}
        	}
        	else {
        		echo "Username tidak terdaftar";
        	}
        }
        else {
        	show_404();
        }
	}
        

    public function logout()
	{
	    $this->session->sess_destroy();
	    redirect('auth');
	}


    public function login_mahasiswa2(){
        $this->load->view('mahasiswa/login_mahasiswa2');
    }

    public function login_mahasiswa()
    {
        
            if($this->input->post('login_mahasiswa'))
            {
                $this->load->model('auth_model');

                $cek = $this->auth_model->checkMahasiswa();

                if($cek->num_rows() > 0)
                {
                    $data_admin = $this->auth_model->getMahasiswa();

                     if( password_verify($this->input->post('password'), $data_admin->password) ){
                    
                        $data_session = array(
                            'nama_admin' => $data_admin->nama,
                            'nim' => $data_admin->nim,
                            'alamat' => $data_admin->alamat,
                            'id_mahasiswa' => $data_admin->id
                        );

                        $this->session->set_userdata($data_session);

                        redirect(site_url('mahasiswa/home'));
                    }
                    else {
                        echo "Password salah";
                    }
                }
                else 
                {
                    echo "Username tidak terdaftar";
                }
            }
            else 
            {
                show_404();
            }
    }
}
