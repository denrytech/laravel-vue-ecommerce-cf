{!! Form::open(['url' => '/productos', 'class' => 'app-form']) !!}
	<div>
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nombre o título del producto']) !!}
	</div>

	<div>
		{!! Form::label('description', 'Descripción') !!}
		{!! Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Descripción del producto']) !!}
	</div>

	<div>
		{!! Form::label('price', 'Precio') !!}
		{!! Form::number('price', '', ['class' => 'form-control', 'placeholder' => '0']) !!}
	</div>

	<div>
		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}