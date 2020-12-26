<?php


class Login extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('isLogin') && $this->session->userdata('scope') == 'admin')
        {
            redirect(base_url());
        }
    }

    public function index()
    {
        $this->load->view('login', $this->parseData);
    }

    public function authLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($username == 'admin' && $password == 'admin') {
            $dataSession = [
                'name' => 'Administrator',
                'isLogin' => true,
                'scope' => 'admin',
            ];
            $this->session->set_userdata($dataSession);
            redirect(base_url());
        }else{
            $this->parseData['isLogin'] = false;
            $this->load->view('login', $this->parseData);
        }

    }
}