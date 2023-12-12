<?php
class Mata_Kuliah extends CI_Controller{
    public function index()
    {
        $this->load->view('view_form_matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'trim|required|numeric|min_length[3]',
        array('required' => '%s Wajib Diisikan.',
        'numeric' => '%s Wajib diisikan angka.',
        'min_length' => '%s Wajib Diisikan 3 karakter.'));
		$this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required[Web Programming]',
        array('required' => '%s Wajib Diisikan.',));
		$this->form_validation->set_rules('sks', 'SKS', 'required',
        array('required' => '%s Wajib Diisikan.',));

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('view_form_matakuliah');
                }
                else
                {
                  $data = [
						  'kode' => $this->input->post('kode'),
						  'nama' => $this->input->post('nama'),
						  'sks' => $this->input->post('sks')
						  ];
				  
				    $this->load->view('view_data_matakuliah', $data);
                }
    }
}