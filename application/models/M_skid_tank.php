<?php
class M_skid_tank extends CI_Model
{
    public function all_skid_tank()
    {
        $this->db->order_by('status', 'asc');
        $this->db->order_by('odometer', 'asc');
        $all = $this->db->get("t_skid_tank")->result();
        $response['status'] = 200;
        $response['error'] = false;
        $response['data'] = $all;
        return $response;
    }
    public function one_truk($id)
    {
        $this->db->select('*');
        $this->db->where('kode_skid_tank', $id);
        $this->db->from('t_skid_tank');
        $this->db->join('t_supir', 't_skid_tank.nopol = t_supir.nopol');
        $all = $this->db->get()->result();
        $response['status'] = 200;
        $response['error'] = false;
        $response['data'] = $all;
        return $response;
    }
    public function one_skid($id)
    {
        $this->db->where('kode_skid_tank', $id);
        $all = $this->db->get('t_skid_tank')->row();
        return $all;
    }
    public function empty_response()
    {
        $response['status'] = 502;
        $response['error'] = true;
        $response['message'] = 'Field tidak boleh kosong';
        return $response;
    }
    public function add_skid_tank($data1, $data2, $data3)
    {

        $this->db->insert("t_supir", $data2);
        $this->db->insert("t_supir", $data3);
        $insert = $this->db->insert("t_skid_tank", $data1);
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
    public function update_skid_tank($data1, $data2, $data3)
    {
        $this->db->where('kode_skid_tank', $data1['kode_skid_tank']);
        $this->db->update("t_skid_tank", $data1);

        $this->db->where('kode_supir', $data2['kode_supir']);
        $this->db->update("t_supir", $data2);

        $this->db->where('kode_supir', $data3['kode_supir']);
        $update = $this->db->update("t_supir", $data3);
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
    public function delete_skid_tank($id)
    {
        if ($id == '') {
            return $this->empty_response();
        } else {
            $this->db->where("kode_skid_tank", $id);
            $delete = $this->db->delete("t_skid_tank");
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

    public function aktifitas_skid_tank()
    {
        $this->db->select('nopol,kode_skid_tank,odometer');
        $this->db->from("t_skid_tank");
        $all = $this->db->get()->result();
        return $all;
    }
    public function jarak_skid_tank($data1, $data2)
    {
        $this->db->select('t_skid_tank.nopol,t_skid_tank.odometer');
        $this->db->select_sum('t_spbe.jarak');
        $this->db->from("t_skid_tank");
        $this->db->join("permintaan", "t_skid_tank.kode_skid_tank = permintaan.kode_skid_tank");
        $this->db->join("t_spbe", "t_spbe.kode_spbe = permintaan.kode_spbe");
        $this->db->where("t_skid_tank.kode_skid_tank", $data1);
        $all = $this->db->get()->row();
        return $all;
    }
    public function update_skid($data)
    {
        $this->db->where('kode_skid_tank', $data['kode_skid_tank']);
        $update = $this->db->update("t_skid_tank", $data);
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
