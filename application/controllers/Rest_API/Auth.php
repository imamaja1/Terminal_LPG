<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed

class Auth extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_terminal_lpg');
        $this->load->model('M_spbe');
        $this->load->model('M_patra_niaga');
    }
    public function index_get()
    {
        $this->response($_SESSION['nama'], REST_Controller::HTTP_CREATED);
    }

    public function Terminal_post()
    {
        $data = array(
            'username' => $this->post('username'),
            'password' => md5($this->post('password')),
        );
        if ($this->M_terminal_lpg->auth($data)->num_rows() > 0) {
            $nama = $this->M_terminal_lpg->auth($data)->row();
            $respone['status'] = 200;
            $respone['error'] = false;
            $respone['sesion'] = array(
                'level' => '1',
                'status' => 'aktif',
                'nama' => $nama,
            );
            $this->session->set_userdata($respone['sesion']);
        } else {
            $respone['status'] = 404;
            $respone['error'] = false;
            $respone['massage'] = "username or password wrong";
        }
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }
    public function Patra_niaga_post()
    {
        $data = array(
            'username' => $this->post('username'),
            'password' => md5($this->post('password')),
        );
        if ($this->M_patra_niaga->auth($data)->num_rows() > 0) {
            $nama = $this->M_patra_niaga->auth($data)->row();
            $respone['status'] = 200;
            $respone['error'] = false;
            $respone['sesion'] = array(
                'level' => '3',
                'status' => 'aktif',
                'nama' => $nama,
            );
            $this->session->set_userdata($respone['sesion']);
        } else {
            $respone['status'] = 404;
            $respone['error'] = false;
            $respone['massage'] = "username or password wrong";
        }
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }
    public function SPBE_post()
    {
        $data = array(
            'username' => $this->post('username'),
            'password' => md5($this->post('password')),
        );
        if ($this->M_spbe->auth($data)->num_rows() > 0) {
            $nama = $this->M_spbe->auth($data)->row();
            $respone['status'] = 200;
            $respone['error'] = false;
            $respone['sesion'] = array(
                'level' => '2',
                'status' => 'aktif',
                'nama' => $nama,
            );
            $this->session->set_userdata($respone['sesion']);
        } else {
            $respone['status'] = 404;
            $respone['error'] = false;
            $respone['massage'] = "username or password wrong";
        }
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }
}
