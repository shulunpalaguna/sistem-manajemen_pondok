<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cdashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_santri');
        $this->load->model('m_dashboard');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['santri'] = $this->m_santri->tampil_data()->result();

        $data2['title'] = 'Dashboard';
        $data1['santris'] = $this->m_dashboard->total_santri();
        $data1['guru'] = $this->m_dashboard->total_guru();
        $data1['kelas'] = $this->m_dashboard->total_kelas();
        $this->load->view('templates/header', $data2, $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('santri/dashboard', $data1);
        $this->load->view('templates/footer', $data);
    }
}
