//flashdata
const flashData = $('.flash-data').data('flashdata');
const page = $('.page').data('page');
//edit,tambah DESA
if (flashData) {
	Swal.fire({
		title: page,
		text: flashData,
		type: 'success'
	});
}

const gagal = $('.flashgagal').data('flashgagal');
if (gagal) {
	Swal.fire({
		icon: 'error',
		title: 'Oops...',
		text: 'Something wrong!'
	});
}

//delete
$('.tombol-delete').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');

	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-success m-3',
			cancelButton: 'btn btn-danger m-3'
		},
		buttonsStyling: false
	});

	swalWithBootstrapButtons.fire({
		title: 'Are you sure?',
		text: "Delete " + page,
		type: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Ya',
		cancelButtonText: 'Tidak',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		} else if (
			/* Read more about handling dismissals below */
			result.dismiss === Swal.DismissReason.cancel
		) {
			swalWithBootstrapButtons.fire(
				page,
				'Cancel Delete ',
				'error'
			);
		}
	});
});
