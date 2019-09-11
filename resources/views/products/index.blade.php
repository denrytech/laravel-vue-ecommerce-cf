@extends('layouts.app')

@section('content')
<div class="container">
	<div>
		<products-component></products-component>
	</div>
	<div class="row justify-content-center">
		@foreach( $products as $product )
		<div class="cols-xs-12 col-sm-6 col-md-4">
			<div class="card padding">
				<header>
					<h2 class="card-title"><a href="/productos/{{ $product->id }}">{{ $product->name }}</a></h2>
					<h4 class="card-subtitle">{{ $product->price }}</h4>
				</header>
				<p class="card-text">{{ $product->description }}</p>
			</div>
		</div>
		@endforeach
		<div class="col-12 mt-4 d-flex justify-content-center">
			{{ $products->links() }}
		</div>
	</div>
</div>
@endsection