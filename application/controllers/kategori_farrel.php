<?php

class Kategori_farrel extends CI_Controller
{
    public function elektronik_farrel()
    {
        $data['elektronik'] = $this->model_kategori_farrel->data_elektronik_farrel()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik_farrel', $data);
        $this->load->view('templates/footer');
    }
    public function pakaian_pria_farrel()
    {
        $data['pakaian_pria'] = $this->model_kategori_farrel->data_pakaian_pria_farrel()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_pria_farrel', $data);
        $this->load->view('templates/footer');
    }
    public function pakaian_wanita_farrel()
    {
        $data['pakaian_wanita'] = $this->model_kategori_farrel->data_pakaian_wanita_farrel()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_wanita_farrel', $data);
        $this->load->view('templates/footer');
    }
    public function pakaian_anak_anak_farrel()
    {
        $data['pakaian_anak_anak'] = $this->model_kategori_farrel->data_pakaian_anak_anak_farrel()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_anak_anak_farrel', $data);
        $this->load->view('templates/footer');
    }
    public function peralatan_olahraga_farrel()
    {
        $data['peralatan_olahraga'] = $this->model_kategori_farrel->data_peralatan_olahraga_farrel()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('peralatan_olahraga_farrel', $data);
        $this->load->view('templates/footer');
    }
}