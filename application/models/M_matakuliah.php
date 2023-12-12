<?php
class M_matakuliah extends CI_Model
{
  public function tampilMatakuliah(){
    return $this->db->get('matakuliah');
  }
}
