<?php echo $this->extend('layout/v_dashboard_admin'); ?>

<?php echo $this->section('contentDashboardAdmin'); ?>




<!-- /.container-fluid -->

<div class="container">
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="show-data">
            <?php foreach ($users as $u) : ?>
                <tr>
                    <td><?= $u->username; ?></td>
                    <td><?= $u->email; ?></td>
                    <td><?= base64_decode($u->password); ?></td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $u->id; ?>" data-username="<?= $u->username; ?>" data-email="<?= $u->email; ?>" data-password="<?= $u->password ?>">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $u->id; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<!-- Modal Add User-->
<form action="<?= base_url() ?>/admin/user/add" method="post">
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label><?= lang('Auth.username') ?></label>
                        <input type="text" class="form-control" <?php if (session('errors.username')) : ?>is-invalid<?php endif ?> name="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label><?= lang('Auth.email') ?></label>
                        <input type="email" class="form-control" <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> name="email" placeholder="<?= lang('Auth.email') ?>">
                        <!-- <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small> -->
                    </div>

                    <div class="form-group">
                        <label><?= lang('Auth.password') ?></label>
                        <input type="password" class="form-control" <?php if (session('errors.password')) : ?>is-invalid<?php endif ?> name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal Add User-->

<!-- Modal Edit User-->
<form action="user/update" method="post">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <input type="hidden" class="form-control" id="edit_id" name="id">

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" id="edit_username" name="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" id="edit_email">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password_hash" placeholder="Password" id="edit_password">
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="product_id" class="product_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal Edit User-->

<!-- Modal Delete User-->
<form action="user/delete" method="post">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h4>Are you sure want to delete this User?</h4>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id" id="delete_user">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal Delete User-->

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