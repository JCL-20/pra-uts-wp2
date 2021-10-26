<?php
class Crud extends CI_Controller
{
    function construct()
    {
        parent::construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }
    function index()
    {
        $data['user']=$this->m_data->tampil_data()->result();
        $this->load->view('v_data', $data);
    }
    function tambah()
    {
        $this->load->view('v_idata');
    }
    function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $kelas = $this->input->post('kelas');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );
        $this->m_data->input_data($data, 'user');
        redirect('crud/index');
    }
    function edit($id)
    {
        $where=array('id' => $id);
        $data['user']=$this->m_data->edit_data($where, 'user')->result();
        $this->load->view('v_edit', $data);
    }
    function update()
    {
        $id=$this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $kelas = $this->input->post('kelas');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );

        $where = array('id' => $id);
        $this->m_data->update_data($where,$data, 'user');
        redirect('crud/index');
    }
    function hapus($id)
    {
        $where=array('id' => $id);
        $this->m_data->hapus_data($where, 'user');
        redirect('crud/index');
    }
}
