<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
    </div>

    <!-- Main content -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('administrator/journal') ?>" class="btn btn-dark btn-sm mb-2">Back</a>
                <a href="" class="btn btn-primary btn-sm mb-2 ml-3" data-toggle="modal" data-target="#modal-add-category" data-backdrop="static" data-keyboard="false">Add Category</a>
                <table id="tabel_category" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($category as $cg) { ?>
                            <tr>
                                <td width="20px"><?php echo $no++ ?></td>
                                <td><?php echo $cg->category_name ?></a></td>
                                <td width="20px">
                                    <a href="" class="btn btn-warning btn-sm" data-placement="top" data-toggle="modal" data-target="#modal-edit-category" data-backdrop="static" data-keyboard="false" title="Edit"><i class="fa fa-edit fa-sm"></i></a>
                                </td>
                                <td width="20px">
                                    <a href="<?= base_url(); ?>administrator/category/delete/<?= $cg->id; ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash fa-sm"></i></a>
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
<!-- modal add category -->
<div class="modal fade" id="modal-add-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="bgLabelcCategory">
                <h4 class="modal-title" id="formLabelCategory">Add Category</h4>
            </div>
            <!-- form start -->
            <form method="post" action="<?php echo base_url('administrator/category/add') ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" class="form-control" id="category_name" placeholder="Add.." name="category_name" required>
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

    <!-- modal edit category -->
    <div class="modal fade" id="modal-edit-category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" id="bgLabelcCategory">
                    <h4 class="modal-title" id="formLabelCategory">Edit Category</h4>
                </div>
                <!-- form start -->
                <form method="post" action="<?php echo base_url('administrator/category/edit') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="category_name">Category Name</label>
                            <input type="text" class="form-control" id="category_name" placeholder="Add.." name="category_name" value="" required>
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

</div>
<!-- End of Main Content -->