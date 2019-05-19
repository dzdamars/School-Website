<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function get_menu($id)
	{
		$this->db->from('menu');
		$this->db->where('menu_parent', 0);
		$this->db->where_in('menu_role_page', $id);
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->result() : FALSE;
	}
	public function get_menu_all()
	{
		$this->db->from('menu');
		$this->db->where('menu_parent', 0);
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->result() : FALSE;
	}
	public function get_role()
	{
		$this->db->from('user_role');
		$this->db->where('role_id >', 1);
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->result() : FALSE;
	}
	public function get_role_all()
	{
		$this->db->from('user_role');
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->result() : FALSE;
	}
	public function get_role_by_id($id)
	{
		$this->db->from('user_role');
		$this->db->where('role_id ', $id);
		$query = $this->db->get();

		return ($query->num_rows() == 1) ? $query->result() : FALSE;
	}
	public function insert_role($data)
	{
		$this->db->insert('user_role', $data);
	}
	public function update_role($data)
	{
		$this->db->where('role_id', $data['role_id']);
		$query = $this->db->update('user_role', $data);		
	}
	public function delete_role($id)
	{
		$this->db->delete('user_role', array('role_id' => $id));
	}
	public function get_user_all()
	{
		$this->db->from('user u');
		$this->db->join('user_role ur', 'u.role_id = ur.role_id');
		$query = $this->db->get();

		return $query->result();
	}
	public function get_user($id)
	{
		$this->db->from('user u');
		$this->db->join('user_role ur', 'u.role_id = ur.role_id');
		$this->db->where('user_id', $id);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_user_by_username($username)
	{
		$this->db->from('user u');
		$this->db->join('user_role ur', 'u.role_id = ur.role_id');
		$this->db->where('username', $username);		
		$query = $this->db->get()->result_array();

		return $query;
	}
	public function get_user_by_email($email)
	{
		$this->db->from('user u');
		$this->db->join('user_role ur', 'u.role_id = ur.role_id');
		$this->db->where('email', $email);		
		$query = $this->db->get()->result_array();

		return $query;
	}
	public function get_user_by_id($id)
	{
		$this->db->from('user u');
		$this->db->join('user_role ur', 'u.role_id = ur.role_id');
		$this->db->where('user_id', $id);
		$query = $this->db->get()->result();

		return $query;
	}
	public function insert_user($data)
	{
		$data['password'] = $this->bcrypt->hash_password($data['password']);
		$this->db->insert('user', $data);
	}
	public function update_user($data)
	{
		$this->db->where('user_id', $data['user_id']);
		$query = $this->db->update('user', $data);
	}
	public function get_timeline()
	{
		$this->db->from('timeline');
		$this->db->order_by('timeline_created', 'DESC');
		$query = $this->db->get()->result();

		return $query;
	}
	public function insert_timeline($data)
	{
		$query = $this->db->insert('timeline', $data);
	}
	public function insert_banner($data){		
		$query = $this->db->insert('banner', $data);

		return $query;
	} 
	public function update_banner($data)
	{
		$this->db->where('banner_id', $data['banner_id']);
		$this->db->update('banner', $data);

		return $query;
	}
	public function delete_banner($id)
	{
		$this->db->delete('banner', array('banner_id' => $id));
	}
	public function insert_blog($data)
	{
		$data['blog_uri'] = $this->slug->create_uri($data['blog_judul']);
		$query = $this->db->insert('blog', $data);

		return $data['blog_uri'];
	}
	public function update_blog($data)
	{
		$data['blog_uri'] = $this->slug->create_uri($data['blog_judul']);
		$this->db->where('blog_id', $data['blog_id']);
		$this->db->update('blog', $data);

		return $data['blog_uri'];
	}
	public function delete_blog($id)
	{
		$this->db->delete('blog', array('blog_id' => $id));
	}
	public function insert_jurusan($data)
	{
		$data['jurusan_uri'] = $this->slug->create_uri($data['jurusan_name']);
		$query = $this->db->insert('jurusan', $data);

		return $query;
	}
	public function update_jurusan($data)
	{
		$data['jurusan_uri'] = $this->slug->create_uri($data['jurusan_name']);
		$this->db->where('jurusan_id', $data['jurusan_id']);
		$this->db->update('jurusan', $data);

	}
	public function delete_jurusan($uri)
	{
		$this->db->delete('jurusan', array('jurusan_uri' => $uri));
	}
	public function insert_category($data)
	{
		$data['category_uri'] = $this->slug->create_uri($data['category_name']);
		$query = $this->db->insert('category', $data);

		return $query;
	}
	public function update_category($data)
	{
		$data['category_uri'] = $this->slug->create_uri($data['category_name']);
		$this->db->where('category_id', $this->input->post('pk'));
		$query = $this->db->update('category', $data);
	}
	public function delete_category($uri)
	{
		$this->db->delete('category', array('category_uri' => $uri));
	}
	public function get_address($id)
	{
		$this->db->from('content c');
		$this->db->where('c.content_id', $id);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_content($id)
	{
		$this->db->from('content c');
		$this->db->join('menu m', 'c.menu_id = m.menu_id');
		$this->db->where_in('c.content_id', $id);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_content_by_uri($uri)
	{
		$this->db->from('content c');
		$this->db->join('menu m', 'c.menu_id = m.menu_id');
		$this->db->where('m.menu_uri', $uri);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_content_by_id($id)
	{
		$this->db->from('content c');
		$this->db->join('menu m', 'c.menu_id = m.menu_id');
		$this->db->where('c.content_id', $id);
		$query = $this->db->get()->result();

		return $query;
	}
	public function update_content($data)
	{
		$this->db->where('content_id', $data['content_id']);
		$query = $this->db->update('content', $data);
	}
	public function get_lowongan()
	{
		$this->db->from('lowongan');
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_lowongan_by_id($id)
	{
		$this->db->from('lowongan');
		$this->db->where('lowongan_id', $id);
		$query = $this->db->get()->result();

		return $query;
	}
	public function insert_lowongan($data)
	{
		$data['lowongan_uri'] = $this->slug->create_uri($data['lowongan_judul']);
		$this->db->insert('lowongan', $data);

		return $data['lowongan_uri'];
	}
	public function update_lowongan($data)
	{
		$data['lowongan_uri'] = $this->slug->create_uri($data['lowongan_judul']);
		$this->db->where('lowongan_id', $data['lowongan_id']);
		$this->db->update('lowongan', $data);

		return $data['lowongan_uri'];
	}
	public function delete_lowongan($id)
	{
		$this->db->delete('lowongan', array('lowongan_id' => $id));
	}
	public function get_prestasi()
	{
		$this->db->from('prestasi');
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_kesiswaan()
	{
		$this->db->from('kesiswaan');
		$this->db->order_by('created', 'DESC');
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_kesiswaan_by_id($id)
	{
		$this->db->from('kesiswaan');
		$this->db->where('kesiswaan_id', $id);
		$query = $this->db->get()->result();

		return $query;	
	}
	public function insert_kesiswaan($data)
	{
		$data['kesiswaan_uri'] = $this->slug->create_uri($data['kesiswaan_judul']);
		$this->db->insert('kesiswaan', $data);

		return $data['kesiswaan_uri'];
	}
	public function update_kesiswaan($data)
	{
		$data['kesiswaan_uri'] = $this->slug->create_uri($data['kesiswaan_judul']);
		$this->db->where('kesiswaan_id', $data['kesiswaan_id']);
		$this->db->update('kesiswaan', $data);

		return $data['kesiswaan_uri'];
	}
	public function delete_kesiswaan($id)
	{
		$this->db->delete('kesiswaan', array('kesiswaan_id' => $id));
	}
	public function insert_agenda($data)
	{
		$data['agenda_uri'] = $this->slug->create_uri($data['agenda_judul']);
		$this->db->insert('agenda', $data);

		return $data['agenda_uri'];
	}
	public function update_agenda($data)
	{
		$data['agenda_uri'] = $this->slug->create_uri($data['agenda_judul']);
		$this->db->where('agenda_id', $data['agenda_id']);
		$this->db->update('agenda', $data);

		return $data['agenda_uri'];
	}
	public function delete_agenda($id)
	{
		$this->db->delete('agenda', array('agenda_id' => $id));
	}
	public function update_address($data)
	{
		$this->db->where('content_id', $data['content_id']);
		$this->db->update('content', $data);
	}

	// A J A X - P R O C E S S I N G
	// 
	// 
	// 
	// 
	// 
	// 
	// --------------------------------------------------
	public function get_lowongan_datatable($param = array())
	{
		$this->db->from('lowongan');
		// filter by keyword
		if (!empty($param['search']['keyword'])) {
			$this->db->like('lowongan_judul', $param['search']['keyword']);
			$this->db->or_like('lowongan_deskripsi', $param['search']['keyword']);
			$this->db->or_like('jurusan', $param['search']['keyword']);
		}
		// Sort data ASC DESC
		if (!empty($param['search']['sort'])) {
			$this->db->order_by('lowongan_created', $param['search']['sort']);
		}
		// Set start & limit
		if (array_key_exists('offset', $param) && array_key_exists('limit', $param)) {
			$this->db->limit($param['limit'], $param['offset']);
		}elseif(!array_key_exists('offset', $param) && array_key_exists('limit', $param)){
			$this->db->limit($param['limit']);
		}
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->result() : FALSE;
	}
	public function get_agenda_datatable($param = array())
	{
		$this->db->from('agenda');
		// filter by keyword
		if (!empty($param['search']['keyword'])) {
			$this->db->like('agenda_judul', $param['search']['keyword']);
			$this->db->or_like('agenda_content', $param['search']['keyword']);
		}
		// Sort data ASC DESC
		if (!empty($param['search']['sort'])) {
			$this->db->order_by('agenda_date', $param['search']['sort']);
		}else{
			$this->db->order_by('agenda_date', 'DESC');
		}
		// Set start & limit
		if (array_key_exists('offset', $param) && array_key_exists('limit', $param)) {
			$this->db->limit($param['limit'], $param['offset']);
		}elseif(!array_key_exists('offset', $param) && array_key_exists('limit', $param)){
			$this->db->limit($param['limit']);
		}
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->result() : FALSE;
	}
	public function get_kesiswaan_datatable($param = array())
	{
		$this->db->from('kesiswaan');
		// filter by keyword
		if (!empty($param['search']['keyword'])) {
			$this->db->like('kesiswaan_judul', $param['search']['keyword']);
			$this->db->or_like('kesiswaan_content', $param['search']['keyword']);
		}
		// Sort data ASC DESC
		if (!empty($param['search']['sort'])) {
			$this->db->order_by('created', $param['search']['sort']);
		}
		// Set start & limit
		if (array_key_exists('offset', $param) && array_key_exists('limit', $param)) {
			$this->db->limit($param['limit'], $param['offset']);
		}elseif(!array_key_exists('offset', $param) && array_key_exists('limit', $param)){
			$this->db->limit($param['limit']);
		}
		$query = $this->db->get();

		return ($query->num_rows() > 0) ? $query->result() : FALSE;
	}
	private function get_berita_datatable_query()
	{
		$column_order =  array(null, null, 'blog_judul', null, 'blog_created', 'c.category_id', null);
		$column_search = array('blog_judul', 'blog_content', 'date', 'category_name');
		$order = array('blog_created' => 'DESC');

		$this->db->from('blog b');
		$this->db->join('category c', 'b.category_id = c.category_id');

		$i = 0;

		foreach ($column_search  as $item) { //loop column
			if ($_POST['search']['value']) {
				if ($i===0) { //first loop
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				}else{
					$this->db->or_like($item, $_POST['search']['value']);
				}
				if(count($column_search) - 1 == $i){ //last_loop
					$this->db->group_end();
				}
			}
			$i++;
		}

		if (isset($_POST['order'])) { //order processing
			$this->db->order_by($column_order[$_POST['order'][0]['column']], $_POST['order'][0]['dir']);
		}else if (isset($order)) {
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	public function get_berita_datatable()
	{		
		$this->get_berita_datatable_query();
		if ($_POST['length'] != -1) {		
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get()->result();
			return $query;
		}
	}
	public function count_berita_datatable()
	{
		$this->db->from('blog');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function count_berita_datatable_filtered()
	{
		$this->get_berita_datatable_query();
		$query = $this->db->get()->num_rows();
		return $query;
	}
}
