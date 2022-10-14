<?php

defined('BASEPATH') or exit('No direct script access allowed');

class modelpost extends CI_Model
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

  function insertPost($message, $userID)
  {
    return $this->db->query("INSERT INTO tbl_posts(question, author_id) VALUES ('$message', $userID)");
  }

  function printPost()
  {
    // return $this->db->query('SELECT post.id AS id, post.title AS title, user.username AS author, user.usergroup AS usergroup, user.pfpURL AS PFPURL, post.question AS question, post.date_created AS date_created 
    //                         FROM tbl_posts post 
    //                         JOIN tbl_users user ON post.author = user.id');
    return $this->db->query('SELECT post.post_id AS id, user.nama AS author, user.id_level AS usergroup, post.question AS question, post.created_at AS date_created 
                            FROM tbl_posts post 
                            JOIN user user ON post.author_id = user.id_user');
                            //WHERE post.id = $post_id');
  }

  function printPostReplies()
  {
    return $this->db->query('SELECT post.question AS post_content, pd.comment_index AS comment_index, post.post_id AS post_id, user.nama AS author, user.id_level AS usergroup, pd.reply AS reply, pd.created_at AS date_replied 
                             FROM tbl_posts post 
                             JOIN tbl_posts_comments pd ON post.post_id = pd.post_id 
                             JOIN user user ON pd.author_id = user.id_user');
                             //WHERE pd.post_id = 1'); 
                            //WHERE post.id = $post_id');
  }

  function printDataKonsultasi($id)
  {
    $this->db->select('BaseTbl.room_id, BaseTbl.room_name, BaseUsr.nama, BaseTbl.dokter_id, room_date, room_url');
    $this->db->from('konsultasi as BaseTbl');
    $this->db->join('user as BaseUsr', 'BaseTbl.dokter_id = BaseUsr.id_user','left');
    $this->db->where('BaseTbl.patient_id', $id);

    // $this->db->where('BaseTbl.isDeleted', 0);
    // $this->db->where('BaseTbl.roleId !=', 1);
    $this->db->order_by('BaseTbl.room_id', 'DESC');
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
    return $this->db->query("SELECT id_detail 
					         FROM konsultasi
					         WHERE patient_id = $patient_id AND transaction_id = '$transaction_id'");
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
