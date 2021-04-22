<?php echo $this->extend('layout/v_dashboard_admin'); ?>

<?php echo $this->section('contentDashboardAdmin'); ?>




<!-- /.container-fluid -->

<div class="container">
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perihal</th>
                <th>Tangal</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Status</th>
                <th>Tempat</th>
                <th>No HP</th>
                <th>Surat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="show-data">
            <?php foreach ($permohonan as $u) : ?>
                <tr>
                    <td><?= $u->perihal; ?></td>
                    <td><?= $u->tanggal; ?></td>
                    <td><?= $u->jam_mulai; ?></td>
                    <td><?= $u->jam_selesai; ?></td>
                    <td><?= $u->status; ?></td>
                    <td><?= $u->tempat; ?></td>
                    <td><?= $u->no_hp; ?></td>
                    <td><?= $u->surat; ?></td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $u->id; ?>" data-username="<?= $u->username; ?>" data-email="<?= $u->email; ?>" data-password="<?= $u->password ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<script>
    $(document).ready(function() {
        $('#show-data').on('click', '.btn-edit', function() {
            //get edit user
            $('#editModal').modal('show')
            $('#edit_username').val($(this).data('username'))
            $('#edit_email').val($(this).data('email'))
            $('#edit_password').val($(this).data('password'))
            $('#edit_id').val($(this).data('id'))
        })
        $('#show-data').on('click', '.btn-delete', function() {
            //get delete user
            $('#deleteModal').modal('show')
            $('#delete_user').val($(this).data('id'))
        })
    })
</script>

<?php echo $this->endSection(); ?>