<?php
class cinema extends CI_Controller{
    public function index()
    {
        $this->load->view('view-input-cinema');
    }
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('Nama Pemesan'),
            'judul' => $this->input->post('Judul Film'),
            'waktu' => $this->input->post('Pukul'),
            'type' => $this->input->post('Type Studio'),
            'jumlah' => $this->input->post('Jumlah Pesan'),
            'harga' => $this->input->post('Harga Tiket'),
            'total' => $this->input->post('Total')
                ];
        $this->load->view('view-output-cinema', $data);
    }
}