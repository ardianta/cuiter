<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    function index(){
        //tampilkan form login
        $this->load->view('form_login');
    }

    function prosesLogin(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $terdaftar = $this->user->cekUser($username, $password);

        if($terdaftar){
            // buat session
            $data_session = array(
                'id' => $terdaftar->id,
                'username' => $username,
                'password' => $password
            );
            $this->session->set_userdata($data_session);
            print_r($this->session->userdata);
            redirect(base_url('profil'));
        } else {
            // gagal login
            redirect(base_url('login'));
            $this->session->set_flashdata('pesan', 'Gagal Login');
        }
    }

    function logout(){
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        redirect(base_url('login'));
    }

}
