<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/assets-vendor/bootstrap/css/sb-admin-2.css">
  <!-- css custom -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/custom-css/login.css">
  <!-- fav icon -->
  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/zoomkcs.ico" />

  <!-- Aos Animate -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/0c4bdc880a.js" crossorigin="anonymous"></script>

  <!-- <title> echo $tittle; </title> -->
</head>

<body>

  <?php echo $this->renderSection('contentLogin'); ?>


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= base_url() ?>/assets/assets-vendor/jquery/jquery.js"></script>
  <script src="<?= base_url() ?>/assets/assets-vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>