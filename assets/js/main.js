$(document).ready(function() {

	$('.tbl-CRUD').DataTable({
		searchHighlight 	: true,
		lengthMenu 			: [5, 10, 20, 30],
		order 				: [[ 0, 'desc' ]],
		"scrollX" 			: true,
		stateSave 			: true,
		"oLanguage" 		: { "sSearch": "Filter:"}
	});

    $(document).on('click', '.create', function() {
		$('.main-div').removeClass('col-md-12').addClass('col-md-6');
		$('.sub-div').fadeIn(500);
		$('.panel-heading').html('Create');
		$('.sub-div .panel').removeClass('panel-success').addClass('panel-info');
		$.ajax({
			url 	: 'Main/showForm',
			success : function(response) {
				$('.sub-div .panel-body').html(response);
			}
		});
    });

	$(document).on('click', '.update', function() {
		$('.main-div').removeClass('col-md-12').addClass('col-md-6');
		var id = $(this).attr('data-id');
		$('.sub-div').fadeIn(500);
		$('.panel-heading').html('Update');
		$('.sub-div .panel').removeClass('panel-info').addClass('panel-primary');
		$.ajax({
			url 	: 'Main/getForm',
			type 	: 'post',
			data 	: {id : id},
			success : function(response) {
				$('.sub-div .panel-body').html(response);
			}
		});
	});

	$(document).on('click', '.delete', function() {
		var id = $(this).attr('data-id');
		$.ajax({
			url		: 'Main/deleteEntry',
			type 	: 'post',
			data 	: {id:id},
			success : function(response) {
				$('.main-div').html(response);
				$('.tbl-CRUD').DataTable({
					searchHighlight 	: true,
					lengthMenu 			: [5, 10, 20, 30],
					order 				: [[ 0, 'desc' ]],
					//'scrollX' 			: true,
					stateSave 			: true,
					'oLanguage' 		: { 'sSearch': 'Filter:'}
				});
			}
		});
	});

	$(document).on('click', '.cancel-frm', function() {
		$('.sub-div').fadeOut();
		$('.main-div').removeClass('col-md-6').addClass('col-md-12');
	});

	$(document).on('click', '.update-frm', function() {
		var id   = $(this).attr('data-id');
		var form = $('#updateFrm').serializeArray();
		form.push({name: "id", value: id});
		$.ajax({
			url		: 'Main/submittedData',
			type 	: 'post',
			data 	: $.param(form),
			success : function(response) {
				$('.sub-div').fadeOut();
				$('.main-div').html(response).removeClass('col-md-6').addClass('col-md-12');
				$('.tbl-CRUD').DataTable({
					searchHighlight 	: true,
					lengthMenu 			: [5, 10, 20, 30],
					order 				: [[ 0, 'desc' ]],
					//'scrollX' 			: true,
					stateSave 			: true,
					'oLanguage' 		: { 'sSearch': 'Filter:'}
				});
			}
		});
	});

	$(document).on('click', '.tbl-CRUD tr', function() {
        $(this).addClass('info').siblings().removeClass('info');
    });

    $(document).on('click', '.create-frm', function() {
		var form = $('#updateFrm').serializeArray();
		$.ajax({
			url 	: 'Main/createEntry',
			type 	: 'post',
			data 	: form,
			success : function(response) {
				$('.sub-div').fadeOut();
				$('.main-div').html(response).removeClass('col-md-6').addClass('col-md-12');
				$('.tbl-CRUD').DataTable({
					searchHighlight 	: true,
					lengthMenu 			: [5, 10, 20, 30],
					order 				: [[ 0, 'desc' ]],
					//'scrollX' 			: true,
					stateSave 			: true,
					'oLanguage' 		: { 'sSearch': 'Filter:'}
				});
			}
		});
    });

});