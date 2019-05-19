<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {

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
		$this->load->library('pagination');
	}
	public function index()
	{
		$this->page();
	}
	public function page()
	{
		$config = array(
				'base_url' => base_url().'/kurikulum/page/',
				'total_rows' => count($this->General_model->count_agenda()),
				'per_page' => 9,
				'uri_segment' => 3,
				'use_page_numbers' => TRUE,
				'num_links' => 5
			);
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
		$data = array(
			'menu' => $this->General_model->get_menu(),
			'kurikulum' => $this->Admin_model->get_content(array('4', '5', '6')),
			'agenda' => $this->General_model->get_agenda($config['per_page'], $config['per_page']*($page - 1)),
			'recent' => $this->General_model->get_blog_limit(5),
			'banner_page' => $this->Admin_model->get_content('10')[0],
			'address' => $this->Admin_model->get_address('11')[0]
		);
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Kurikulum', '/kurikulum');
		$data['breadcrumbs'] = $this->breadcrumbs->show();
		// VIEW ------------------------------
		$this->load->view('template/header', $data);
		$this->load->view('kurikulum/section_1', $data);
		$this->load->view('kurikulum/left', $data);
		$this->load->view('template/footer', $data);
	}
	public function info($type)
	{
		$data = array(
			'menu' => $this->General_model->get_menu(),
			'content' => $this->Admin_model->get_content_by_uri($type)[0],
			'lowongan' => $this->General_model->get_lowongan_limit(5),
			'banner_page' => $this->Admin_model->get_content('10')[0],
			'agenda' => $this->General_model->get_agenda_limit(5),
			'recent' => $this->General_model->get_blog_limit(5),
			'popular' => $this->General_model->get_blog_popular(5),
			'category' => $this->General_model->get_category(),
			'jurusan' => $this->General_model->get_jurusan(),
			'address' => $this->Admin_model->get_address('11')[0]
		);
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Kurikulum', '/kurikulum');
		if ($type == 'rencana-pelaksanaan-pembelajaran') {
			$this->breadcrumbs->push('RPP', '/rpp');				
		}else if ($type == 'kriteria-ketuntasan-minimum') {
			$this->breadcrumbs->push('KKM', '/kkm');				
		}else if ($type == 'kalender-pendidikan') {
			$this->breadcrumbs->push('Kalender Pendidikan', '/kp');				
		}
		$data['breadcrumbs'] = $this->breadcrumbs->show();
		// VIEW ------------------------------
		$this->load->view('template/header', $data);
		$this->load->view('kurikulum/section_2', $data);
		$this->load->view('kurikulum/content', $data);
		$this->load->view('kurikulum/right', $data);
		$this->load->view('template/footer', $data);
	}
	public function agenda($uri)
	{
		if ($uri == null) {
			redirect('kurikulum');
		}

		$data = array(
			'menu' => $this->General_model->get_menu(),
			'lowongan' => $this->General_model->get_lowongan_limit(5),
			'banner_page' => $this->Admin_model->get_content('10')[0],
			'agenda_detail' => $this->General_model->get_agenda_by_uri($uri)[0],
			'agenda' => $this->General_model->get_agenda_limit(5),
			'recent' => $this->General_model->get_blog_limit(5),
			'popular' => $this->General_model->get_blog_popular(5),
			'category' => $this->General_model->get_category(),
			'jurusan' => $this->General_model->get_jurusan(),
			'address' => $this->Admin_model->get_address('11')[0]
		);
		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Kurikulum', '/kurikulum');
		$this->breadcrumbs->push('Agenda', '/agenda');
		$data['breadcrumbs'] = $this->breadcrumbs->show();

		$this->load->view('template/header', $data);
		$this->load->view('kurikulum/section_2', $data);
		$this->load->view('kurikulum/agenda', $data);
		$this->load->view('kurikulum/right', $data);
		$this->load->view('template/footer', $data);
	}

}
