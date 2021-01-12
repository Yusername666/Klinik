<?php
class Dokter_model extends CI_Model
{
    protected $_table = "tb_billing";

    public function getData()
    {
        return $this->db->get($this->_table);
    }
    public function filterDate($awal, $akhir)
    {
        $query = $this->db->query("SELECT * FROM tb_billing WHERE tgl_billing between '$awal' and '$akhir' ORDER BY biaya DESC");
        return $query->result_array();
    }

}
