<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Redirect extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect('app/dashboard');
    }
}
