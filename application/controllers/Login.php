<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
	}
	public function index()
	{
		if ($this->session->userdata('isLoggedIn')) {
			redirect('admin');
		}else{
			$this->load->view('admin/template/login');
		}
	}
	public function validate()
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$cek = $this->Login_model->get_user($user, $pass);

		if ($cek == TRUE) {
			$data = array(
					'id' => $cek->user_id,
					'username' => $cek->username,
					'password' => $cek->password,
					'name' => $cek->user_full_name,
					'email' => $cek->email,
					'role_id' => $cek->role_id,
					'page' => $cek->role_page,
					'last_login' => $cek->user_last_login,
					'ava' => $cek->user_avatar,
				);
			$this->session->set_userdata('isLoggedIn', $data);

			$last_login = array(
					'user_last_login' => date('Y-m-d H:i:s')
				); 
			$this->Login_model->set_last_login($data['username'], $data['password'], $last_login);
			// redirect('admin');
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
