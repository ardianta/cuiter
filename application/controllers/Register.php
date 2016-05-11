<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function index(){
        // tampilkan form register
        $this->load->view('form_register');
    }

    function simpan(){
        if($this->input->post('btn_simpan')){
            // simpan ke database
            $this->user->nama = $this->input->post('nama');
            $this->user->username = $this->input->post('username');
            $this->user->password = md5($this->input->post('password'));
            $this->user->email = $this->input->post('email');
            $this->user->foto = "default.png";
            $this->user->add();
            redirect(base_url('login'));
        } else {
            redirect(base_url('register'));
        }

    }

}
