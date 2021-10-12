<?php

class Layanan_model extends CI_Model
{

    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_usaha');
        return $query->result_array();
    }

     public function domisili()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_domisilii');
        return $query->result_array();
    }

    public function surkel()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_surkel');
        return $query->result_array();
    }

    public function serti()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_sertifikat');
        return $query->result_array();
    }

     public function cetakmampu($id)
    {
        $query =  $this->db->get_where('tb_mampu',['id'=>$id]);
        return $query->row_array();
    }


    public function mampu()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_mampu');
        return $query->result_array();
    }

      public function cetakdom($id)
    {
        $query =  $this->db->get_where('tb_domisilii',['id'=>$id]);
        return $query->row_array();
    }

      public function cetakser($id)
    {
        $query =  $this->db->get_where('tb_sertifikat',['id'=>$id]);
        return $query->row_array();
    }

       public function cetaksurkel($id)
    {
        $query =  $this->db->get_where('tb_surkel',['id'=>$id]);
        return $query->row_array();
    }

    public function get_pej($id)
    {
        $this->db->from('pegawai');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // public function get_pej($id)
    // {
    // 	$query =  $this->db->get_where('pegawai',['id'=>$id]);
    //     return $query->result_array();
    // }

    public function get_pen($id)
    {
        $this->db->from('penduduk');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak($id)
    {
    	$query =  $this->db->get_where('tb_usaha',['id'=>$id]);
        return $query->row_array();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_usaha');
    }

    public function hapusmampu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_mampu');
    }

     public function hapusser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_sertifikat');
    }

     public function hapuss($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_domisilii');
    }

     public function hapusss($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_surkel');
    }

    public function tampilizin()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('izinusaha');
        return $query->result_array();
    }

    public function hapusizin($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('izinusaha');
    }
}