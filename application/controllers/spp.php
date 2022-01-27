<?php
defined('BASEPATH') or exit('No direct script access allowed');

class spp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_spp');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['spp'] = $this->m_spp->tampil_data();

        $data2['title'] = 'Data SPP';
        $this->load->view('templates/header', $data2);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('santri/table_spp', $data1);
        $this->load->view('templates/footer', $data);
    }
    public function edit($id_spp)
    {
        $where = array('id_spp' => $id_spp);
        $data['spp'] = $this->m_spp->edit_data();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['spp'] = $this->m_spp->tampil_data();
        $data['title'] = 'Data SPP';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('santri/edit_spp', $data);
        $this->load->view('templates/footer', $data);
    }
}
