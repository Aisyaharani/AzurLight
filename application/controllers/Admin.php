<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');

    $this->load->model('admin_model', 'admin', true);
  }

  public function index()
  {
    $data['jmlh_article'] = $this->db->count_all_results('ARTICLE');
    $data['jmlh_user'] = $this->db->count_all_results('TB_USER');
    $data['jmlh_category'] = $this->db->count_all_results('CATEGORY');

    // $data['chart'] = $this->admin->AreaChart();
    // $data['pageChart'] = '_chart';

    // foreach ($data['result'] as $key => $value) {
    //   $data['data'][$key]['title'] = $value->title;
    //   $data['data'][$key]['date'] = $value->date;
    //   $data['data'][$key]['backgroundColor'] = "#00a65a";
    // }

    $this->load->view('back/admin', $data);
    $this->load->view('back/layout/_sidebar');
  }
}
