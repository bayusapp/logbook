<html>

<head>
  <title>Logbook</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Log Book dan Berita Acara Serah Terima Kunci" />
  <meta name="keywords" content="logbook, BAST, Laboratorium Fakultas Ilmu Terapan, Universitas Telkom">
  <meta name="author" content="Bayu Setya Ajie Perdana Putra" />
  <!-- Favicon icon -->
  <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">

  <!-- select2 css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/select2.min.css">
  <!-- vendor css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>

<body>
  <div class="auth-wrapper">
    <div class="auth-content">
      <div class="card">
        <div class="row align-items-center text-center">
          <div class="col-md-12">
            <div class="card-body">
              <h4 class="mb-3 f-w-400">Log Book Ruangan Lab</h4>
              <form method="post" action="<?= base_url('Logbook/formLogbook') ?>">
                <select name="lab[]" class="js-example-basic-multiple col-sm-12" multiple="multiple">
                  <?php
                  foreach ($lab as $l) {
                    echo '<option value="' . $l->kode_ruangan . '">' . $l->kode_ruangan . '</option>';
                  }
                  ?>
                </select>
                <button type="submit" class="btn btn-block btn-primary mb-4">Print</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="auth-content">
      <div class="card">
        <div class="row align-items-center text-center">
          <div class="col-md-12">
            <div class="card-body">
              <h4 class="mb-3 f-w-400">BAST Kunci</h4>
              <form method="post" action="<?= base_url('Logbook/formBAST') ?>">
                <select name="lantai" class="js-example-basic-multiple col-sm-12">
                  <option value="1">Lantai 1 & Lantai 4</option>
                  <option value="2">Lantai 2</option>
                </select>
                <button type="submit" class="btn btn-block btn-primary mb-4">Print</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <form method="post" action="<?= base_url('Logbook/formLogbook') ?>">
    <select name="lab" multiple>
      <?php
      foreach ($lab as $l) {
        echo '<option value="' . $l->kode_ruangan . '">' . $l->nama_ruangan . '</option>';
      }
      ?>
    </select>
    <button type="submit" name="submit">Submit</button>
  </form> -->
  <script src="<?= base_url() ?>assets/js/vendor-all.min.js"></script>
  <script src="<?= base_url() ?>assets/js/plugins/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/js/ripple.js"></script>
  <script src="<?= base_url() ?>assets/js/pcoded.min.js"></script>

  <!-- select2 Js -->
  <script src="<?= base_url() ?>assets/js/plugins/select2.full.min.js"></script>
  <!-- form-select-custom Js -->
  <script src="<?= base_url() ?>assets/js/pages/form-select-custom.js"></script>
</body>

</html>