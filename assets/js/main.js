$(document).ready(function() {

	$(document).on('click', '.tbl-CRUD tr', function(e) {
		// var id 		= $(this).attr('data-id');
		// var idx		= $(e.target).children().context.cellIndex;
		// var column 	= $('.tbl-CRUD td').children().prevObject[idx].attributes[0].value;
		// $.ajax({
		// 	url 	: 'index.php/Main/updateColumn',
		// 	type 	: 'post',
		// 	data 	: {
		// 		id 		: id,
		// 		column 	: column,
		// 	},
		// 	success : function(response) {
		// 		console.log(response);
		// 	}
		// });
	});

	$(document).on('click', '.update', function(e) {
		e.preventDefault();
		$('.main-div').removeClass('col-md-12').addClass('col-md-6');
		var id = $(this).attr('data-id');		
		$('.sub-div').fadeIn(500);
		$.ajax({
			url 	: 'index.php/Main/getForm',
			type 	: 'post',
			data 	: {id : id},
			success : function(response) {				
				$('.sub-div .panel-body').html(response);
			}
		});
	});

	$(document).on('click', '.delete', function(e) {
		e.preventDefault();
		$('.main-div').removeClass('col-md-6').addClass('col-md-12');
	});

	$(document).on('click', '.update-frm', function(e) {
		e.preventDefault();
		var id   = $(this).attr('data-id');
		var form = $('#updateFrm').serializeArray();
		form.push({name: "id", value: id});
		$.ajax({
			url		: 'index.php/Main/submittedData',
			type 	: 'post',
			data 	: $.param(form),
			success : function(response) {
				$('.sub-div').fadeOut();
				$('.main-div').removeClass('col-md-6').addClass('col-md-12');
				$('.main-div').html(response);
			}
		});
	});

});