<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

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
		$key = $this->input->get('q');

		$config = array(
				'base_url' => base_url().'/search?q='.$key,
				'total_rows' => $this->General_model->count_record($key),
				'per_page' => 5,
				'use_page_numbers' => TRUE,
				'enable_query_string' => TRUE,
				'page_query_string' => TRUE,
				'num_links' => 5
			);
		$this->pagination->initialize($config);
		$page = ($this->input->get('per_page')) ? $this->input->get('per_page') : 1;

		$data = array(
			'menu' => $this->General_model->get_menu(),			
			'record' => $this->General_model->get_record($key, $config['per_page'], $config['per_page']*($page - 1)),
			'count_record' => $this->General_model->count_record($key),
			'banner_page' => $this->Admin_model->get_content('9')[0],
			'lowongan' => $this->General_model->get_lowongan_limit(5),
			'recent' => $this->General_model->get_blog_limit(5),
			'agenda' => $this->General_model->get_agenda_limit(5),
			'popular' => $this->General_model->get_blog_popular(5),
			'category' => $this->General_model->get_category(),
			'jurusan' => $this->General_model->get_jurusan(),
			'address' => $this->Admin_model->get_address('11')[0]
		);

		$this->breadcrumbs->push('Home', '/');
		$this->breadcrumbs->push('Search', '/search');
		$data['breadcrumbs'] = $this->breadcrumbs->show();

		// VIEW ------------------------------
		$this->load->view('template/header', $data);
		$this->load->view('search/search', $data);
		$this->load->view('template/footer', $data);
	} 
}
