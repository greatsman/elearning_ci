<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Referensi_model extends CI_Model
{
    private $_daerah = 'tb_ref_kab_kota';
    private $_pekerjaan = 'tb_ref_pekerjaan';
    private $_keperluan = 'tb_ref_keperluan';

    public function getAlldaerah()
    {
        return $this->db->get($this->_daerah);
    }
    public function getAllpekerjaan()
    {
        return $this->db->get($this->_pekerjaan);
    }
    public function getAllkeperluan()
    {
        return $this->db->get($this->_keperluan);
    }
}
                        
/* End of file referensi.php */
