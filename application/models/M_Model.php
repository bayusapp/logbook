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

  public function ambilBAST($lantai, $no_hari)
  {
    $this->db->select('b.kode_ruangan, b.nama_ruangan, a.dosen, a.shift');
    $this->db->from('jadwal a');
    $this->db->join('ruangan b', 'a.ruangan = b.kode_ruangan');
    $this->db->where('b.lantai', $lantai);
    $this->db->where('a.no_hari', $no_hari);
    $this->db->order_by('a.shift', 'asc');
    return $this->db->get();
  }
}
