@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			@foreach( $products as $product )
			<div class="cols-xs-12 col-sm-6 col-md-4">
				<div class="card padding">
					<header>
						<h2 class="card-title">{{ $product->name }}</h2>
						<h4 class="card-subtitle">{{ $product->price }}</h4>
					</header>
					<p class="card-text">{{ $product->description }}</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
@endsection