<?php

defined('BASEPATH') or exit('No direct script access allowed');

class modelartikel extends CI_Model
{
  public function get($batas = NULL, $offset = NULL, $cari = NULL)
  {
    if ($batas != NULL) {
      $this->db->limit($batas, $offset);
    }
    if ($cari != NULL) {
      $this->db->or_like($cari);
    }
    $this->db->from('katering_diet_menu');
    $query = $this->db->get();
    return $query->result();
  }

  public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('katering_diet_menu');

    return $query->num_rows();
  }

  public function get_by_id($kondisi)
  {
    $this->db->from('katering_diet_menu');
    $this->db->where($kondisi);
    $query = $this->db->get();
    return $query->row();
  }

  public function insert($data)
  {
    $this->db->insert('katering_diet_menu', $data);
    return TRUE;
  }

  public function delete($where)
  {
    $this->db->where($where);
    $this->db->delete('katering_diet_menu');
    return TRUE;
  }

  public function update($data, $kondisi)
  {
    $this->db->update('katering_diet_menu', $data, $kondisi);
    return TRUE;
  }

  function ambil_data()
	{
		return $this->db->get('katering_diet_menu');
	}

  function getArticle()
  {
    return $this->db->query('SELECT BaseArtikel.*, BaseUser.* 
								 FROM berita AS BaseArtikel 
								 JOIN user AS BaseUser 
								 ON BaseArtikel.created_by = BaseUser.id_user');
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

		return $this->db->query("SELECT BaseArtikel.*, BaseUser.* FROM berita AS BaseArtikel JOIN user AS BaseUser ON BaseArtikel.created_by = BaseUser.id_user WHERE id_berita = '$id'");
		//return $this->db->query('SELECT * FROM katering_diet_menu WHERE id_katering_diet_menu=' . $id);
	}
}
