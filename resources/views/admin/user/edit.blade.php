@extends('admin.partials.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
					USUARIOS <small> [Editar]</small>
			</h1>
		</div>
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="page">
					@if(count($errors)>0)
						@include('admin.partials.errors')
					@endif
					{!!Form::model($user, array('route' => array('user.update',$user)))!!}
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="name">Nombre:</label>
							{!!
								Form::text(
									'name',
									null,
									array(
										'class'=>'form-control',
										'placeholder' => 'Ingresa el nombre...',
										'autofocus' => 'autofocus'
									)
								)
							!!}
						</div>
						<div class="form-group">
							<label for="last_name">Apellidos:</label>
							{!!
								Form::text(
									'last_name',
									null,
									array(
										'class'=>'form-control',
										'placeholder' => 'Ingresa los apellidos...',
										
									)
								)
							!!}
						</div>
						<div class="form-group">
							<label for="email">Correo:</label>
							{!!
								Form::text(
									'email',
									null,
									array(
										'class'=>'form-control',
										'placeholder' => 'Ingresa el correo...',
									)
								)
							!!}
						</div>
						<div class="form-group">
							<label for="user">Usuario:</label>
							{!!
								Form::text(
									'user',
									null,
									array(
										'class'=>'form-control',
										'placeholder'=>'Ingresa el nombre de usuario...',
									)
								)
							!!}
						</div>
						<div class="form-group">
							<label for="type">Tipo:</label>
							{!!	Form::radio('type','user', $user->type=='user'? true : false) !!} User
							{!!	Form::radio('type','admin', $user->type=='admin'? true : false) !!} Admin
						</div>
						<div class="form-group">
							<label for="address">Dirección:</label>
							{!!
								Form::textarea(
									'address',
									null,
									array(
										'class'=>'form-control',
									)
								)
							!!}
						</div>
						<div class="form-group">
							<label for="confirm_password">Activo:</label>
							{!!
								Form::checkbox(
									'active',
									null,
									$user->active == 1 ? true : flase)
							!!}
						</div><hr>
						<fieldset>
							<legend>Cambiar password:</legend>
							<div class="form-group">
								<label for="password">Nuevo Password</label>
								{!!
								Form::password(
									'password',
									array(
										'class'=>'form-control',
									)
								)
							!!}
							</div>
							<div class="form-group">
								<label for="confirm_password">Confirmar Nuevo Password</label>
								{!!
								Form::password(
									'password_confirmation',
									array(
										'class'=>'form-control',
									)
								)
							!!}
							</div>
						</fieldset><hr>
						<div class="form-group">
							{!!
								Form::submit(
									'Actualizar',
									array(
										'class'=>'btn btn-primary',
									)
								)
							!!}
							<a href="{{route('user.index')}}" class="btn btn-warning">Cancelar</a>
						</div>
					{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>
@stop