@extends('admin.partials.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
					PRODUCTOS <small>[Agregar producto]</small>
			</h1>
		</div>
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="page">
					@if(count($errors)>0)
						@include('admin.partials.errors')
					@endif
					{!!Form::open(['route' => 'product.store'])!!}
						<div class="form-group">
							<label class="control-label" for="category_id">Categoría</label>
							{!! Form::select('category_id',$categories,null,['class'=>'form-control']) !!}
						</div>
						<div class="form-group">
							<label for="clave">Clave:</label>
							{!!
								Form::text(
									'clave',
									null,
									array(
										'class'=>'form-control',
										'placeholder' => 'Ingresa la clave...',
										'autofocus' => 'autofocus'
									)
								)
							!!}
						</div>
						<div class="form-group">
							<label for="nombre">Nombre:</label>
							{!!
								Form::text(
									'nombre',
									null,
									array(
										'class'=>'form-control',
										'placeholder' => 'Ingresa el nombre...',
										
									)
								)
							!!}
						</div>
						<div class="form-group">
							<label for="extract">Extracto:</label>
							{!!
								Form::text(
									'extract',
									null,
									array(
										'class'=>'form-control',
										'placeholder' => 'Ingesa el extracto...',
									)
								)
							!!}
						</div>
						<div class="form-group">
							<label for="descripcion">Descripción:</label>
							{!!
								Form::textarea(
									'descripcion',
									null,
									array(
										'class'=>'form-control',
									)
								)
							!!}
						</div>
						<div class="form-group">
							<label for="imagen">Imagen:</label>
							{!!
								Form::text(
									'imagen',
									null,
									array(
										'class'=>'form-control',
										'placeholder' => 'Ingesa la url de la imagen...',
									)
								)
							!!}
						</div>
						<div class="form-group">
							<label for="visible">Visible:</label>
							{!!
								Form::checkbox(
									'visible',
									null,
									array(
										'class'=>'form-control',
									)
								)
							!!}
						</div>
						<div class="form-group">
							{!!
								Form::submit(
									'Guardar',
									array(
										'class'=>'btn btn-primary',
									)
								)
							!!}
							<a href="{{route('product.index')}}" class="btn btn-warning">Cancelar</a>
						</div>
					{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>
@stop