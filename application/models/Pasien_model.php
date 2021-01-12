<?php
class Pasien_model extends CI_Model
{
    protected $_table = 'tb_pasien';
    public $norm;
    public $nik;
    public $nmpasien;
    public $almtpasien;
    public $tgllhrpasien;
    public $kelaminpasien;
    public $log;

    public function rules()
    {
        return [
            [
                'field'  => 'norm',
                'label'  => 'No. Rekam Medik',
                'rules'  => 'required|min_length[6]',
                'errors' =>  array(
                    'min_length' => 'Whoops! %s Tidak Boleh Kurang Dari 6 Angka!.',
                    'required' => 'Whoops! %s Tidak Boleh Kosong!.'
                )
            ],
            [
                'field'  => 'nik',
                'label'  => 'NIK',
                'rules'  => 'required|min_length[16]',
                'errors' =>  array(
                    'min_length' => 'Whoops! %s Tidak Boleh Kurang Dari 16 Angka!.',
                    'required' => 'Whoops! Data %s Tidak Boleh Kosong!.'
                )
            ],
            [
                'field'  => 'nmpasien',
                'label'  => 'Nama Pasien',
                'rules'  => 'required',
                'errors' =>  array(
                    'required' => 'Whoops! Data %s Tidak Boleh Kosong!.'
                )
            ],
            [
                'field'  => 'almtpasien',
                'label'  => 'Alamat Pasien',
                'rules'  => 'required',
                'errors' =>  array(
                    'required' => 'Whoops! Data %s Tidak Boleh Kosong!.'
                )
            ],
            [
                'field'  => 'tgllhrpasien',
                'label'  => 'Tanggal Lahir Pasien',
                'rules'  => 'required',
                'errors' =>  array(
                    'required' => 'Whoops! Data %s Tidak Boleh Kosong!.'
                )
            ],
            [
                'field'  => 'kelaminpasien',
                'label'  => 'Jenis Kelamin Pasien',
                'rules'  => 'required',
                'errors' =>  array(
                    'required' => 'Whoops! Data %s Tidak Boleh Kosong!.'
                )
            ]
        ];
    }

    public function getData()
    {
        return $this->db->get($this->_table);
    }

    public function getId($norm)
    {
        return $this->db->get_where($this->_table, ['norm' => $norm])->row();
    }

    public function store()
    {
        $send = array(
            'norm' => $this->input->post('norm'),
            'nik' => $this->input->post('nik'),
            'nmpasien' => $this->input->post('nmpasien'),
            'almtpasien' => $this->input->post('almtpasien'),
            'tgllhrpasien' => $this->input->post('tgllhrpasien'),
            'kelaminpasien' => $this->input->post('kelaminpasien'),
            'log' => $this->input->post('log')
        );
        return $this->db->insert($this->_table, $send);
    }

    public function update($norm)
    {
        $send = array(
            'norm' => $this->input->post('norm'),
            'nik' => $this->input->post('nik'),
            'nmpasien' => $this->input->post('nmpasien'),
            'almtpasien' => $this->input->post('almtpasien'),
            'tgllhrpasien' => $this->input->post('tgllhrpasien'),
            'kelaminpasien' => $this->input->post('kelaminpasien'),
            'log' => $this->input->post('log')
        );
        return $this->db->where('norm', $norm)->update($this->_table, $send);
    }

    public function delete($norm)
    {
        return $this->db->where('norm', $norm)->delete($this->_table);
    }

    public function valNorm($norm)
    {
        return $this->db->get_where($this->_table, ["norm" => $norm]);
    }
}
