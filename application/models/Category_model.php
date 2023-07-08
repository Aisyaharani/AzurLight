<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('CATEGORY')->result_array();
  }
  public function getCategoy($id)
  {
    return $this->db->get_where('CATEGORY', ['ID_CATEGORY' => $id])->row_array();
  }
  public function TambahData()
  {
    $data = [
      'ID_CATEGORY' => 2,
      "NAMA_CATEGORY" => $this->input->post('nama_category', true),
      "IS_ACTIVE" => $this->input->post('is_active', true),
    ];
    $this->db->insert('CATEGORY', $data);
  }
  public function ubahData()
  {
    $data = [
      "NAMA_CATEGORY" => $this->input->post('nama_category', true),
      "IS_ACTIVE" => $this->input->post('is_active', true),
    ];

    $this->db->where('ID_CATEGORY', $this->input->post('id_category'));
    $this->db->update('CATEGORY', $data);
  }
  public function hapusData($id)
  {
    $this->db->where('ID_CATEGORY', $id);
    $this->db->delete('CATEGORY');
  }
  public function getCategory($id)
  {
    return $this->db->get_where('CATEGORY', ['ID_CATEGORY' => $id])->row_array();
  }
}
