@extends('layouts.app')

@section('content')
<div class="container">
	<products-component></products-component>
	<div class="row justify-content-center">
		<div class="col-12 mt-4 d-flex justify-content-center">
			{{ $products->links() }}
		</div>
	</div>
</div>
@endsection