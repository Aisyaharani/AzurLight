<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login Page';

      $this->load->view('auth/template/login');
    } else {
      $this->_login();
    }
  }

  public function kelolaData()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $user = $this->db->get_where('TB_USER', ['USERNAME' => $username])->row_array();

    if ($user) {
      if (password_verify($password, $user['PASSWORD'])) {
        $data = [
          'ID_USER' => $user['ID_USER'],
          'level' => $user['level'],
        ];
        $this->session->set_userdata($data);
        redirect('admin');
        if ($data['level'] == 'admin') {
          $this->session->set_userdata($data);
          redirect('admin');
        } else if ($data['level'] == 'penulis') {
          $this->session->set_userdata($data);
          redirect('admin');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
        redirect('auth');
      }
    } else {
    }
  }

  private function _login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $user = $this->db->get_where('TB_USER', ['username' => $username])->row_array();

    if ($user) {
      if (password_verify($password, $user['password'])) {
        $data = [
          'login' => 'admin',
          'id_user' => $user['id_user'],
          'role' => $user['role'],
        ];
        $this->session->set_userdata($data);
        redirect('admin');
        if ($data['role'] == 'admin') {
          $this->session->set_userdata($data);
          redirect('admin');
        } else if ($data['role'] == 'penulis') {
          $this->session->set_userdata($data);
          redirect('admin');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
        redirect('auth');
      }
    } else {
    }
  }



  public function registration()
  {
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email|is_unique[user.email]', ['is_unique' => 'This email has already registered!']);
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_lenght[3]|matchess[password2]', ['matches' => 'Password not match!', 'min_lenght' => 'Password to short!']);
    $this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password]');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Registration';
      $this->load->view('auth/template/signup');
    } else {
      $data = [
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      ];

      $this->db->insert('TB_USER', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
      redirect('auth', 'refresh');
    }
  }
  public function simpanAkun()
  {
    if (isset($_POST)) {
      $nama = $_POST['name'];
      $email = $_POST['username'];
      $password = $_POST['password1'];
    }
    $data = [
      'ID_USER' => 2,
      'NAME' => htmlspecialchars($this->input->post('name', true)),
      'USERNAME' => htmlspecialchars($this->input->post('username', true)),
      'PASSWORD' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'level' => 'penulis',
    ];

    $this->db->insert('TB_USER', $data);
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
    redirect('auth', 'refresh');
  }
  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
    redirect('landing');
  }
}
