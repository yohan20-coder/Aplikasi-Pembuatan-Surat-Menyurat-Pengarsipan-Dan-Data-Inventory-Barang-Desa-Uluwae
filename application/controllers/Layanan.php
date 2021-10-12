<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller
{

    public function __construct()
    {
      parent::__construct();
      $this->load->model('Layanan_model');
    }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      // var_dump($data['jml']);die;
      $data['judul'] = 'Halaman Admin';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('layanan/index',$data);
      $this->load->view('template/footer'); 
    }

    public function ketusaha()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //data pegawai
      $data['tam'] = $this->db->get('pegawai')->result_array();
      //data penduduk
      $data['tampil'] = $this->db->get('penduduk')->result_array();

      // var_dump($data['jml']);die;

      // validasi input data
      $this->form_validation->set_rules('nosurat', 'Nosurat', 'required|trim|is_unique[tb_usaha.no_surat]',[
        'required' => 'No. Surat Harus Diisi',
        'is_unique' => 'Maaf No. Surat Sudah Ada'
      ]);

      $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required|trim',[
        'required' => 'Tanggal Surat Harus Diisi'
      ]);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
    ]);

    $this->form_validation->set_rules('penduduk', 'Penduduk', 'required|trim',[
    'required' => 'Nama Penduduk Harus Diisi'
    ]);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
  ]);
  $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',[
    'required' => 'Alamat Harus Diisi'
  ]);
  $this->form_validation->set_rules('usaha', 'Usaha', 'required|trim',[
    'required' => 'Nama Usaha Harus Diisi'
  ]);
  $this->form_validation->set_rules('umur', 'umur', 'required|trim',[
    'required' => 'Umur Harus Diisi'
  ]);
  $this->form_validation->set_rules('rt', 'RT', 'required|trim',[
    'required' => 'Umur Harus Diisi'
  ]);
  

  if($this->form_validation->run() == FALSE){
      $data['judul'] = 'Halaman Entry Keteranggan Usaha';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('layanan/ketusaha',$data);
      $this->load->view('template/footer'); 
    }else{
      $data = [
        'no_surat' => $this->input->post('nosurat'),
        'tanggal' => $this->input->post('tglsurat'),
        'nma_pej' => $this->input->post('nama2'),
        'jabatan' => $this->input->post('jabatan'),
        'alamat'  => $this->input->post('alamat_pej'),
        'nma_pen'=> $this->input->post('napen'),
        'umur' => $this->input->post('umur'),
        'usaha' => $this->input->post('usaha'),
        'rt' =>  $this->input->post('rt'),
        'alamat_pen' => $this->input->post('alamat')
    ];
     $this->db->insert('tb_usaha',$data);
     $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
     redirect('layanan/list');
    }
 }

 public function list()
 {
    //mengambil data dari session di controller auth
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //memanggil model Master data
    $this->load->model('Layanan_model','kartu');
    $data['tampil'] = $this->kartu->tampil();
    
  //  var_dump($data['tampil']);die;
    $data['judul'] = 'Halaman Cetak Keterangan Usaha';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('layanan/list',$data);
    $this->load->view('template/footer');
 }

    public function get_pej()
    {
      $id = $this->input->post('id');
      $data = $this->Layanan_model->get_pej($id);
      echo json_encode($data);
    }

    public function get_pen()
    {
      $id = $this->input->post('id');
      $data = $this->Layanan_model->get_pen($id);
      echo json_encode($data);
    }


 
 public function cetak($id)
 {
    //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model layanan
   $this->load->model('Layanan_model','surat');
   $data['tampil'] = $this->surat->cetak($id);
   
 //  var_dump($data['tampil']);die;
   $this->load->view('layanan/cetak',$data);
 }

 public function cetakk($id)
 {
    //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model layanan
   $this->load->model('Layanan_model','surat');
   $data['tampil'] = $this->surat->cetak($id);
   
 //  var_dump($data['tampil']);die;
   $this->load->view('layanan/cetakk',$data);
 }

 public function hapus($id)
 {
   $this->Layanan_model->hapus($id);
   $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
   redirect('layanan/list');
 }

 public function hapuss($id)
 {
   $this->Layanan_model->hapuss($id);
   $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
   redirect('layanan/listdom');
 }

  public function hapusss($id)
 {
   $this->Layanan_model->hapusss($id);
   $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
   redirect('layanan/listkel');
 }

 public function listdom()
 {
    //mengambil data dari session di controller auth
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //memanggil model Master data
    $this->load->model('Layanan_model','dom');
    $data['tampil'] = $this->dom->domisili();
    
  //  var_dump($data['tampil']);die;
    $data['judul'] = 'Halaman Cetak Keterangan Domisili';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('layanan/listdom',$data);
    $this->load->view('template/footer');
 }

 public function domisili()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //data pegawai
      $data['tam'] = $this->db->get('pegawai')->result_array();
      //data penduduk
      $data['tampil'] = $this->db->get('penduduk')->result_array();

      // var_dump($data['jml']);die;

      // validasi input data
      $this->form_validation->set_rules('nosurat', 'Nosurat', 'required|trim|is_unique[tb_usaha.no_surat]',[
        'required' => 'No. Surat Harus Diisi',
        'is_unique' => 'Maaf No. Surat Sudah Ada'
      ]);

      $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required|trim',[
        'required' => 'Tanggal Surat Harus Diisi'
      ]);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
    ]);

    $this->form_validation->set_rules('penduduk', 'Penduduk', 'required|trim',[
    'required' => 'Nama Penduduk Harus Diisi'
    ]);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
  ]);
  $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',[
    'required' => 'Alamat Harus Diisi'
  ]);
  // $this->form_validation->set_rules('usaha', 'Usaha', 'required|trim',[
  //   'required' => 'Nama Usaha Harus Diisi'
  // ]);
  $this->form_validation->set_rules('umur', 'umur', 'required|trim',[
    'required' => 'Umur Harus Diisi'
  ]);
  $this->form_validation->set_rules('rt', 'RT', 'required|trim',[
    'required' => 'Umur Harus Diisi'
  ]);
  $this->form_validation->set_rules('ttl', 'TTL', 'required|trim',[
    'required' => 'Umur Harus Diisi'
  ]);
  

  if($this->form_validation->run() == FALSE){
      $data['judul'] = 'Halaman Entry Domisili';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('layanan/domisili',$data);
      $this->load->view('template/footer'); 
    }else{
      $data = [
        'no_surat' => $this->input->post('nosurat'),
        'tanggal' => $this->input->post('tglsurat'),
        'nma_pej' => $this->input->post('nama2'),
        'jabatan' => $this->input->post('jabatan'),
        'alamat'  => $this->input->post('alamat_pej'),
        'nma_pen'=> $this->input->post('napen'),
        'umur' => $this->input->post('umur'),
        'rt' =>  $this->input->post('rt'),
        'ttl' => $this->input->post('ttl'),
        'alamat_pen' => $this->input->post('alamat')
    ];
     $this->db->insert('tb_domisilii',$data);
     $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
     redirect('layanan/listdom');
    }
 }

 public function cetakkk($id)
 {
    //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model layanan
   $this->load->model('Layanan_model','surat');
   $data['tampil'] = $this->surat->cetakdom($id);
   
 //  var_dump($data['tampil']);die;
   $this->load->view('layanan/cetakkk',$data);
 }


 public function surkel()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //data pegawai
      $data['tam'] = $this->db->get('pegawai')->result_array();
      //data penduduk
      $data['tampil'] = $this->db->get('penduduk')->result_array();

      // var_dump($data['jml']);die;

      // validasi input data
      $this->form_validation->set_rules('nosurat', 'Nosurat', 'required|trim|is_unique[tb_usaha.no_surat]',[
        'required' => 'No. Surat Harus Diisi',
        'is_unique' => 'Maaf No. Surat Sudah Ada'
      ]);

      $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required|trim',[
        'required' => 'Perihal Surat Harus Diisi'
      ]);
      $this->form_validation->set_rules('peri', 'Peri', 'required|trim',[
        'required' => 'Tanggal Surat Harus Diisi'
      ]);

  
  

  if($this->form_validation->run() == FALSE){
      $data['judul'] = 'Halaman Entry Surat Keluar Ke RT/RW/Kapala Dusun';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('layanan/surkel',$data);
      $this->load->view('template/footer'); 
    }else{
      $data = [
        'no_surat' => $this->input->post('nosurat'),
        'perihal' => $this->input->post('peri'),
        'tgl_surat' => $this->input->post('tglsurat'),
        'nma_pej' => $this->input->post('nama2'),
        'jabatan' => $this->input->post('jabatan'),
        'isi' => $this->input->post('isi'),
        'tgl_kegiatan' => $this->input->post('hari'),
        'waktu' => $this->input->post('waktu'),
        'lokasi' => $this->input->post('lokasi')
    ];
     $this->db->insert('tb_surkel',$data);
     $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
     redirect('layanan/listkel');
    }
 }

 public function listkel()
 {
    //mengambil data dari session di controller auth
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //memanggil model Master data
    $this->load->model('Layanan_model','dom');
    $data['tampil'] = $this->dom->surkel();
    
  //  var_dump($data['tampil']);die;
    $data['judul'] = 'Halaman Cetak Keterangan Surat Keluar';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('layanan/listkel',$data);
    $this->load->view('template/footer');
 }

 public function print($id)
 {
    //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model layanan
   $this->load->model('Layanan_model','surat');
   $data['tampil'] = $this->surat->cetaksurkel($id);
   
 //  var_dump($data['tampil']);die;
   $this->load->view('layanan/print',$data);
 }


 public function sertifikat()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //data pegawai
      $data['tam'] = $this->db->get('pegawai')->result_array();
      //data penduduk
      $data['tampil'] = $this->db->get('penduduk')->result_array();

      // var_dump($data['jml']);die;

      // validasi input data
      $this->form_validation->set_rules('nosurat', 'Nosurat', 'required|trim|is_unique[tb_sertifikat.no_surat]',[
        'required' => 'No. Surat Harus Diisi',
        'is_unique' => 'Maaf No. Surat Sudah Ada'
      ]);

      $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required|trim',[
        'required' => 'Tanggal Surat Harus Diisi'
      ]);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
    ]);

    $this->form_validation->set_rules('penduduk', 'Penduduk', 'required|trim',[
    'required' => 'Nama Penduduk Harus Diisi'
    ]);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
  ]);
  $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',[
    'required' => 'Alamat Harus Diisi'
  ]);
 
  $this->form_validation->set_rules('umur', 'umur', 'required|trim',[
    'required' => 'Umur Harus Diisi'
  ]);
  $this->form_validation->set_rules('rt', 'RT', 'required|trim',[
    'required' => 'Umur Harus Diisi'
  ]);
  

  if($this->form_validation->run() == FALSE){
      $data['judul'] = 'Halaman Entry Keteranggan Sertifikat Tanah';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('layanan/sertifikat',$data);
      $this->load->view('template/footer'); 
    }else{
      $data = [
        'no_surat' => $this->input->post('nosurat'),
        'tanggal' => $this->input->post('tglsurat'),
        'nma_pej' => $this->input->post('nama2'),
        'jabatan' => $this->input->post('jabatan'),
        'alamat'  => $this->input->post('alamat_pej'),
        'nma_pen'=> $this->input->post('napen'),
        'umur' => $this->input->post('umur'),
        'rt' =>  $this->input->post('rt'),
        'alamat_pen' => $this->input->post('alamat')
    ];
     $this->db->insert('tb_sertifikat',$data);
     $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
     redirect('layanan/listser');
    }
 }

