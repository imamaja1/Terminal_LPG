<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SPBE extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['status'])) {
            if ($_SESSION['level'] == 1) {
                redirect('terminal');
            } else if ($_SESSION['level'] == 3) {
                redirect('patra_niaga');
            }
        } else {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['side'] = 'dashboard';
        $this->load->view('SPBE/dashboard', $data);
    }
    public function profil()
    {
        $data['side'] = 'profil';
        $this->load->view('SPBE/profil', $data);
    }
    public function permintaan()
    {
        $data['side'] = 'permintaan';
        $this->load->view('SPBE/permintaan', $data);
    }
    public function log_out()
    {
        session_destroy();
        redirect();
    }
}
