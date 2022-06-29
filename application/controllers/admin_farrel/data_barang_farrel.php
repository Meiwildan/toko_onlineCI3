<?php
class data_barang_farrel extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_barang_farrel->tampil_data_farrel()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang_farrel', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi_farrel()
    {
        $nama_brg     = $this->input->post('nama_brg');
        $keterangan   = $this->input->post('keterangan');
        $kategori     = $this->input->post('kategori');
        $harga        = $this->input->post('harga');
        $stock        = $this->input->post('stock');
        $gambar       = $_FILES['gambar'] ['name']   ;
        if ($gambar=''){}else{
            
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';
            $config ['upload_path'] = './uploads';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo"Gambar gagal di upload";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stock'         => $stock,
            'gambar'        => $gambar
        );
        $this->model_barang_farrel->tambah_barang_farrel($data, 'tb_barang');
        redirect('admin_farrel/data_barang_farrel/index');
    }
    public function edit($id)
    {
        $where = array('id_brg' =>$id);
        $data['barang'] = $this->model_barang_farrel->edit_barang_farrel($where, 'tb_barang')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang_farrel', $data);
        $this->load->view('templates_admin/footer');
    }
    public function update()
    {
        $id            = $this->input->post('id_brg');
        $nama_brg      = $this->input->post('nama_brg');
        $keterangan    = $this->input->post('keterangan');
        $kategori      = $this->input->post('kategori');
        $harga         = $this->input->post('harga');
        $stock         = $this->input->post('stock');

        $data = array(
            'nama_brg' => $nama_brg,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stock' => $stock
            
        );
        $where = array(
            'id_brg' =>$id
        );
        $this->model_barang_farrel->update_data_farrel($where, $data, 'tb_barang');
        redirect('admin_farrel/data_barang_farrel/index');
    }
    public function hapus ($id)
    {
        $where = array('id_brg' => $id);
        $this->model_barang_farrel->hapus_data_farrel($where, 'tb_barang');
        redirect('admin_farrel/data_barang_farrel/index');
    }
}