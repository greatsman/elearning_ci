<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Kelas
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Kelas extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array(
      'title' => 'Kelas',
      'section_title' => 'Menu Kelas',
      'table_title' => 'Daftar Kelas'
    );
    $this->load->view('admin/kelas/index', $data);
  }

  public function add()
  {
    $data = array(
      'title' => 'Kelas Add',
      'section_title' => 'Tambah Kelas',
      'form_title' => 'Formulir Tambah Kelas'
    );
    $this->load->view('admin/kelas/add', $data);
  }

  public function manage()
  {
    $data = array(
      'title' => 'Kelas Manage',
      'section_title' => 'Manajemen Kelas'
    );
    $this->load->view('admin/kelas/manajemen/index', $data);
  }
}


/* End of file Kelas.php */
/* Location: ./application/controllers/Kelas.php */
