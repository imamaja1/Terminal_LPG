<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Permintaan_terminal extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_permintaan');
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index_get()
    {
        if ($this->M_permintaan->all_permintaan_terminal()->num_rows() > 0) {
            $respone['status'] = '200';
            $respone['massage'] = 'data belum diferivikasi';
            $respone['data'] = $this->M_permintaan->all_permintaan_terminal()->result();
            $this->response($respone, REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No users were found'
            ], REST_Controller::HTTP_OK);
        }
    }

    public function index_put()
    {
        $data = array(
            'kode_permintaan' => $this->put('kode_permintaan'),
            'status_terminal' => $this->put('status_terminal'),
        );
        $respone = $this->M_permintaan->update_permintaan_terminal($data);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }

    public function index_delete()
    {
        $id1 = $this->delete('kode_lpg');
        $id2 = $this->delete('kode_spbe');
        $respone = $this->M_permintaan->delete_permintaan($id1, $id2);
        if ($respone) {
            $this->response($respone, REST_Controller::HTTP_OK);
        } else {
            $this->response($respone, REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
