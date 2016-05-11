<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->user->cekSession();
    }

    function index() {
        $id = $this->session->userdata('id');
        $data['user'] = $this->user->getUser($id);
        $this->load->view('tampil_profil', $data);
    }

    function edit(){
        $id = $this->session->userdata('id');
        $data['user'] = $this->user->getUser($id);
        $this->load->view('edit_profil', $data);

    }

    function update(){
        // update data
        if($this->input->post('btn_update')){
            $this->user->id = $this->input->post('id');
            $this->user->nama = $this->input->post('nama');
            $this->user->username = $this->input->post('username');

            if($this->input->post('password')){
                $this->user->password = md5($this->input->post('password'));
            } else {
                $this->user->password = $this->session->userdata('password');
            }

            $this->user->email = $this->input->post('email');

            $this->uploadFoto();

            $this->user->updateUser($this->user->id);
            redirect('profil');
        }

    }

    private function uploadFoto(){
        $config['upload_path']          = './assets/cuitter/img/profil/';
        $config['allowed_types']        = 'jpg|png|gif';
        $config['file_name']            = $this->input->post('id');
        $config['overwrite']            = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')){
            $this->user->foto = $this->upload->data('file_name');
        } else {
            $this->user->foto = $this->input->post('foto_lama');
        }
    }

}
