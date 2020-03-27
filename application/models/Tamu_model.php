<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tamu_model extends CI_Model
{
    private $_table = "tb_tamu";
    //
    public $no_antrian;
    public $tanggal;
    public $nama_lengkap;
    public $nuptk;
    public $no_identitas;
    public $alamat_instansi;
    public $alamat_rumah;
    public $daerah;
    public $provinsi;
    public $no_handphone;
    public $email;
    public $pekerjaan;
    public $keperluan;
    public $permasalahan;
    public $status;
    public $created;
    public $updated;

    public function rules()
    {
        return [
            [
                'field' => 'no_antrian',
                'label' => 'No. Antrian',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_lengkap',
                'label' => 'Nama Lengkap',
                'rules' => 'required'
            ],

            [
                'field' => 'nuptk',
                'label' => 'NUPTK',
                'rules' => 'max_length[16]'
            ],
            [
                'field' => 'no_identitas',
                'label' => 'No. Identitas',
                'rules' => 'max_length[16]'
            ],
            [
                'field' => 'alamat_instansi',
                'label' => 'Alamat Instansi',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat_rumah',
                'label' => 'Alamat Rumah',
                'rules' => 'required'
            ],
            [
                'field' => 'no_handphone',
                'label' => 'No. HP',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],
            [
                'field' => 'keperluan',
                'label' => 'Keperluan',
                'rules' => 'required'
            ],
            [
                'field' => 'permasalahan',
                'label' => 'Permasalahan',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    // public function getById($id)
    // {
    //     return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    // }

    public function save()
    {
        $post = $this->input->post();
        //
        $this->no_antrian = $post["no_antrian"];
        $this->tanggal = date('Y-m-d');
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->nuptk = $post["nuptk"];
        $this->no_identitas = $post["no_identitas"];
        $this->alamat_instansi = $post["alamat_instansi"];
        $this->alamat_rumah = $post["alamat_rumah"];
        $this->daerah = $post["daerah"];
        $this->provinsi = "Papua Barat";
        $this->no_handphone = $post["no_handphone"];
        $this->email = $post["email"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->keperluan = $post["keperluan"];
        $this->permasalahan = $post["permasalahan"];
        $this->status = 0;
        $this->created = date('Y-m-d');
        //
        return $this->db->insert($this->_table, $this);
    }

    // public function update()
    // {
    //     $post = $this->input->post();
    //     $this->product_id = $post["id"];
    //     $this->tanggal = date('Y-m-d');
    //     $this->nama_lengkap = $post["nama_lengkap"];
    //     $this->des = $post["description"];
    //     return $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    // }

    // public function delete($id)
    // {
    //     return $this->db->delete($this->_table, array("product_id" => $id));
    // }
}
                        
/* End of file Tamu.php */
