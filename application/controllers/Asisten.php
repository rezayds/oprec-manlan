<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asisten extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('home');
		$this->load->view('templates/footer.php');
	}

	public function register()
	{
		$data['title'] = 'Pendaftaran Calon Asisten | Manajemen Lanjut';

		$this->form_validation->set_rules('npm', 'NPM', 'required|callback_check_npm_exists|trim', ['required' => 'Kolom NPM harus diisi!']);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Kolom Nama harus diisi!']);
		$this->form_validation->set_rules('no_telp', 'No. Telepon', 'required|trim', ['required' => 'Kolom No. Whatsapp harus diisi!']);
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|trim', ['required' => 'Kolom Kelas harus diisi!']);
		$this->form_validation->set_rules('domisili', 'Domisili', 'required', ['required' => 'Kolom Domisili harus diisi!']);
		$this->form_validation->set_rules('posisi', 'Posisi', 'required', ['required' => 'Kolom Posisi harus diisi!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]',['required' => 'Kolom Password harus diisi!', 'min_length' => 'password minimal 5 karakter']);
		$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]|required', ['matches' => 'password tidak sama', 'required' => 'Kolom Password harus diisi!']);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/auth_header', $data);
			$this->load->view('asisten/reg_close');
			$this->load->view('templates/auth_footer');
		} else {
			$jurusan = strtoupper(substr($this->input->post('kelas'), 1, 2));
			$angkatan = '20'.substr($this->input->post('npm'), 3, 2);
			$password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

			$this->asisten_model->register($jurusan, $angkatan, $password);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Kamu telah melakukan pendaftaran sebagai calon asisten. Silahkan login untuk menyelesaikan pendaftaran.</div>');

			$dir 	= './assets/berkas/'.$this->input->post('npm');
			$permit = 0777;  
			mkdir($dir);
			chmod($dir, $permit);

			redirect('login');
			
		}
	}

	public function login()
	{
		if ($this->session->userdata('logged_in') === TRUE) {
			redirect('dashboard','refresh');
        }

		$data['title'] = "Masuk Calon Asisten | Manajemen Lanjut";

		$this->form_validation->set_rules('npm', 'NPM', 'required', ['required'=>'Tidak Valid']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required'=>'Tidak Valid']);

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/auth_header', $data);
			$this->load->view('asisten/login');
			$this->load->view('templates/auth_footer');
			
		} else {
			$npm = $this->input->post('npm');
			$password = $this->input->post('password');

			$query = $this->asisten_model->login($npm, $password);

			if ($query) {
				$user_data = array(
					'npm' => $npm,
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Masuk</div>');
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NPM atau Password salah.</div>');
				redirect('login');
			}
		}
	}

	public function dashboard()
	{
		if (!$this->session->userdata('logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('login');
        }

        $data['title'] = "Dashboard | Manajemen Lanjut";
		$data['calonAsisten'] = $this->asisten_model->get_asisten($this->session->userdata('npm'));

		$this->load->view('templates/user_header', $data);
		$this->load->view('templates/user_sidebar', $data);
		$this->load->view('templates/user_topbar', $data);
		$this->load->view('asisten/dashboard', $data);
		$this->load->view('templates/user_footer');
		
	}

	public function complete_register()
	{
		if (!$this->session->userdata('logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('login');
        }

		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', ['required'=>'Tanggal Lahir harus diisi!']);
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', ['required'=>'Tempat Lahir harus diisi!']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required'=>'Alamat harus diisi!']);

		if ($this->form_validation->run() === FALSE) {
			$data['title'] = 'Lengkapi Data Diri | Manajemen Lanjut';
			$data['calonAsisten'] = $this->asisten_model->get_asisten($this->session->userdata('npm'));

			$this->load->view('templates/user_header', $data);
			$this->load->view('templates/user_sidebar', $data);
			$this->load->view('templates/user_topbar', $data);
			$this->load->view('asisten/complete_register', $data);
			$this->load->view('templates/user_footer');
			
		} else {
			$this->asisten_model->complete_register();

			redirect('dashboard','refresh');
		}
	}

	public function upload_berkas()
	{
		if (!$this->session->userdata('logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('login');
        }

        $data['title'] = 'Upload Berkas | Manajemen Lanjut';
		$data['calonAsisten'] = $this->asisten_model->get_asisten($this->session->userdata('npm'));

		$this->load->view('templates/user_header', $data);
		$this->load->view('templates/user_sidebar', $data);
		$this->load->view('templates/user_topbar', $data);
		$this->load->view('asisten/upload_berkas', $data);
		$this->load->view('templates/user_footer');

		if (isset($_POST['upload-foto'])) {
			$npm 		= $this->session->userdata('npm');
			$nama 		= str_replace(' ', '-', $data['calonAsisten']['nama']);
			$ext 		= pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
			$filename 	= 'FOTO-'.$npm.'-'.$nama.'.'.$ext;

			$path 		= './assets/berkas/'.$npm;

			$config['file_name']      	= $filename;
			$config['upload_path']      = $path;
			$config['allowed_types']    = 'jpg|jpeg|png';
			$config['max_size']         = '2048';
			$config['max_width']        = '2560';
			$config['max_height']       = '1920';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('foto')) {
				$data = array('upload_data' => $this->upload->data());
				$this->asisten_model->upload_foto($filename);
					
				redirect('dashboard/upload-berkas', 'refresh');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$error["error"].'</div>');
				
				redirect('dashboard/upload-berkas','refresh');
			}
		}

		if (isset($_POST['upload-cv'])) {
			$npm 		= $this->session->userdata('npm');
			$nama 		= str_replace(' ', '-', $data['calonAsisten']['nama']);
			$ext 		= pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);
			$filename 	= 'CV-'.$npm.'-'.$nama.'.'.$ext;

			$path 		= './assets/berkas/'.$npm;

			$config['file_name']      	= $filename;
			$config['upload_path']      = $path;
			$config['allowed_types']    = 'pdf';
			$config['max_size']         = '2048';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('cv')) {
				$data = array('upload_data' => $this->upload->data());
				$this->asisten_model->upload_cv($filename);
					
				redirect('dashboard/upload-berkas', 'refresh');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$error["error"].'</div>');
				
				redirect('dashboard/upload-berkas','refresh');
			}
		}

		if (isset($_POST['upload-lamaran'])) {
			$npm 		= $this->session->userdata('npm');
			$nama 		= str_replace(' ', '-', $data['calonAsisten']['nama']);
			$ext 		= pathinfo($_FILES['lamaran']['name'], PATHINFO_EXTENSION);
			$filename 	= 'LAMARAN-'.$npm.'-'.$nama.'.'.$ext;

			$path 		= './assets/berkas/'.$npm;

			$config['file_name']      	= $filename;
			$config['upload_path']      = $path;
			$config['allowed_types']    = 'pdf';
			$config['max_size']         = '2048';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('lamaran')) {
				$data = array('upload_data' => $this->upload->data());
				$this->asisten_model->upload_lamaran($filename);
					
				redirect('dashboard/upload-berkas', 'refresh');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$error["error"].'</div>');
				
				redirect('dashboard/upload-berkas','refresh');
			}
		}

		if (isset($_POST['upload-transkrip'])) {
			$npm 		= $this->session->userdata('npm');
			$nama 		= str_replace(' ', '-', $data['calonAsisten']['nama']);
			$ext 		= pathinfo($_FILES['transkrip']['name'], PATHINFO_EXTENSION);
			$filename 	= 'TRANSKRIP-'.$npm.'-'.$nama.'.'.$ext;

			$path 		= './assets/berkas/'.$npm;

			$config['file_name']      	= $filename;
			$config['upload_path']      = $path;
			$config['allowed_types']    = 'pdf';
			$config['max_size']         = '2048';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('transkrip')) {
				$data = array('upload_data' => $this->upload->data());
				$this->asisten_model->upload_transkrip($filename);
					
				redirect('dashboard/upload-berkas', 'refresh');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$error["error"].'</div>');
				
				redirect('dashboard/upload-berkas','refresh');
			}
		}

		if (isset($_POST['upload-krs'])) {
			$npm 		= $this->session->userdata('npm');
			$nama 		= str_replace(' ', '-', $data['calonAsisten']['nama']);
			$ext 		= pathinfo($_FILES['krs']['name'], PATHINFO_EXTENSION);
			$filename 	= 'KRS-'.$npm.'-'.$nama.'.'.$ext;

			$path 		= './assets/berkas/'.$npm;

			$config['file_name']      	= $filename;
			$config['upload_path']      = $path;
			$config['allowed_types']    = 'pdf';
			$config['max_size']         = '2048';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('krs')) {
				$data = array('upload_data' => $this->upload->data());
				$this->asisten_model->upload_krs($filename);
					
				redirect('dashboard/upload-berkas', 'refresh');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$error["error"].'</div>');
				
				redirect('dashboard/upload-berkas','refresh');
			}
		}

		if (isset($_POST['upload-ktm'])) {
			$npm 		= $this->session->userdata('npm');
			$nama 		= str_replace(' ', '-', $data['calonAsisten']['nama']);
			$ext 		= pathinfo($_FILES['ktm']['name'], PATHINFO_EXTENSION);
			$filename 	= 'KTM-'.$npm.'-'.$nama.'.'.$ext;

			$path 		= './assets/berkas/'.$npm;

			$config['file_name']      	= $filename;
			$config['upload_path']      = $path;
			$config['allowed_types']    = 'pdf|jpg|jpeg|png';
			$config['max_size']         = '2048';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('ktm')) {
				$data = array('upload_data' => $this->upload->data());
				$this->asisten_model->upload_ktm($filename);
					
				redirect('dashboard/upload-berkas', 'refresh');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$error["error"].'</div>');
				
				redirect('dashboard/upload-berkas','refresh');
			}
		}

		if (isset($_POST['upload-sertifikat'])) {
			$npm 		= $this->session->userdata('npm');
			$nama 		= str_replace(' ', '-', $data['calonAsisten']['nama']);
			$ext 		= pathinfo($_FILES['sertifikat']['name'], PATHINFO_EXTENSION);
			$filename 	= 'SERTIFIKAT-'.$npm.'-'.$nama.'.'.$ext;

			$path 		= './assets/berkas/'.$npm;

			$config['file_name']      	= $filename;
			$config['upload_path']      = $path;
			$config['allowed_types']    = 'pdf';
			$config['max_size']         = '2048';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('sertifikat')) {
				$data = array('upload_data' => $this->upload->data());
				$this->asisten_model->upload_sertifikat($filename);
					
				redirect('dashboard/upload-berkas', 'refresh');
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$error["error"].'</div>');
				
				redirect('dashboard/upload-berkas','refresh');
			}
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('npm');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Telah Keluar</div>');
		redirect('asisten/login');
	}

	function check_npm_exists($npm){
		$this->form_validation->set_message('check_npm_exists','NPM ini sudah terdaftar!');
		if ($this->asisten_model->check_npm_exists($npm)) {
			return true;
		}else{
			return false;
		}
	}

	public function reset_password()
	{
		$data['asisten'] = password_hash('asisten', PASSWORD_BCRYPT);
		$data['programmer'] = password_hash('programmer', PASSWORD_BCRYPT);

		$this->load->view('templates/reset', $data);
	}

	public function profile()
	{
		if (!$this->session->userdata('logged_in')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('login');
        }

        $data['title'] = "Dashboard | Manajemen Lanjut";
		$data['calonAsisten'] = $this->asisten_model->get_asisten($this->session->userdata('npm'));

        $this->load->view('templates/user_header', $data);
		$this->load->view('templates/user_sidebar');
		$this->load->view('templates/user_topbar');
		$this->load->view('asisten/profile');
		$this->load->view('templates/user_footer');
	}

}

/* End of file Asisten.php */
/* Location: ./application/controllers/Asisten.php */