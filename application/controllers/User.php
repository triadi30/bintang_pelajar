<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        if ($data['user']['role_id'] == 1) {
            redirect('User/kepalacabang');
        } elseif ($data['user']['role_id'] == 2) {
            redirect('User/panitia');
        } elseif ($data['user']['role_id'] == 3) {
            redirect('User/siswa');
        }
    }

    public function kepalacabang()
    {
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['nama_user'] = $data['user']['name'];
        $data['role_user'] = $data['user']['role_id'];
        $id_user = $data['user']['id'];
        $data['cabang'] = $this->db->get_where('cabang', ['id_user' => $id_user])->row_array();
        $nama_cabang = $data['cabang']['nama_cabang'];
        $data['siswa'] = $this->db->get_where('user', ['sekolah_pilihan' => $nama_cabang])->result_array();

        $data['title'] = 'Halaman Siswa';
        $this->load->view('templates/user_header', $data);
        $this->load->view('cabang/index');
        $this->load->view('templates/user_footer');
    }

    public function panitia()
    {
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $data['nama_user'] = $data['user']['name'];
        $data['role_user'] = $data['user']['role_id'];
        $data['siswa'] = $this->db->get_where('user', ['role_id' => 3])->result_array();

        $data['title'] = 'Halaman Siswa';
        $this->load->view('templates/user_header', $data);
        $this->load->view('panitia/index');
        $this->load->view('templates/user_footer');
    }

    public function siswa()
    {
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $data['nama_user'] = $data['user']['name'];
        $data['role_user'] = $data['user']['role_id'];

        $data['title'] = 'Halaman Siswa';
        $this->load->view('templates/user_header', $data);
        $this->load->view('siswa/index');
        $this->load->view('templates/user_footer');
    }
}
