<?php
class Poli_klinik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Poli_model', 'pm');
    }

    public function index()
    {
        $poli = $this->pm;
        $awal = $this->input->post('tgl_awal', true);
        $akhir = $this->input->post('tgl_akhir', true);
        if (!empty($awal) && !empty($akhir)) {
            $send['data'] = $poli->filterDate($awal, $akhir);
        } else {
            $send['data'] = $poli->getData()->result_array();
        }

        $this->template->load('Template', 'Kunjungan_poli', $send);
    }
}
