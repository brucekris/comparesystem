$(document).ready(function() {
	$('.getBook').click(function(event) {
		event.preventDefault();
		// alert($(this).attr('href'));

		$.ajax({
			url: $(this).attr('href'),
		})
		.done(function(data) {
			$('#product_info').html(data);
		})
	});
});