<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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
	public function index()
	{
		$data = array(
			'menu' => $this->General_model->get_menu(),
			'profil' => $this->Admin_model->get_content(array('1', '2', '3')),
			'banner_page' => $this->Admin_model->get_content('7')[0],
			'recent' => $this->General_model->get_blog_limit(5),
			'address' => $this->Admin_model->get_address('11')[0]
		);
		// BREADCRUMBS
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Profil', '/profil');
		$data['breadcrumbs'] = $this->breadcrumbs->show();

		// VIEW ------------------------------
		$this->load->view('template/header', $data);
		$this->load->view('profil/section_1', $data);
		$this->load->view('profil/left', $data);
		$this->load->view('template/footer', $data);
		// $this->load->view('welcome_message');
	}
	public function visi()
	{
		$data = array(
			'visi' => $this->General_model->get_content(1)[0],
			'menu' => $this->General_model->get_menu(),
			'banner_page' => $this->Admin_model->get_content('7')[0],
			'recent' => $this->General_model->get_blog_limit(5),
			'popular' => $this->General_model->get_blog_popular(5),
			'category' => $this->General_model->get_category(),
			'jurusan' => $this->General_model->get_jurusan(),
			'address' => $this->Admin_model->get_address('11')[0]
		);

		// BREADCRUMBS
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Profil', '/profil');
		$this->breadcrumbs->push('Visi', '/profil/visi');
		$data['breadcrumbs'] = $this->breadcrumbs->show();

		// VIEW ------------------------------
		$this->load->view('template/header', $data);
		$this->load->view('profil/visi', $data);
		$this->load->view('template/footer', $data);
	}
	public function sejarah()
	{
		$data = array(
			'sejarah' => $this->General_model->get_content(2)[0],
			'menu' => $this->General_model->get_menu(),
			'banner_page' => $this->Admin_model->get_content('7')[0],
			'recent' => $this->General_model->get_blog_limit(5),
			'popular' => $this->General_model->get_blog_popular(5),
			'category' => $this->General_model->get_category(),
			'jurusan' => $this->General_model->get_jurusan(),
			'address' => $this->Admin_model->get_address('11')[0]
		);

		// BREADCRUMBS
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Profil', '/profil');
		$this->breadcrumbs->push('Sejarah', '/profil/sejarah');
		$data['breadcrumbs'] = $this->breadcrumbs->show();

		// VIEW ------------------------------
		$this->load->view('template/header', $data);
		$this->load->view('profil/sejarah', $data);
		$this->load->view('template/footer', $data);
	}
	public function misi()
	{
		$data = array(
			'misi' => $this->General_model->get_content(3)[0],
			'menu' => $this->General_model->get_menu(),
			'banner_page' => $this->Admin_model->get_content('7')[0],
			'recent' => $this->General_model->get_blog_limit(5),
			'popular' => $this->General_model->get_blog_popular(5),
			'category' => $this->General_model->get_category(),
			'jurusan' => $this->General_model->get_jurusan(),
			'address' => $this->Admin_model->get_address('11')[0]
		);

		// BREADCRUMBS
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Profil', '/profil');
		$this->breadcrumbs->push('Misi', '/profil/misi');
		$data['breadcrumbs'] = $this->breadcrumbs->show();

		// VIEW ------------------------------
		$this->load->view('template/header', $data);
		$this->load->view('profil/misi', $data);
		$this->load->view('template/footer', $data);
	}
	public function kompetensi($uri)
	{
		if (!$uri) {
			redirect('profil');			
		}

		$data = array(
			'menu' => $this->General_model->get_menu(),
			'banner_page' => $this->Admin_model->get_content('7')[0],
			'recent' => $this->General_model->get_blog_limit(5),
			'popular' => $this->General_model->get_blog_popular(5),
			'category' => $this->General_model->get_category(),
			'kompetensi' => $this->General_model->get_jurusan_by_uri($uri)[0],
			'jurusan' => $this->General_model->get_jurusan(),
			'address' => $this->Admin_model->get_address('11')[0]
		);

		if (count($data['kompetensi']) == 0) {
			redirect('profil');			
		}

		// BREADCRUMBS
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Profil', '/profil');
		$this->breadcrumbs->push('Kompetensi', '/profil/kompetensi');
		$data['breadcrumbs'] = $this->breadcrumbs->show();

		// VIEW ------------------------------
		$this->load->view('template/header', $data);
		$this->load->view('profil/kompetensi', $data);
		$this->load->view('template/footer', $data);
	}
}
