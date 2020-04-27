//table-category
$(document).ready(function () {
	var table = $('#tabel_category').DataTable({
		'paging': true,
		'lengthChange': true,
		'searching': true,
		'ordering': true,
		'info': true,
		'autoWidth': true,
		'language': {
			"zeroRecords": "Sorry, no categories to display", //changes words used
			"lengthMenu": "Show _MENU_ categories per page", //changes words used
			"info": "&raquo; Showing _START_ to _END_ of _TOTAL_ categories", //changes words used
			"search": "", //changes words used originally - Search categories:
			"searchPlaceholder": "Search category",
			"infoFiltered": "(filtered from _MAX_ total categories)"
		}
	});
});
