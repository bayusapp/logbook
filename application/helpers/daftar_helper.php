<?php
defined('BASEPATH') or exit('No direct script access allowed');

function view($page, $variable = array(), $output = false)
{
  $CI = &get_instance();
  return $CI->load->view($page, $variable, $output);
}

function set_rules($name_field, $name, $mode)
{
  $ci = &get_instance();
  return $ci->form_validation->set_rules($name_field, $name, $mode);
}

function validation_run()
{
  $ci = &get_instance();
  return $ci->form_validation->run();
}

function set_flashdata($name, $message)
{
  $ci = &get_instance();
  return $ci->session->set_flashdata($name, $message);
}

function flashdata($name)
{
  $ci = &get_instance();
  return $ci->session->flashdata($name);
}

function input($input)
{
  $ci = &get_instance();
  return $ci->input->post($input, true);
}

function get($input)
{
  $ci = &get_instance();
  return $ci->input->get($input, true);
}

function set_userdata($session)
{
  $ci = &get_instance();
  return $ci->session->set_userdata($session);
}

function userdata($session)
{
  $ci = &get_instance();
  return $ci->session->userdata($session);
}

function uri($segment)
{
  $ci = &get_instance();
  return $ci->uri->segment($segment);
}

if (!function_exists('ambilHari')) {
  function ambilHari($tanggal)
  {
    $tanggal_create = date_create($tanggal);
    $ambilHari = date_format($tanggal_create, 'D');
    // if ($ambilHari == 'Sun') {
    //   //return date('d M Y', strtotime($tanggal . '+ 1 days'));
    //   return $ambilHari;
    // }
    return $ambilHari;
  }
}

if (!function_exists('cekHari')) {
  function cekHari($hari)
  {
    $tanggal = date('Y-m-d');
    $ambilHari = ambilHari($tanggal);
    if ($ambilHari == 'Sun') {
      if ($hari == 'SENIN') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 1 days')));
      } elseif ($hari == 'SELASA') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 2 days')));
      } elseif ($hari == 'RABU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 3 days')));
      } elseif ($hari == 'KAMIS') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 4 days')));
      } elseif ($hari == 'JUMAT') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 5 days')));
      } elseif ($hari == 'SABTU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 6 days')));
      }
    } elseif ($ambilHari == 'Mon') {
      if ($hari == 'SENIN') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 0 days')));
      } elseif ($hari == 'SELASA') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 1 days')));
      } elseif ($hari == 'RABU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 2 days')));
      } elseif ($hari == 'KAMIS') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 3 days')));
      } elseif ($hari == 'JUMAT') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 4 days')));
      } elseif ($hari == 'SABTU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 5 days')));
      }
    } elseif ($ambilHari == 'Tue') {
      if ($hari == 'SENIN') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '- 1 days')));
      } elseif ($hari == 'SELASA') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 0 days')));
      } elseif ($hari == 'RABU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 1 days')));
      } elseif ($hari == 'KAMIS') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 2 days')));
      } elseif ($hari == 'JUMAT') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 3 days')));
      } elseif ($hari == 'SABTU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 4 days')));
      }
    } elseif ($ambilHari == 'Wed') {
      if ($hari == 'SENIN') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '- 2 days')));
      } elseif ($hari == 'SELASA') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '- 1 days')));
      } elseif ($hari == 'RABU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 0 days')));
      } elseif ($hari == 'KAMIS') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 1 days')));
      } elseif ($hari == 'JUMAT') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 2 days')));
      } elseif ($hari == 'SABTU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 3 days')));
      }
    } elseif ($ambilHari == 'Thu') {
      if ($hari == 'SENIN') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '- 3 days')));
      } elseif ($hari == 'SELASA') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '- 2 days')));
      } elseif ($hari == 'RABU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '- 1 days')));
      } elseif ($hari == 'KAMIS') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 0 days')));
      } elseif ($hari == 'JUMAT') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 1 days')));
      } elseif ($hari == 'SABTU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 2 days')));
      }
    } elseif ($ambilHari == 'Fri') {
      if ($hari == 'SENIN') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 3 days')));
      } elseif ($hari == 'SELASA') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 4 days')));
      } elseif ($hari == 'RABU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 5 days')));
      } elseif ($hari == 'KAMIS') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 6 days')));
      } elseif ($hari == 'JUMAT') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 7 days')));
      } elseif ($hari == 'SABTU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 8 days')));
      }
    } elseif ($ambilHari == 'Sat') {
      if ($hari == 'SENIN') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 2 days')));
      } elseif ($hari == 'SELASA') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 3 days')));
      } elseif ($hari == 'RABU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 4 days')));
      } elseif ($hari == 'KAMIS') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 5 days')));
      } elseif ($hari == 'JUMAT') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 6 days')));
      } elseif ($hari == 'SABTU') {
        return tanggalIndonesia(date('Y-m-d', strtotime($tanggal . '+ 7 days')));
      }
    }
  }
}

if (!function_exists('tanggalIndonesia')) {
  function tanggalIndonesia($tanggal)
  {
    $ubahTanggal = gmdate($tanggal, time() + 60 * 60 * 8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = bulanpanjang($pecahTanggal[1]);
    $tahun = $pecahTanggal[0];
    return $tanggal . ' ' . $bulan . ' ' . $tahun;
  }
}

if (!function_exists('bulanPanjang')) {
  function bulanPanjang($bulan)
  {
    switch ($bulan) {
      case 1:
        return 'JANUARI';
        break;
      case 2:
        return 'FEBRUARI';
        break;
      case 3:
        return 'MARET';
        break;
      case 4:
        return 'APRIL';
        break;
      case 5:
        return 'MEI';
        break;
      case 6:
        return 'JUNI';
        break;
      case 7:
        return 'JULI';
        break;
      case 8:
        return 'AGUSTUS';
        break;
      case 9:
        return 'SEPTEMBER';
        break;
      case 10:
        return 'OKTOBER';
        break;
      case 11:
        return 'NOVEMBER';
        break;
      case 12:
        return 'DESEMBER';
        break;
    }
  }
}
