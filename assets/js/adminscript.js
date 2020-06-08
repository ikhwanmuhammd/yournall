//table-journal
$(document).ready(function () {
	var table = $('#tabel-jurnal').DataTable({
		'paging': true,
		'lengthChange': true,
		'searching': true,
		'ordering': true,
		'info': true,
		'autoWidth': true,
		'language': {
			"zeroRecords": "Sorry, no journals to display", //changes words used
			"lengthMenu": "Show _MENU_ journals per page", //changes words used
			"info": "&raquo; Showing _START_ to _END_ of _TOTAL_ journals", //changes words used
			"search": "", //changes words used originally - Search journals:
			"searchPlaceholder": "Search journal",
			"infoFiltered": "(filtered from _MAX_ total journals)"
		}
	});

});

//table-user
$(document).ready(function () {
	var table = $('#tabel-user').DataTable({
		'paging': true,
		'lengthChange': true,
		'searching': true,
		'ordering': true,
		'info': true,
		'autoWidth': true,
		'language': {
			"zeroRecords": "Sorry, no users to display", //changes words used
			"lengthMenu": "Show _MENU_ users per page", //changes words used
			"info": "&raquo; Showing _START_ to _END_ of _TOTAL_ users", //changes words used
			"search": "", //changes words used originally - Search users:
			"searchPlaceholder": "Search user",
			"infoFiltered": "(filtered from _MAX_ total users)"
		}
	});
});
