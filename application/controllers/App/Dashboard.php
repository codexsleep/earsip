<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if (!$this->session->userdata('logged')) {
            redirect('app/auth/login');
        }
    }

    public function index()
    {
        $data['title'] = ucfirst("Dashboard"); 
        $this->load->view('app/layout/header', $data); 
        $this->load->view('app/dashboard/index', $data); 
        $this->load->view('app/layout/footer'); 
    }
}
