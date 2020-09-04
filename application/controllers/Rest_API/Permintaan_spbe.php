<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Permintaan_spbe extends REST_Controller
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
        if ($this->M_permintaan->all_permintaan_spbe($id)->num_rows() > 0) {
            $respone['status'] = '200';
            $respone['massage'] = 'data belum diferivikasi';
            $respone['data'] = $this->M_permintaan->all_permintaan_spbe($id)->result();
            $this->response($respone, REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No users were found'
            ], REST_Controller::HTTP_OK);
        }
    }
    public function permintaan_get()
    {
        $id = $this->get('id');
        $respone['status'] = '200';
        $respone['massage'] = 'data belum permintaan';
        $respone['data'] = $this->M_permintaan->time_permintaan_spbe($id)->result();
        $this->response($respone, REST_Controller::HTTP_OK);
    }
    public function index_put()
    {
        date_default_timezone_set('Asia/Jakarta');
        $time = $this->M_permintaan->time_permintaan_spbe2($this->put('kode_permintaan'))->row();
        $timea = $time->tgl_berangkat_tujuan;
        $timeb = date('Y-m-d H:i:s');
        $z = strtotime($timeb) - strtotime($timea);
        $tgl_kembali = date('Y-m-d H:i:s', strtotime('+14400 second', strtotime($timeb)));
        $tgl_sampai_kembali = date('Y-m-d H:i:s', strtotime('+' . ($z + 14400) . 'second', strtotime($timeb)));
        $data = array(
            'kode_permintaan' => $this->put('kode_permintaan'),
            'tgl_sampai_tujuan' => $timeb,
            'tgl_kembali' => $tgl_kembali,
            'tgl_sampai_kembali' => $tgl_sampai_kembali,
        );
        $respone = $this->M_permintaan->update_permintaan_spbe($data);
        $this->response($respone, REST_Controller::HTTP_OK);
    }
    public function data_get()
    {
        $id = $this->get('id');
        $data = $this->M_permintaan->one_permintaan_spbe($id);
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
