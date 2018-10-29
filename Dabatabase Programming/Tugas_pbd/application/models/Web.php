<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Web extends CI_Model {
	
	function __construct()
	{
		$this->load->database(); 
	}

	//join 
	public function join_mahasiswa()
	{
		$this->db->SELECT('mahasiswa.id,mahasiswa.nim, mahasiswa.nama, mahasiswa.alamat, matkul.nama_matkul')
			 ->from('mahasiswa')
			 ->join('matkul','mahasiswa.id_matkul = matkul.id_matkul', 'inner');
		$query = $this->db->get();
		return $query->result();	
	}

	//get penilaian
	public function get_penilaian()
	{
		$this->db->SELECT('mahasiswa.id, mahasiswa.nim, mahasiswa.nama, dosen.nama_dosen, penilaian.nilai, matkul.nama_matkul')
			 ->from('penilaian')
			 ->join('matkul','penilaian.id_matkul = matkul.id_matkul')
			 ->join('dosen','penilaian.id_dosen = dosen.id_dosen')
			 ->join('mahasiswa','mahasiswa.id = penilaian.id');
		$query = $this->db->get();
		return $query->result();	
	}

	public function get_all_mahasiswa()
	{
		$query = $this->db->get('mahasiswa'); //ngambil dari database
		return $query->result();
	}
	// public function getmahasiswa()
	// 	{
	// 	$data =  $this->db->where('nim', $this->session->userdata('nim'));
	// 	$query = $this->db->get('mahasiswa', $data);
 // 		return $query->result();
	// 	}

	public function get_all_dosen()
	{
		$query = $this->db->order_by('id_dosen', 'DESC')->get('dosen'); //ngambil dari database
		return $query->result();
	}

	public function get_matkul()
	{
		$query = $this->db->order_by('id_matkul', 'DESC')->get('matkul'); //ngambil dari database
		return $query->result();
	}

// dua fungsi dibawah untuk insert data 
	public function insert_data()
	{
		$this->db->insert('mahasiswa', $data);
	}

	public function set_mahasiswa()
	{
		$this->load->helper('url');

		$kuku = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'id_matkul' => $this->input->post('id_matkul'),
 			'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
			 );

		return $this->db->insert('mahasiswa', $kuku);
	}

	//insert data dosen
	public function insert_data2()
	{
		$this->db->insert('dosen', $data);
	}

	public function set_dosen()
	{
		$this->load->helper('url');

		$kuku = array(
			'nip' => $this->input->post('nip'),
			'nama_dosen' => $this->input->post('nama'),
			'email' => $this->input->post('email')
			 );

		return $this->db->insert('dosen', $kuku);
	}
	public function set_matkul()
	{
		$this->load->helper('url');

		$kuku = array(
			'id_matkul' => $this->input->post('id_matkul'),
			'nama_matkul' => $this->input->post('nama_matkul'),
			'beban_sks' => $this->input->post('beban'),
			'semester' => $this->input->post('semester')
			 );

		return $this->db->insert('matkul', $kuku);
	}

	//update data
	function get_mahasiswa_id($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($id,$data,$table){
		$this->db->where('id', $id);
		$this->db->update('mahasiswa',$data);
	}	

// delete data mahasiswa
	public function delete_mahasiswa($data)
 	{
 		$this->db->where('id', $data);
 		$this->db->delete('mahasiswa');
    }

    public function delete_matakuliah($data) //delete data dosen
 	{
 		$this->db->where('id_matkul', $data);
 		$this->db->delete('matkul');
    }


    public function delete_dos($data) //delete matakuliah
 	{
 		$this->db->where('id_matkul', $data);
 		$this->db->delete('matkul');
    }


 	public function saveProfil($alamat_foto){
 		$data = array(
 			'username' => $this->input->post('username'),
 			'nama' => $this->input->post('nama'),
 			'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
 			'foto' => $alamat_foto
 		);

 		$this->db->where('id_admin', $this->session->userdata('id_admin'));

 		$this->db->update('admin', $data);

 		// UPDATE user SET username = 'balbalbala' WHERE id_user = 'id_admin di session';
 	}   

 	public function getAdmin(){
 		// $this->db->get('user');
 		// SELECT * FROM user;

 		// $this->db->get_where('user', ['id_user' => '1']);
 		// SELECT * FROM user WHERE id_user = 1;

 		$query = $this->db->get_where( 'admin', ['id_admin' => $this->session->userdata('id_admin')] );
 		return $query->row();
 	}

}