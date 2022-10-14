<?php

defined('BASEPATH') or exit('No direct script access allowed');

class modelkonsultasi extends CI_Model
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
		return $this->db->get('tbl_transaksi');
	}

  function getJadwal()
  {
    return $this->db->query('SELECT BaseJadwal.*, BaseJenis.*
                  FROM jadwal AS BaseJadwal
                  JOIN jenis_layanan AS BaseJenis 
                  ON BaseJadwal.id_jenis_layanan = BaseJenis.id_jenis_layanan');
  }

  function finish($transaction_id)
  {
    $this->db->set('is_finished', 1);
    $this->db->where('transaction_id', $transaction_id);
    $this->db->update('konsultasi');
  }

  function printDataDokter($id)
  {
    return $this->db->query("SELECT BaseTransaksi.*, BaseKonsultasi.room_id, BaseKonsultasi.room_name, BaseUsr.nama, (SELECT nama FROM user WHERE id_user = $id) AS dokter, BaseKonsultasi.dokter_id, room_date, room_url, BaseKonsultasi.is_finished
    FROM konsultasi as BaseKonsultasi
    JOIN user as BaseUsr
    ON BaseKonsultasi.patient_id = BaseUsr.id_user
    JOIN tbl_transaksi as BaseTransaksi
    ON BaseTransaksi.transaction_id = BaseKonsultasi.transaction_id
    WHERE BaseKonsultasi.dokter_id = " . $id);
  }

  function printDataAdmin()
  {
    return $this->db->query('SELECT BaseTransaksi.*, BaseKonsultasi.room_id, BaseKonsultasi.room_name, BaseUsr.nama, (SELECT nama FROM user WHERE id_user = BaseKonsultasi.dokter_id) AS dokter, room_date, room_url, BaseKonsultasi.is_finished
    FROM konsultasi as BaseKonsultasi
    JOIN user as BaseUsr
    ON BaseKonsultasi.patient_id = BaseUsr.id_user
    JOIN tbl_transaksi as BaseTransaksi
    ON BaseTransaksi.transaction_id = BaseKonsultasi.transaction_id'
    );
  }

  function printDataTransaksi()
  {
    return $this->db->query('SELECT BaseTransaksi.*, BaseUser.* 
								 FROM tbl_transaksi AS BaseTransaksi 
								 JOIN user AS BaseUser 
								 ON BaseTransaksi.id_patient = BaseUser.id_user');
  }

  function printRiwayatKonsultasi($id)
  {
    return $this->db->query("SELECT * 
													 FROM detailkonsultasi
													 WHERE id_pasien = $id");
  }

  function printDataKonsultasi($id)
  {
    $this->db->select('BaseTbl.room_id, BaseTbl.room_name, BaseUsr.nama, BaseTbl.dokter_id, room_date, room_url, BaseTbl.is_finished');
    $this->db->from('konsultasi as BaseTbl');
    $this->db->join('user as BaseUsr', 'BaseTbl.dokter_id = BaseUsr.id_user','left');
    $this->db->where('BaseTbl.patient_id', $id);
    // $this->db->where('BaseTbl.is_finished', 0);

    // $this->db->where('BaseTbl.isDeleted', 0);
    // $this->db->where('BaseTbl.roleId !=', 1);
    $this->db->order_by('BaseTbl.room_id', 'ASC');
    $query = $this->db->get();
    
    $result = $query->result();        
    return $result;
    // return $this->db->query('SELECT BaseKonsultasi.*, BaseUser.* 
		// 						 FROM konsultasi AS BaseKonsultasi 
		// 						 JOIN user AS BaseUser 
		// 						 ON BaseKonsultasi.patient_id = BaseUser.id_user
    //              WHERE BaseKonsultasi.patient_id = ' . $id);
  }
  
  function getDetailKonsultasi($patient_id, $transaction_id)
  {
    return $this->db->query("SELECT dk.*, konsultasi.*, user.*
                            FROM konsultasi AS konsultasi
                            JOIN detailkonsultasi AS dk
                            ON konsultasi.transaction_id = dk.transaction_id
                            JOIN user AS user
                            ON konsultasi.patient_id = user.id_user
                            WHERE dk.id_pasien = $patient_id AND dk.transaction_id = '$transaction_id'");
  }

  function getDetailID($transaction_id)
  {
    return $this->db->query("SELECT id_detail FROM detailkonsultasi WHERE transaction_id = '$transaction_id'");
  }

  function printHarga()
  {
    return $this->db->query('SELECT BaseMenu.*, BaseHarga.* 
								 FROM katering_diet_menu AS BaseMenu 
								 JOIN katering_diet_harga AS BaseHarga 
								 ON BaseMenu.id_katering_diet = BaseHarga.id_katering_diet_harga');
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
