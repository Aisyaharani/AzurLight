<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('user_model');
  }
  public function index()
  {
    $data['user'] = $this->user_model->getAll();
    $this->load->view('back/user', $data);
    $this->load->view('back/layout/_sidebar');
  }
  public function Delete($id)
  {
    $this->user_model->hapusData($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('User');
  }
}
