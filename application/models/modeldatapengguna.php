<?php

defined('BASEPATH') or exit('No direct script access allowed');

class modeldatapengguna extends CI_Model
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

  function printDataPasien()
  {
    return $this->db->query('SELECT BaseUser.*, BaseLevel.* 
								 FROM user AS BaseUser 
								 JOIN level AS BaseLevel 
								 ON BaseUser.id_level = BaseLevel.id_level
                 WHERE BaseLevel.id_level IN (5)
                 ');
  }
  
  function getDataPasien($email)
  {
    return $this->db->query("SELECT BaseUser.* FROM user AS BaseUser WHERE BaseUser.email = '$email' ");
  }

  function printDataDokter()
  {
    return $this->db->query('SELECT BaseUser.*, BaseLevel.* 
								 FROM user AS BaseUser 
								 JOIN level AS BaseLevel 
								 ON BaseUser.id_level = BaseLevel.id_level
                 WHERE BaseLevel.id_level IN (2)
                 ');
  }

  function getRandomDokterID()
  {
    return $this->db->query('SELECT id_user AS ID 
													 FROM user
													 WHERE id_level IN (2)
													 ORDER BY RAND()
													 LIMIT 1');
  }

  function printCountDataPasien()
  {
    return $this->db->query('SELECT COUNT(*) AS totalPasienCount
								 FROM user AS BaseUser 
								 JOIN level AS BaseLevel 
								 ON BaseUser.id_level = BaseLevel.id_level
                 WHERE BaseLevel.id_level IN (5)
                 ');
  }

  function printCountDataDokter()
  {
    return $this->db->query('SELECT COUNT(*) AS totalDokterCount
								 FROM user AS BaseUser 
								 JOIN level AS BaseLevel 
								 ON BaseUser.id_level = BaseLevel.id_level
                 WHERE BaseLevel.id_level IN (2)
                 ');
  }

  function printDataTransaksi($id)
  {
    return $this->db->query('SELECT BaseTransaksi.*, BaseUser.* 
								 FROM tbl_transaksi AS BaseTransaksi 
								 JOIN user AS BaseUser 
								 ON BaseTransaksi.id_patient = BaseUser.id_user
                 WHERE BaseUser.id_user = ' . $id . ' ORDER BY BaseTransaksi.date ');
  }

  function printDataTransaksiAll()
  {
    return $this->db->query('SELECT BaseTransaksi.*, BaseUser.* 
								 FROM tbl_transaksi AS BaseTransaksi 
								 JOIN user AS BaseUser 
								 ON BaseTransaksi.id_patient = BaseUser.id_user
                 ORDER BY BaseTransaksi.date DESC
                 ');
  }

  function printDataAdmin()
  {
    return $this->db->query('SELECT BaseUser.*, BaseLevel.* 
								 FROM user AS BaseUser 
								 JOIN level AS BaseLevel 
								 ON BaseUser.id_level = BaseLevel.id_level
                 WHERE BaseLevel.id_level IN (1, 3, 4)
                 ');
  }

  function printHarga()
  {
    return $this->db->query('SELECT BaseMenu.*, BaseHarga.* 
								 FROM katering_diet_menu AS BaseMenu 
								 JOIN katering_diet_harga AS BaseHarga 
								 ON BaseMenu.id_katering_diet = BaseHarga.id_katering_diet_harga');
  }

  function updateData($user_id, $data)
  {
    $this->db->where('id_user', $user_id);
    $this->db->update('user', $data);
  }

  function toggleStatusPasien($status, $id)
  {
    return $this->db->query("UPDATE user SET `status` = $status WHERE id_user = $id");
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

		//return $this->db->query('SELECT * FROM katering_diet_menu WHERE id_katering_diet_menu=' . $id);
	}
}
