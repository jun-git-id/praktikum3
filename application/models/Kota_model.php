<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kota_model extends CI_Model
{

    public function viewByProvinsi($id_provinsi)
    {
        $this->db->where('id_provinsi', $id_provinsi);
        $result = $this->db->get('kota')->result(); // Tampilkan semua data kota berdasarkan id provinsi

        return $result;
    }
}
