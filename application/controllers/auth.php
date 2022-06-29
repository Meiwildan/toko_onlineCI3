<?php

class auth extends CI_Controller {
    public function login_farrel()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('form_login_farrel');
            $this->load->view('templates/footer');
        }else{
            $auth = $this->model_auth_farrel->cek_login_farrel();

            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        Username atau Password Anda Salah You should check in on some of those fields below.
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>');
                redirect('auth/login_farrel');
            }else{
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch($auth->role_id){
                    case 1 : redirect('admin_farrel/dashboard_admin_farrel');
                    break;
                    case 2 : redirect('dashboard');
                    break;
                    default: break;
                }
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login_farrel');
    }
}