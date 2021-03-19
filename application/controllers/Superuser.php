<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superuser extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('su_logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('superuser/login');
        }

        $data['total_asisten'] = $this->superuser_model->get_count_asisten();
        $data['total_programmer'] = $this->superuser_model->get_count_programmer();
        $data['total_calon'] = $this->superuser_model->get_count_all();

        $data['depok'] = $this->superuser_model->get_count_depok();
        $data['kalimalang'] = $this->superuser_model->get_count_kalimalang();
        $data['karawaci'] = $this->superuser_model->get_count_karawaci();
        $data['salemba'] = $this->superuser_model->get_count_salemba();
        $data['cengkareng'] = $this->superuser_model->get_count_cengkareng();

        $data['tingkat2'] = $this->superuser_model->get_count_tingkat2();
        $data['tingkat3'] = $this->superuser_model->get_count_tingkat3();
        $data['tingkat4'] = $this->superuser_model->get_count_tingkat4();

        // Depok
		$data['depok_a_2'] = $this->superuser_model->get_count_depok_a_2();
		$data['depok_a_3'] = $this->superuser_model->get_count_depok_a_3();
		$data['depok_a_4'] = $this->superuser_model->get_count_depok_a_4();
		$data['depok_a_t'] = $this->superuser_model->get_count_depok_a_t();   
		$data['depok_p_2'] = $this->superuser_model->get_count_depok_p_2();
		$data['depok_p_3'] = $this->superuser_model->get_count_depok_p_3();
		$data['depok_p_4'] = $this->superuser_model->get_count_depok_p_4();
		$data['depok_p_t'] = $this->superuser_model->get_count_depok_p_t();

		// Kalimalang
		$data['kalimalang_a_2'] = $this->superuser_model->get_count_kalimalang_a_2();
		$data['kalimalang_a_3'] = $this->superuser_model->get_count_kalimalang_a_3();
		$data['kalimalang_a_4'] = $this->superuser_model->get_count_kalimalang_a_4();
		$data['kalimalang_a_t'] = $this->superuser_model->get_count_kalimalang_a_t();   
		$data['kalimalang_p_2'] = $this->superuser_model->get_count_kalimalang_p_2();
		$data['kalimalang_p_3'] = $this->superuser_model->get_count_kalimalang_p_3();
		$data['kalimalang_p_4'] = $this->superuser_model->get_count_kalimalang_p_4();
		$data['kalimalang_p_t'] = $this->superuser_model->get_count_kalimalang_p_t();

		// Karawaci
		$data['karawaci_a_2'] = $this->superuser_model->get_count_karawaci_a_2();
		$data['karawaci_a_3'] = $this->superuser_model->get_count_karawaci_a_3();
		$data['karawaci_a_4'] = $this->superuser_model->get_count_karawaci_a_4();
		$data['karawaci_a_t'] = $this->superuser_model->get_count_karawaci_a_t();   
		$data['karawaci_p_2'] = $this->superuser_model->get_count_karawaci_p_2();
		$data['karawaci_p_3'] = $this->superuser_model->get_count_karawaci_p_3();
		$data['karawaci_p_4'] = $this->superuser_model->get_count_karawaci_p_4();
		$data['karawaci_p_t'] = $this->superuser_model->get_count_karawaci_p_t();

		// Salemba
		$data['salemba_a_2'] = $this->superuser_model->get_count_salemba_a_2();
		$data['salemba_a_3'] = $this->superuser_model->get_count_salemba_a_3();
		$data['salemba_a_4'] = $this->superuser_model->get_count_salemba_a_4();
		$data['salemba_a_t'] = $this->superuser_model->get_count_salemba_a_t();   
		$data['salemba_p_2'] = $this->superuser_model->get_count_salemba_p_2();
		$data['salemba_p_3'] = $this->superuser_model->get_count_salemba_p_3();
		$data['salemba_p_4'] = $this->superuser_model->get_count_salemba_p_4();
		$data['salemba_p_t'] = $this->superuser_model->get_count_salemba_p_t();

		// Cengkareng
		$data['cengkareng_a_2'] = $this->superuser_model->get_count_cengkareng_a_2();
		$data['cengkareng_a_3'] = $this->superuser_model->get_count_cengkareng_a_3();
		$data['cengkareng_a_4'] = $this->superuser_model->get_count_cengkareng_a_4();
		$data['cengkareng_a_t'] = $this->superuser_model->get_count_cengkareng_a_t();   
		$data['cengkareng_p_2'] = $this->superuser_model->get_count_cengkareng_p_2();
		$data['cengkareng_p_3'] = $this->superuser_model->get_count_cengkareng_p_3();
		$data['cengkareng_p_4'] = $this->superuser_model->get_count_cengkareng_p_4();
		$data['cengkareng_p_t'] = $this->superuser_model->get_count_cengkareng_p_t();

		$this->load->view('templates/su_header');
		$this->load->view('templates/su_sidebar');
		$this->load->view('superuser/index', $data);
		$this->load->view('templates/su_footer', $data);
	}

	public function list()
	{
		if (!$this->session->userdata('su_logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('superuser/login');
        }

        $data['su'] = $this->superuser_model->get_all();

		$this->load->view('templates/su_header');
		$this->load->view('templates/su_sidebar');
		$this->load->view('superuser/list', $data);
		$this->load->view('templates/su_footer');
	}

	public function view()
	{
		if (!$this->session->userdata('su_logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('superuser/login');
        }
        
        $npm = $this->uri->segment(4);

        $data['su'] = $this->superuser_model->get_calon($npm);
        $data['tahap'] = $this->uri->segment(3);
        $data['tutor'] = $this->superuser_model->get_nilai('tutor', $npm);
        $data['wawancara'] = $this->superuser_model->get_nilai('wawancara', $npm);

        $this->load->view('templates/su_header');
        $this->load->view('templates/su_sidebar');
		$this->load->view('superuser/view', $data);
		$this->load->view('templates/su_footer');
	}

	public function seleksi_berkas()
	{
		if (!$this->session->userdata('su_logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('superuser/login');
        }

        $data['su'] = $this->superuser_model->get_all();

		$this->load->view('templates/su_header');
		$this->load->view('templates/su_sidebar');
		$this->load->view('superuser/seleksi_berkas', $data);
		$this->load->view('templates/su_footer');

		if (isset($_POST['terima'])) {
			$this->superuser_model->step_1(1, $this->input->post('npm'));

			redirect('superuser/seleksi_berkas','refresh');
		}

		if (isset($_POST['tolak'])) {
			$this->superuser_model->step_1(2, $this->input->post('npm'));

			redirect('superuser/seleksi_berkas','refresh');
		}
	}

	public function tes_tulis()
	{
		if (!$this->session->userdata('su_logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('superuser/login');
        }

        $data['su'] = $this->superuser_model->get_pass_step_1();

		$this->load->view('templates/su_header');
		$this->load->view('templates/su_sidebar');
		$this->load->view('superuser/tes_tulis', $data);
		$this->load->view('templates/su_footer');

		if (isset($_POST['terima'])) {
			$this->superuser_model->step_2(1, $this->input->post('npm'));

			redirect('superuser/tes_tulis','refresh');
		}

		if (isset($_POST['tolak'])) {
			$this->superuser_model->step_2(2, $this->input->post('npm'));

			redirect('superuser/tes_tulis','refresh');
		}
	}

	public function tutor_wawancara()
	{
		if (!$this->session->userdata('su_logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('superuser/login');
        }

        $data['su'] = $this->superuser_model->get_pass_step_2();

		$this->load->view('templates/su_header');
		$this->load->view('templates/su_sidebar');
		$this->load->view('superuser/tutor_wawancara', $data);
		$this->load->view('templates/su_footer');

		if (isset($_POST['terima'])) {
			$this->superuser_model->step_3(1, $this->input->post('npm'));

			redirect('superuser/tutor_wawancara','refresh');
		}

		if (isset($_POST['tolak'])) {
			$this->superuser_model->step_3(2, $this->input->post('npm'));

			redirect('superuser/tutor_wawancara','refresh');
		}
	}

	public function wawancara_staff()
	{
		if (!$this->session->userdata('su_logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('superuser/login');
        }

        $data['su'] = $this->superuser_model->get_pass_step_3();

		$this->load->view('templates/su_header');
		$this->load->view('templates/su_sidebar');
		$this->load->view('superuser/wawancara_staff', $data);
		$this->load->view('templates/su_footer');

		if (isset($_POST['terima'])) {
			$this->superuser_model->step_4(1, $this->input->post('npm'));

			redirect('superuser/wawancara_staff','refresh');
		}

		if (isset($_POST['tolak'])) {
			$this->superuser_model->step_4(2, $this->input->post('npm'));

			redirect('superuser/wawancara_staff','refresh');
		}
	}

	public function nilai()
	{
		if (!$this->session->userdata('su_logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('superuser/login');
        }

        $npm = $this->uri->segment(4);

		$data['su'] = $this->superuser_model->get_calon($npm);
	    $data['tes'] = $this->uri->segment(3);

	    $this->load->view('templates/su_header');
	    $this->load->view('templates/su_sidebar');
		$this->load->view('superuser/nilai', $data);
		$this->load->view('templates/su_footer');

		if (isset($_POST['tutor'])) {
			$this->superuser_model->nilai_tutor($npm);
			redirect('superuser/view/tutor_wawancara/'.$npm, 'refresh');

		}

		if (isset($_POST['wawancara'])) {
			$this->superuser_model->nilai_wawancara($npm);
			redirect('superuser/view/tutor_wawancara/'.$npm, 'refresh');
		}      
	}

	public function kelengkapan()
	{
		if (!$this->session->userdata('su_logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('superuser/login');
        }

        $data['depok_a'] = $this->superuser_model->get_region('Depok', 'Asisten');
        $data['depok_p'] = $this->superuser_model->get_region('Depok', 'Programmer');

        $data['kalimalang_a'] = $this->superuser_model->get_region('Kalimalang', 'Asisten');
        $data['kalimalang_p'] = $this->superuser_model->get_region('Kalimalang', 'Programmer');

        $data['karawaci_a'] = $this->superuser_model->get_region('Karawaci', 'Asisten');
        $data['karawaci_p'] = $this->superuser_model->get_region('Karawaci', 'Programmer');

        $data['salemba_a'] = $this->superuser_model->get_region('Salemba', 'Asisten');
        $data['salemba_p'] = $this->superuser_model->get_region('Salemba', 'Programmer');

        $data['cengkareng_a'] = $this->superuser_model->get_region('Cengkareng', 'Asisten');
        $data['cengkareng_p'] = $this->superuser_model->get_region('Cengkareng', 'Programmer');

		$this->load->view('superuser/kelengkapan', $data);
	}

	public function login()
	{
		if (!$this->session->userdata('su_logged_in') === FALSE) {
			redirect('superuser','refresh');
		}

		$this->form_validation->set_rules('username', 'Username', 'required', ['required'=>'Tidak Valid']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required'=>'Tidak Valid']);

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('superuser/login');
			
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$query = $this->superuser_model->login($username, $password);

			if ($query) {
				$user_data = array(
					'username' => $username,
					'su_logged_in' => true
				);

				$this->session->set_userdata($user_data);

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Masuk</div>');
				redirect('superuser');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password salah!</div>');
				redirect('superuser/login');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('su_logged_in');
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Telah Keluar</div>');
		redirect('superuser/login');
	}

}

/* End of file Superuser.php */
/* Location: ./application/controllers/Superuser.php */