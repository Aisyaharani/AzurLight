<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Article_model');
  }
  public function index()
  {
    $data['article'] = $this->Article_model->getAll();
    $this->load->view('back/article', $data);
    $this->load->view('back/layout/_sidebar');
  }
  public function creteArticle()
  {
    $config['upload_path'] = './assets/pic';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = 10000000;
    $config['overwrite'] = TRUE;

    $this->load->library('upload', $config);
    if ($this->form_validation->run() == false) {

      $data['category'] = $this->Article_model->getCategory();
      $this->load->view('back/layout/add_article', $data);
      $this->load->view('back/layout/_sidebar');

      if ($this->upload->do_upload('gambar')) {

        $error = $this->upload->display_errors();
        $this->session->set_flashdata('error', $error);
        redirect('Article/createArticle');

        // $iduser = $this->input->post('id_user');
        $idcategory = $this->input->post('id_category');
        $gambar = $this->upload->data('file_name');
        $judul = $this->input->post('title');
        $isi = $this->input->post('content');
        $featured = $this->input->post('featured', true);
        $choice = $this->input->post('choice', true);
        $thread = $this->input->post('thread', true);
        $is_active = $this->input->post('is_active', true);
        $date = date("Y-m-d");

        $obj = array(
          'ID_ARTICLE' => 1,
          'ID_USER' => 1,
          'ID_CATEGORY' => $idcategory,
          'FEATURED' => $featured,
          'CHOICE' => $choice,
          'THREAD' => $thread,
          'GAMBAR' => $gambar,
          'JUDUL' =>  $judul,
          'ISI_ARTIKEL' => $isi,

        );
        $this->db->set('date', "to_date('$date', 'YYYY-MM-DD')", false);
        $this->db->insert('ARTICLE', $obj);
        $this->session->set_flashdata('success', 'Artikelmu sudah ditambahkan');
        redirect('Article');
      }
    }
  }
  public function updateArtikel($id)
  {
    # setting untuk upload gambar
    $config['upload_path'] = './assets/pic';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = 10000000;
    $config['overwrite'] = TRUE;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
      $iduser = $this->input->post('id_user');
      $idcategory = $this->input->post('id_category');
      $gambar = $this->upload->data('file_name');
      $judul = $this->input->post('title');
      $isi = $this->input->post('article');
      $featured = $this->input->post('featured', true);
      $choice = $this->input->post('choice', true);
      $thread = $this->input->post('thread', true);
      $is_active = $this->input->post('is_active', true);
      $date = date("Y-m-d");

      $obj = array(
        'ID_ARTICLE' => 1,
        'ID_USER' => $iduser,
        'ID_CATEGORY' => $idcategory,
        'FEATURED' => $featured,
        'CHOICE' => $choice,
        'THREAD' => $thread,
        'GAMBAR' => $gambar,
        'JUDUL' =>  $judul,
        'ISI_ARTIKEL' => $isi,

      );
      $this->db->set('date', "to_date('$date', 'YYYY-MM-DD)", false);
      $this->db->update('ARTICLE', $obj);
      $this->session->set_flashdata('success', 'Artikelmu sudah diubah');
      redirect('Article');
    }
  }
  public function deleteArtikel($id)
  {
    $this->db->where('ID_ARTICLE', $id);
    $this->db->delete('ARTICLE');
    $this->session->flashdata('success', 'User sudah dihapus');
    redirect('Article');
  }
}
