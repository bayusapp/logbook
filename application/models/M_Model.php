<?php

class M_Model extends CI_Model
{

  public function ambilJadwal($ruangan)
  {
    $this->db->select('*');
    $this->db->from('jadwal');
    $this->db->where('ruangan', $ruangan);
    $this->db->order_by('no_hari', 'asc');
    $this->db->order_by('shift', 'asc');
    return $this->db->get();
  }
}
