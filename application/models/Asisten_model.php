<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asisten_model extends CI_Model {

	public function register($jurusan, $angkatan, $enc_password)
	{
		$data = array(
			'npm' 		=> htmlspecialchars($this->input->post('npm', true)), 
			'nama' 		=> htmlspecialchars($this->input->post('nama', true)),
			'no_telp' 	=> htmlspecialchars($this->input->post('no_telp', true)),
			'kelas'		=> strtoupper(htmlspecialchars($this->input->post('kelas', true))),
			'domisili'	=> htmlspecialchars($this->input->post('domisili', true)),
			'posisi'	=> htmlspecialchars($this->input->post('posisi', true)),
			'jurusan'	=> $jurusan,
			'angkatan'	=> $angkatan,
			'password' 	=> $enc_password
		);

		return $this->db->insert('calonAsisten', $data);
	}

	public function complete_register()
	{
		$data = array( 
            'tanggal_lahir'	=> htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'tempat_lahir'	=> htmlspecialchars($this->input->post('tempat_lahir', true)),
            'alamat'		=> htmlspecialchars($this->input->post('alamat', true))
        );
        
        $this->db->where('npm', $this->session->userdata('npm'));
        return $this->db->update('calonAsisten', $data);
	}

	public function add_file($foto, $cv, $lamaran, $transkrip, $krs, $ktm, $sertifikat)
	{
		$data = array(
			'foto'		=> $foto,
			'cv'		=> $cv,
			'lamaran' 	=> $lamaran,
			'transkrip' => $transkrip,
			'krs' 		=> $krs,
			'ktm' 		=> $ktm
		);

		return $this->db->insert('berkas', $data);
	}

	public function upload_foto($file)
	{
		$data = array(
			'foto' => $file
		);

		$this->db->where('npm', $this->session->userdata('npm'));
		return $this->db->update('calonAsisten', $data);
	}

	public function upload_cv($file)
	{
		$data = array(
			'cv' => $file
		);

		$this->db->where('npm', $this->session->userdata('npm'));
		return $this->db->update('calonAsisten', $data);
	}

	public function upload_lamaran($file)
	{
		$data = array(
			'lamaran' => $file
		);

		$this->db->where('npm', $this->session->userdata('npm'));
		return $this->db->update('calonAsisten', $data);
	}

	public function upload_transkrip($file)
	{
		$data = array(
			'transkrip' => $file
		);

		$this->db->where('npm', $this->session->userdata('npm'));
		return $this->db->update('calonAsisten', $data);
	}

	public function upload_krs($file)
	{
		$data = array(
			'krs' => $file
		);

		$this->db->where('npm', $this->session->userdata('npm'));
		return $this->db->update('calonAsisten', $data);
	}

	public function upload_ktm($file)
	{
		$data = array(
			'ktm' => $file
		);

		$this->db->where('npm', $this->session->userdata('npm'));
		return $this->db->update('calonAsisten', $data);
	}

	public function upload_sertifikat($file)
	{
		$data = array(
			'sertifikat' => $file
		);

		$this->db->where('npm', $this->session->userdata('npm'));
		return $this->db->update('calonAsisten', $data);
	}

	public function get_asisten($npm)
	{
		$query = $this->db->get_where('calonAsisten', array('npm' => $npm));
        return $query->row_array();
	}

	public function login($npm, $password)
	{
		$this->db->where('npm', $npm);	

		$result = $this->db->get('calonAsisten');

		if ($result->num_rows() == 1) {
			// return $result->row(0)->npm;
			$hash = $result->row('password');
			if (password_verify($password, $hash)) {
				return $result->row(0)->npm;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function check_npm_exists($npm)
	{
		$query = $this->db->get_where('calonAsisten', array('npm' => $npm));
		if (empty($query->row_array())) {
			return true;
		}else{
			return false;
		}
	}

	

}

/* End of file Asisten_model.php */
/* Location: ./application/models/Asisten_model.php */