<?php

class Inventory_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_barang');
        return $query->result_array();
    }

    public function getUbah($id)
    {
    	$query =  $this->db->get_where('tb_barang',['id'=>$id]);
        return $query->row_array();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_barang');
    }

 }