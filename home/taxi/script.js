$(document).ready(function() {
	
	$("#add").click(function() {
	
		var newRow = $(".card:last").clone().appendTo('#main');
		$(newRow).find('.remove').removeClass('d-none').addClass('d-inline');
		setIndex();

	});

	$(document).on('click', '.remove', function() {

		$(this).parents(".card").remove();
		setIndex();

	});

});

function setIndex() {

	$(".clone").each(function(i, e) {
		
		$(this).find('input').each(function() {
			
			var oldName = $(this).attr('name');
			var oldIndex = oldName.substr(6,1);
			$(this).attr('name', oldName.replace(oldIndex, i));

		});

	});
}