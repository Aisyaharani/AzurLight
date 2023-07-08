<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
  public function AreaChart()
  {
    // $query = $this->db->query("SELECT EXTRACT(MONTH FROM date) as Month, COUNT(ID_ARTICLE) FROM ARTICLE GROUP BY EXTRACT(MONTH FROM date)");
    $query = $this->db->query("SELECT TO_CHAR(sysdate,'mm'), COUNT(ID_ARTICLE) FROM ARTICLE GROUP BY  TO_CHAR(sysdate,'mm')");

    $record = $query->result();

    $data = [];

    foreach ($record as $row) {
      $data['label'][] = $row->month_name;
      $data['data'][] = (int) $row->count;
    }

    $result = json_encode($data);
    return $result;
  }
}
