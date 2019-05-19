<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

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
		$this->page();
	}
	public function page()
	{
		$config = array(
				'base_url' => base_url().'/berita/page/',
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

		$this->load->view('template/header', $data);
		$this->load->view('berita/left', $data);
		$this->load->view('home/right', $data);
		$this->load->view('template/footer', $data);		
	}
	public function detail($uri)
	{
		if ($uri == NULL) {
			redirect(site_url());
		}
		$data = array(
			'menu' => $this->General_model->get_menu(),
			'blog' => $this->General_model->get_blog_by_uri($uri)[0],
			'comment' => $this->General_model->get_comment_by_blog_uri($uri),
			'category' => $this->General_model->get_category(),
			'jurusan' => $this->General_model->get_jurusan(),
			'lowongan' => $this->General_model->get_lowongan_limit(5),
			'agenda' => $this->General_model->get_agenda_limit(5),
			'recent' => $this->General_model->get_blog_limit(5),
			'popular' => $this->General_model->get_blog_popular(5),
			'address' => $this->Admin_model->get_address('11')[0]
		);

		if (!$data['blog']) {
			$this->session->set_flashdata('error', '<div class="alert alert-danger">Link was broken</div>');
			redirect('berita');
		}
		$this->session->set_userdata('referred_from', current_url());

		if (!isset($_COOKIE['blog_'.$data['blog']->blog_id])) {
			setcookie('blog_'.$data['blog']->blog_id, 'blog_'.$data['blog']->blog_id, time() + (86400 * 3));
			$sql = "UPDATE blog SET blog_view = blog_view + 1 WHERE blog_id = ".$data['blog']->blog_id."";
			$this->db->query($sql);
		}
		// VIEW ------------------------------
		$this->load->view('template/header', $data);
		$this->load->view('berita/detail', $data);
		$this->load->view('home/right', $data);
		$this->load->view('template/footer');
		// $this->load->view('welcome_message');
	}
	public function search()
	{
		$keyword = $this->input->get('s');
		$config = array(
				'base_url' => base_url().'berita/search?s='.$keyword,
				'total_rows' => $this->General_model->count_blog_by_keyword($keyword),
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
			'blog' => $this->General_model->get_blog_by_keyword($keyword, $config['per_page'], $config['per_page']*($page - 1)),			
			'lowongan' => $this->General_model->get_lowongan_limit(5),
			'agenda' => $this->General_model->get_agenda_limit(5),
			'recent' => $this->General_model->get_blog_limit(5),
			'popular' => $this->General_model->get_blog_popular(5),
			'category' => $this->General_model->get_category(),
			'jurusan' => $this->General_model->get_jurusan(),
			'address' => $this->Admin_model->get_address('11')[0]
		);
		// VIEW ------------------------------
		$this->load->view('template/header', $data);
		$this->load->view('home/left', $data);
		$this->load->view('home/right', $data);
		$this->load->view('template/footer', $data);
	}
	public function category($cat)
	{
		$config = array(
				'base_url' => base_url().'berita/category/'.$cat.'/',
				'total_rows' => $this->General_model->count_blog_by_category($cat),
				'per_page' => 5,
				'uri_segment' => 4,
				'use_page_numbers' => TRUE,
				'num_links' => 5
			);
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;

		$data = array(
			'menu' => $this->General_model->get_menu(),
			'blog' => $this->General_model->get_blog_by_category($cat, $config['per_page'], $config['per_page']*($page - 1)),			
			'lowongan' => $this->General_model->get_lowongan_limit(5),
			'agenda' => $this->General_model->get_agenda_limit(5),
			'recent' => $this->General_model->get_blog_limit(5),
			'popular' => $this->General_model->get_blog_popular(5),
			'category' => $this->General_model->get_category(),
			'jurusan' => $this->General_model->get_jurusan(),
			'address' => $this->Admin_model->get_address('11')[0]
		);
		
		// VIEW ------------------------------
		$this->load->view('template/header', $data);
		$this->load->view('home/left', $data);
		$this->load->view('home/right', $data);
		$this->load->view('template/footer', $data);
	}
	public function comment()
	{
		$data = array(
			'comment_parent' => 0,
			'blog_id' => $this->input->post('blog_id'),
			'comment_name' => $this->input->post('author'),
			'comment_email' => $this->input->post('email'),
			'comment_website' => $this->input->post('website'),
			'comment_content' => $this->input->post('comment'),
			'comment_date' => date('F d, Y - H:i'),
			'comment_status' => 1
		);
		$this->General_model->create_comment($data);
		$prev = $this->session->userdata('referred_from');
		redirect($prev);
	}
}
