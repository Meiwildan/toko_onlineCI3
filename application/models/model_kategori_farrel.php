<?php

class Model_kategori_farrel extends CI_Model
{
    public function data_elektronik_farrel()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'elektronik'));
    }
    public function data_pakaian_pria_farrel()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'pakaian pria'));
    }
    public function data_pakaian_wanita_farrel()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'pakaian wanita'));
    }
    public function data_pakaian_anak_anak_farrel()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'pakaian anak anak'));
    }
    public function data_peralatan_olahraga_farrel()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'peralatan olahraga'));
    }
}