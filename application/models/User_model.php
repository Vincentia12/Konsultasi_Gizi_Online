<?php 
	class User_model extends CI_Model{
		public function getUser($username)
		{
			return $this->db->where('username', $username)->get('user')->row();
		}
		
		public function createUser($data)
		{
			$this->db->insert('user', $data);
		}
	}
