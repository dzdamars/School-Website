<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General_model extends CI_Model {
	public function get_record($key, $limit, $offset)
	{
		$sql = "
			SELECT judul, uri, created, content, info, folder FROM (
				SELECT agenda_judul AS 'judul', agenda_uri AS 'uri', agenda_date AS 'created', agenda_content AS 'content', 'agenda/detail/' AS 'info', 'Agenda' AS 'folder' FROM agenda
				UNION
				SELECT blog_judul AS 'judul', blog_uri AS 'uri', date AS 'date', blog_content AS 'content', 'berita/detail/' AS 'info', 'Berita' AS 'folder' FROM blog
				UNION
				SELECT kesiswaan_judul AS 'judul', kesiswaan_uri AS 'uri', kesiswaan_date AS 'date', kesiswaan_content AS 'content', 'kesiswaan/detail/' AS 'info', 'Kesiswaan' AS 'folder' FROM kesiswaan
				UNION
				SELECT lowongan_judul AS 'judul', lowongan_uri AS 'uri', lowongan_date AS 'date', lowongan_deskripsi AS 'content', 'hubin/lowongan/' AS 'info', 'Lowongan Pekerjaan' AS 'folder' FROM lowongan
			)
			AS all_record 
			WHERE judul LIKE '%$key%'
			OR content LIKE '%$key%'
			LIMIT $limit OFFSET $offset
		";
		$query = $this->db->query($sql)->result();
		return $query;
	}
	public function count_record($key)
	{
		$sql = "
			SELECT judul, uri, created, content FROM (
				SELECT agenda_judul AS 'judul', agenda_uri AS 'uri', agenda_date AS 'created', agenda_content AS 'content' FROM agenda
				UNION
				SELECT blog_judul AS 'judul', blog_uri AS 'uri', date AS 'date', blog_content AS 'content' FROM blog
				UNION
				SELECT kesiswaan_judul AS 'judul', kesiswaan_uri AS 'uri', kesiswaan_date AS 'date', kesiswaan_content AS 'content' FROM kesiswaan
				UNION
				SELECT lowongan_judul AS 'judul', lowongan_uri AS 'uri', lowongan_date AS 'date', lowongan_deskripsi AS 'content' FROM lowongan
			)
			AS all_record
			WHERE judul LIKE '%$key%'
			OR content LIKE '%$key%'
		";
		$query = $this->db->query($sql)->num_rows();
		return $query;
	}
	public function get_menu(){
		$this->db->from('menu');
		$this->db->where('menu_status', 1);
		$query = $this->db->get()->result();

		return $query;
	} 
	public function get_banner()
	{
		$this->db->from('banner');
		$this->db->where('banner_status', 1);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_banner_by_id($id){
		$this->db->from('banner');
		$this->db->where('banner_status', 1);
		$this->db->where('banner_id', $id);
		$query = $this->db->get()->result();

		return $query;	
	}
	public function get_category(){
		$this->db->from('category');
		$query = $this->db->get()->result();

		return $query;	
	}
	public function get_category_by_id($id){
		$this->db->from('category');
		$this->db->where('category_uri', $id);
		$query = $this->db->get()->result();

		return $query;		
	}
	public function get_blog(){
		$this->db->from('blog b');
		$this->db->join('category c', 'b.category_id = c.category_id');
		$this->db->where('blog_status', 1);
		$this->db->order_by('b.blog_created', 'DESC');
		$query = $this->db->get()->result();

		return $query;
	}
	public function count_blog_by_category($cat)
	{
		$this->db->from('blog b');
		$this->db->join('category c', 'b.category_id = c.category_id');
		$this->db->where('blog_status', 1);
		$this->db->where('category_uri', $cat);
		$this->db->order_by('b.blog_created', 'DESC');
		$query = $this->db->get()->num_rows();

		return $query;
	}
	public function count_blog_by_keyword($keyword)
	{
		$this->db->from('blog b');
		$this->db->join('category c', 'b.category_id = c.category_id');
		$this->db->where('blog_status', 1);
		$this->db->like('blog_judul', $keyword);
		$this->db->or_like('blog_content', $keyword);
		$this->db->order_by('b.blog_created', 'DESC');
		$query = $this->db->get()->num_rows();

		return $query;
	}
	public function get_blog_by_id($id)
	{
		$this->db->from('blog b');
		$this->db->join('category c', 'b.category_id = c.category_id');
		$this->db->where('blog_status', 1);
		$this->db->where('blog_id', $id);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_blog_limit($limit){
		$this->db->from('blog b');
		$this->db->join('category c', 'b.category_id = c.category_id');
		$this->db->where('blog_status', 1);
		$this->db->order_by('b.blog_created', 'DESC');
		$this->db->limit($limit);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_blog_by_uri($uri){
		$this->db->from('blog b');
		$this->db->join('category c', 'b.category_id = c.category_id');
		$this->db->where('blog_status', 1);
		$this->db->where('blog_uri', $uri);
		$query = $this->db->get()->result();

		return $query;		
	}
	public function get_blog_by_category($cat, $limit, $offset)
	{
		$sql = 
		"SELECT blog.*, temp.Count, category.*
		 FROM blog
		 INNER JOIN category ON blog.category_id = category.category_id
		 LEFT JOIN 
		 	(SELECT blog.blog_id, COUNT(comment.comment_id) AS Count
		 	FROM blog
		 	LEFT JOIN comment ON comment.blog_id = blog.blog_id
		 	GROUP BY blog.blog_id)
			temp ON temp.blog_id = blog.blog_id
		 WHERE blog.blog_status = 1
		 AND category.category_uri = '$cat'
	 	 ORDER BY blog.blog_created DESC 
	 	 LIMIT $limit OFFSET $offset
		";
		$query = $this->db->query($sql)->result();
		return $query;
	}
	public function get_blog_by_keyword($key, $limit, $offset)
	{
		$sql = 
		"SELECT blog.*, temp.Count, category.*
		 FROM blog
		 INNER JOIN category ON blog.category_id = category.category_id
		 LEFT JOIN 
		 	(SELECT blog.blog_id, COUNT(comment.comment_id) AS Count
		 	FROM blog
		 	LEFT JOIN comment ON comment.blog_id = blog.blog_id
		 	GROUP BY blog.blog_id)
			temp ON temp.blog_id = blog.blog_id
		 WHERE blog.blog_status = 1
		 AND blog.blog_judul LIKE '%$key%'
		 OR blog.blog_content LIKE '%$key%'
	 	 ORDER BY blog.blog_created DESC 
	 	 LIMIT $limit OFFSET $offset
		";
		$query = $this->db->query($sql)->result();

		return $query;		
	}
	public function get_blog_full($limit, $offset)
	{
		$sql = 
		"SELECT blog.*, temp.Count, category.*
		 FROM blog
		 INNER JOIN category ON blog.category_id = category.category_id
		 LEFT JOIN 
		 	(SELECT blog.blog_id, COUNT(comment.comment_id) AS Count
		 	FROM blog
		 	LEFT JOIN comment ON comment.blog_id = blog.blog_id
		 	GROUP BY blog.blog_id)
			temp ON temp.blog_id = blog.blog_id
			ORDER BY blog.blog_created DESC 
			LIMIT $limit OFFSET $offset
		";
		$query = $this->db->query($sql)->result();
		return $query;
	}
	public function get_blog_popular($limit)
	{
		$sql = "SELECT * FROM blog WHERE blog_view > 0 ORDER BY blog_view DESC LIMIT $limit"; 
		// "SELECT blog.*, temp.Count, category.*
		//  FROM blog
		//  INNER JOIN category ON blog.category_id = category.category_id
		//  LEFT JOIN 
		//  	(SELECT blog.blog_id, COUNT(comment.comment_id) AS Count
		//  	FROM blog
		//  	LEFT JOIN comment ON comment.blog_id = blog.blog_id
		//  	GROUP BY blog.blog_id)
		// 	temp ON temp.blog_id = blog.blog_id
		// WHERE Count > 0
		// ORDER BY Count DESC LIMIT $limit
		//  -- GROUP BY 'blog.blog_id'
		// ";
		$query = $this->db->query($sql)->result();
		return $query;
	}
	public function get_comment_by_blog_uri($blog_uri)
	{
		$this->db->from('comment c');
		$this->db->join('blog b', 'c.blog_id = b.blog_id');
		$this->db->where('c.comment_status', 1);		
		$this->db->where('b.blog_uri', $blog_uri);
		$this->db->order_by('c.comment_id', 'DESC');
		$query = $this->db->get()->result();

		return $query;
	}
	public function create_comment($data)
	{
		$this->db->insert('comment', $data);
	}
	public function get_jurusan()
	{
		$query = $this->db->get('jurusan')->result();
		return $query;
	}
	public function get_jurusan_by_uri($uri)
	{
		$this->db->where('jurusan_uri', $uri);
		$query = $this->db->get('jurusan')->result();
		return $query;
	}
	public function get_content($id)
	{
		$this->db->from('content');
		$this->db->where('content_id', $id);
		$query = $this->db->get()->result();
		return $query;
	}
	public function get_lowongan($limit, $offset)
	{
		$this->db->from('lowongan');
		$this->db->order_by('lowongan_created', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_lowongan_by_uri($uri)
	{
		$this->db->from('lowongan');
		$this->db->where('lowongan_uri', $uri);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_lowongan_by_keyword($keyword, $limit, $offset)
	{
		$this->db->from('lowongan');
		$this->db->like('lowongan_judul', $keyword);
		$this->db->or_like('jurusan', $keyword);
		$this->db->or_like('lowongan_instansi', $keyword);
		$this->db->or_like('lowongan_deskripsi', $keyword);
		$this->db->limit($limit, $offset);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_lowongan_limit($limit)
	{
		$this->db->from('lowongan');
		$this->db->order_by('lowongan_id', 'DESC');
		$this->db->limit($limit);
		$query = $this->db->get()->result();

		return $query;
	}
	public function count_lowongan()
	{
		$this->db->from('lowongan');
		$query = $this->db->get()->num_rows();

		return $query;
	}
	public function count_lowongan_by_keyword($keyword)
	{
		$this->db->from('lowongan');
		$this->db->like('lowongan_judul', $keyword);
		$this->db->or_like('jurusan', $keyword);
		$this->db->or_like('lowongan_instansi', $keyword);
		$this->db->or_like('lowongan_deskripsi', $keyword);
		$query = $this->db->get()->num_rows();

		return $query;
	}
	public function get_prestasi($limit, $offset)
	{
		$this->db->from('prestasi');
		$this->db->limit($limit, $offset);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_kesiswaan($limit, $offset)
	{
		$this->db->from('kesiswaan');
		$this->db->limit($limit, $offset);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_kesiswaan_by_uri($uri)
	{
		$this->db->from('kesiswaan');
		$this->db->where('kesiswaan_uri', $uri);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_kesiswaan_by_keyword($keyword, $limit, $offset)
	{
		$this->db->from('kesiswaan');
		$this->db->like('kesiswaan_judul', $keyword);
		$this->db->or_like('kesiswaan_content', $keyword);
		$this->db->limit($limit, $offset);
		$query = $this->db->get()->result();

		return $query;
	}
	public function count_kesiswaan_by_keyword($keyword)
	{
		$this->db->from('kesiswaan');
		$this->db->like('kesiswaan_judul', $keyword);
		$this->db->or_like('kesiswaan_content', $keyword);
		$query = $this->db->get()->num_rows();

		return $query;
	}
	public function count_kesiswaan()
	{
		$this->db->from('kesiswaan');
		$query = $this->db->get()->num_rows();

		return $query;
	}
	public function count_agenda()
	{
		$this->db->from('agenda');
		$query = $this->db->get()->num_rows();

		return $query;
	}
	public function get_agenda($limit, $offset)
	{
		$this->db->from('agenda');
		$this->db->limit($limit, $offset);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_agenda_by_id($id)
	{
		$this->db->from('agenda');
		$this->db->where('agenda_id', $id);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_agenda_by_uri($uri)
	{
		$this->db->from('agenda');
		$this->db->where('agenda_uri', $uri);
		$query = $this->db->get()->result();

		return $query;
	}
	public function get_agenda_limit($limit)
	{
		$this->db->from('agenda');
		$this->db->limit($limit);
		$query = $this->db->get()->result();

		return $query;
	}
	
}
