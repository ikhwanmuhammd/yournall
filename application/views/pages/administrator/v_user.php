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
                <td><?php echo $u->role_id ?></td>
                <td><?php echo $u->is_active ?></td>
                <td><?php echo $u->date_created ?></td>
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->