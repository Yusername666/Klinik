<?php
class Poli_model extends CI_Model
{
    protected $_table = "tb_poli";

    public function getData()
    {
        return $this->db->get($this->_table);
    }
    public function filterDate($awal, $akhir)
    {
        $query = $this->db->query("SELECT * FROM tb_poli WHERE tgl_kunjungan between '$awal' and '$akhir' ORDER BY jumlah DESC");
        return $query->result_array();
    }

}
