<?php
class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model', 'pm');
    }

    public function index()
    {
        $this->template->load('Template', 'Pasien_data');
    }

    public function pasienList()
    {
        $send['data'] = $this->pm->getData()->result_array();
        return $this->template->load('Template', 'Pasien_list', $send);
    }

    public function create()
    {
        $pasien = $this->pm;
        $validasi = $this->form_validation;
        $post = $this->input->post();
        $validasi->set_rules($pasien->rules());
        if ($validasi->run()) {
            if (!isset($post)) {
                $this->template->load('Template', 'errors/404');
            } else {
                $pasien->store();
                $this->session->set_flashdata('success', 'Data Pasien Berhasil Disimpan!');
                redirect('Pasien');
            }
        }
        return $this->template->load('Template', 'Pasien_data');
    }

    public function update($norm)
    {
        if (!isset($norm)) {
            $this->template->load('Template', 'errors/404');
        } else {
            $pasien = $this->pm;
            $validasi = $this->form_validation;
            $post = $this->input->post();
            $validasi->set_rules($pasien->rules());
            if ($validasi->run()) {
                if (!isset($post)) {
                    $this->template->load('Template', 'errors/404');
                } else {
                    $pasien->update($norm);
                    $this->session->set_flashdata('success', 'Data Pasien Berhasil Di Update!');
                    redirect('Pasien');
                }
            }
            $send = array('data' => $pasien->getId($norm));
            if (!isset($send)) {
                $this->template->load('Template', 'errors/404');
            } else {
                return $this->template->load('Template', 'Pasien_data', $send);
            }
        }
    }

    public function delete()
    {
        $norm = $this->uri->segment(3);
        if ($this->pm->delete($norm)) {
            json_encode(array('status' => TRUE));
        } else {
            json_encode(array('status' => FALSE));
        }
    }

    public function cekNorm($norm)
    {
        $data = $this->pm->valNorm($norm);
        if ($data->num_rows() == 1) {
            echo json_encode(['status' => TRUE]);
        } else {
            echo json_encode(['status' => FALSE]);
        }
    }
}
