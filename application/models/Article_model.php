<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('ARTICLE')->result_array();
  }
  public function getCategory()
  {
    $this->db->select('CATEGORY.*');
    $this->db->from('CATEGORY');
    $this->db->where('IS_ACTIVE', 'Y');

    $query = $this->db->get();
    return $query->result_array();
  }
}
