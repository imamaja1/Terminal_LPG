<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Terminal_lpg extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_terminal_lpg');
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === NULL) {
            $data = $this->M_terminal_lpg->all_terminal_lpg();
            if ($data) {
                $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        } else {
            $data = $this->M_terminal_lpg->one_terminal_lpg($id);
            if ($data) {
                $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }
    }

    public function index_post()
    {
        $data = array(
            'nama_terminal' => $this->post('nama_terminal'),
            'telepon_terminal' => $this->post('telepon_terminal'),
            'alamat_terminal' => $this->post('alamat_terminal'),
            'username' => $this->post('username'),
            'password' => md5($this->post('password'))
        );
        $respone = $this->M_terminal_lpg->add_terminal_lpg($data);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }

    public function index_put()
    {
        if ($this->put('password')) {
            $data = array(
                'kode_terminal' => $this->put('kode_terminal'),
                'nama_terminal' => $this->put('nama_terminal'),
                'telepon_terminal' => $this->put('telepon_terminal'),
                'alamat_terminal' => $this->put('alamat_terminal'),
                'username' => $this->put('username'),
            );
        } else {
            $data = array(
                'kode_terminal' => $this->put('kode_terminal'),
                'nama_terminal' => $this->put('nama_terminal'),
                'telepon_terminal' => $this->put('telepon_terminal'),
                'alamat_terminal' => $this->put('alamat_terminal'),
                'username' => $this->put('username'),
                'password' => md5($this->put('password'))
            );
        }

        $respone = $this->M_terminal_lpg->update_terminal_lpg($data);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }

    public function index_delete()
    {
        $id = $this->delete('kode_terminal');
        $respone = $this->M_terminal_lpg->delete_terminal_lpg($id);
        if ($respone) {
            $this->response($respone, REST_Controller::HTTP_OK);
        } else {
            $this->response($respone, REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
