<?php
class M_spbe extends CI_Model
{
  public function all_SPBE()
  {
    $all = $this->db->get("t_spbe")->result();
    $response['status'] = 200;
    $response['error'] = false;
    $response['data'] = $all;
    return $response;
  }
  public function one_SPBE($id)
  {
    $this->db->where('kode_spbe', $id);
    $all = $this->db->get("t_spbe")->result();
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
  public function add_SPBE($data)
  {
    if ($data['nama_spbe'] == '' || $data['alamat_spbe'] == '' || $data['telepon_spbe'] == '' || $data['dot'] == '' || $data['jarak'] == '' || $data['username'] == '' || $data['kapasitas_tt'] == '' || $data['limit'] == '') {
      return $this->empty_response();
    } else {
      $insert = $this->db->insert("t_spbe", $data);
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
  public function update_SPBE($data)
  {
    if ($data['nama_spbe'] == '' || $data['alamat_spbe'] == '' || $data['telepon_spbe'] == '' || $data['dot'] == '' || $data['jarak'] == ''  || $data['kapasitas_tt'] == '' || $data['limit'] == '') {
      return $this->empty_response();
    } else {
      $this->db->where('kode_spbe', $data['kode_spbe']);
      $update = $this->db->update("t_spbe", $data);
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
  public function delete_SPBE($id)
  {
    if ($id == '') {
      return $this->empty_response();
    } else {
      $this->db->where("kode_SPBE", $id);
      $delete = $this->db->delete("t_SPBE");
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
    $respone = $this->db->get("t_spbe");
    return $respone;
  }

  public function aktifitas_spbe()
  {
    $this->db->select('kode_spbe,nama_spbe');
    $this->db->from("t_spbe");
    $all = $this->db->get()->result();
    return $all;
  }
  public function permintaan_spbe($kode_spbe, $nama_spbe)
  {
    $this->db->select('*');
    $this->db->from("permintaan");
    $this->db->join("t_spbe", "t_spbe.kode_spbe = permintaan.kode_spbe");
    $this->db->where("t_spbe.kode_spbe", $kode_spbe);
    $this->db->where("permintaan.status_terminal", "2");
    $this->db->where("permintaan.status_patra_niaga", "2");
    $all['jumlah_diterima'] = $this->db->get()->num_rows();
    $this->db->select('*');
    $this->db->from("permintaan");
    $this->db->join("t_spbe", "t_spbe.kode_spbe = permintaan.kode_spbe");
    $this->db->where("t_spbe.kode_spbe", $kode_spbe);
    $this->db->where("permintaan.status_patra_niaga >", "2");
    $a = $this->db->get()->num_rows();
    $this->db->select('*');
    $this->db->from("permintaan");
    $this->db->join("t_spbe", "t_spbe.kode_spbe = permintaan.kode_spbe");
    $this->db->where("t_spbe.kode_spbe", $kode_spbe);
    $this->db->where("permintaan.status_terminal >", "2");
    $b = $this->db->get()->num_rows();
    $all['jumlah_ditolak'] = $a + $b;
    $all['nama_spbe'] = $nama_spbe;
    return $all;
  }
}
