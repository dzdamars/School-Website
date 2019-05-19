<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	// public function get_user($user, $pass)
	// {
	// 	$sql = "SELECT * FROM user WHERE username = '$user' OR email = '$user' AND password = '$pass'";
	// 	$query = $this->db->query($sql)->result();

	// 	return $query;
	// }
	public function get_user($user, $pass)
	{
		$this->db->from('user u');
		$this->db->join('user_role ur', 'u.role_id = ur.role_id');
		$this->db->where('u.username', $user);
		$this->db->or_where('u.email', $user);
		
		$result = $this->get_pass($pass);
		if (!empty($result)) {
			return $result;
		}else{
			return NULL;
		}
	}
	public function get_pass($pass)
	{
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$result = $query->row();
			$checkPass = $result->password;
			if ($this->bcrypt->check_password($pass, $checkPass)) {
				return $result;
			}
		}else{
			return FALSE;
		}
	}
	public function set_last_login($user, $pass, $last_login)
	{
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$query = $this->db->update('user', $last_login);
	}
}
