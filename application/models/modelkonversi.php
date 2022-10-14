<?php

defined('BASEPATH') or exit('No direct script access allowed');

class modelkonversi extends CI_Model
{

  public function get($batas = NULL, $offset = NULL, $cari = NULL)
  {
    if ($batas != NULL) {
      $this->db->limit($batas, $offset);
    }
    if ($cari != NULL) {
      $this->db->or_like($cari);
    }
    $this->db->from('konversi');
    $query = $this->db->get();
    return $query->result();
  }
  public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('konversi');

    return $query->num_rows();
  }



  public function get_by_id($kondisi)
  {
    $this->db->from('konversi');
    $this->db->where($kondisi);
    $query = $this->db->get();
    return $query->row();
  }

  public function insert($data)
  {
    $this->db->insert('konversi', $data);
    return TRUE;
  }
  public function delete($where)
  {
    $this->db->where($where);
    $this->db->delete('konversi');
    return TRUE;
  }
  public function update($data, $kondisi)
  {
    $this->db->update('konversi', $data, $kondisi);
    return TRUE;
  }
}
