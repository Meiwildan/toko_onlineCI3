<?php

class dashboard extends CI_Controller{

    Public function index()
    {
        $data['barang'] = $this->model_barang_farrel->tampil_data_farrel()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard_farrel', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang_farrel->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg
            
    );
    
    $this->cart->insert($data);
    redirect('dashboard/index');
    }
    public function detail_keranjang_farrel()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang_farrel');
        $this->load->view('templates/footer');
    }
    public function hapus_keranjang_farrel()
    {
        $this->cart->destroy();
        redirect('dashboard/index');

    }
    public function pembayaran_farrel()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran_farrel');
        $this->load->view('templates/footer');
    }
    public function proses_pesanan_farrel()
    {
        $is_processed = $this->model_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan_farrel');
            $this->load->view('templates/footer');
        } else{
            echo "Maaf pesanan anda gagal di proses";
        }
      
    }
    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang_farrel->detail_brg_farrel($id_brg);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang_farrel', $data);
        $this->load->view('templates/footer');
    }
}