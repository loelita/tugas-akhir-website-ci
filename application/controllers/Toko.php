<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

    //untuk menyimpan sesuatu yg digunakan untuk semua method
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Toko_model');

        if($this->session->userdata('status') != 'logged in')
        {
            redirect('Login/index');
        }
    }

    public function index()
    {
        $data['title'] = 'Index';
    
        if ($this->input->get('keyword')) 
        {
            $keyword = $this->input->get('keyword');
            $data['barang'] = $this->Toko_model->search($keyword);
        } 
        else 
        {
             // untuk load model 
            $data['barang'] = $this->Toko_model->getBarang();
            $data['user'] = $this->Toko_model->getUser();
        }
        
        $this->load->view('templates/header', $data);
        $this->load->view('toko/index_view', $data);
        $this->load->view('templates/footer');
        
    }

    public function tambah()
    {
        $data['title']= 'Tambah Data';

        // validasi
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required',array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('harga', 'Harga', 'required|min_length[5]',array('required' => '%s harus diisi','min_length' => 'Harga minimal 5 angka'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required',array('required' => '%s harus diisi'));
        
        
        if ($this->form_validation->run() == FALSE) 
        {
            // $data['kategori'] = $this->Toko_model->getKategori();

            $this->load->view('templates/header', $data);
            $this->load->view('toko/tambah_view');
            $this->load->view('templates/footer');
        }
        else 
        {
            $nama_barang = $this->input->post('nama_barang');
            $harga = $this->input->post('harga');
            $deskripsi = $this->input->post('deskripsi');
            // $id_kategori = $this->input->post('id_kategori');
    
            $data = array('nama_barang' => $nama_barang,
                          'harga' => $harga,
                          'deskripsi' => $deskripsi
                        //   'id_kategori' => $id_kategori
                         );      
    
            $this->Toko_model->tambah_data($data);
    
            $this->session->set_flashdata('sukses', 'ditambahkan');
    
            redirect('Toko/index');

        }
     
    }


    public function edit($id_barang)
    {
        $data['title'] = 'Edit Data';

        $where = array('id_barang' => $id_barang );

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required',array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('harga', 'Harga', 'required|min_length[5]',array('required' => '%s harus diisi','min_length' => 'Harga minimal 5 angka'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required',array('required' => '%s harus diisi'));
        
        
        if ($this->form_validation->run() == FALSE) 
        {
            $data['barang'] = $this->Toko_model->getBarangById($where);

            // $data['kategori'] = $this->Toko_model->getKategori();

            $this->load->view('templates/header', $data);
            $this->load->view('toko/edit_view', $data);
            $this->load->view('templates/footer');

        } 
        else 
        {
            $nama_barang = $this->input->post('nama_barang');
            $harga = $this->input->post('harga');
            $deskripsi = $this->input->post('deskripsi');
            $id_kategori = $this->input->post('id_kategori');
    
            $data = array('nama_barang' => $nama_barang,
                          'harga' => $harga,
                          'deskripsi' => $deskripsi
                        //   'id_kategori' => $id_kategori
                         );     
    
    
            $this->Toko_model->edit_data($where,$data);

            $this->session->set_flashdata('sukses', 'diubah');
        
            redirect('Toko/index');
        }
        
    }
    

    public function hapus($id_barang)
    {
        $where = array('id_barang' => $id_barang );
        $this->Toko_model->hapus_data($where);

        $this->session->set_flashdata('sukses', 'Berhasil Hapus Data');

        redirect('Toko/index');
    }
    
    // public function search()
    // {
    //     $keyword = $this->input->get('keyword');

    //     $data['buku'] = $this->Buku_model->search($keyword);
        
    //     $this->load->view('index_view', $data);
        

    // }

    public function detail($id_barang)
    {
      $data['title'] = 'Detail Buku';
      $where = array('id_barang' => $id_barang);
      $data['barang'] = $this->Toko_model->getBarangById($where);
      
      $this->load->view('templates/header', $data);
      $this->load->view('toko/detail_view', $data);
      $this->load->view('templates/footer');
    }
}

/* End of file Buku.php */

?>



