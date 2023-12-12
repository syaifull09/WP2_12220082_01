<?php
class Matakuliah extends CI_Controller{
  public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
  public function cetak()
    {

      $this->form_validation->set_rules('kode', 'kode matakuliah', 'trim|required|numeric|min_length[3]',
      array('required' => '%s wajib diisi.',
      'numeric'=> '%s wajib diisikan angka',
      'min_length' => '%s 3 karakter.'));
      $this->form_validation->set_rules('nama', 'nama matakuliah', 'required',
      array('required' => '%s wajib diisi.'));
      $this->form_validation->set_rules('sks', 'SKS', 'required',
      array('required' => '%s wajib diisi.'));

      if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('view-form-matakuliah');
                }
                else
                {
                  $data = [
                    'kode' => $this->input->post('kode'),
                    'nama' => $this->input->post('nama'),
                    'sks' => $this->input->post('sks'),
                  ];
                        $this->load->view('view-data-matakuliah', $data);
                }
                
                
}
}
