<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Welcome!';
            $this->load->view('login', $data);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $admin = $this->Model_Csb->select(['email' => $email], 'admin')->row_array();

            if ($admin != null) {
                if (md5($password) == $admin['password']) {
                    $data = [
                        'email' => $admin['email']
                    ];

                    $this->session->set_userdata($data);
                    redirect(base_url('admin'));
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                    redirect(base_url());
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Address Not Found!</div>');
                redirect(base_url());
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Thank You!</div>');
        redirect('login');
    }
}
