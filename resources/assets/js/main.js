
$(document).ready(function(){
	$('#products').pinterest_grid({
		no_columns: 4;
		padding_x: 10;
		padding_y: 10;
		margin_bottom: 50;
		single_column_breakpoint: 700;
	})

	//update item cart
	$('.btn').click(function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var slug = $(this).data('slug');
		var cantidad = $("#product_" + id).val();
		alert(slug);
		//window.location.href = url + "/cart/update/" + slug + "/" + cantidad;
	};

});

