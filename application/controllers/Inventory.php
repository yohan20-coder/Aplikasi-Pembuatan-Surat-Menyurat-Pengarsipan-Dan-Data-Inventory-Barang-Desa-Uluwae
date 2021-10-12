<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model arsipMasuk
      $this->load->model('Inventory_model');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model Master data
      $this->load->model('Inventory_model','brg');
      $data['tampil'] = $this->brg->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman inventory barang';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('inventory/index',$data);
      $this->load->view('template/footer');
    }

    public function add()
    {

        //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      
 $this->form_validation->set_rules('nomor', 'Nomor', 'required|trim|is_unique[tb_barang.no_barang]',[
      'required' => 'Nomor Barang Harus Diisi',
      'is_unique' => 'Maaf Nomor Barang Sudah Ada'
  ]);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Barang Harus Diisi'
  ]);

  $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim',[
    'required' => 'Jumlah Harus Diisi'
  ]);
  $this->form_validation->set_rules('kondisi', 'Kondisi', 'required|trim',[
        'required' => 'Kondisi Harus Diisi'
  ]);
  
  
 
  if($this->form_validation->run() == FALSE){
    $data['judul'] = 'Halaman Tambah Data Inventory';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('inventory/tambah',$data);
    $this->load->view('template/footer');
  }else{
    $data = [
    'no_barang' => $this->input->post('nomor'),
    'nma_barang' => $this->input->post('nama'),
    'jumlah' => $this->input->post('jumlah'),
    'kondisi' => $this->input->post('kondisi')
  ];
   $this->db->insert('tb_barang',$data);
   $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
   redirect('inventory');
    }

    }

    public function ubah($id)
    {
       //mengambil data dari session di controller auth
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['ubah'] = $this->Inventory_model->getUbah($id);
      
      
     $this->form_validation->set_rules('nomor', 'Nomor', 'required|trim|is_unique[tb_barang.no_barang]',[
          'required' => 'Nomor Barang Harus Diisi',
          'is_unique' => 'Maaf Nomor Barang Sudah Ada'
      ]);

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
          'required' => 'Nama Barang Harus Diisi'
      ]);

      $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim',[
        'required' => 'Jumlah Harus Diisi'
      ]);
      $this->form_validation->set_rules('kondisi', 'Kondisi', 'required|trim',[
            'required' => 'Kondisi Harus Diisi'
      ]);
      
     
    
     if($this->form_validation->run() == FALSE){
       $data['judul'] = 'Halaman Edit Data Pegawai';
       $this->load->view('template/header',$data);
       $this->load->view('template/sidebar',$data);
       $this->load->view('template/topbar',$data);
       $this->load->view('inventory/edit',$data);
       $this->load->view('template/footer');
     }else{
       $data = [
       'no_barang' => $this->input->post('nomor'),
        'nma_barang' => $this->input->post('nama'),
        'jumlah' => $this->input->post('jumlah'),
        'kondisi' => $this->input->post('kondisi')
     ];
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('tb_barang',$data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diupdate</div>');
      redirect('inventory');
       }
    }

    public function cetak()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model arsip
      $this->load->model('Inventory_model','arsip');
      $data['tampil'] = $this->arsip->tampil();
      
    //  var_dump($data['tampil']);die;
      $this->load->view('inventory/cetak',$data);
    }

    public function hapus($id)
    {
        $this->Inventory_model->hapus($id);
         $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
         redirect('inventory');
    }

  }