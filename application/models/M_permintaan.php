<?php
class M_permintaan extends CI_Model
{
    public function all_permintaan()
    {

        $this->db->select('*');
        $this->db->from("permintaan");
        $this->db->join("t_spbe", "t_spbe.kode_spbe = permintaan.kode_spbe");
        $this->db->order_by('kode_permintaan', 'desc');
        $all = $this->db->get()->result();
        $response['status'] = 200;
        $response['error'] = false;
        $response['data'] = $all;
        return $response;
    }
    public function all_permintaan_terminal()
    {
        $this->db->select('*');
        $this->db->from("permintaan");
        $this->db->join("t_spbe", "t_spbe.kode_spbe = permintaan.kode_spbe");
        $this->db->order_by('kode_permintaan', 'desc');
        $this->db->where('status_terminal', '1');
        $respone = $this->db->get();
        return $respone;
    }
    public function all_permintaan_patra_niaga()
    {
        $this->db->select('*');
        $this->db->from("permintaan");
        $this->db->join("t_spbe", "t_spbe.kode_spbe = permintaan.kode_spbe");
        $this->db->where('status_patra_niaga', '1');
        $this->db->order_by('kode_permintaan', 'desc');
        $respone = $this->db->get();
        return $respone;
    }
    public function all_permintaan_spbe($id)
    {
        $this->db->select('*');
        $this->db->from("permintaan");
        $this->db->join("t_spbe", "t_spbe.kode_spbe = permintaan.kode_spbe");
        $this->db->join("t_skid_tank", "t_skid_tank.kode_skid_tank = permintaan.kode_skid_tank");
        $this->db->where('t_spbe.kode_spbe', $id);
        $this->db->where('status_patra_niaga', '2');
        $this->db->where('tgl_sampai_tujuan ', '0000-00-00 00:00:00');
        $this->db->order_by('kode_permintaan', 'desc');
        $respone = $this->db->get();
        return $respone;
    }
    public function time_permintaan_spbe($id)
    {
        $this->db->select('*');
        $this->db->from("permintaan");
        $this->db->join("t_spbe", "t_spbe.kode_spbe = permintaan.kode_spbe");
        $this->db->where('status_permintaan', '1');
        $this->db->where('t_spbe.kode_spbe', $id);
        $this->db->order_by('kode_permintaan', 'desc');
        $respone = $this->db->get();
        return $respone;
    }
    public function time_permintaan_spbe2($id)
    {
        $this->db->select('*');
        $this->db->from("permintaan");
        $this->db->where('kode_permintaan', $id);
        $respone = $this->db->get();
        return $respone;
    }
    public function one_permintaan($id)
    {
        $this->db->where('kode_permintaan', $id);
        $all = $this->db->get("permintaan")->result();
        $response['status'] = 200;
        $response['error'] = false;
        $response['data'] = $all;
        return $response;
    }
    public function one_permintaan_spbe($id)
    {
        $this->db->where('kode_spbe', $id);
        $all = $this->db->get("permintaan")->result();
        $response['status'] = 200;
        $response['error'] = false;
        $response['data'] = $all;
        return $response;
    }
    public function one_permintaan_skid_tank($id)
    {
        $this->db->where('kode_skid_tank', $id);
        $this->db->where('status_permintaan', 1);
        $this->db->where('status_patra_niaga', 2);
        $all = $this->db->get("permintaan")->result();
        $response['status'] = 200;
        $response['error'] = false;
        $response['data'] = $all;
        return $response;
    }

