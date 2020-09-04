<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Permintaan extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_permintaan');
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id == NULL) {
            $data = $this->M_permintaan->all_permintaan();
            if ($data) {
                $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        } else {
            $data = $this->M_permintaan->one_permintaan($id);
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

    public function skid_tank_get()
    {
        $id = $this->get('id');
        $data = $this->M_permintaan->one_permintaan_skid_tank($id);
        if ($data) {
            $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No users were found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
    }

    public function index_post()
    {
        $data = array(
            'no_spa' => $this->post('no_spa'),
            'tgl_spa' => $this->post('tgl_spa'),
            'stock' => $this->post('stock'),
            'tgl' => date('Y-m-d H:i:s'),
            'nopol' => $this->post('nopol'),
            'kode_spbe' => $this->post('kode_spbe'),
            'status_terminal' => 1,
            'status_patra_niaga' => 1,
            'kode_skid_tank' => 0,

        );
        $respone = $this->M_permintaan->add_permintaan($data);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }

    public function index_put()
    {
        $data = array(
            'kode_lpg' => $this->put('kode_lpg'),
            'kode_spbe' => $this->put('kode_spbe'),
            'jumlah_permintaan' => $this->put('jumlah_permintaan'),
            'status' => $this->put('status')
        );
        $respone = $this->M_permintaan->update_permintaan($data);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }

    public function index_delete()
    {
        $id = $this->delete('kode_permintaan');
        // $this->response($id, REST_Controller::HTTP_BAD_REQUEST);
        $respone = $this->M_permintaan->delete_permintaan($id);
        if ($respone) {
            $this->response($respone, REST_Controller::HTTP_OK);
        } else {
            $this->response($respone, REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
