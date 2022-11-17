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
  <?php
  for ($i = 1; $i <= 6; $i++) {
    switch ($i) {
      case 1:
        $hari = 'Senin';
        break;
      case 2:
        $hari = 'Selasa';
        break;
      case 3:
        $hari = 'Rabu';
        break;
      case 4:
        $hari = 'Kamis';
        break;
      case 5:
        $hari = 'Jumat';
        break;
      case 6:
        $hari = 'Sabtu';
        break;
    }
    $data = $this->m->ambilBAST($lantai, $i)->result();
    $jumlah = count($data);
    if ($jumlah > 38) {
  ?>
      <?php
      $no = 1;
      foreach ($data as $d) {
        if ($no == 1) {
      ?>
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
              Hari / Tanggal : <?= $hari ?> / <?= cekHari($hari) ?>
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
                  <td width="4%"><?= $no++ ?></td>
                  <td width="4%"><?= $d->kode_ruangan ?></td>
                  <td width="19%"><?= $d->nama_ruangan ?></td>
                  <td width="8%"><?= $d->dosen ?></td>
                  <td width="13%"><?= $d->shift ?></td>
                  <td width="8%"></td>
                  <td width="8%"></td>
                  <td width="8%" style="background-color: #bfbfbf;"></td>
                  <td width="8%" style="background-color: #bfbfbf;"></td>
                  <td width="20%" style="background-color: #bfbfbf;"></td>
                </tr>
              <?php
            } elseif ($no > 1 && $no < 39) {
              ?>
                <tr>
                  <td width="4%"><?= $no++ ?></td>
                  <td width="4%"><?= $d->kode_ruangan ?></td>
                  <td width="19%"><?= $d->nama_ruangan ?></td>
                  <td width="8%"><?= $d->dosen ?></td>
                  <td width="13%"><?= $d->shift ?></td>
                  <td width="8%"></td>
                  <td width="8%"></td>
                  <td width="8%" style="background-color: #bfbfbf;"></td>
                  <td width="8%" style="background-color: #bfbfbf;"></td>
                  <td width="20%" style="background-color: #bfbfbf;"></td>
                </tr>
              <?php
            } elseif ($no == 39) {
              ?>
              </tbody>
            </table>
          </section>
          <section class="sheet padding-10mm">
            <table class="table">
              <tbody style="text-align: center;">
                <tr>
                  <td width="4%"><?= $no++ ?></td>
                  <td width="4%"><?= $d->kode_ruangan ?></td>
                  <td width="19%"><?= $d->nama_ruangan ?></td>
                  <td width="8%"><?= $d->dosen ?></td>
                  <td width="13%"><?= $d->shift ?></td>
                  <td width="8%"></td>
                  <td width="8%"></td>
                  <td width="8%" style="background-color: #bfbfbf;"></td>
                  <td width="8%" style="background-color: #bfbfbf;"></td>
                  <td width="20%" style="background-color: #bfbfbf;"></td>
                </tr>
              <?php
            } elseif ($no > 39 && $no < $jumlah) {
              ?>
                <tr>
                  <td width="4%"><?= $no++ ?></td>
                  <td width="4%"><?= $d->kode_ruangan ?></td>
                  <td width="19%"><?= $d->nama_ruangan ?></td>
                  <td width="8%"><?= $d->dosen ?></td>
                  <td width="13%"><?= $d->shift ?></td>
                  <td width="8%"></td>
                  <td width="8%"></td>
                  <td width="8%" style="background-color: #bfbfbf;"></td>
                  <td width="8%" style="background-color: #bfbfbf;"></td>
                  <td width="20%" style="background-color: #bfbfbf;"></td>
                </tr>
              <?php
            } elseif ($no == $jumlah) {
              ?>
                <tr>
                  <td width="4%"><?= $no++ ?></td>
                  <td width="4%"><?= $d->kode_ruangan ?></td>
                  <td width="19%"><?= $d->nama_ruangan ?></td>
                  <td width="8%"><?= $d->dosen ?></td>
                  <td width="13%"><?= $d->shift ?></td>
                  <td width="8%"></td>
                  <td width="8%"></td>
                  <td width="8%" style="background-color: #bfbfbf;"></td>
                  <td width="8%" style="background-color: #bfbfbf;"></td>
                  <td width="20%" style="background-color: #bfbfbf;"></td>
                </tr>
                <?php
                for ($x = $no; $x <= 60; $x++) {
                ?>
                  <tr>
                    <td width="4%"><?= $no++ ?></td>
                    <td width="4%"></td>
                    <td width="19%"></td>
                    <td width="8%"></td>
                    <td width="13%"></td>
                    <td width="8%"></td>
                    <td width="8%"></td>
                    <td width="8%" style="background-color: #bfbfbf;"></td>
                    <td width="8%" style="background-color: #bfbfbf;"></td>
                    <td width="20%" style="background-color: #bfbfbf;"></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </section>
        <?php
            }
        ?>
      <?php
      }
    } else {
      ?>
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
          Hari / Tanggal : <?= $hari ?> / 14 November 2022
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
            <?php
            $no = 1;
            foreach ($data as $d) {
            ?>
              <tr>
                <td width="4%"><?= $no++ ?></td>
                <td width="4%"><?= $d->kode_ruangan ?></td>
                <td width="19%"><?= $d->nama_ruangan ?></td>
                <td width="8%"><?= $d->dosen ?></td>
                <td width="13%"><?= $d->shift ?></td>
                <td width="8%"></td>
                <td width="8%"></td>
                <td width="8%" style="background-color: #bfbfbf;"></td>
                <td width="8%" style="background-color: #bfbfbf;"></td>
                <td width="20%" style="background-color: #bfbfbf;"></td>
              </tr>
            <?php
            }
            for ($sisa = $no; $sisa <= 38; $sisa++) {
            ?>
              <tr>
                <td width="4%"><?= $sisa ?></td>
                <td width="4%"></td>
                <td width="18%"></td>
                <td width="9%"></td>
                <td width="13%"></td>
                <td width="8%"></td>
                <td width="8%"></td>
                <td width="8%" style="background-color: #bfbfbf;"></td>
                <td width="8%" style="background-color: #bfbfbf;"></td>
                <td width="20%" style="background-color: #bfbfbf;"></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </section>
    <?php
    }
    ?>
  <?php
  }
  ?>
  <script src="http://webapplayers.com/inspinia_admin-v2.9.4/js/bootstrap.js"></script>
</body>

</html>