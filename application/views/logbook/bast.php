<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Create a report base on paper size using CSS</title>
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
      font-size: 35.3pt;
      color: #B01513;
    }

    .sub-header {
      font-family: "Century Gothic";
      font-size: 13.7pt;
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
    }
  </style>
</head>
<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="A4">
  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-10mm">
    <!-- Write HTML just like a web page -->
    <div id="wrapper">
      <div id="c1">
        <img src="<?= base_url() ?>assets/img/logo.png" height="55px">
      </div>
      <div id="c2"></div>
      <div id="c3"></div>
    </div>
    <div class="header">
      Berita Acara
      <br>
      Serah Terima Kunci Lab
      <br>
    </div>
    <div class="sub-header">
      Fakultas Ilmu Terapan | Universitas Telkom | 2022
      <br><br>
      Hari / Tanggal : Senin / 14 November 2022
    </div>
    <br>
    <table class="table">
      <thead style="text-align: center;">
        <tr style="font-size: 17pt;">
          <td colspan="7">PENGAMBILAN KUNCI</td>
          <td colspan="3" style="background-color: #bfbfbf;">PENGEMBALIAN KUNCI</td>
        </tr>
        <tr>
          <td>No</td>
          <td colspan="2">Ruang</td>
          <td>Kode<br>Dosen</td>
          <td>Jam Kuliah</td>
          <td>Jam<br>Ambil</td>
          <td>Paraf<br>Dosen</td>
          <td style="background-color: #bfbfbf;">Jam<br>Kembali</td>
          <td style="background-color: #bfbfbf;">Paraf<br>Admin<br>Lab</td>
          <td style="background-color: #bfbfbf;">Keterangan</td>
        </tr>
      </thead>
      <tbody style="text-align: center;">
        <tr>
          <td width="4%">1</td>
          <td width="4%">B5</td>
          <td width="18%">Interactive Multimedia</td>
          <td width="9%">IMM</td>
          <td width="13%">06:30 - 09:30</td>
          <td width="8%"></td>
          <td width="8%"></td>
          <td width="8%"></td>
          <td width="8%"></td>
          <td width="20%"></td>
        </tr>
      </tbody>
    </table>
    <br><br>
    Mengetahui,<br>
    Ka. Ur. Laboratorium/Bengkel/Studio FIT<br><br><br><br><br>
    Devie Ryana Suchendra, S.T., M.T.
  </section>
  <script src="http://webapplayers.com/inspinia_admin-v2.9.4/js/bootstrap.js"></script>
</body>

</html>