public function listser()
 {
    //mengambil data dari session di controller auth
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //memanggil model Master data
    $this->load->model('Layanan_model','dom');
    $data['tampil'] = $this->dom->serti();
    
  //  var_dump($data['tampil']);die;
    $data['judul'] = 'Halaman Cetak Keterangan Surat Sertifikat Tanah';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('layanan/listser',$data);
    $this->load->view('template/footer');
 }


 public function cetakser($id)
 {
    //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model layanan
   $this->load->model('Layanan_model','surat');
   $data['tampil'] = $this->surat->cetakser($id);
   
 //  var_dump($data['tampil']);die;
   $this->load->view('layanan/cetakser',$data);
 }

 public function mampu()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //data pegawai
      $data['tam'] = $this->db->get('pegawai')->result_array();
      //data penduduk
      $data['tampil'] = $this->db->get('penduduk')->result_array();

      // var_dump($data['jml']);die;

      // validasi input data
      $this->form_validation->set_rules('nosurat', 'Nosurat', 'required|trim|is_unique[tb_mampu.no_surat]',[
        'required' => 'No. Surat Harus Diisi',
        'is_unique' => 'Maaf No. Surat Sudah Ada'
      ]);

  //     $this->form_validation->set_rules('tglsurat', 'Tglsurat', 'required|trim',[
  //       'required' => 'Tanggal Surat Harus Diisi'
  //     ]);

  //   $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
  //     'required' => 'Nama Harus Diisi'
  //   ]);

  //   $this->form_validation->set_rules('penduduk', 'Penduduk', 'required|trim',[
  //   'required' => 'Nama Penduduk Harus Diisi'
  //   ]);

  //   $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
  //     'required' => 'Nama Harus Diisi'
  // ]);
  // $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',[
  //   'required' => 'Alamat Harus Diisi'
  // ]);
 
  // $this->form_validation->set_rules('umur', 'umur', 'required|trim',[
  //   'required' => 'Umur Harus Diisi'
  // ]);
  // $this->form_validation->set_rules('rt', 'RT', 'required|trim',[
  //   'required' => 'Umur Harus Diisi'
  // ]);
  

  if($this->form_validation->run() == FALSE){
      $data['judul'] = 'Halaman Entry Keterangan Tidak Mampu';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('layanan/mampu',$data);
      $this->load->view('template/footer'); 
    }else{
      $data = [
        'no_surat' => $this->input->post('nosurat'),
        'tanggal' => $this->input->post('tglsurat'),
        'nma_pej' => $this->input->post('nama2'),
        'jabatan' => $this->input->post('jabatan'),
        'alamat'  => $this->input->post('alamat_pej'),
        'nma_pen'=> $this->input->post('napen'),
        'ttl'=> $this->input->post('ttl'),
        'jk'=> $this->input->post('jk'),
        'agama' => $this->input->post('agama'),
        'rt' =>  $this->input->post('rt'),
        'alamat_pen' => $this->input->post('alamat')
    ];
     $this->db->insert('tb_mampu',$data);
     $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
     redirect('layanan/listmampu');
    }
 }

 public function listmampu()
 {
    //mengambil data dari session di controller auth
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //memanggil model Master data
    $this->load->model('Layanan_model','dom');
    $data['tampil'] = $this->dom->mampu();
    
  //  var_dump($data['tampil']);die;
    $data['judul'] = 'Halaman Cetak Surat Keterangan Tidak Mampu';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('layanan/listmampu',$data);
    $this->load->view('template/footer');
 }


public function cetakmampu($id)
 {
    //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model layanan
   $this->load->model('Layanan_model','surat');
   $data['tampil'] = $this->surat->cetakmampu($id);
   
 //  var_dump($data['tampil']);die;
   $this->load->view('layanan/cetakmampu',$data);
 }

  public function hapusmampu($id)
 {
   $this->Layanan_model->hapusmampu($id);
   $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
   redirect('layanan/listmampu');
 }

  public function hapussertifikat($id)
 {
   $this->Layanan_model->hapusser($id);
   $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
   redirect('layanan/listser');
 }


}