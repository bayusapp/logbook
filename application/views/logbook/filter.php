<html>

<head>
  <title>Logbook</title>
</head>

<body>
  <form method="post" action="<?= base_url('Logbook/formLogbook') ?>">
    <select name="lab">
      <?php
      foreach ($lab as $l) {
        echo '<option value="' . $l->kode_ruangan . '">' . $l->nama_ruangan . '</option>';
      }
      ?>
    </select>
    <button type="submit" name="submit">Submit</button>
  </form>
</body>

</html>