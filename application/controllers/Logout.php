<?php


class Logout extends My_Controller
{
    public function authLogout()
    {
        $this->session->sess_destroy();
        redirect(base_url('/auth/login'));
    }
}