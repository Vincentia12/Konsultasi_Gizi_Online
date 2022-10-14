<?php

class programdiet_model extends CI_Model
{

    function ambil_data()
    {
        return $this->db->get('program_diet_list');
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

        return $this->db->query('SELECT BaseList.*, BaseHarga.* 
								 FROM program_diet_list AS BaseList 
								 JOIN program_diet_harga AS BaseHarga 
								 ON BaseList.id_program_diet_list = BaseHarga.id_program_diet_harga WHERE BaseList.id_program_diet_list=' . $id);
        //return $this->db->query('SELECT * FROM katering_diet_menu WHERE id_katering_diet_menu=' . $id);
    }
}
