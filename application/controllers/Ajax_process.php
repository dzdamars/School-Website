<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_process extends CI_Controller {

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
	public function index()
	{
	}
	public function view_user()
	{
		echo 
		'<div class="panel panel-clean">
			<div class="panel-heading">
				<span class="title elipsis">
					<strong>User Information</strong> <!-- panel title -->
				</span>
				<ul class="options pull-right list-inline">
					<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
				</ul>
			</div>

			
			<!-- panel content -->
			<div class="panel-body">
				'.$this->session->flashdata("user_data").'
			</div>
		</div>';
	}
	public function insert_user()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$status_username = '';
			$status_email = '';

			if ($this->uri->segment(3) == 'cek_username') {		
				$data = array(
						'user' => $this->Admin_model->get_user_by_username($_POST['username']),
					);
				if (!empty($data['user'])) {
					echo json_encode(array('status' => 500));
					$status_username = 500;
				}else{
					if (strlen($_POST['username']) <= 3) {
						echo json_encode(array('status' => 500));
						$status_username = 500;	
					}else{
						echo json_encode(array('status' => 200));
						$status_username = 200;
					}
				}
			}
			if ($this->uri->segment(3) == 'cek_email') {		
				$data = array(
						'user' => $this->Admin_model->get_user_by_email($_POST['email']),
					);
				if (!empty($data['user'])) {
					echo json_encode(array('status' => 500));
					$status_email = 500;
				}else{
					if (strlen($_POST['email']) <= 3) {
						echo json_encode(array('status' => 500));
						$status_email = 500;	
					}else if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
						echo json_encode(array('status' => 500));
					}else{
						echo json_encode(array('status' => 200));
						$status_email = 200;
					}
				}
			}

			if ($this->uri->segment(3) == '') {
				$data = array(
						'user_full_name' => ucwords($_POST['name']),
						'username' => $_POST['username'],
						'email' => $_POST['email'],
						'role_id' => $_POST['role'],
						'password' => randomPass(),	
						'user_avatar' => 'assets/images/avatar/noava.jpg',
					);
				$this->Admin_model->insert_user($data);

				$html = '
				<div class="alert alert-info"><span>Registered user information</span><br><small>Please write down! This panel will be hidden after page refresh</small></div>
				<h4 style="color:#666;">Name : <span style="color:red !important;">'.$data["user_full_name"].'</span></h4><hr>
				<h4 style="color:#666;">Username : <span style="color:red !important;">'.$data["username"].'</span></h4><hr>
				<h4 style="color:#666;">Email : <span style="color:red !important;">'.$data["email"].'</span></h4><hr>
				<h4 style="color:#666;">Password : <span style="color:red !important;">'.$data["password"].'</span></h4>
				';

				$this->session->set_flashdata('user_data', $html);
			}
		}else{
			redirect('login');
		}
	}
	public function get_role_all()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$data = array(
					'role' => $this->Admin_model->get_role(),
				);
			
			echo json_encode($data);
		}else{
			redirect('login');
		}
	}
	public function get_role($id = null)
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$data = array(
					'role' => $this->Admin_model->get_role_by_id($id)[0],
					'menu' => $this->Admin_model->get_menu_all(),
				);
			
			$this->load->view('admin/crud/edit_permission', $data);
		}else{
			redirect('login');
		}
	}
	public function new_role()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$data = array(
					'menu' => $this->Admin_model->get_menu_all(),
				);
			
			$this->load->view('admin/crud/form_role', $data);
		}else{
			redirect('login');
		}
	}
	public function change_role($id)
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$data = array(
					'user_id' => $id,
					'role_id' => $_POST['role']
				);
			$this->Admin_model->update_user($data);
		}else{
			redirect('login');
		}	
	}
	public function list_agenda()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$condition = array();

			// calc offset number
			$page = $this->input->post('page');
			if (!$page) {
				$offset = 0;
			}else{
				$offset = $page;
			}

			// search condition
			$keyword = $this->input->post('keyword');
			$sort = $this->input->post('sort');
			if (!empty($keyword)) {
				$condition['search']['keyword'] = $keyword;
			}
			if (!empty($sort)) {
				$condition['search']['sort'] = $sort;
			}

			// total rows count
			$totalRec = count($this->Admin_model->get_agenda_datatable($condition));

			// pagination config
			$config['target']      = '#agendalist';
	        $config['base_url']    = base_url().'Ajax_process/list_agenda';
	        $config['total_rows']  = $totalRec;
	        $config['per_page']    = $this->perPageAgenda;
	        $config['link_func']   = 'searchFilterAgenda';
	        $this->ajax_pagination->initialize($config);

	        // limit & offset
	        $condition['offset'] = $offset;
	        $condition['limit'] = $this->perPageAgenda;

	        // query
	        $data =  array(
	        		'agenda' => $this->Admin_model->get_agenda_datatable($condition),
	        	);

	        // view
			$this->load->view('admin/kurikulum/section_page', $data, FALSE);
		}else{
			redirect('login');
		}
	}
	public function list_lowongan()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$condition = array();

			// calc offset number
			$page = $this->input->post('page');
			if (!$page) {
				$offset = 0;
			}else{
				$offset = $page;
			}

			// search condition
			$keyword = $this->input->post('keyword');
			$sort = $this->input->post('sort');
			if (!empty($keyword)) {
				$condition['search']['keyword'] = $keyword;
			}
			if (!empty($sort)) {
				$condition['search']['sort'] = $sort;
			}

			// total rows count
			$totalRec = count($this->Admin_model->get_lowongan_datatable($condition));

			// pagination config
			$config['target']      = '#lokerlist';
	        $config['base_url']    = base_url().'Ajax_process/list_lowongan/';
	        $config['total_rows']  = $totalRec;
	        $config['per_page']    = $this->perPage;
	        $config['link_func']   = 'searchFilterLoker';
	        $this->ajax_pagination->initialize($config);

	        // limit & offset
	        $condition['offset'] = $offset;
	        $condition['limit'] = $this->perPage;

	        // query
	        $data =  array(
	        		'loker' => $this->Admin_model->get_lowongan_datatable($condition),
	        	);

	        // view
			$this->load->view('admin/hubin/section_page', $data, FALSE);
		}else{
			redirect('login');
		}
	}
	public function list_kesiswaan()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$condition = array();

			// calc offset number
			$page = $this->input->post('page');
			if (!$page) {
				$offset = 0;
			}else{
				$offset = $page;
			}

			// search condition
			$keyword = $this->input->post('keyword');
			$sort = $this->input->post('sort');
			if (!empty($keyword)) {
				$condition['search']['keyword'] = $keyword;
			}
			if (!empty($sort)) {
				$condition['search']['sort'] = $sort;
			}

			// total rows count
			$totalRec = count($this->Admin_model->get_kesiswaan_datatable($condition));

			// pagination config
			$config['target']      = '#postList';
	        $config['base_url']    = base_url().'Ajax_process/list_kesiswaan/';
	        $config['total_rows']  = $totalRec;
	        $config['per_page']    = $this->perPage;
	        $config['link_func']   = 'searchFilter';
	        $this->ajax_pagination->initialize($config);

	        // limit & offset
	        $condition['offset'] = $offset;
	        $condition['limit'] = $this->perPage;

	        // query
	        $data =  array(
	        		'kesiswaan' => $this->Admin_model->get_kesiswaan_datatable($condition),
	        	);

	        // view
			$this->load->view('admin/kesiswaan/section_page', $data, FALSE);
		}else{
			redirect('login');
		}
	}
	public function list_berita()
	{
		$logged = $this->session->userdata('isLoggedIn');
		if ($logged) {
			$list = $this->Admin_model->get_berita_datatable();
			$data = array();
			$no = $_POST['start'];

			foreach ($list as $l) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = "<img class='img-responsive' src='".((substr($l->blog_img, 0, 6) != 'assets') ? $l->blog_img : base_url($l->blog_img))."' width='200px' />";
				$row[] = $l->blog_judul;
				$row[] = strip_tags(substr($l->blog_content, 0, 120)).'...';
				$row[] = $l->date;
				$row[] = $l->category_name;
				$row[] = "<a href='javascript:modal_edit(".$l->blog_id.")' id='btn_edit' class='btn btn-default btn-xs'><i class='fa fa-edit'></i> Edit</a>";
				$row[] = "<a id='delete_berita' href='".site_url('admin/delete/berita/'.$l->blog_id)."' class='btn btn-default btn-xs'><i class='fa fa-trash'></i> Delete</a>";
				// $row[] = $l->date;

				$data[] = $row;
			}
			$output = array(
					"draw" => $_POST['draw'],
					"recordsTotal" => $this->Admin_model->count_berita_datatable(),
					"recordsFiltered" => $this->Admin_model->count_berita_datatable_filtered(),
					"data" => $data,
				);

			echo json_encode($output);
		}else{
			redirect('login');
		}
	}
	
}
