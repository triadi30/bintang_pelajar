<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            //jika usernya ada
            if ($user['is_active'] == 1) {
                //jika usernya aktif
                if (password_verify($password, $user['password'])) {
                    //passwordnya benar
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Login Gagal! Password salah </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Akun anda belum diaktivasi! Cek email Anda! </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Login Gagal! Email tidak ada! </div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $data['sekolah_pilihan'] = $this->db->get('cabang')->result_array();
        //form validasi
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'matches' => 'password not match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'matches' => 'password not match!'
        ]);
        $this->form_validation->set_rules('tempat', 'Tempat', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('asalsekolah', 'Asalsekolah', 'required|trim');
        $this->form_validation->set_rules('sekolah_pilihan', 'sekolah_pilihan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal', true)),
                'nisn' => htmlspecialchars($this->input->post('nisn', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'asal_sekolah' => htmlspecialchars($this->input->post('asalsekolah', true)),
                'sekolah_pilihan' => htmlspecialchars($this->input->post('sekolah_pilihan', true)),
                'status' => "Terdaftar",
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil mendaftar! Silahkan Login </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil logout </div>');
        redirect('auth');
    }
}
