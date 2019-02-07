<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {

    public function __construct()
{
    parent::__construct();
    $this->load->model('Toko_model');
    
}

    public function index()
    {
        $this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');
        
    }

    public function inputUser()
    {

        $this->load->view('dashboard');

        $nama_pemesan = $this->input->post('nama_pemesan');
        $email = $this->input->post('email');
        $nama_barang = $this->input->post('nama_barang');
        $jumlah = $this->input->post('jumlah');
        $alamat = $this->input->post('alamat');


        $data = array (
            'nama_pemesan' => $nama_pemesan,
            'email' => $email,
            'nama_barang' => $nama_barang,
            'jumlah' => $jumlah,
            'alamat' => $alamat
        );
        
        $this->Toko_model->tambah_user($data);

        
        redirect('User/index');

    }

    public function pesan()
    {
        
    
        if ($this->input->get('keyword')) 
        {
            $keyword = $this->input->get('keyword');
            $data['barang'] = $this->Toko_model->search($keyword);
        } 
        else 
        {
             // untuk load model 
            $data['barang'] = $this->Toko_model->getBarang();
        }
        
        $this->load->view('header');
        $this->load->view('user/pesan', $data);
        $this->load->view('footer');
        
    }
    
    public function detail($id_barang)
    {
        
      $data['title'] = 'Detail Buku';
      $where = array('id_barang' => $id_barang);
      $data['barang'] = $this->Toko_model->getBarangById($where);
      
      $this->load->view('header');
      $this->load->view('user/detail', $data);
      $this->load->view('footer');
      
    }

    public function beli($id_barang)
    {
        $where = array('id_barang' => $id_barang );
       
        $data['barang'] = $this->Toko_model->getBarangById($where);

        $this->load->view('header');
        $this->load->view('user/beli',$data);
        $this->load->view('footer');

        // $nama_pemesan = $this->input->post('nama_pemesan');
        // $email = $this->input->post('email');
        // $jumlah = $this->input->post('jumlah');
        // $alamat = $this->input->post('alamat');
    
        //     $data = array('nama_pemesan' => $nama_pemesan,
        //                   'email' => $email,
        //                   'jumlah' => $jumlah,
        //                   'alamat' => $alamat
        //                  );      
    
        //     $this->Toko_model->beli($where, $data);
    
        //     redirect('User/index');
    }

    public function galeri()
    {
        $this->load->view('header');
        $this->load->view('User/galeri');
        $this->load->view('footer');
        
    }

}

/* End of file User.php */


?>