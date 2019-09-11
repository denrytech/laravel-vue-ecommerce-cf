@auth
{!! Form::open(['method' => 'DELETE', 'route' => ['productos.destroy', $product->id], 'onsubmit' => 'return confirm("Estás seguro de eliminar este producto?")']) !!}

{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}

{!! Form::close() !!}
@endauth