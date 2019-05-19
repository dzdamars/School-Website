<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General_model extends CI_Model {
	
	// function recursion($array, $current_parent, $current_level = 0, $prev_level = -1)
	// {
	// 	foreach ($array as $category_id => $category) {
	// 		if ($current_parent == $category['parent']) {
	// 			if ($current_level > $prev_level) echo "<ul class=''>";
	// 			if ($current_level == $prev_level) echo "</li>";
	// 			if ($current_level > $prev_level) { $prev_level = $current_level; }
	// 			$current_level++;
	// 			$this->recursion($array, $category_id, $current_level, $prev_level);
	// 			$current_level--;
	// 		}
	// 	}
	// 	if ($current_level == $prev_level) echo "</li> </ul>";
	// }
	// function submenu($query, $mid)
	// {
	// 	foreach ($query as $submenu) {
	// 		if ($submenu->menu_parent == $mid) {
	// 			echo $submenu->menu_name;
	// 			$this->submenu($query, $submenu->menu_id);
	// 		}
	// 	}
	// }
	public function get_menu(){
		$this->db->from('menu');
		$this->db->where('menu_status', 1);
		$query = $this->db->get()->result();

		return $query;
		// $html = '';

		// $html .= '<ul id="topMain" class="nav nav-pills nav-main">';
		// foreach ($query as $menu) {
		// 	if ($menu->menu_parent == 0) {
		// 		$html .= $menu->menu_name;

		// 		$mid = $menu->menu_id;
		// 		$this->submenu($query, $mid);
		// 	}
		// }
		// $html .= '</ul>';

		// return $html;
		// $html = '';

		// $html .= '<ul id="topMain" class="nav nav-pills nav-main">';
		// foreach ($query as $menu) {
		// 	if ($menu->menu_parent > 0) {
		// 		$html .= '<li><a href=""></a>'.$menu->menu_name.'</a>';
		// 		$this->get_menu($menu->menu_id, $level + 1);
		// 		$html .= '</li>';
		// 	}else if ($menu->menu_parent == 0) {
		// 		$html .= '<li><a href="">'.$menu->menu_name.'</a></li>';
		// 	}else;
		// }
		// $html .= '</ul>';

		// return $html;
		// $html = '';

		// foreach ($query as $menu) {
		// 	$html .= '<li class="dropdown">';

		// 	if ($menu->menu_parent == 0) {
		// 		$html .= '<a href="'.site_url($menu->menu_uri).'">'.$menu->menu_name.'</a>';
		// 		$html .= '<ul class="dropdown-menu">';

		// 		foreach ($query as $submenu) {
		// 			if ($submenu->menu_parent == $menu->menu_id) {
		// 				$html .= '<li class="dropdown"><a href="'.site_url($submenu->menu_uri).'">'.$submenu->menu_name.'</a></li>';
		// 			}
		// 		}
		// 		$html .= '</ul>';
		// 	}
		// 	$html .= '</li>';
		// }
		// return $html;
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
	public function get_blog(){
		$this->db->from('blog b');
		$this->db->join('category c', 'b.category_id = c.category_id');
		$this->db->where('blog_status', 1);
		$this->db->order_by('b.blog_created', 'DESC');
		$query = $this->db->get()->result();

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
	public function get_blog_by_category($cat)
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
		";
		$query = $this->db->query($sql)->result();
		return $query;
	}
	public function get_blog_by_keyword($key)
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
		";
		$query = $this->db->query($sql)->result();

		return $query;		
	}
	public function get_blog_pagination($limit, $start)
	{
		$this->db->from('blog b');
		$this->db->join('category c', 'b.category_id = c.category_id');
		$this->db->where('b.blog_status', 1);
		$this->db->order_by('b.blog_created', 'DESC');
		$this->db->limit($limit, $start);
		$query = $this->db->get()->result();
	}
	public function get_blog_full()
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
		 -- GROUP BY 'blog.blog_id'
		";
		$query = $this->db->query($sql)->result();
		return $query;
	}
	public function get_blog_popular($limit)
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
		WHERE Count > 0
		ORDER BY Count DESC LIMIT $limit
		 -- GROUP BY 'blog.blog_id'
		";
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
}
