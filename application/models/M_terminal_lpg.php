<?php
class M_terminal_lpg extends CI_Model
{
    public function all_terminal_lpg()
    {
        $all = $this->db->get("t_terminal_lpg")->result();
        $response['status'] = 200;
        $response['error'] = false;
        $response['data'] = $all;
        return $response;
    }
    public function one_terminal_lpg($id)
    {
        $this->db->where('kode_terminal', $id);
        $all = $this->db->get("t_terminal_lpg")->result();
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
    public function add_terminal_lpg($data)
    {
        if ($data['nama_terminal'] == '' || $data['telepon_terminal'] == '' || $data['alamat_terminal'] == '' || $data['username'] == '' || $data['password'] == '') {
            return $this->empty_response();
        } else {
            $insert = $this->db->insert("t_terminal_lpg", $data);
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
    public function update_terminal_lpg($data)
    {
        if ($data['nama_terminal'] == '' || $data['telepon_terminal'] == '' || $data['alamat_terminal'] == '' || $data['username'] == '') {
            return $this->empty_response();
        } else {
            $this->db->where('kode_terminal', $data['kode_terminal']);
            $update = $this->db->update("t_terminal_lpg", $data);
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
    public function delete_terminal_lpg($id)
    {
        if ($id == '') {
            return $this->empty_response();
        } else {
            $this->db->where("kode_terminal", $id);
            $delete = $this->db->delete("t_terminal_lpg");
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

    public function auth($data)
    {
        $this->db->where($data);
        $respone = $this->db->get("t_terminal_lpg");
        return $respone;
    }

    public function Profil($data)
    {
        $this->db->where('id_profil', $data['id_profil']);
        $update = $this->db->update("profil1", $data);
        if ($update) {
            $response['status'] = 200;
            $response['error'] = false;
            $response['message'] = 'Data person dipupdate.';
            return $response;
        } else {
            $response['status'] = 502;
            $response['error'] = true;
            $response['message'] = 'Data person gagal diupdate.';
            return $response;
        }
    }
    public function data_profil()
    {
        $this->db->where('id_profil', '1');
        $response['data'] = $this->db->get('profil1')->row();
        $response['status'] = 200;
        $response['error'] = false;
        return $response;
    }
}
