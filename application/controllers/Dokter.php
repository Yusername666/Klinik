<?php
class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model', 'dm');
    }

    public function index()
    {

        $dokter = $this->dm;
        $awal = $this->input->post('tgl_awal', true);
        $akhir = $this->input->post('tgl_akhir', true);
        if (!empty($awal) && !empty($akhir)) {
            $send['data'] = $dokter->filterDate($awal, $akhir);
        } else {
            $send['data'] = $dokter->getData()->result_array();
        }

        $this->template->load('Template', 'Billing_dokter', $send);
    }
}
