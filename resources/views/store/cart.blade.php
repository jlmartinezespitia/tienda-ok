@extends('store.template')
@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Carrito de compras</h1>
		</div>
		<div class="table-cart">
			@if( count($cart) )
				<p>
					<a href="{{route('cart-trash')}}" class="btn btn-danger">Vaciar carrito <i class="fa fa-trash"></i></a>
				</p>
				<div class="table-responsive">
					<table class="table table-striped table-hover table-bordered">
						<thead>
							<tr>
								<th>Imagen</th>		
								<th>Clave</th>		
								<th>Producto</th>		
								<th>Precio</th>		
								<th>Cantidad</th>		
								<th>Subtotal</th>		
								<th>Eliminar</th>		
							</tr>
						</thead>
						<tbody>
							@foreach($cart as $item)
								<tr>
									<td><img src="{{asset('images/product/'.$item->imagen)}}"></td>
									<td>{{$item->clave}}</td>
									<td>{{$item->nombre}}</td>
									<td>${{number_format($item->price,2)}}</td>
									<td>
										<input type="number" min="1" value="{{$item->cantidad}}" id="product_{{$item->id}}"> 
										<a href="#" class="btn btn-primary btn-update-item" data-url={{url("/")}} data-slug="{{$item->slug}}" data-id="{{$item->id}}"><i class="fa fa-refresh"></i></a>
									</td>
									<td>${{number_format($item->price * $item ->cantidad,2)}}</td>
									<td><a href="{{route('cart-delete',$item->slug)}}" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
								</tr>

							@endforeach
						</tbody>
					</table><hr>
					<h3>
						<span class="label label-info">
							Total: ${{number_format($total,2)}}
						</span>
					</h3>
				</div>
			@else
				<h3><span class="label label-warning">No hay productos en el carrito</span></h3>
			@endif
			<hr>
			<p>
				<a href="{{route('home')}}" class="btn btn-warning"><i class="fa fa-chevron-circle-left"></i> Seguir comprando</a>

				<a href="{{route('order-detail')}}" class="btn btn-success">Continuar <i class="fa fa-chevron-circle-right"></i></a>
			</p>
		</div>
	</div>
@stop