<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class LPG extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_lpg');
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === NULL) {
            $data = $this->M_lpg->all_lpg();
            if ($data) {
                $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        } else {
            $data = $this->M_lpg->one_lpg($id);
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
            'jenis_LPG' => $this->post('jenis_LPG'),
            'ukuran_LPG' => $this->post('ukuran_LPG'),
            'kode_terminal' => $this->post('kode_terminal')
        );
        $respone = $this->M_lpg->add_lpg($data);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }

    public function index_put()
    {
        $data = array(
            'kode_LPG' => $this->put('kode_LPG'),
            'jenis_LPG' => $this->put('jenis_LPG'),
            'ukuran_LPG' => $this->put('ukuran_LPG'),
            'kode_terminal' => $this->put('kode_terminal')
        );
        $respone = $this->M_lpg->update_lpg($data);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }

    public function index_delete()
    {
        $id = $this->delete('kode_LPG');
        $respone = $this->M_lpg->delete_lpg($id);
        if ($respone) {
            $this->response($respone, REST_Controller::HTTP_OK);
        } else {
            $this->response($respone, REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
