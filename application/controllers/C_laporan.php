<?php 
class C_laporan extends CI_Controller{
    function index() {
        $this->load->view('header');
        $this->load->view('v_laporan');
        $this->load->view('footer');
    }
    function post_laporan(){
        $this->load->model('M_crud');
        $where['tanggal_jual >=']  = $this->input->post('awal');
        $where['tanggal_jual <=']  = $this->input->post('akhir');
        $data['total'] = $this->M_crud->total('penjualan', 'sub_total', $where)->row();
        $data['laporan'] = $this->M_crud->tampil_id('penjualan', $where)->result();
        $this->load->view('header');
        $this->load->view('v_laporan', $data);
        $this->load->view('footer');
    }
}
?>