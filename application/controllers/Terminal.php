<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Terminal extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['status'])) {
            if ($_SESSION['level'] == 2) {
                redirect('spbe');
            }
        } else {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['side'] = 'dashboard';
        $this->load->view('Terminal/dashboard', $data);
    }
    public function profil()
    {
        $data['side'] = 'profil';
        $this->load->view('Terminal/profil', $data);
    }
    #activitas
    public function monitoring()
    {
        $data['side'] = 'monitoring';
        $this->load->view('Terminal/monitoring', $data);
    }


    #data
    public function spbe()
    {
        $data['side'] = 'spbe';
        $this->load->view('Terminal/spbe', $data);
    }
    public function patra_niaga()
    {
        $data['side'] = 'patra_niaga';
        $this->load->view('Terminal/patra_niaga', $data);
    }
    // logout
    public function log_out()
    {
        session_destroy();
        redirect();
    }
}
