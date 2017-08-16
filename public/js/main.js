$(document).ready(function() {
	$('#products').pinterest_grid({
		no_columns: 4,
		padding_x: 10,
		padding_y: 10,
		margin_bottom: 50,
		single_column_breakpoint: 700
	});

			

	$(".btn-update-item").click(function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var url = $(this).data('url');
		var slug= $(this).data('slug');
		var cantidad = $("#product_" + id).val();
		window.location.href = url + "/cart/update/" + slug + "/" + cantidad

	});	
});