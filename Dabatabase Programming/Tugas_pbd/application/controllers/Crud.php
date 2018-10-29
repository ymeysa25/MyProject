<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
     public function __construct(){
            parent::__construct();
            $this->load->model('web');
            $this->load->helper('url_helper');
        }

        private function cekLogin()
        {
            if(!$this->session->userdata('id_admin'))
            {
                redirect(site_url('auth'));
            }
        }
    

        public function create() // insert data
         {
            $this->cekLogin();

            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('nama', 'nama', 'required');

            if ($this->form_validation->run() === FALSE) 
            {
                
                $this->load->view('template/head');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('pages/create');
            $this->load->view('template/foot');
            $this->load->view('template/js');
            }

            else 
            {
                $this->web->set_mahasiswa();
                redirect('pages/mahasiswa');
            }
         }

          public function create_dosen() // insert data dosen
         {
             $this->cekLogin();

            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('nip', 'nip', 'required');
            $this->form_validation->set_rules('nama', 'nama', 'required');

            if ($this->form_validation->run() === FALSE) 
            {
                
                $this->load->view('template/head');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('create/create_dosen');
            $this->load->view('template/foot');
            $this->load->view('template/js');
            }

            else 
            {
                $this->web->set_dosen();
                redirect('pages/dosen');
            }
         }
          public function create_matkul() // insert data matkul
         {
             $this->cekLogin();
            $this->load->helper('form');
            $this->load->library('form_validation');
    
            $this->form_validation->set_rules('nama_matkul', 'nama', 'required');

            if ($this->form_validation->run() === FALSE) 
            {
                
            $this->load->view('template/head');
            $this->load->view('template/topbar');
            $this->load->view('template/sidebar');
            $this->load->view('create/create_matkul');
            $this->load->view('template/foot');
            $this->load->view('template/js');
            }

            else 
            {
                $this->web->set_matkul();
                redirect('pages/matakuliah');
            }
         }

         public function delete($id)
         { 
             $this->cekLogin();
            $this->load->model('web');

            // $data = array(
                    
            //     'data_mahasiswa_nim' => $this->web->get_mahasiswa_id($id), 
            //     'data_dosen' => $this->web->get_all_dosen(),
            //     'id' => $id
            // );


            $this->web->delete_mahasiswa($id);
            redirect('pages/mahasiswa');
        }

        public function delete_dosen($id)
        {
             $this->cekLogin();
            $this->load->model('web');

            $this->web->delete_dos($id);
            redirect('pages/dosen');

        }
        public function delete_matkul($id)
        {
             $this->cekLogin();
            $this->load->model('web');

            $this->web->delete_matakuliah($id);
            redirect('pages/matakuliah');

        }

        public function profil(){
             $this->cekLogin();
            if($this->input->post('simpan'))
            {
                $this->load->model('web');

                $config['upload_path']   = './uploads/profil/';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']      = 10000000;
                
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('foto')){
                    echo $this->upload->display_errors();
                    // redirect(site_url('pages/profil'));
                }
                else {
                    $data = $this->upload->data();
                    $this->web->saveProfil($data['file_name']);

                    $this->session->set_userdata('foto_admin', $data['file_name']);
                    redirect('dashboard1');
                    // redirect(site_url('dashboard1'));
                }

            }
            else {
                $data_admin = $this->web->getAdmin();

                $data = array(
                    'username' => $data_admin->username,
                    'nama'     => $data_admin->nama
                );

                $this->load->view('template/head');
                $this->load->view('template/topbar');
                $this->load->view('template/sidebar');
                $this->load->view('pages/profil', $data);
                $this->load->view('template/foot');
                $this->load->view('template/js');
            }
        }

        public function edit($id){   
         $this->cekLogin();             
                $where = array('id' => $id);
                $data['mahasiswa'] = $this->web->get_mahasiswa_id($where,'mahasiswa')->result();

                $this->load->view('template/head');
                $this->load->view('template/topbar');
                $this->load->view('template/sidebar');
                $this->load->view('pages/update', $data);
                $this->load->view('template/foot');
                $this->load->view('template/js');
        }

        public function update(){
             $this->cekLogin();
            $id = $this->input->post('id');  
         
            $data = array(
                'nama' => $this->input->post('nama'),
                'nim' => $this->input->post('nim'),
                'alamat' => $this->input->post('alamat'),
                'id_matkul' => $this->input->post('id_matkul'),
               'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            );
        
         
            $this->web->update_data($id,$data,'mahasiswa');
            redirect('pages/mahasiswa');

        }


    }
?>