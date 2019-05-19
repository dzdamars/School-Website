<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Bangkok');
		$this->perPage = 10;
		$this->perPageAgenda = 4;
	}
	function timeline($user, $type, $action, $content = null, $detail = null, $uri = null)
	{
		if ($type == 'banner' || $type == 'banner page') {
			$icon = "fa fa-image";
		}else if ($type == 'berita') {
			$icon = "fa fa-newspaper-o";
		}else if ($type == 'kesiswaan') {
			$icon = "fa fa-pencil";
		}else if ($type == 'lowongan pekerjaan') {
			$icon = "fa fa-briefcase";
		}else if ($type == 'agenda') {
			$icon = "fa fa-calendar";
		}else if ($type == 'alamat') {
			$icon = "fa fa-map-marker";
		}else if ($type == 'berita') {
			$icon = "fa fa-newspaper-o";
		}else if ($type == 'jurusan') {
			$icon = "fa fa-folder";
		}else if ($type == 'profil') {
			$icon = "fa fa-info";
		}else if ($type == 'category') {
			$icon = "fa fa-tag";
		}else if ($type == 'KKM' || $type == 'RPP' || $type == 'kalender pendidikan') {
			$icon = "fa fa-tasks";
		}
		// ICON

		$data = array(
			'timeline_user' => $user,
			'timeline_created' => date('Y-m-d H:i:s'),
			'timeline_content' => $content,
			'timeline_detail' => $detail,
			'timeline_content_uri' => $uri,
			'timeline_action' => $action,
			'timeline_type' => ucwords($type),
			'timeline_date' => date('F d, Y'),
			'timeline_time' => date('H:i'),
			'timeline_icon' => $icon
		);
		$this->Admin_model->insert_timeline($data);
	}
	
	// ---------------------------------

	public function index()
	{		
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$page = explode(',', $logged['page']);
			// echo"<pre>";
			// print_r($this->Admin_model->get_timeline());
			// echo"</pre>";die;
			$data = array(
				'menu' => $this->Admin_model->get_menu($page),						
				'timeline' => $this->Admin_model->get_timeline(),
				'logged' => $logged
			);
			// VIEW ------------------------------
			$this->load->view('admin/template/aside', $data);
			$this->load->view('admin/template/header', array($data, $logged));
			$this->load->view('admin/template/section', $data);
			$this->load->view('admin/template/footer', $data);
		}else{
			redirect('login');
		}
	}

	// MENU
	public function beranda()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$page = explode(',', $logged['page']);
			
			if (in_array('1', $page)) {
				$data = array(
					'logged' => $logged,
					'menu' => $this->Admin_model->get_menu($page),
					'banner' => $this->General_model->get_banner(),

				);
				// VIEW ------------------------------
				$this->load->view('admin/template/aside', $data);
				$this->load->view('admin/template/header', array($data, $logged));
				$this->load->view('admin/beranda/section', $data);
				$this->load->view('admin/template/footer', $data);
			}else{
				$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access Beranda Page.</div>");
				redirect('admin');
			}
		}else{
			redirect('login');
		}
	}
	public function profil()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$page = explode(',', $logged['page']);
			
			if (in_array('2', $page)) {
				$data = array(
					'logged' => $logged,
					'jurusan' => $this->General_model->get_jurusan(),
					'menu' => $this->Admin_model->get_menu($page),
					'profil' => $this->Admin_model->get_content(array('1', '2', '3'))
				);
				// VIEW ------------------------------
				$this->load->view('admin/template/aside', $data);
				$this->load->view('admin/template/header', array($data, $logged));
				$this->load->view('admin/profil/section', $data);
				$this->load->view('admin/template/footer', $data);	
			}else{
				$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access Profil Page. Please contact Administrator</div>");
				redirect('admin');
			}
		}else{
			redirect('login');
		}
	}
	public function berita()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$page = explode(',', $logged['page']);
			
			if (in_array('3', $page)) {
				$data = array(
					'logged' => $logged,
					'menu' => $this->Admin_model->get_menu($page),
					'berita' => $this->General_model->get_blog(),
					'category' => $this->General_model->get_category(),
				);
				// VIEW ------------------------------
				$this->load->view('admin/template/aside', $data);
				$this->load->view('admin/template/header', array($data, $logged));
				// $this->load->view('admin/berita/section', $data);
				$this->load->view('admin/berita/sample', $data);
				$this->load->view('admin/template/footer', $data);	
			}else{
				$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access Berita Page. Please contact Administrator</div>");
				redirect('admin');
			}
		}else{
			redirect('login');
		}
	}
	public function kesiswaan()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$page = explode(',', $logged['page']);
			
			if (in_array('4', $page)) {
				//total rows count
		        $totalRec = count($this->Admin_model->get_kesiswaan_datatable());
		        
		        //pagination configuration
		        $config['target']      = '#postList';
		        $config['base_url']    = base_url().'Ajax_process/list_kesiswaan';
		        $config['total_rows']  = $totalRec;
		        $config['per_page']    = $this->perPage;
		        $config['link_func']   = 'searchFilter';
		        $this->ajax_pagination->initialize($config);

				$data = array(
					'logged' => $logged,
					'menu' => $this->Admin_model->get_menu($page),
					'prestasi' => $this->Admin_model->get_prestasi(),
					'kesiswaan' => $this->Admin_model->get_kesiswaan_datatable(array('limit' => $this->perPage)),
					// 'kesiswaan' => $this->Admin_model->get_kesiswaan(),
				);
				// VIEW ------------------------------
				$this->load->view('admin/template/aside', $data);
				$this->load->view('admin/template/header', array($data, $logged));
				$this->load->view('admin/kesiswaan/section', $data);
				$this->load->view('admin/template/footer', $data);	
			}else{
				$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access Kesiswaan Page. Please contact Administrator</div>");
				redirect('admin');
			}
		}else{
			redirect('login');
		}
	}
	public function hubin()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$page = explode(',', $logged['page']);
			
			if (in_array('5', $page)) {
				//total rows count
		        $totalRec = count($this->Admin_model->get_lowongan_datatable());
		        
		        //pagination configuration
		        $config['target']      = '#lokerlist';
		        $config['base_url']    = base_url().'Ajax_process/list_lowongan';
		        $config['total_rows']  = $totalRec;
		        $config['per_page']    = $this->perPage;
		        $config['link_func']   = 'searchFilterLoker';
		        $this->ajax_pagination->initialize($config);

				$data = array(
					'logged' => $logged,
					'menu' => $this->Admin_model->get_menu($page),
					'loker' => $this->Admin_model->get_lowongan_datatable(array('limit' => $this->perPage)),
					// 'jurusan' => $this->General_model->get_jurusan()
				);
				// VIEW ------------------------------
				$this->load->view('admin/template/aside', $data);
				$this->load->view('admin/template/header', array($data, $logged));
				$this->load->view('admin/hubin/section', $data);
				$this->load->view('admin/template/footer', $data);	
			}else{
				$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access Hubin Page. Please contact Administrator</div>");
				redirect('admin');
			}
		}else{
			redirect('login');
		}
	}
	public function kurikulum()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$page = explode(',', $logged['page']);
			
			if (in_array('6', $page)) {
				//total rows count
		        $totalRec = count($this->Admin_model->get_agenda_datatable());
		        
		        //pagination configuration
		        $config['target']      = '#agendalist';
		        $config['base_url']    = base_url().'Ajax_process/list_agenda';
		        $config['total_rows']  = $totalRec;
		        $config['per_page']    = $this->perPageAgenda;
		        $config['link_func']   = 'searchFilterAgenda';
		        $this->ajax_pagination->initialize($config);

				$data = array(
					'logged' => $logged,
					'menu' => $this->Admin_model->get_menu($page),
					'agenda' => $this->Admin_model->get_agenda_datatable(array('limit' => $this->perPageAgenda)),
					'kurikulum' => $this->Admin_model->get_content(array('4', '5', '6'))
				);
				// VIEW ------------------------------
				$this->load->view('admin/template/aside', $data);
				$this->load->view('admin/template/header', array($data, $logged));
				$this->load->view('admin/kurikulum/section', $data);
				$this->load->view('admin/template/footer', $data);	
			}else{
				$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access Kurikulum Page. Please contact Administrator</div>");
				redirect('admin');
			}
		}else{
			redirect('login');
		}
	}
	public function setting()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$page = explode(',', $logged['page']);
			
			if (in_array('7', $page)) {
				$data = array(
					'logged' => $logged,
					'menu' => $this->Admin_model->get_menu($page),
					'banner_page' => $this->Admin_model->get_content(array('7', '8', '9', '10')),
					'address' => $this->Admin_model->get_address('11')[0]
				);
				// VIEW ------------------------------
				$this->load->view('admin/template/aside', $data);
				$this->load->view('admin/template/header', array($data, $logged));
				$this->load->view('admin/template/setting', $data);
				$this->load->view('admin/template/footer', $data);	
			}else{
				$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access Settings Page. Please contact Administrator</div>");
				redirect('admin');
			}
		}else{
			redirect('login');
		}
	}
	public function axdxin()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			if ($logged['role_id'] == 1) {
				$page = explode(',', $logged['page']);
				$data = array(
					'menu' => $this->Admin_model->get_menu($page),
					'logged' => $logged,
					'role' => $this->Admin_model->get_role_all(),
					'user' => $this->Admin_model->get_user_all()
				);
				// VIEW ------------------------------
				$this->load->view('admin/template/aside', $data);
				$this->load->view('admin/template/header', array($data, $logged));
				$this->load->view('admin/template/admin_setting', $data);
				$this->load->view('admin/template/footer', $data);
			}else{
				$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access Admin Settings. Please contact Administrator</div>");
				redirect('admin');
			}
		}else{
			redirect('login');
		}
	}
	public function user()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$page = explode(',', $logged['page']);
			$data = array(
				'logged' => $logged,
				'menu' => $this->Admin_model->get_menu($page),
				'user' => $this->Admin_model->get_user($logged['id'])[0]
			);
			// VIEW ------------------------------
			$this->load->view('admin/template/aside', $data);
			$this->load->view('admin/template/header', array($data, $logged));
			$this->load->view('admin/template/user', $data);
			$this->load->view('admin/template/footer', $data);	
		}else{
			redirect('login');
		}
	}

	// CRUD VIEW
	public function create($type)
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$page = explode(',', $logged['page']);
			$data = array(
				'logged' => $logged,
				'menu' => $this->Admin_model->get_menu($page),
				'category' => $this->General_model->get_category(),
				'jurusan' => $this->General_model->get_jurusan(),
			);	
			// VIEW ------------------------------
			$this->load->view('admin/template/aside', $data);
			$this->load->view('admin/template/header', array($data, $logged));
			if ($type == 'banner') { // B A N N E R
				$page = explode(',', $logged['page']);
				if (in_array('1', $page)) {
					$this->load->view('admin/crud/form_banner', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			}else if ($type == 'berita') { // B E R I T A
				$page = explode(',', $logged['page']);
				if (in_array('3', $page)) {
					$this->load->view('admin/crud/form_berita', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			}else if($type == 'jurusan') {// J U R U S A N
				$this->load->view('admin/crud/form_jurusan', $data);				
			}else if($type == 'lowongan') {// L O W O N G A N
				$page = explode(',', $logged['page']);
				if (in_array('5', $page)) {
					$this->load->view('admin/crud/form_lowongan', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			}else if($type == 'agenda') {// A G E N D A
				$page = explode(',', $logged['page']);
				if (in_array('6', $page)) {
					$this->load->view('admin/crud/form_agenda', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			}else if($type == 'kesiswaan') {// K E S I S W A A N
				$page = explode(',', $logged['page']);
				if (in_array('4', $page)) {
					$this->load->view('admin/crud/form_kesiswaan', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			}
			$this->load->view('admin/template/footer', $data);	
		}else{
			redirect('login');
		}
	}
	public function edit($type, $id = null)
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$page = explode(',', $logged['page']);
			
			$data = array(
				'logged' => $logged,
				'menu' => $this->Admin_model->get_menu($page),
				'category' => $this->General_model->get_category(),
				'jurusan' => $this->General_model->get_jurusan(),
			);	
			// VIEW ------------------------------
			$this->load->view('admin/template/aside', $data);
			$this->load->view('admin/template/header', array($data, $logged));

			if ($type == 'banner') {
				$page = explode(',', $logged['page']);
				if (in_array('1', $page)) {
					$data['banner'] = $this->General_model->get_banner_by_id($id)[0];
					$this->load->view('admin/crud/edit_banner', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			
			}else if ($type == 'berita') {				
				$data = $this->General_model->get_blog_by_id($id)[0];
				echo json_encode($data);die;
				// $this->load->view('admin/crud/edit_berita', $data);
			
			}else if ($type == 'jurusan') {
				$data['jurusan'] = $this->General_model->get_jurusan_by_uri($id)[0];
				$this->load->view('admin/crud/edit_jurusan', $data);
			
			}else if ($type == 'visi' || $type == 'misi' || $type == 'sejarah') {
				$page = explode(',', $logged['page']);
				if (in_array('2', $page)) {
					$data['content'] = $this->Admin_model->get_content_by_uri($type)[0];
					$this->load->view('admin/crud/edit_profil', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			
			}else if ($type == 'kriteria-ketuntasan-minimum' || $type == 'rencana-pelaksanaan-pembelajaran' || $type == 'kalender-pendidikan') {
				$page = explode(',', $logged['page']);
				if (in_array('6', $page)) {
					$data['content'] = $this->Admin_model->get_content_by_uri($type)[0];
					$this->load->view('admin/crud/edit_kurikulum', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			
			}else if ($type == 'lowongan') {
				$page = explode(',', $logged['page']);
				if (in_array('5', $page)) {
					$data['loker'] = $this->Admin_model->get_lowongan_by_id($id)[0];
					$this->load->view('admin/crud/edit_lowongan', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			
			}else if ($type == 'kesiswaan') {
				$page = explode(',', $logged['page']);
				if (in_array('4', $page)) {
					$data['kesiswaan'] = $this->Admin_model->get_kesiswaan_by_id($id)[0];
					$this->load->view('admin/crud/edit_kesiswaan', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			
			}else if ($type == 'agenda') {
				$page = explode(',', $logged['page']);
				if (in_array('6', $page)) {
					$data['agenda'] = $this->General_model->get_agenda_by_id($id)[0];
					$this->load->view('admin/crud/edit_agenda', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			
			}else if ($type == 'banner_page') {
				$page = explode(',', $logged['page']);
				if (in_array('7', $page)) {
					$data['content'] = $this->Admin_model->get_content_by_id($id)[0];
					$this->load->view('admin/crud/edit_bp', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			
			
			}else if ($type == 'address') {
				$page = explode(',', $logged['page']);
				if (in_array('7', $page)) {
					$data['content'] = $this->Admin_model->get_address('11')[0];
					$this->load->view('admin/crud/edit_address', $data);
				}else{
					$this->session->set_flashdata('warn', "<div class='alert alert-warning'>Sorry... You don't have permission to access the Page. Please contact Administrator</div>");
					redirect('admin');
				}
			
			}else if ($type == 'user') {				
				$data['content'] = $this->Admin_model->get_user_by_id($id)[0];
				$this->load->view('admin/crud/edit_user', $data);
			}
			$this->load->view('admin/template/footer', $data);
		}else{
			redirect('login');
		}
	}

	// CRUD PROCESS
	public function insert($type)
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			
			if ($type == 'banner') { // ----- BANNER
				
				$config['upload_path'] = './assets/images/banner';
			    $config['allowed_types'] = 'gif|png|jpg';
			    $config['max_size']     = '3000';

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);

			    if (!$this->upload->do_upload('pic')) {
			    	
			    }else{
			    	$upload_data = $this->upload->data();
					$data = array(
							'banner_pic' => 'assets/images/banner/'.$upload_data['file_name'],
							'banner_judul' => $this->input->post('judul'),
							'banner_content' => $this->input->post('content'),
							'banner_status' => 1
						);
					$this->Admin_model->insert_banner($data);
					$this->timeline($logged['name'], 'banner', 'uploaded', 'New Banner');
					redirect('admin/beranda');
				}

			}else if ($type == 'berita') { // ----- BERITA
				$status = '';
				$config_slug = array(
					'table' => 'blog', 
					'id' => 'blog_id',
					'field' => 'blog_uri',
					'title' => 'blog_judul',
					'replacement' => 'dash',
				);
				$this->load->library('slug', $config_slug);

				$this->form_validation->set_rules('judul', 'Judul', 'required');
				$this->form_validation->set_rules('content', 'Content', 'required');
				$this->form_validation->set_rules('cat', 'Category', 'required');

			    if ($this->form_validation->run() == false) {
			    	$this->session->set_flashdata('error', '<div class="alert alert-danger">'.validation_errors().'</div>');
			    	$this->create('berita');
			    }else{
					$config['upload_path'] = './assets/images/berita';
				    $config['allowed_types'] = 'gif|png|jpg';
				    $config['max_size']     = '1000';

				    $this->load->library('upload', $config);
				    $this->upload->initialize($config);

				    if (!$this->upload->do_upload('pic')) {

				    }else{
				    	$upload_data = $this->upload->data();
					}

					if (!empty($upload_data)) {
						$val = 'assets/images/berita/'.$upload_data['file_name'];
					}else if(!empty($_POST['pic'])){
						$val = $_POST['pic'];
					}else{
						$val = 'assets/images/berita/default.jpg';
					}
					$data =  array(
						'blog_judul' => ucwords($this->input->post('judul')),
						'blog_content' => $this->input->post('content'),
						'blog_img' => $val,
						'date' => date('F d, Y'),
						'category_id' => $this->input->post('cat'),
						'blog_created' => date('Y-m-d H:i:s'),
						'blog_created_by' => $logged['name'],
						'blog_status' => 1,
					);
					$uri = $this->Admin_model->insert_blog($data);
					$logged = $this->session->userdata('isLoggedIn');

					$this->timeline($logged['name'], 'berita', 'posted', $data['blog_judul'].' in Berita', substr($data['blog_content'], 0, 120), 'berita/detail/'.$uri);
					redirect('admin/berita');
			    }

			}else if ($type == 'category') { // ----- CATEGORY
				$config_slug = array(
					'table' => 'category', 
					'id' => 'category_id',
					'field' => 'category_uri',
					'title' => 'category_name',
					'replacement' => 'dash',
				);
				$this->load->library('slug', $config_slug);

				$this->form_validation->set_rules('category_name', 'Category_name', 'required');

			    if ($this->form_validation->run() == false) {
			    	$this->session->set_flashdata('error', '<div class="alert alert-danger">'.validation_errors().'</div>');
			    	$this->create('berita');
			    }else{
					$data = array(
							'category_name' => $this->input->post('category_name'),
						);
					$this->Admin_model->insert_category($data);
					$logged = $this->session->userdata('isLoggedIn');

					$this->timeline($logged['name'], 'category', 'created', 'New category');
					redirect('admin/berita');
				}

			}else if ($type == 'kesiswaan') { // ----- KESISWAAN
				$config_slug = array(
					'table' => 'kesiswaan', 
					'id' => 'kesiswaan_id',
					'field' => 'kesiswaan_uri',
					'title' => 'kesiswaan_judul',
					'replacement' => 'dash',
				);
				$this->load->library('slug', $config_slug);

				$this->form_validation->set_rules('judul', 'Judul', 'required');
				$this->form_validation->set_rules('content', 'Content', 'required');

			    if ($this->form_validation->run() == false) {
			    	$this->session->set_flashdata('error', '<div class="alert alert-danger">'.validation_errors().'</div>');
			    	$this->create('kesiswaan');
			    }else{

					$config['upload_path'] = './assets/images/kesiswaan';
				    $config['allowed_types'] = 'gif|png|jpg';
				    $config['max_size']     = '1000';

				    $this->load->library('upload', $config);
				    $this->upload->initialize($config);

					if (!$this->upload->do_upload('pic')) {

				    }else{
				    	$upload_data = $this->upload->data();
					}

					if (!empty($upload_data)) {
						$val = 'assets/images/kesiswaan/'.$upload_data['file_name'];
					}else if(!empty($_POST['pic'])){
						$val = $_POST['pic'];
					}else{
						$val = '';
					}

					$data = array(
							'kesiswaan_judul' => ucwords($this->input->post('judul')),
							'kesiswaan_content' => $this->input->post('content'),
							'kesiswaan_img' => $val,
							'kesiswaan_date' => date('F d, Y'),
							'created' => date('Y-m-d H:i:s'),
						);

					$uri = $this->Admin_model->insert_kesiswaan($data);
					$logged = $this->session->userdata('isLoggedIn');

					$this->timeline($logged['name'], 'kesiswaan', 'Posted', $data['kesiswaan_judul'], substr($data['kesiswaan_content'], 0, 120), 'kesiswaan/detail/'.$uri);
					redirect('admin/kesiswaan');
				}

			}else if ($type == 'agenda') { // ----- AGENDA
				$config_slug = array(
					'table' => 'agenda', 
					'id' => 'agenda_id',
					'field' => 'agenda_uri',
					'title' => 'agenda_judul',
					'replacement' => 'dash',
				);
				$this->load->library('slug', $config_slug);

				$this->form_validation->set_rules('judul', 'Judul Agenda', 'required');
				$this->form_validation->set_rules('deskripsi', 'Deskripsi Agenda', 'required');
				$this->form_validation->set_rules('date', 'Tanggal Pelaksanaan Agenda', 'required');

			    if ($this->form_validation->run() == false) {
			    	$this->session->set_flashdata('error', '<div class="alert alert-danger">'.validation_errors().'</div>');
			    	$this->create('agenda');
			    }else{
					$data = array(
							'agenda_judul' => $this->input->post('judul'),
							'agenda_date' => $this->input->post('date'),
							'agenda_content' => $this->input->post('deskripsi'),
						);
					$uri = $this->Admin_model->insert_agenda($data);
					$logged = $this->session->userdata('isLoggedIn');

					$this->timeline($logged['name'], 'agenda', 'Created', $data['agenda_judul'].' in Agenda', substr($data['agenda_content'], 0, 120), 'kurikulum/agenda/'.$uri);
					redirect('admin/kurikulum');
				}

			}else if ($type == 'jurusan') { // ----- JURUSAN
				$config_slug = array(
					'table' => 'jurusan', 
					'id' => 'jurusan_id',
					'field' => 'jurusan_uri',
					'title' => 'jurusan_name',
					'replacement' => 'dash',
				);
				$this->load->library('slug', $config_slug);

				$this->form_validation->set_rules('nama_kompetensi', 'Nama Kompetensi', 'required');
				$this->form_validation->set_rules('nick_name', 'Akronim Kompetensi', 'required');

				if ($this->form_validation->run() == false) {
					$this->session->set_flashdata('error', '<div class="alert alert-danger">'.validation_errors().'</div>');
			    	$this->create('jurusan');
				}else{
					$config['upload_path'] = './assets/images/jurusan';
				    $config['allowed_types'] = 'png|jpg';
				    $config['max_size']     = '2000';

				    $this->load->library('upload', $config);
				    $this->upload->initialize($config);

				    if (!$this->upload->do_upload('pic')) {
				    }else{
				    	$upload_data = $this->upload->data();
					}

					if (!empty($upload_data)) {
						$val = 'assets/images/jurusan/'.$upload_data['file_name'];
					}else{
						$val = 'assets/images/noimage.jpg';
					}
					$data =  array(
						'jurusan_name' => ucwords($this->input->post('nama_kompetensi')),
						'jurusan_nick_name' => strtoupper($this->input->post('nick_name')),
						'jurusan_desc' => $this->input->post('content'),
						'jurusan_logo' => $val
					);
					$this->Admin_model->insert_jurusan($data);
					$logged = $this->session->userdata('isLoggedIn');

					$this->timeline($logged['name'], 'jurusan', 'added', $data['jurusan_name'].' as new jurusan');
					redirect('admin/profil');
					
				}

			
			}else if ($type == 'lowongan') { // ----- LOWONGAN
				$config_slug = array(
					'table' => 'lowongan', 
					'id' => 'lowongan_id',
					'field' => 'lowongan_uri',
					'title' => 'lowongan_judul',
					'replacement' => 'dash',
				);
				$this->load->library('slug', $config_slug);

				$this->form_validation->set_rules('judul', 'Judul Lowongan', 'required');
				$this->form_validation->set_rules('instansi', 'Nama Instansi', 'required');
				$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

				if ($this->form_validation->run() == false) {
					$this->session->set_flashdata('error', '<div class="alert alert-danger">'.validation_errors().'</div>');
			    	$this->create('lowongan');
				}else{

					$config['upload_path'] = './assets/file/lowongan';
				    $config['allowed_types'] = 'pdf';
				    $config['max_size']     = '10000';

				    $this->load->library('upload', $config);
				    $this->upload->initialize($config);

				    if (!$this->upload->do_upload('file')) {

				    }else{
				    	$upload_data = $this->upload->data();
					}
					$data =  array(
						'lowongan_judul' => ucwords($this->input->post('judul')),
						'lowongan_deskripsi' => $this->input->post('deskripsi'),
						'lowongan_instansi' => ucwords($this->input->post('instansi')),
						'lowongan_date' => date('F d, Y'),				
						'lowongan_created' => date('Y-m-d H:i:s'),
						'lowongan_file' => ((!$upload_data) ? '' : 'assets/file/lowongan/'.$upload_data['file_name']),
						'jurusan' => implode(', ', $this->input->post('jurusan')),
					);
					$uri = $this->Admin_model->insert_lowongan($data);
					$logged = $this->session->userdata('isLoggedIn');

					$this->timeline($logged['name'], 'lowongan pekerjaan', 'posted', $data['lowongan_judul'].' in lowongan pekerjaan', substr($data['lowongan_deskripsi'], 0, 120), 'hubin/lowongan/'.$uri);
					redirect('admin/hubin');
				}
			}else if ($type == 'role') { // ----- ROLE
				$data =  array(
					'role_name' => ucwords($this->input->post('role')),
					'role_page' => 0
				);
				$this->Admin_model->insert_role($data);
				redirect('admin/axdxin');				
			}
		}else{
			redirect('login');
		}
	    
	}
	public function update($type)
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			if ($type == 'banner') { //-------------- B A N N E R
				$config['upload_path'] = './assets/images/banner';
			    $config['allowed_types'] = 'gif|png|jpg';
			    $config['max_size']     = '3000';

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);

			    if (!$this->upload->do_upload('pic')) {
			    }else{
				    $upload_data = $this->upload->data();	
				}
				$data = array(
						'banner_id' => $this->input->post('id'),				
						'banner_judul' => $this->input->post('judul'),
						'banner_content' => $this->input->post('content'),
				);
				if (!empty($upload_data)) {
					$val = 'assets/images/banner/'.$upload_data['file_name'];
					$data['banner_pic'] = $val;
				}
				$this->Admin_model->update_banner($data);
				$this->timeline($logged['name'], 'banner', 'edited', 'Banner');

				redirect('admin/beranda');

			}else if ($type == 'jurusan') { //-------------- J U R U S A N
				$config_slug = array(
					'table' => 'jurusan', 
					'id' => 'jurusan_id',
					'field' => 'jurusan_uri',
					'title' => 'jurusan_name',
					'replacement' => 'dash',
				);
				$this->load->library('slug', $config_slug);

			    $config['upload_path'] = './assets/images/jurusan';
			    $config['allowed_types'] = 'png|jpg';
			    $config['max_size']     = '1000';

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);

			    if (!$this->upload->do_upload('pic')) {
			    }else{
				    $upload_data = $this->upload->data();	
				}

				$data =  array(
					'jurusan_id' => $this->input->post('id'),
					'jurusan_name' => ucwords($this->input->post('nama_kompetensi')),
					'jurusan_nick_name' => strtoupper($this->input->post('nick_name')),
					'jurusan_desc' => $this->input->post('content'),
					);
				if (!empty($upload_data)) {
					$val = 'assets/images/jurusan/'.$upload_data['file_name'];
					$data['jurusan_logo'] = $val;
				}
				$this->Admin_model->update_jurusan($data);
				$this->timeline($logged['name'], 'jurusan', 'edited', $data['jurusan_name']);
				redirect('admin');

			}else if ($type == 'category') { //-------------- C A T E G O R Y
				$config_slug = array(
					'table' => 'category', 
					'id' => 'category_id',
					'field' => 'category_uri',
					'title' => 'category_name',
					'replacement' => 'dash',
				);
				$this->load->library('slug', $config_slug);

				$data = array(
						'category_name' => $this->input->post('value')
					);
				$this->Admin_model->update_category($data);
				$this->timeline($logged['name'], 'category', 'edited', $data['category_name']);
				redirect('admin/berita');

			}else if ($type == 'address') { //-------------- A D D R E S S	
				$pos = $this->input->post('kodepos');
				$alamat = $this->input->post('alamat');
				$prov = $this->input->post('provinsi');
				$phone = $this->input->post('telepon');
				$email = $this->input->post('email');

				$text = 'PO Box '.$pos.'|'.$alamat.'|'.$prov.', Indonesia|Phone: '.$phone.'|'.$email.'';
				$data = array(
						'content_id' => '11',
						'content' => $text
					);
				$this->Admin_model->update_address($data);
				$this->timeline($logged['name'], 'alamat', 'edited', 'Address & Contact');
				redirect('admin/setting');
				
			}else if ($type == 'agenda') { //-------------- A G E N D A
				$config_slug = array(
					'table' => 'agenda', 
					'id' => 'agenda_id',
					'field' => 'agenda_uri',
					'title' => 'agenda_judul',
					'replacement' => 'dash',
				);
				$this->load->library('slug', $config_slug);

				$data = array(
						'agenda_id' => $this->input->post('id'),
						'agenda_judul' => $this->input->post('judul'),
						'agenda_content' => $this->input->post('deskripsi'),
						'agenda_date' => $this->input->post('date'),
					);
				$uri = $this->Admin_model->update_agenda($data);

				$this->timeline($logged['name'], 'agenda', 'edited', $data['agenda_judul'].' in Agenda', substr($data['agenda_content'], 0, 120), 'kurikulum/agenda/'.$uri);
				redirect('admin/kurikulum');

			}else if ($type == 'visi' || $type == 'sejarah' || $type == 'misi' || $type == 'kriteria-ketuntasan-minimum' || $type == 'rencana-pelaksanaan-pembelajaran' || $type == 'kalender-pendidikan' || $type == 'banner_page') { //-------------- P R O F I L   &   K U R I K U L U M

				$config['upload_path'] = './assets/images/banner/page';
			    $config['allowed_types'] = 'gif|png|jpg';
			    $config['max_size']     = '3000';

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);

			    if (!$this->upload->do_upload('pic')) {
			    }else{
				    $upload_data = $this->upload->data();	
				}

				$data = array(
						'content_id' => $this->input->post('id'),
						// 'content_judul' => $this->input->post('judul'),
						'content' => $this->input->post('content'),						
					);

				if (!empty($upload_data)) {
					$val = 'assets/images/banner/page/'.$upload_data['file_name'];
					$data['content_img'] = $val;
				}
				$this->Admin_model->update_content($data);
				redirect('admin/profil');

			}else if ($type == 'berita') { //-------------- B E R I T A
				$config_slug = array(
					'table' => 'blog', 
					'id' => 'blog_id',
					'field' => 'blog_uri',
					'title' => 'blog_judul',
					'replacement' => 'dash',
				);
				$this->load->library('slug', $config_slug);

				$config['upload_path'] = './assets/images/berita';
			    $config['allowed_types'] = 'gif|png|jpg';
			    $config['max_size']     = '1000';

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);

			    if (!$this->upload->do_upload('pic')) {
			    }else{
				    $upload_data = $this->upload->data();	
				}

				$data =  array(
						'blog_id' => $this->input->post('id'),
						'blog_judul' => $this->input->post('judul'),
						'blog_content' => $this->input->post('content'),
						'category_id' => $this->input->post('cat'),
						'blog_modified' => date('Y-m-d H:i:s'),
					);
				if (!empty($upload_data)) {
					$val = 'assets/images/berita/'.$upload_data['file_name'];
					$data['blog_img'] = $val;
				}
				$uri = $this->Admin_model->update_blog($data);
				$this->timeline($logged['name'], 'berita', 'edited', $data['blog_judul'].' in Berita', substr($data['blog_content'], 0, 120), 'berita/detail/'.$uri);

				redirect('admin/berita');
			
			}else if ($type == 'lowongan') { // ----- LOWONGAN
				$config_slug = array(
					'table' => 'lowongan', 
					'id' => 'lowongan_id',
					'field' => 'lowongan_uri',
					'title' => 'lowongan_judul',
					'replacement' => 'dash',
				);
				$this->load->library('slug', $config_slug);

				$config['upload_path'] = './assets/file/lowongan';
			    $config['allowed_types'] = 'pdf';
			    $config['max_size']     = '10000';

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);

			    if (!$this->upload->do_upload('file')) {
			    }else{
			    	$upload_data = $this->upload->data();
				}

				$data =  array(
					'lowongan_id' => $this->input->post('id'),
					'lowongan_judul' => ucwords($this->input->post('judul')),
					'lowongan_deskripsi' => $this->input->post('deskripsi'),
					'lowongan_instansi' => ucwords($this->input->post('instansi')),
					'lowongan_date' => date('F d, Y'),
					// 'lowongan_file' => $upload_data ? 'assets/file/lowongan/'.$upload_data['file_name'] : '',
					'jurusan' => implode(', ', $this->input->post('jurusan')),
				);
				$uri = $this->Admin_model->update_lowongan($data);
				$this->timeline($logged['name'], 'lowongan pekerjaan', 'edited', $data['lowongan_judul'].' in lowongan pekerjaan', substr($data['lowongan_deskripsi'], 0, 120), 'hubin/lowongan/'.$uri);

				redirect('admin/hubin');

			}else if ($type == 'user') { //-------------- U S E R
				$config['upload_path'] = './assets/images/avatar';
			    $config['allowed_types'] = 'gif|png|jpg';
			    $config['max_size']     = '1000';

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);

				if (!$this->upload->do_upload('pic')) {

			    }else{
			    	$upload_data = $this->upload->data();
				}


				$data = array(
						'user_id' => $this->input->post('id'),
						'user_full_name' => ucwords($this->input->post('name')),
						'email' => $this->input->post('email'),					
					);
				if (!empty($_POST['password']) || $_POST['password'] != null || strlen($_POST['password']) > 3) {
					$data['password'] = $this->bcrypt->hash_password($this->input->post('password'));					
				}
				if (!empty($upload_data)) {
					$val = 'assets/images/avatar/'.$upload_data['file_name'];
					$data['user_avatar'] = $val;
				}

				$this->Admin_model->update_user($data);
				// redirect('admin/user');
				redirect('login/logout');
			
			}else if ($type == 'kesiswaan') { // ----- KESISWAAN
				$config_slug = array(
					'table' => 'kesiswaan', 
					'id' => 'kesiswaan_id',
					'field' => 'kesiswaan_uri',
					'title' => 'kesiswaan_judul',
					'replacement' => 'dash',
				);
				$this->load->library('slug', $config_slug);

				$config['upload_path'] = './assets/images/kesiswaan';
			    $config['allowed_types'] = 'gif|png|jpg|pdf|doc';
			    $config['max_size']     = '1000';

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);

				if (!$this->upload->do_upload('pic')) {

			    }else{
			    	$upload_data = $this->upload->data();
				}


				$data = array(
						'kesiswaan_id' => $this->input->post('id'),
						'kesiswaan_judul' => ucwords($this->input->post('judul')),
						'kesiswaan_content' => $this->input->post('content'),
				);

				if (!empty($upload_data)) {
					$val = 'assets/images/kesiswaan/'.$upload_data['file_name'];
					$data['kesiswaan_img'] = $val;
				}
				$uri = $this->Admin_model->update_kesiswaan($data);
				$this->timeline($logged['name'], 'kesiswaan', 'edited', $data['kesiswaan_judul'], substr($data['kesiswaan_content'], 0, 120), 'kesiswaan/detail/'.$uri);

				redirect('admin/kesiswaan');
			
			}else if ($type == 'permission') {
				$data = array(
						'role_id' => $this->input->post('id'),
						'role_name' => $this->input->post('role'),
						'role_page' => implode(',', $this->input->post('page')),
					);
				$this->Admin_model->update_role($data);
			}

		}else{
			redirect('login');
		}
	}
	public function delete($type, $id)
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			if ($type == 'banner') {
				$this->Admin_model->delete_banner($id);
				$this->timeline($logged['name'], 'banner', 'deleted', 'a banner');
			}elseif ($type == 'berita') {
				$blog = $this->General_model->get_blog_by_id($id)[0];
				$this->timeline($logged['name'], 'berita', 'deleted', $blog->blog_judul.' in berita');
				$this->Admin_model->delete_blog($id);
				redirect('admin/berita');
			}elseif ($type == 'category') {
				$category = $this->General_model->get_category_by_id($id)[0];
				$this->timeline($logged['name'], 'category', 'deleted', $category->category_name. ' in category');
				$this->Admin_model->delete_category($id);
				redirect('admin/berita');
			}elseif ($type == 'jurusan') {
				$jurusan = $this->General_model->get_jurusan_by_uri($id)[0];
				$this->timeline($logged['name'], 'jurusan', 'deleted', 'jurusan '.$jurusan->jurusan_name);
				$this->Admin_model->delete_jurusan($id);
			}elseif ($type == 'lowongan') {
				$loker = $this->Admin_model->get_lowongan_by_id($id)[0];
				$this->timeline($logged['name'], 'lowongan pekerjaan', 'deleted', $loker.' in Lowongan pekerjaan');
				$this->Admin_model->delete_lowongan($id);			
			}elseif ($type == 'kesiswaan') {
				$kesiswaan = $this->get_kesiswaan_by_id($id)[0];
				$this->timeline($logged['name'], 'category', 'deleted', 'kesiswaan post titled '.$kesiswaan->kesiswaan_judul);
				$this->Admin_model->delete_kesiswaan($id);			
			}elseif ($type == 'agenda') {
				$agenda = $this->get_agenda_by_id($id)[0];
				$this->timeline($logged['name'], 'agenda', 'deleted', 'an agenda named '.$agenda->agenda_judul);
				$this->Admin_model->delete_agenda($id);			
			}elseif ($type == 'role') {
				$this->Admin_model->delete_role($id);
				// redirect('admin/kesiswaan');
			}
		}else{
			redirect('login');
		}	
	}
}
