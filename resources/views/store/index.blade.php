
@extends('store.template')

@section('content')

@include('store.partials.slider')
<div class="container text-center">	
	<h2>Nuevos Productos</h2>
	

	<div id="products">
	
		@foreach($products as $product)

		<div class="product white-panel">

			<h1>{{$product->clave}}</h1>
			<h2>{{$product->nombre}}</h2><hr>
			<img src="{{ asset('images/product/'.$product->imagen) }}" width="200" height="200">
			<div class="product-info panel">
				<p>{{$product->extract}}</p>
				<p>
					<a class="btn btn-success" href="{{route('cart-add',$product->slug)}}"><i class="fa fa-cart-plus"></i> Comprar</a>
					<a class="btn btn-warning" href="{{route('product-detail',$product->slug)}}"><i class="fa fa-chevron-circle-right"></i> Detalle</a>
				</p>
			</div>
		</div>
		@endforeach
	
	</div>
</div>
@stop
