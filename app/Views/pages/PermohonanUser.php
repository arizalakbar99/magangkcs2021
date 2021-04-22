<?php echo $this->extend('layout/v_dashboard_user'); ?>

<?php echo $this->section('contentDashboardUser'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- <div class="row">
        <div class="col-xl-3 col-md-7 mb-4" data-aos="fade-left">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Laporan Masuk
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">01</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Permohonan -->
    <div class="card shadow mb-4" data-aos="fade-up">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Input Form Permohonan</h5>
        </div>
        <div class="card-body">

            <!-- form input data -->
            <!-- <form id="form-permohonan" action="<?= base_url("/user/permohonan/cek-ketersediaan-permohonanx") ?>" method="POST"> -->
            <form id="form-permohonan">
                <!-- perihal -->
                <div class="form-group row ml-4">
                    <label for="example-text-input" class="col-3 col-form-label">Perihal</label>
                    <div class="col-7">
                        <textarea class="form-control" id="perihal" name="perihal" rows="2"></textarea>
                    </div>
                </div>

                <!-- status -->
                <div class="form-group row ml-4">
                    <div class="col-md-3">Status</div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input status-peserta" type="radio" name="status" id="join" value="join">
                        <label class="form-check-label" for="join">Join</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input status-peserta" type="radio" name="status" id="host" value="host">
                        <label class="form-check-label" for="host">Host</label>
                    </div>
                </div>

                <!-- nomor telephone -->
                <div class="join-only">
                    <div class="form-group row ml-4">
                        <label for="id_meeting" class="col-3 col-form-label">ID Meeting</label>
                        <div class="col-4">
                            <input class="form-control" type="tel" id="id_meeting">
                        </div>
                    </div>

                    <div class="form-group row ml-4">
                        <label for="password_meeting" class="col-3 col-form-label">Password Meeting</label>
                        <div class="col-4">
                            <input class="form-control" type="tel" id="password_meeting">
                        </div>
                    </div>
                </div>


                <!-- waktu dan tanggal -->
                <div class="form-group row ml-4">
                    <label for="tanggal" class="col-3 col-form-label">Tanggal</label>
                    <div class="col-4">
                        <input class="form-control" name="tanggal" type="date" value="" id="tanggal">
                    </div>
                </div>

                <div class="form-group row ml-4">
                    <label for="jam_mulai" class="col-3 col-form-label">Jam mulai</label>
                    <div class="col-4">
                        <input class="form-control" name="jam_mulai" type="time" value="" id="jam_mulai">
                    </div>
                </div>

                <div class="form-group row ml-4">
                    <label for="jam_selesai" class="col-3 col-form-label">Jam mulai</label>
                    <div class="col-4">
                        <input class="form-control" name="jam_selesai" type="time" value="" id="jam_selesai">
                    </div>
                </div>

                <!-- tempat -->
                <div class="form-group row ml-4">
                    <label for="example-text-input" class="col-3 col-form-label">Tempat</label>
                    <div class="col-4">
                        <select class="form-control" name="tempat" id="tempat">
                            <option>Lantai 3</option>
                            <option>Lantai 4</option>
                            <option>Aula</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                </div>

                <!-- nomor telephone -->
                <div class="form-group row ml-4">
                    <label for="no_hp" class="col-3 col-form-label">Nomor Hp/Wa/Telegram</label>
                    <div class="col-4">
                        <input class="form-control" type="tel" id="no_hp" name="no_hp">
                    </div>
                </div>

                <!-- email -->
                <div class="form-group row ml-4">
                    <label for="email" class="col-3 col-form-label">Email</label>
                    <div class="col-4">
                        <input class="form-control" type="email" id="email" name="email">
                    </div>
                </div>


                <!-- Button -->
                <div class="form-group mt-4 d-flex justify-content-center">
                    <button type="reset" class="btn btn-warning mr-3"><i class="fas fa-redo"></i> Reset</button>
                    <button type="button" class="btn btn-success" id="btn-submit-permohonan"><i class="fas fa-paper-plane"></i> Kirim</button>
                </div>
                <!-- btn-submit-permohonan -->

            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<script>
    $(document).ready(function() {
        $('.join-only').hide()

        $('.status-peserta').on('click', function() {

            if ($(this).val() == 'host') {
                $('.join-only').hide()
            } else {
                $('.join-only').show()
            }

        })



        $('#btn-submit-permohonan').on('click', function() {

            let perihal = $('#perihal').val()
            let status = $('#status').val()
            let tanggal = $('#tanggal').val()
            let jam_mulai = $('#jam_mulai').val()
            let jam_selesai = $('#jam_selesai').val()
            let tempat = $('#tempat').val()
            let no_hp = $('#no_hp').val()
            let email = $('#email').val()


            $.ajax({
                method: 'POST',
                url: "<?= base_url("user/permohonan/cek-ketersediaan-permohonan") ?>",
                data: {
                    perihal: perihal,
                    status: status,
                    tanggal: tanggal,
                    jam_mulai: jam_mulai,
                    jam_selesai: jam_selesai,
                    tempat: tempat,
                    no_hp: no_hp,
                    email: email
                },
                success: function(data) {
                    alert(data)
                },
                error: function(err) {
                    alert("error")

                }
            })
        })
    })
</script>

<?php echo $this->endSection(); ?>