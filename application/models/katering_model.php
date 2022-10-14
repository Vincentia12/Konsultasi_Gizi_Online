<?php

class katering_model extends CI_Model
{

	function ambil_data()
	{
		return $this->db->get('katering_diet_menu');
	}


	function detail($id)
	{
		// $this->db->select('BaseMenu.*, BaseHarga.*');
        // $this->db->from('katering_diet_menu as BaseMenu');
        // $this->db->join('katering_diet_harga as BaseHarga', 'BaseMenu.id_katering_diet_menu = BaseHarga.id_katering_diet_harga', 'left');
		// $this->db->where('BaseMenu.id_katering_diet_menu', $id);

		// $query = $this->db->get();
        
        // $result = $query->result();
        // return $result;

		return $this->db->query('SELECT BaseMenu.*, BaseHarga.* 
								 FROM katering_diet_menu AS BaseMenu 
								 JOIN katering_diet_harga AS BaseHarga 
								 ON BaseMenu.id_katering_diet_menu = BaseHarga.id_katering_diet_harga WHERE BaseMenu.id_katering_diet_menu=' . $id);
		//return $this->db->query('SELECT * FROM katering_diet_menu WHERE id_katering_diet_menu=' . $id);
	}
}
