<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

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
	}
	public function index()
	{
		$this->page();
	}
	public function page()
	{
		$config = array(
				'base_url' => base_url().'/beranda/page/',
				'total_rows' => count($this->General_model->get_blog()),
				'per_page' => 5,
				'uri_segment' => 3,
				'use_page_numbers' => TRUE,
				'num_links' => 5
			);
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;

		$data = array(
			'menu' => $this->General_model->get_menu(),		
			'blog' => $this->General_model->get_blog_full($config['per_page'], $config['per_page']*($page - 1)),
			'lowongan' => $this->General_model->get_lowongan_limit(5),
			'agenda' => $this->General_model->get_agenda_limit(5),
			'recent' => $this->General_model->get_blog_limit(5),
			'popular' => $this->General_model->get_blog_popular(5),
			'category' => $this->General_model->get_category(),
			'jurusan' => $this->General_model->get_jurusan(),
			'banner' => $this->General_model->get_banner(),
			'address' => $this->Admin_model->get_address('11')[0]
		);
		// VIEW ------------------------------
		$this->load->view('template/header', $data);
		$this->load->view('template/banner');
		$this->load->view('home/left', $data);
		$this->load->view('home/right', $data);
		$this->load->view('template/footer', $data);
	}
}
