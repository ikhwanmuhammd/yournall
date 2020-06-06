<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Journal</h1>
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <!-- Main content -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Edit</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <!-- <form role="form" action="<?= base_url("journal/save") ?>" method="post" enctype="multipart/form-data"> -->
                <?php echo form_open_multipart('administrator/journal/save'); ?>
                <div class="box-body">
                    <div class="form-group">
                        <label for="issn">ISSN</label>
                        <input type="text" class="form-control" id="issn" placeholder="ISSN" name="issn" value="<?= $journal->issn ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <textarea type="text" class="form-control" rows="3" id="title" placeholder="Title" name="title" required><?= $journal->title ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Type Journal</label>
                        <div class="input-group ml-2">
                            <div class="custom-control custom-radio col-md-6">
                                <input class="custom-control-input" type="radio" id="national" name="type" value="National" <?php if ($journal->type == 'National') echo 'checked'; ?> required>
                                <label for="national" class="custom-control-label font-weight-normal">National</label>
                            </div>
                            <div class="custom-control custom-radio col-md-6">
                                <input class="custom-control-input" type="radio" id="international" name="type" value="International" <?php if ($journal->type == 'International') echo 'checked'; ?> required>
                                <label for="international" class="custom-control-label font-weight-normal">International</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" placeholder="--Select category--" name="category">
                            <option value=""><?= $journal->category ?></option>
                            <?php foreach ($category as $acg) : ?>
                                <option value="<?php echo $acg->category_name ?>"><?php echo $acg->category_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <select class="form-control" id="year" placeholder="--Select Year--" name="year">
                            <option value=""><?= $journal->year ?></option>
                            <?php
                            for ($i = 1990; $i < date('Y'); $i++) {
                                echo "<option>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <?php if ($journal->file != null) { ?>
                            <label for="file">
                                <?= $journal->file; ?>
                            </label>
                        <?php } ?>
                        <input type="file" id="file" name="file" required>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="<?= base_url('administrator/journal'); ?>" type="button" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary  float-right">Save</button>
                </div>
                <?php echo form_close() ?>
                <!-- </form> -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.row -->
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->