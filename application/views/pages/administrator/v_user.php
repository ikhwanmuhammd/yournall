<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
  </div>

  <!-- Main content -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <a href="<?= base_url('administrator/user/add') ?>" class="btn btn-primary btn-sm mb-2">Add User</a>
        <table id="tabel-user" class="table table-bordered">
          <div class="btn-group float-right" role="group" aria-label="Sort By">
            <a href="<?= base_url('administrator/user/') ?>" class="btn btn-dark btn-sm">All</a>
            <a href="<?= base_url('administrator/user/admin') ?>" class="btn btn-success btn-sm">Admin</a>
            <a href="<?= base_url('administrator/user/member') ?>" class="btn btn-danger btn-sm">Member</a>
          </div><br>
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Status</th>
              <th>Join Date</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($users as $u) { ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->name ?></a></td>
                <td><?php echo $u->email ?></td>
                <td><?php
                    if ($u->role_id == 1) {
                      echo 'Admin';
                    } else {
                      echo 'Member';
                    } ?>
                </td>
                <td><?php
                    if ($u->is_active == 1) {
                      echo '<h5><span id="status" class="badge badge-pill badge-success">Active</span></h5>';
                    } else {
                      echo '<h5><span id="status" class="badge badge-pill badge-danger">Nonactive</span></h5>';
                    } ?></td>
                <td><?php echo date('d F Y', strtotime($u->date_created)) ?></td>
                <td width="20px">
                  <a href="<?= base_url(); ?>administrator/user/edit/<?= $u->id; ?>" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit fa-sm"></i></a>
                </td>
                <td width="20px">
                  <a href="<?= base_url(); ?>administrator/user/detail/<?= $u->id; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye fa-sm"></i></a>
                </td>
                <td width="20px">
                  <a href="<?= base_url(); ?>administrator/user/delete/<?= $u->id; ?>" class="btn btn-danger btn-sm tombol-delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash fa-sm"></i></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.row -->
  </div>
  <!-- modal add user -->
  <div class="modal fade" id="modal-add-user">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h4 class="modal-title">Add User</h4>
        </div>
        <!-- form start -->
        <form method="post" action="<?php echo base_url('administrator/user/add') ?>">
          <div class="modal-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <textarea type="email" class="form-control" rows="3" id="title" placeholder="Title" name="title" required></textarea>
            </div>
            <div class="form-group">
              <label for="type">Type Journal</label>
              <div class="input-group ml-2">
                <div class="custom-control custom-radio col-md-6">
                  <input class="custom-control-input" type="radio" id="national" name="type" value="National" required>
                  <label for="national" class="custom-control-label font-weight-normal">National</label>
                </div>
                <div class="custom-control custom-radio col-md-6">
                  <input class="custom-control-input" type="radio" id="international" name="type" value="International" required>
                  <label for="international" class="custom-control-label font-weight-normal">International</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control" id="category" placeholder="--Select category--" name="category">
                <option value="">--Select Category--</option>
                <?php foreach ($category as $acg) : ?>
                  <option value="<?php echo $acg->category_name ?>"><?php echo $acg->category_name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <!-- /.modal-body -->
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.end modal -->

  <!-- modal edit user -->
  <div class="modal fade" id="modal-edit-user">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h4 class="modal-title">Edit user</h4>
        </div>
        <!-- form start -->
        <form method="post" action="<?php echo base_url('administrator/user/edit') ?>">
          <input type="hidden" name="id" id="id">
          <div class="modal-body">
            <div class="form-group">
              <label for="user_name">user Name</label>
              <input type="text" class="form-control" id="user_name" placeholder="Edit.." name="user_name" required>
            </div>
          </div>
          <!-- /.modal-body -->
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.end modal -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->