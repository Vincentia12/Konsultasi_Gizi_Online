<?php

defined('BASEPATH') or exit('No direct script access allowed');

class modeldashboard extends CI_Model
{
  function printDataKonsultasi()
  {
    return $this->db->query('SELECT COUNT(*) AS totalKonsultasi FROM konsultasi');
  }
  
  function printDataIncome()
  {
    return $this->db->query('SELECT SUM(amount) AS totalIncome FROM tbl_transaksi');
  }

  function printHarga()
  {
    return $this->db->query('SELECT BaseMenu.*, BaseHarga.* 
								 FROM katering_diet_menu AS BaseMenu 
								 JOIN katering_diet_harga AS BaseHarga 
								 ON BaseMenu.id_katering_diet = BaseHarga.id_katering_diet_harga');
  }

  function printDataChart()
  {
    //$jan = $this->db->query('SELECT sum(amount) as "jan" FROM tbl_transaksi WHERE MONTH(date) = 1')->result();
    //$feb = $this->db->query('SELECT sum(amount) as "feb" FROM tbl_transaksi WHERE MONTH(date) = 2')->result();
    //$mar = $this->db->query('SELECT sum(amount) as "mar" FROM tbl_transaksi WHERE MONTH(date) = 3')->result();
    //$apr = $this->db->query('SELECT sum(amount) as "apr" FROM tbl_transaksi WHERE MONTH(date) = 4')->result();
    //$may = $this->db->query('SELECT sum(amount) as "may" FROM tbl_transaksi WHERE MONTH(date) = 5')->result();
    //$jun = $this->db->query('SELECT sum(amount) as "jun" FROM tbl_transaksi WHERE MONTH(date) = 6')->result();
    //$jul = $this->db->query('SELECT sum(amount) as "jul" FROM tbl_transaksi WHERE MONTH(date) = 7')->result();
    //$aug = $this->db->query('SELECT sum(amount) as "aug" FROM tbl_transaksi WHERE MONTH(date) = 8')->result();
    //$okt = $this->db->query('SELECT sum(amount) as "okt" FROM tbl_transaksi WHERE MONTH(date) = 9')->result();
    //$sep = $this->db->query('SELECT sum(amount) as "sep" FROM tbl_transaksi WHERE MONTH(date) = 10')->result();
    //$nov = $this->db->query('SELECT sum(amount) as "nov" FROM tbl_transaksi WHERE MONTH(date) = 11')->result();
    //$dec = $this->db->query('SELECT sum(amount) as "dec" FROM tbl_transaksi WHERE MONTH(date) = 12')->result();
    
    //return $this->db->query('SELECT sum(amount) as jan FROM tbl_transaksi WHERE MONTH(date) = 1');
    //$dataArray = array($jan, $feb, $mar, $apr, $may, $jun, $jul, $aug, $okt, $sep, $nov, $dec);

    //return $dataArray;
    //return ['jan' => $jan, 'feb' => $feb];
    $data = $this->db->query('SELECT sum(amount) as data, YEAR(date) year, MONTH(date) month FROM tbl_transaksi GROUP BY YEAR, MONTH')->result();
    return $data;
    //return array($this->db->query('SELECT sum(amount) as data, YEAR(date) year, MONTH(date) month FROM tbl_transaksi GROUP BY YEAR, MONTH')->result());
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
