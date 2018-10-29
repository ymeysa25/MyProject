<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1 extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('web');
        $this->load->helper('url_helper');
        $this->load->library('pdf');
    }
    
    public function index(){
        $this->cekLogin();
		$this->load->view('dashboard1');
	}

    private function cekLogin(){
        if(!$this->session->userdata('id_admin')){
            redirect(site_url('auth'));
        }
    }

    public function pusat($halaman = "home")
    {   
        $this->cekLogin();

        if(!file_exists(APPPATH."pages/".$halaman.'php'))
        {
        	$data = array(
                'data_mahasiswa' => $this->web->get_all_mahasiswa(), // menampilkan data mahasiswa
                'data_dosen' => $this->web->get_all_dosen(),
                'matkul' => $this->web->get_matkul(),
                'nilai' => $this->web->get_penilaian()

                ); // menampilan data dosen
    
        $this->load->view('template/head');
        $this->load->view('template/topbar');
		$this->load->view('template/sidebar');
        $this->load->view('pages/'.$halaman, $data);
        $this->load->view('template/foot');
        $this->load->view('template/js');
        
        }
        else 
        {
            show_404();
        }
    }


        public function download(){
            $this->cekLogin();

            $pdf = new FPDF('l','mm','A5');
            // membuat halaman baru
            $pdf->AddPage();
            // setting jenis font yang akan digunakan
            $pdf->SetFont('Arial','B',16);
            // mencetak string 
            $pdf->Cell(190,7,'S1 Teknik Komputer',0,1,'C');
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(190,7,'DAFTAR MAHASISWA',0,1,'C');
            // Memberikan space kebawah agar tidak terlalu rapat
            $pdf->Cell(10,7,'',0,1);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(40,6,'NIM',1,0);
            $pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
            $pdf->Cell(27,6,'Alamat',1,1);
            $pdf->SetFont('Arial','',10);
            $mahasiswa = $this->db->get('mahasiswa')->result();
            foreach ($mahasiswa as $row){
                $pdf->Cell(40,6,$row->nim,1,0);
                $pdf->Cell(85,6,$row->nama,1,0);
                $pdf->Cell(27,6,$row->alamat,1,1);
            }
            $pdf->Output();
        }

        public function download_dosen(){
            $this->cekLogin();

            $pdf = new FPDF('l','mm','A5');
            // membuat halaman baru
            $pdf->AddPage();
            // setting jenis font yang akan digunakan
            $pdf->SetFont('Arial','B',16);
            // mencetak string 
            $pdf->Cell(190,7,'S1 Teknik Komputer',0,1,'C');
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(190,7,'DAFTAR DOSEN',0,1,'C');
            // Memberikan space kebawah agar tidak terlalu rapat
            $pdf->Cell(10,7,'',0,1);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(30,6,'NIP',1,0);
            $pdf->Cell(85,6,'NAMA',1,0);
            $pdf->Cell(27,6,'Email',1,1);
            $pdf->SetFont('Arial','',10);
            $mahasiswa = $this->db->get('dosen')->result();
            foreach ($mahasiswa as $row){
                $pdf->Cell(30,6,$row->nip,1,0);
                $pdf->Cell(85,6,$row->nama_dosen,1,0);
                $pdf->Cell(27,6,$row->email,1,1);
            }
            $pdf->Output();
        }
     
}

