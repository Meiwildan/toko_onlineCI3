<?php

class dashboard_admin_farrel extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard_farrels');
        $this->load->view('templates_admin/footer');
    }
}