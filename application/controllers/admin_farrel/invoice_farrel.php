<?php

class Invoice_farrel extends CI_Controller{
    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data_farrel();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice_farrel($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan_farrel($id_invoice);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_invoice_farrel', $data);
        $this->load->view('templates_admin/footer');
    }
}