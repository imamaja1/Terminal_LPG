<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Cek_permintaan extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_permintaan');
    }
    public function index_get()
    {
        $tgl = date('y/m/d');
        $responese['data'] = $this->M_permintaan->cek($tgl)->num_rows();
        $this->response($responese, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
}
