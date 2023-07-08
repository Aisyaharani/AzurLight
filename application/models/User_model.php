<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('TB_USER')->result_array();
  }
  public function getUser($id)
  {
    return $this->db->get_where('TB_USER', ['ID_USER' => $id])->row_array();
  }
  public function hapusData($id)
  {
    $this->db->where('ID_USER', $id);
    $this->db->delete('TB_USER');
  }
}
