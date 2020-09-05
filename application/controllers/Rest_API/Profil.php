<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Profil extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_terminal_lpg');
        $this->load->model('M_patra_niaga');
        $this->load->model('M_SPBE');
    }
    public function Terminal_GET()
    {
        $respone = $this->M_terminal_lpg->data_profil();
        $this->response($respone, REST_Controller::HTTP_OK);
    }
    public function Terminal_POST()
    {
        if (isset($_FILES['file_profil']['type'])) {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['max_width']            = 10240;
            $config['max_height']           = 7680;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('file_profil')) {
                $data = array(
                    'nama_profil' => $this->upload->data('file_name'),
                    'id_profil' => '1'
                );
                $respone = $this->M_terminal_lpg->profil($data);
            }
        } else {
            $respone = 'gagal keterluan';
        }
        $this->response($respone, REST_Controller::HTTP_OK);
    }
    public function Patra_niaga_GET()
    {
        $respone = $this->M_patra_niaga->data_profil();
        $this->response($respone, REST_Controller::HTTP_OK);
    }
    public function Patra_niaga_POST()
    {
        if (isset($_FILES['file_profil']['type'])) {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['max_width']            = 10240;
            $config['max_height']           = 7680;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('file_profil')) {
                $data = array(
                    'nama_profil' => $this->upload->data('file_name'),
                    'id_profil' => '2'
                );
                $respone = $this->M_patra_niaga->profil($data);
            }
        } else {
            $respone = 'gagal keterluan';
        }
        $this->response($respone, REST_Controller::HTTP_OK);
    }
    public function SPBE_GET()
    {
        $id = $this->get('id');
        $respone = $this->M_SPBE->data_profil($id);
        $this->response($respone, REST_Controller::HTTP_OK);
    }
    public function SPBE_POST($id)
    {
        if (isset($_FILES['file_profil']['type'])) {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['max_width']            = 10240;
            $config['max_height']           = 7680;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('file_profil')) {
                $data = array(
                    'nama_profil' => $this->upload->data('file_name'),
                    'kode_spbe' => $id
                );
                $respone = $this->M_SPBE->profil($data);
            }
            $respone =  'success';
        } else {
            $respone = 'gagal keterluan';
        }
        $this->response($respone, REST_Controller::HTTP_OK);
    }
}
