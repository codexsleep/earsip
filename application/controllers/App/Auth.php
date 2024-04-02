<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }
    public function index()
    {
        redirect('app/auth/login');
    }
    public function login()
    {
        // Periksa apakah pengguna sudah login
        if ($this->session->userdata('logged')) {
            redirect('app/dashboard');
        }
        if ($this->input->post()) {
            $email = htmlspecialchars($this->input->post('email'), ENT_QUOTES);
            $email = $this->security->xss_clean($email);
            $password = htmlspecialchars($this->input->post('password'), ENT_QUOTES);
            $password = $this->security->xss_clean($password);

            // Validasi input
            if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
                // Ambil data pengguna berdasarkan email dari model
                $userData = $this->Auth_model->get($email);
                if ($userData && $userData->num_rows() > 0) { // Periksa apakah data pengguna ditemukan
                    $result = $userData->row();
                    // Verifikasi password
                    if (!empty($result->password) && password_verify($password, $result->password)) { // Periksa apakah password tidak kosong
                        if ($result->status == 'aktif') {
                            // Atur data sesi pengguna setelah login berhasil
                            $data = [
                                'logged' => TRUE,
                                'uid' => $result->id,
                                'email' => $result->email,
                                'nama' => $result->nama

                            ];
                            $this->session->set_userdata($data);
                            // Notifikasi berhasil login
                            $this->session->set_flashdata('success', 'Login berhasil. Anda akan dialihkan ke dashboard.');
                            redirect('app/dashboard');
                        } else {
                            $this->session->set_flashdata('error', 'Akun Anda belum aktif. Mohon hubungi admin.');
                        }
                    } else {
                        $this->session->set_flashdata('error', 'Email atau password salah. Mohon periksa kembali.');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Email tidak terdaftar.');
                }
            } else {
                $this->session->set_flashdata('error', 'Email dan password harus diisi dengan benar.');
            }
        }
        // Jika tidak ada post, tampilkan halaman login
        $data['title'] = "Login";
        $this->load->view("app/auth/vw_login", $data);
    }

    public function logout()
    {
        // Hapus data sesi pengguna
        $this->session->unset_userdata('logged');
        $this->session->unset_userdata('uid');
        $this->session->unset_userdata('email');
        // Redirect ke halaman login
        redirect('app/auth/login');
    }


}
