<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model {

    public $id;
    public $nama;
    public $username;
    public $password;
    public $email;
    public $foto;

    function add(){
        // insert user
        $this->db->insert('user', $this);
    }

    function getUser($id = 0){
        if($id == 0){
            $data = $this->db->get('user');
            return $data->result();
        } else {
            $data = $this->db->get_where('user', array('id' => $id));
            return $data->row();
        }

    }

    function cekUser($user, $pass){
        $hasil = $this->db->get_where('user', array(
            'username' => $user,
            'password' => $pass
        ));

        return $hasil->row();
    }

    function updateUser($id){
        $this->db->update('user', $this, array('id' => $id));
    }

    function delete($id){
        $this->db->delete('user', array('id' => $id));
    }

    public function cekSession() {
        $user = $this->session->userdata('username');
        if (empty($user)) {
            $this->session->sess_destroy();
            redirect(base_url('login'));
        }
    }

}
