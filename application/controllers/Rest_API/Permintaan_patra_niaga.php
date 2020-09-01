<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Permintaan_patra_niaga extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_permintaan');
        // date_default_timezone_set('Asia/Singapore');
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index_get()
    {
        if ($this->M_permintaan->all_permintaan_patra_niaga()->num_rows() > 0) {
            $respone['status'] = '200';
            $respone['massage'] = 'data belum diferivikasi';
            $respone['data'] = $this->M_permintaan->all_permintaan_patra_niaga()->result();
            $this->response($respone, REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No users were found'
            ], REST_Controller::HTTP_OK);
        }
    }

    public function index_post()
    {
        $data = array(
            'no_spa' => $this->post('no_spa'),
            'tgl_spa' => $this->post('tgl_spa'),
            'stock' => $this->post('stock'),
            'tgl' => date('Y/m/d'),
            'nopol' => $this->post('nopol'),
            'kode_spbe' => $this->post('kode_spbe'),
            'status' => 1,
        );
        $respone = $this->M_permintaan->add_permintaan($data);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }

    public function index_put()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'kode_permintaan' => $this->put('kode_permintaan'),
            'status_patra_niaga' => $this->put('status_patra_niaga'),
            'tgl_berangkat_tujuan' => date('Y-m-d H:i:s')
        );
        if ($this->put('kode_skid_tank') != null) {
            $data['kode_skid_tank'] = $this->put('kode_skid_tank');
        }
        $respone = $this->M_permintaan->update_permintaan_patra_niaga($data);
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
