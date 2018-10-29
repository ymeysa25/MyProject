<?php
class Auth_model extends CI_Model {
	public function checkAdmin(){
		$data = array(
			'username' => $this->input->post('username')
		);

		return $this->db->get_where('admin', $data);
	}

	public function getAdmin(){
		$data = array(
			'username' => $this->input->post('username')
		);

		$query = $this->db->get_where('admin', $data);
		return $query->row();
	}

	public function checkMahasiswa(){
		$data = array(
			'nim' => $this->input->post('nim')
		);

		return $this->db->get_where('mahasiswa', $data);
	}

	public function getMahasiswa(){
		$data = array(
			'nim' => $this->input->post('nim')
		);

		$query = $this->db->get_where('mahasiswa', $data);
		return $query->row();
	}
}