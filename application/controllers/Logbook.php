<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logbook extends CI_Controller
{

  public function index()
  {
    $data['lab'] = $this->db->get('ruangan')->result();
    view('logbook/filter', $data);
  }

  public function formLogbook()
  {
    $data['lab']  = input('lab');
    view('logbook/view', $data);
  }

  public function formBAST()
  {
    $data['lantai'] = input('lantai');
    view('logbook/bast', $data);
  }

  public function formUploadJadwal()
  {
    view('logbook/formUploadJadwal');
  }

  public function uploadJadwal()
  {
    $file = $_FILES['file_csv']['tmp_name'];
    $ekstensi_file  = explode('.', $_FILES['file_csv']['name']);
    if (strtolower(end($ekstensi_file)) === 'csv' && $_FILES['file_csv']['size'] > 0) {
      $handle = fopen($file, 'r');
      $i = 0;
      //while (($row = fgetcsv($handle, 2048, ';'))) {
      while (($row = fgetcsv($handle, 2048, ','))) {
        $i++;
        if ($i == 1) {
          continue;
        }
        if ($row[0] == 'SENIN') {
          $no_hari = 1;
        } elseif ($row[0] == 'SELASA') {
          $no_hari = 2;
        } elseif ($row[0] == 'RABU') {
          $no_hari = 3;
        } elseif ($row[0] == 'KAMIS') {
          $no_hari = 4;
        } elseif ($row[0] == 'JUMAT') {
          $no_hari = 5;
        } elseif ($row[0] == 'SABTU') {
          $no_hari = 6;
        }
        //echo $row[0] . '<br>';
        //echo $row[0] . ' ' . cekHari($row[0]) . '<br>';
        $input = array(
          'no_hari' => $no_hari,
          'hari'  => $row[0],
          'shift' => $row[1],
          'ruangan' => $row[2],
          'kode_mk' => $row[3],
          'nama_mk' => $row[4],
          'kelas'   => $row[5],
          'dosen'   => $row[6]
        );
        $this->db->insert('jadwal', $input);
      }
    }
  }
}
