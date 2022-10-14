<?php

defined('BASEPATH') or exit('No direct script access allowed');

class modelprogramdiet extends CI_Model
{
    public function get($batas = NULL, $offset = NULL, $cari = NULL)
    {
        if ($batas != NULL) {
            $this->db->limit($batas, $offset);
        }
        if ($cari != NULL) {
            $this->db->or_like($cari);
        }
        $this->db->from('program_diet_list');
        $query = $this->db->get();
        return $query->result();
    }

    public function jumlah_row($search)
    {
        $this->db->or_like($search);
        $query = $this->db->get('program_diet_list');

        return $query->num_rows();
    }

    public function get_by_id($kondisi)
    {
        $this->db->from('program_diet_list');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }

    public function insert($data)
    {
        $this->db->insert('program_diet_list', $data);
        return TRUE;
    }

    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete('program_diet_list');
        return TRUE;
    }

    public function update($data, $kondisi)
    {
        $this->db->update('program_diet_list', $data, $kondisi);
        return TRUE;
    }

    function ambil_data()
    {
        return $this->db->get('program_diet_list');
    }

    function printData()
    {
        return $this->db->query('SELECT BaseList.*, BaseDiet.* 
								 FROM program_diet_list AS BaseList 
								 JOIN program_diet AS BaseDiet 
								 ON BaseList.id_program_diet = BaseDiet.id_program_diet');
    }

    function printHarga()
    {
        return $this->db->query('SELECT BaseList.*, BaseHarga.* 
								 FROM program_diet_list AS BaseList 
								 JOIN program_diet_harga AS BaseHarga 
								 ON BaseList.id_program_diet = BaseHarga.id_program_diet_harga');
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
