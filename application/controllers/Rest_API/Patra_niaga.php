<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Patra_niaga extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_patra_niaga');
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === NULL) {
            $data = $this->M_patra_niaga->all_patra_niaga();
            if ($data) {
                $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response kode
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response kode
            }
        } else {
            $data = $this->M_patra_niaga->one_patra_niaga($id);
            if ($data) {
                $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response kode
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response kode
            }
        }
    }
    public function index_post()
    {

        $data = array(
            'nama_patra_niaga' => $this->post('nama_patra_niaga'),
            'alamat_patra_niaga' => $this->post('alamat_patra_niaga'),
            'telepon_patra_niaga' => $this->post('telepon_patra_niaga'),
            'username' => $this->post('username'),
            'password' => md5($this->post('password')),
        );
        $respone = $this->M_patra_niaga->add_patra_niaga($data);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }
    public function index_put()
    {
        if ($this->put('password')) {
            $data = array(
                'kode_patra_niaga' => $this->put('kode_patra_niaga'),
                'nama_patra_niaga' => $this->put('nama_patra_niaga'),
                'alamat_patra_niaga' => $this->put('alamat_patra_niaga'),
                'telepon_patra_niaga' => $this->put('telepon_patra_niaga'),
                'username' => $this->put('username'),
            );
        } else {
            $data = array(
                'kode_patra_niaga' => $this->put('kode_patra_niaga'),
                'nama_patra_niaga' => $this->put('nama_patra_niaga'),
                'alamat_patra_niaga' => $this->put('alamat_patra_niaga'),
                'telepon_patra_niaga' => $this->put('telepon_patra_niaga'),
                'username' => $this->put('username'),
                'password' => md5($this->put('password')),
            );
        }
        $respone = $this->M_patra_niaga->update_patra_niaga($data);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }
    public function index_delete()
    {
        $id = $this->delete('kode_patra_niaga');
        $respone = $this->M_patra_niaga->delete_patra_niaga($id);
        if ($respone) {
            $this->response($respone, REST_Controller::HTTP_OK);
        } else {
            $this->response($respone, REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
