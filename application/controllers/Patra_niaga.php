<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Patra_niaga extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['status'])) {
            if ($_SESSION['level'] == 1) {
                redirect('terminal');
            } else if ($_SESSION['level'] == 2) {
                redirect('spbe');
            }
        } else {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['side'] = 'dashboard';
        $this->load->view('patra_niaga/dashboard', $data);
    }
    public function profil()
    {
        $data['side'] = 'profil';
        $this->load->view('patra_niaga/profil', $data);
    }
    public function permintaan()
    {
        $data['side'] = 'permintaan';
        $this->load->view('patra_niaga/permintaan', $data);
    }
    public function supir()
    {
        $data['side'] = 'supir';
        $this->load->view('patra_niaga/supir', $data);
    }
    public function truk()
    {
        $data['side'] = 'truk';
        $this->load->view('patra_niaga/truk', $data);
    }
    function log_out()
    {
        session_destroy();
        redirect();
    }
}
