<?php echo $this->extend('layout/v_login'); ?>

<?php echo $this->section('contentLogin'); ?>

<div class="container-fluid">
  <div class="row">
    <!-- Column satu -->
    <div class="col-lg-7 column1">
      <div class="judul-konten1">
        <h1 data-aos=fade-up>Kominfo Cyber System</h1>
        <p data-aos=fade-up data-aos-duration="1000"> Tatap muka secara Online dengan <br> Aplikasi Zoom</p>
      </div>
    </div>
    <!-- Column dua -->
    <div class="col-lg-5 " data-aos="fade-left" data-aos-duration="1000">
      <div class="logobrand d-flex justify-content-center">
        <img src="<?= base_url() ?>/assets/img/logozoom.svg" alt="zoom">
      </div>

      <div class="content2 d-flex flex-column">
        <h3>Hallo, Selamat Datang</h3>
        <p>Masuk ke Aplikasi untuk mengajukkan Permohonan Akun Zoom Anda</p>

        <?= view('Myth\Auth\Views\_message_block') ?>

        <!-- Form Login -->
        <form action="<?= route_to('login') ?>" class="mt-3">
          <?= csrf_field() ?>

          <?php if ($config->validFields === ['email']) : ?>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>">
              <div class="invalid-feedback">
                <?= session('errors.login') ?>
              </div>
            </div>

          <?php else : ?>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.emailOrUsername') ?>">
              <div class="invalid-feedback">
                <?= session('errors.login') ?>
              </div>
            </div>

          <?php endif; ?>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input name="password" type="password" class="form-control" placeholder="Password <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>">
            <div class="invalid-feedback">
              <?= session('errors.password') ?>
            </div>
          </div>


          <a href="/user/PermohonanUser" class="btn btn-custom d-block mt-2"><?= lang('Auth.loginAction') ?></a>
        </form>

        <!-- footer -->
        <div class="footer text-center">
          <p>Copyright©2021</p>
        </div>

      </div>

    </div>

  </div>

</div>


<?php echo $this->endSection(); ?>