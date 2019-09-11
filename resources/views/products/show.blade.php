@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-sm-center">
		<div class="cols-xs-12 col-sm-10 col-md-7 col-lg-6">
			<div class="card">
				<header class="p-4 text-center bg-primary">
					
				</header>
				<div class="card-body p-4">
					<h2 class="card-title">{{ $product->name }}</h2>
					<h4 class="card-subtitle">{{ $product->price }}</h4>
					<p class="card-text">{{ $product->description }}</p>
					<div class="card-actions">
						<button type="button" name="button" class="btn btn-success">Agregar al carrito</button>
						@include('products.delete')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection