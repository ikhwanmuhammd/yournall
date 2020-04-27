//ubah data desa
$(function () {
	$('#modal-edit-category').on('show.bs.modal', function (event) {

		var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
		var modal = $(this)

		// Isi nilai pada field
		$('#id').val(div.data('id'));
		$('#category_name').val(div.data('category_name'));
	});

});
