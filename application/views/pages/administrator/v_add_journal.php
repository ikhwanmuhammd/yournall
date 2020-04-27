<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Journal</h1>
    </div>

    <!-- Main content -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Upload</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="issn">ISSN</label>
                            <input type="text" class="form-control" id="issn" placeholder="ISSN" name="issn" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <textarea type="text" class="form-control" rows="3" id="title" placeholder="Title" name="title" required></textarea>
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
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?= base_url('administrator/journal'); ?>" type="button" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-primary  float-right">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.row -->
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->