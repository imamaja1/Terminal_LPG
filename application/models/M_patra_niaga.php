<?php
class M_patra_niaga extends CI_Model
{
  public function all_patra_niaga()
  {
    $all = $this->db->get("t_patra_niaga")->result();
    $response['status'] = 200;
    $response['error'] = false;
    $response['data'] = $all;
    return $response;
  }
  public function one_patra_niaga($id)
  {
    $this->db->where('kode_patra_niaga', $id);
    $all = $this->db->get("t_patra_niaga")->result();
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
  public function add_patra_niaga($data)
  {
    if ($data['nama_patra_niaga'] == '' || $data['alamat_patra_niaga'] == '' || $data['telepon_patra_niaga'] == '' || $data['username'] == '' || $data['password'] == '') {
      return $this->empty_response();
    } else {
      $insert = $this->db->insert("t_patra_niaga", $data);
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
  public function update_patra_niaga($data)
  {
    if ($data['nama_patra_niaga'] == '' || $data['alamat_patra_niaga'] == '' || $data['telepon_patra_niaga'] == '' || $data['username'] == '') {
      return $this->empty_response();
    } else {
      $this->db->where('kode_patra_niaga', $data['kode_patra_niaga']);
      $update = $this->db->update("t_patra_niaga", $data);
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
  public function delete_patra_niaga($id)
  {
    if ($id == '') {
      return $this->empty_response();
    } else {
      $this->db->where("kode_patra_niaga", $id);
      $delete = $this->db->delete("t_patra_niaga");
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
    $respone = $this->db->get("t_patra_niaga");
    return $respone;
  }
}
