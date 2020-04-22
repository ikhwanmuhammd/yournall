<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Journal</h1>
	</div>

	<!-- Main content -->
	<div class="card shadow mb-4">
	    <div class="card-body">
	    	<div class="table-responsive">
	    		<button class="btn btn-primary btn-sm mb-2">Upload Journal </button>
		        <table id="tabel-jurnal" class="table table-bordered">
			        <div class="btn-group float-right" role="group" aria-label="Sort By">
						<a href="<?= base_url('journal/get_journal') ?>" class="btn btn-dark btn-sm">All</a>
						<a href="<?= base_url('journal/journal_int') ?>" class="btn btn-success btn-sm">International</a>
						<a href="<?= base_url('journal/journal_nat') ?>" class="btn btn-danger btn-sm">National</a>
			        </div><br>
			        <thead>
			        <tr>
						<th>#</th>
						<th>ISSN</th>
						<th>Title</th>
						<th>Category</th>
						<th>Year</th>
						<th>Date Upload</th>
						<th></th>
						<th></th>
						<th></th>
			        </tr>
			        </thead>
			        <tbody>
						<?php 
						$no = 1;
						foreach($journal as $j){ ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $j->issn ?></a></td>
							<td><?php echo $j->title ?></td>
							<td><?php echo $j->category ?></td>
							<td><?php echo $j->year ?></td>
							<td><?php echo $j->date_upload ?></td>
							<td><a href="" class="fa fa-edit bg-warning"></a></td>
							<td></td>
							<td></td>
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