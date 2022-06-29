<?php
class Model_barang_farrel extends CI_Model
{
    public function tampil_data_farrel()
    {
        return $this->db->get('tb_barang');
    }
    public function tambah_barang_farrel($data, $table)
    {
        return $this->db->insert($table, $data);
    }
    public function edit_barang_farrel($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data_farrel($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_data_farrel($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function find($id)
    {
        $result = $this->db->where('id_brg', $id)
                            ->limit(1)
                            ->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }
    public function detail_brg_farrel($id_brg)
    {
        $result = $this->db->where('id_brg', $id_brg)->get('tb_barang');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
}