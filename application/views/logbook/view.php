<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Log Book Penggunaan Ruang Lab</title>
  <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">
  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
  <!-- <link href="http://webapplayers.com/inspinia_admin-v2.9.4/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>
    body {
      font-family: Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;
      font-size: 10pt;
      -webkit-print-color-adjust: exact !important;
    }

    #wrapper {
      display: -webkit-flex;
      -webkit-justify-content: center;
      display: flex;
      justify-content: center;
    }

    #wrapper div {
      -webkit-flex: 1;
      flex: 1;
    }

    #c3 {
      padding-top: 40px;
      padding-left: 240px;
      padding-right: -10px;
    }

    .header {
      font-family: "Century Gothic";
      font-size: 31.6pt;
      color: #B01513;
    }

    .sub-header {
      font-family: "Century Gothic";
      font-size: 12.7pt;
      color: black;
    }

    @page {
      size: A4
    }

    /* @media print and (color) {
      * {
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
      }
    } */

    .title {
      font-size: 20px;
      text-align: center;
    }

    .table {
      font-size: 10pt;
      border-collapse: collapse;
      width: 100%;
    }

    .table th,
    td {
      border: 1px solid #000000;
    }

    .table thead {
      font-weight: bold;
      background-color: #92D050;
    }
  </style>
</head>
<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="A4">
  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <?php
  foreach ($lab as $l) {
    $kode_lab = $this->db->get_where('ruangan', array('kode_ruangan' => $l))->row()->kode_ruangan;
    $nama_lab = $this->db->get_where('ruangan', array('kode_ruangan' => $l))->row()->nama_ruangan;
    $jadwal   = $this->m->ambilJadwal($l)->result();
  ?>
    <section class="sheet padding-10mm">
      <!-- Write HTML just like a web page -->
      <div id="wrapper">
        <div id="c1">
          <img src="<?= base_url() ?>assets/img/logo.png" height="58px">
        </div>
        <div id="c2"></div>
        <div id="c3">
          <table style="font-size: 12px; font-weight: bold;" width="100%">
            <tr>
              <td style="padding: 10px 4px; text-align: center"><?= $kode_lab . ' - ' . $nama_lab ?></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="header">
        Log Book
        <br>
        Penggunaan Ruang Lab
        <br>
      </div>
      <div class="sub-header" style="margin-top: 5px;">Fakultas Ilmu Terapan | Universitas Telkom | Semester Genap Tahun Ajaran 2022 / 2023</div>
      <br>
      <table class="table">
        <thead style="text-align: center;">
          <tr>
            <td>No</td>
            <td colspan="2">Hari/Tanggal</td>
            <td>Nama Dosen /<br>Koor Asprak</td>
            <td>Keperluan</td>
            <td>Jam<br>Penggunaan</td>
            <td>Paraf</td>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          foreach ($jadwal as $j) {
            $i++;
          ?>
            <tr>
              <td style="text-align: center;" width="4%"><?= $i ?></td>
              <td style="text-align: center;" width="8%"><?= $j->hari ?></td>
              <td style="text-align: center;" width="17%"><?= cekHari($j->hari) ?></td>
              <td style="text-align: center;" width="13%"><?= $j->dosen ?></td>
              <td><?= $j->nama_mk ?></td>
              <td style="text-align: center;" width="12%"><?= $j->shift ?></td>
              <td width="9%"></td>
            </tr>
            <?php
          }
          if ($i < 31) {
            for ($j = $i + 1; $j <= 30; $j++) {
            ?>
              <tr>
                <td style="text-align: center;"><?= $j ?></td>
                <td style="text-align: center;" width="8%"></td>
                <td style="text-align: center;" width="17%"></td>
                <td style="text-align: center;" width="13%"></td>
                <td></td>
                <td style="text-align: center;" width="12%"></td>
                <td width="9%"></td>
              </tr>
          <?php
            }
          }
          ?>
        </tbody>
      </table>
      <br><br>
      Mengetahui,<br>
      Ka. Ur. Laboratorium/Bengkel/Studio FIT<br><br><br><br><br>
      Devie Ryana Suchendra, S.T., M.T.
    </section>
  <?php
  }
  ?>
  <script src="http://webapplayers.com/inspinia_admin-v2.9.4/js/bootstrap.js"></script>
</body>

</html>