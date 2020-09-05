<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Skid_tank extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_skid_tank');
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === NULL) {
            $data = $this->M_skid_tank->all_skid_tank();
            if ($data) {
                $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        } else {
            $data = $this->M_skid_tank->one_truk($id);
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
        $data1 = array(
            'nopol' => $this->post('nopol'),
            'kapasitas' => $this->post('kapasitas'),
            'odometer' => $this->post('odometer'),
            'status' => $this->post('status'),
        );
        $data2 = array(
            'nopol' => $this->post('nopol'),
            'nama_supir' => $this->post('nama_supir1'),
            'tgl_lahir' => $this->post('tgl_lahir1'),
            'no_hp' => $this->post('no_hp1'),
            'no_sim' => $this->post('no_sim1'),
            'tahun_berlaku' => $this->post('tahun_berlaku1'),
        );
        $data3 = array(
            'nopol' => $this->post('nopol'),
            'nama_supir' => $this->post('nama_supir2'),
            'tgl_lahir' => $this->post('tgl_lahir2'),
            'no_hp' => $this->post('no_hp2'),
            'no_sim' => $this->post('no_sim2'),
            'tahun_berlaku' => $this->post('tahun_berlaku2'),
        );
        $respone = $this->M_skid_tank->add_skid_tank($data1, $data2, $data3);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }

    public function index_put()
    {
        $data1 = array(
            'kode_skid_tank' => $this->put('kode_skid_tank'),
            'nopol' => $this->put('nopol'),
            'kapasitas' => $this->put('kapasitas'),
            'odometer' => $this->put('odometer'),
            'status' => $this->put('status'),
        );
        $data2 = array(
            'kode_supir' => $this->put('kode_supir1'),
            'nopol' => $this->put('nopol'),
            'nama_supir' => $this->put('nama_supir1'),
            'tgl_lahir' => $this->put('tgl_lahir1'),
            'no_hp' => $this->put('no_hp1'),
            'no_sim' => $this->put('no_sim1'),
            'tahun_berlaku' => $this->put('tahun_berlaku1'),
        );
        $data3 = array(
            'kode_supir' => $this->put('kode_supir2'),
            'nama_supir' => $this->put('nama_supir2'),
            'tgl_lahir' => $this->put('tgl_lahir2'),
            'no_hp' => $this->put('no_hp2'),
            'no_sim' => $this->put('no_sim2'),
            'tahun_berlaku' => $this->put('tahun_berlaku2'),
        );
        $respone = $this->M_skid_tank->update_skid_tank($data1, $data2, $data3);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }

    public function index_delete()
    {
        $id = $this->delete('kode_skid_tank');
        $respone = $this->M_skid_tank->delete_skid_tank($id);
        if ($respone) {
            $this->response($respone, REST_Controller::HTTP_OK);
        } else {
            $this->response($respone, REST_Controller::HTTP_BAD_REQUEST);
        }
        $this->response($respone, REST_Controller::HTTP_OK);
    }
}
