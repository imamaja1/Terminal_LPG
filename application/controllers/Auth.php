<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['status'])) {
            if ($_SESSION['level'] == 1) {
                redirect('terminal');
            } else if ($_SESSION['level'] == 2) {
                redirect('spbe');
            } else if ($_SESSION['level'] == 3) {
                redirect('patra_niaga');
            }
        }
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function Patra_niaga()
    {
        $this->load->view('login1');
    }
    public function SPBE()
    {
        $this->load->view('login2');
    }
}
