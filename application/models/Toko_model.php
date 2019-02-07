<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_model extends CI_Model {

    public function getBarang()
    {
        // $query_str = "SELECT * FROM buku";
        // $query = $this->db->query($query_str)->result_array();

        $query = $this->db->get('barang')->result_array(); //cara lain untuk menampilkan data menggunakan get 
        return $query;      //mengembalikan ke controler
    }

    public function tambah_data($data)
    {
      $this->db->insert('barang', $data);
    }

    public function edit_form($where)
    {
      $query = $this->db->get_where('barang',$where)->row_array(); //menggunakan get_where untuk menampilkan sebagian
      return $query;
    }

    public function edit_data($where,$data)
    {
      $this->db->where($where);
      $this->db->update('barang', $data);
    }

    public function hapus_data($where)
    {
      $this->db->where($where);
      $this->db->delete('barang');
    }

    public function search($keyword)
    {
      // CARA PERTAMA
      //$query = $this->db->query('SELECT * FROM buku WHERE judul LIKE "%' .$keyword. '%"' . 'OR penulis LIKE "%' .$keyword. '%"'. 'OR tahun_terbit LIKE "%' .$keyword. '%"')->result_array();
      
      // CARA KEDUA
      $this->db->like('nama_barang',$keyword);
      $this->db->or_like('harga', $keyword);
      $this->db->or_like('deskripsi', $keyword);

      $query = $this->db->get('barang')->result_array();

      return $query;
    }

    public function getBarangById($where)
    {
      $this->db->join('kategori', 'barang.id_kategori = kategori.id_kategori', 'left');

      $query = $this->db->get_where('barang', $where)->row_array();
      return $query;
    }

    public function getKategori()
    {
        $query = $this->db->get('kategori')->result_array();
        return $query;
        
    }

    public function tambah_user($data)
    {
      $this->db->insert('user', $data);
    }

    public function beli($where, $data)
    {
      $this->db->where($where);
      // $this->db->insert('user', $data);
    }

    public function getUser()
    {
      $query = $this->db->get('user')->result_array(); //cara lain untuk menampilkan data menggunakan get 
        return $query;   
    }

}

/* End of file Buku_model.php */


?>