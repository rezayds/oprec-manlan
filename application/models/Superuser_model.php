<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superuser_model extends CI_Model {

	public function login($username, $password)
	{
		$this->db->where('username', $username);	

		$result = $this->db->get('superuser');

		if ($result->num_rows() == 1) {
			$hash = $result->row('password');
			if (password_verify($password, $hash)) {
				return $result->row(0)->id;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function get_all()
	{
		$query = $this->db->get('calonAsisten');
		return $query->result_array();
	}

	public function get_calon($npm)
	{
		$query = $this->db->get_where('calonAsisten', array('npm' => $npm));
        return $query->row_array();
	}

	public function get_count_asisten()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten'));
		return $query->num_rows();
	}

	public function get_count_programmer()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer'));
		return $query->num_rows();
	}


	// ======= Count Depok

	public function get_count_depok_a_2()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Depok', 'angkatan' => '2019'));
		return $query->num_rows();
	}

	public function get_count_depok_a_3()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Depok', 'angkatan' => '2018'));
		return $query->num_rows();
	}

	public function get_count_depok_a_4()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Depok', 'angkatan' => '2017'));
		return $query->num_rows();
	}

	public function get_count_depok_a_t()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Depok'));
		return $query->num_rows();
	}

	public function get_count_depok_p_2()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Depok', 'angkatan' => '2019'));
		return $query->num_rows();
	}

	public function get_count_depok_p_3()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Depok', 'angkatan' => '2018'));
		return $query->num_rows();
	}

	public function get_count_depok_p_4()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Depok', 'angkatan' => '2017'));
		return $query->num_rows();
	}

	public function get_count_depok_p_t()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Depok'));
		return $query->num_rows();
	}

	// ======= END Count Depok


	// ======= Count Kalimalang

	public function get_count_kalimalang_a_2()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Kalimalang', 'angkatan' => '2019'));
		return $query->num_rows();
	}

	public function get_count_kalimalang_a_3()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Kalimalang', 'angkatan' => '2018'));
		return $query->num_rows();
	}

	public function get_count_kalimalang_a_4()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Kalimalang', 'angkatan' => '2017'));
		return $query->num_rows();
	}

	public function get_count_kalimalang_a_t()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Kalimalang'));
		return $query->num_rows();
	}

	public function get_count_kalimalang_p_2()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Kalimalang', 'angkatan' => '2019'));
		return $query->num_rows();
	}

	public function get_count_kalimalang_p_3()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Kalimalang', 'angkatan' => '2018'));
		return $query->num_rows();
	}

	public function get_count_kalimalang_p_4()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Kalimalang', 'angkatan' => '2017'));
		return $query->num_rows();
	}

	public function get_count_kalimalang_p_t()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Kalimalang'));
		return $query->num_rows();
	}

	// ======= END Count Kalimalang


	// ======= Count Karawaci

	public function get_count_karawaci_a_2()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Karawaci', 'angkatan' => '2019'));
		return $query->num_rows();
	}

	public function get_count_karawaci_a_3()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Karawaci', 'angkatan' => '2018'));
		return $query->num_rows();
	}

	public function get_count_karawaci_a_4()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Karawaci', 'angkatan' => '2017'));
		return $query->num_rows();
	}

	public function get_count_karawaci_a_t()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Karawaci'));
		return $query->num_rows();
	}

	public function get_count_karawaci_p_2()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Karawaci', 'angkatan' => '2019'));
		return $query->num_rows();
	}

	public function get_count_karawaci_p_3()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Karawaci', 'angkatan' => '2018'));
		return $query->num_rows();
	}

	public function get_count_karawaci_p_4()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Karawaci', 'angkatan' => '2017'));
		return $query->num_rows();
	}

	public function get_count_karawaci_p_t()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Karawaci'));
		return $query->num_rows();
	}

	// ======= END Count Karawaci

	
	// ======= Count Salemba

		public function get_count_salemba_a_2()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Salemba', 'angkatan' => '2019'));
		return $query->num_rows();
	}

	public function get_count_salemba_a_3()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Salemba', 'angkatan' => '2018'));
		return $query->num_rows();
	}

	public function get_count_salemba_a_4()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Salemba', 'angkatan' => '2017'));
		return $query->num_rows();
	}

	public function get_count_salemba_a_t()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Salemba'));
		return $query->num_rows();
	}

	public function get_count_salemba_p_2()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Salemba', 'angkatan' => '2019'));
		return $query->num_rows();
	}

	public function get_count_salemba_p_3()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Salemba', 'angkatan' => '2018'));
		return $query->num_rows();
	}

	public function get_count_salemba_p_4()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Salemba', 'angkatan' => '2017'));
		return $query->num_rows();
	}

	public function get_count_salemba_p_t()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Salemba'));
		return $query->num_rows();
	}

	// ======= END Count Salemba


	// ======= Count Cengkareng

		public function get_count_cengkareng_a_2()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Cengkareng', 'angkatan' => '2019'));
		return $query->num_rows();
	}

	public function get_count_cengkareng_a_3()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Cengkareng', 'angkatan' => '2018'));
		return $query->num_rows();
	}

	public function get_count_cengkareng_a_4()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Cengkareng', 'angkatan' => '2017'));
		return $query->num_rows();
	}

	public function get_count_cengkareng_a_t()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Asisten', 'domisili' => 'Cengkareng'));
		return $query->num_rows();
	}

	public function get_count_cengkareng_p_2()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Cengkareng', 'angkatan' => '2019'));
		return $query->num_rows();
	}

	public function get_count_cengkareng_p_3()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Cengkareng', 'angkatan' => '2018'));
		return $query->num_rows();
	}

	public function get_count_cengkareng_p_4()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Cengkareng', 'angkatan' => '2017'));
		return $query->num_rows();
	}

	public function get_count_cengkareng_p_t()
	{
		$query = $this->db->get_where('calonAsisten', array('posisi' => 'Programmer', 'domisili' => 'Cengkareng'));
		return $query->num_rows();
	}

	// ======= END Count Cengkareng


	public function get_count_all()
	{
		$query = $this->db->get('calonAsisten');
		return $query->num_rows();
	}

	public function get_count_depok()
	{
		$query = $this->db->get_where('calonAsisten', array('domisili' => 'Depok'));
		return $query->num_rows();
	}

	public function get_count_kalimalang()
	{
		$query = $this->db->get_where('calonAsisten', array('domisili' => 'Kalimalang'));
		return $query->num_rows();
	}

	public function get_count_karawaci()
	{
		$query = $this->db->get_where('calonAsisten', array('domisili' => 'Karawaci'));
		return $query->num_rows();
	}

	public function get_count_salemba()
	{
		$query = $this->db->get_where('calonAsisten', array('domisili' => 'Salemba'));
		return $query->num_rows();
	}

	public function get_count_cengkareng()
	{
		$query = $this->db->get_where('calonAsisten', array('domisili' => 'Cengkareng'));
		return $query->num_rows();
	}

	public function get_count_tingkat2()
	{
		$query = $this->db->get_where('calonAsisten', array('angkatan' => '2019'));
		return $query->num_rows();
	}

	public function get_count_tingkat3()
	{
		$query = $this->db->get_where('calonAsisten', array('angkatan' => '2018'));
		return $query->num_rows();
	}

	public function get_count_tingkat4()
	{
		$query = $this->db->get_where('calonAsisten', array('angkatan' => '2017'));
		return $query->num_rows();
	}

	public function step_1($decision, $npm)
	{
		$data = array(
            'tahap_1'	=> $decision
        );

        $this->db->where('npm', $npm);
        return $this->db->update('calonAsisten', $data);
	}

	public function step_2($decision, $npm)
	{
		$data = array(
            'tahap_2'	=> $decision
        );

        $this->db->where('npm', $npm);
        return $this->db->update('calonAsisten', $data);
	}

	public function step_3($decision, $npm)
	{
		$data = array(
            'tahap_3'	=> $decision
        );

        $this->db->where('npm', $npm);
        return $this->db->update('calonAsisten', $data);
	}

	public function step_4($decision, $npm)
	{
		$data = array(
            'tahap_4'	=> $decision
        );

        $this->db->where('npm', $npm);
        return $this->db->update('calonAsisten', $data);
	}

	public function get_pass_step_1()
	{
		$query = $this->db->get_where('calonAsisten', array('tahap_1' => 1));
        return $query->result_array();
	}

	public function get_pass_step_2()
	{
		$query = $this->db->get_where('calonAsisten', array('tahap_2' => 1));
        return $query->result_array();
	}

	public function get_pass_step_3()
	{
		$query = $this->db->get_where('calonAsisten', array('tahap_3' => 1));
        return $query->result_array();
	}

	public function get_pass_step_4()
	{
		$query = $this->db->get_where('calonAsisten', array('tahap_4' => 1));
        return $query->result_array();
	}

	public function delete_asisten($npm){
        $this->db->where('npm', $npm);
        $this->db->delete('calonAsisten');
        return true;
    }

    public function get_region($region, $posisi)
    {
    	$query = $this->db->get_where('calonAsisten', array('domisili' => $region, 'posisi' => $posisi));
        return $query->result_array();
    }

    public function nilai_tutor($npm)
    {
    	$data = array(
    		'npm' => $npm,
    		'penyampaian' => $this->input->post('penyampaian'),
    		'penguasaan' => $this->input->post('penguasaan'),
    		'umum' => $this->input->post('umum'),
    		'kerapihan' => $this->input->post('kerapihan'),
    		'ketegasan' => $this->input->post('ketegasan'),
    		'rekomendasi' => $this->input->post('rekomendasi'),
    		'nama_penilai' => $this->input->post('penilai')
    	);

    	return $this->db->insert('tutor', $data);
    }

    public function nilai_wawancara($npm)
    {
    	$data = array(
    		'npm' => $npm,
    		'komentar' => $this->input->post('komentar'),
    		'nama_penilai' => $this->input->post('penilai')
    	);

    	return $this->db->insert('wawancara', $data);
    }

    public function get_nilai($tahap, $npm)
    {
    	$query = $this->db->get_where($tahap, array('npm' => $npm));
		return $query->result_array();
    }

}

/* End of file Superuser_model.php */
/* Location: ./application/models/Superuser_model.php */