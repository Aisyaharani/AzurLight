<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('category_model');
  }
  public function index()
  {
    $data['category'] = $this->category_model->getAll();
    $this->load->view('back/category', $data);
    $this->load->view('back/layout/_sidebar');
  }

  public function Create()
  {

    $this->form_validation->set_rules('nama_category', 'Category', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('back/layout/add_category');
      $this->load->view('back/layout/_sidebar');
    } else {
      $this->category_model->TambahData();
      $this->session->set_flashdata('flash', 'Ditambahkan');
      redirect('Category');
    }
  }
  public function Edit($id)
  {
    $data['category'] = $this->category_model->getCategory($id);
    $this->form_validation->set_rules('nama_category', 'Category', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('back/layout/_sidebar');
      $this->load->view('back/layout/edit_category', $data);
    } else {
      $this->category_model->ubahData();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('Category');
    }
  }
  public function Delete($id)
  {
    $this->category_model->hapusData($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('category');
  }
}