    public function empty_response()
    {
        $response['status'] = 502;
        $response['error'] = true;
        $response['message'] = 'Field tidak boleh kosong';
        return $response;
    }
    public function add_permintaan($data)
    {
        if ($data['no_spa'] == '' || $data['tgl_spa'] == '' || $data['stock'] == '' || $data['nopol'] == '') {
            return $this->empty_response();
        } else {
            $insert = $this->db->insert("permintaan", $data);
            if ($insert) {
                $response['status'] = 200;
                $response['error'] = false;
                $response['message'] = 'Data person ditambahkan.';
                return $response;
            } else {
                $response['status'] = 502;
                $response['error'] = true;
                $response['message'] = 'Data person gagal ditambahkan.';
                return $response;
            }
        }
    }
    public function update_permintaan($data)
    {
        if ($data['kode_lpg'] == '' || $data['kode_spbe'] == '' || $data['jumlah_permintaan'] == '' || $data['status'] == '') {
            return $this->empty_response();
        } else {
            $this->db->where('kode_lpg', $data['kode_lpg']);
            $this->db->where('kode_spbe', $data['kode_lpg']);

            $update = $this->db->update("permintaan", $data);
            if ($update) {
                $response['status'] = 200;
                $response['error'] = false;
                $response['message'] = 'Data person diupdate.';
                return $response;
            } else {
                $response['status'] = 502;
                $response['error'] = true;
                $response['message'] = 'Data person gagal diupdate.';
                return $response;
            }
        }
    }
    public function update_permintaan_terminal($data)
    {
        $this->db->where('kode_permintaan', $data['kode_permintaan']);
        $update = $this->db->update("permintaan", $data);
        if ($update) {
            $response['status'] = 200;
            $response['error'] = false;
            $response['message'] = 'Data person diupdate.';
            return $response;
        } else {
            $response['status'] = 502;
            $response['error'] = true;
            $response['message'] = 'Data person gagal diupdate.';
            return $response;
        }
    }
    public function update_permintaan_patra_niaga($data)
    {
        $this->db->where('kode_permintaan', $data['kode_permintaan']);
        $update = $this->db->update("permintaan", $data);
        if ($update) {
            $data1 = array('status' => '2');
            $this->db->where('kode_skid_tank', $data['kode_skid_tank']);
            $this->db->update("t_skid_tank", $data1);
            $response['status'] = 200;
            $response['error'] = false;
            $response['message'] = 'Data person diupdate.';
            return $response;
        } else {
            $response['status'] = 502;
            $response['error'] = true;
            $response['message'] = 'Data person gagal diupdate.';
            return $response;
        }
    }
    public function update_permintaan_spbe($data)
    {
        $this->db->where('kode_permintaan', $data['kode_permintaan']);
        $update = $this->db->update("permintaan", $data);
        if ($update) {
            $response['status'] = 200;
            $response['error'] = false;
            $response['message'] = 'Data person diupdate.';
            return $response;
        } else {
            $response['status'] = 502;
            $response['error'] = true;
            $response['message'] = 'Data person gagal diupdate.';
            return $response;
        }
    }
    public function delete_permintaan($id)
    {
        if ($id == '') {
            return $this->empty_response();
        } else {
            $this->db->where("kode_permintaan", $id);
            $delete = $this->db->delete("permintaan");
            if ($delete) {
                $response['status'] = 200;
                $response['error'] = false;
                $response['message'] = 'Data person dihapus.';
                return $response;
            } else {
                $response['status'] = 502;
                $response['error'] = true;
                $response['message'] = 'Data person gagal dihapus.';
                return $response;
            }
        }
    }
    public function cek($id, $tgl)
    {
        $this->db->where('kode_spbe', $id);
        $this->db->where('DATE(tgl)', $tgl);
        $this->db->where('status_patra_niaga !=', '3');
        $respone = $this->db->get("permintaan");
        return $respone;
    }
    public function percepatan($data)
    {
        $this->db->where('kode_permintaan', $data['kode_permintaan']);
        $update = $this->db->update("permintaan", $data);
        if ($update) {
            $response['status'] = 200;
            $response['error'] = false;
            $response['message'] = 'Data person diupdate.';
            return $response;
        } else {
            $response['status'] = 502;
            $response['error'] = true;
            $response['message'] = 'Data person gagal diupdate.';
            return $response;
        }
    }
}
