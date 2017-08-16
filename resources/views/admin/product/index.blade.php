@extends('admin.partials.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS <a href="{{route('product.create')}}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Producto</a>
			</h1>
		</div>
		<div class="page">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Editar</th>
							<th>Eliminar</th>
							<th>Imagen</th>
							<th>Nombre</th>
							<th>Categoría</th>
							<th>Extracto</th>
							<th>Visible</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
							<tr>
								<td>
									<a href="{{route('product.edit',$product->slug)}}" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
								</td>
								<td>
									{!! Form::open(['route' => ['product.destroy',$product->slug]])!!}
										<input type="hidden" name="_method" value="DELETE">
										<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
											<i class="fa fa-trash-o"></i>
										</button>
									{!! Form::close() !!}					
								</td>
								<td><img src="{{ asset('images/product/'.$product->imagen) }}" width="40"></td>
								<td>{{$product->nombre}}</td>
								<!-- <td>{{$product->category_id}}</td> -->
								<td>{{$product->category->nombre}}</td>
								<td>{{$product->extract}}</td>
								<td>{{$product->visible == 1 ? "Sí" : "No"}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<hr>
			<?php echo $products->render(); ?>
		</div>
	</div>
	
@stop