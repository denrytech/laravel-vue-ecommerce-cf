<template>
	<div class="cols-xs-12 col-sm-6 col-md-4">
		<div class="card padding">
			<header class="p-4 text-center bg-primary">
						
			</header>
			<div class="card-body p-4">
				<h2 class="card-title">{{ product.name }}</h2>
				<h4 class="card-subtitle">{{ product.humanPrice }}</h4>
				<p class="card-text">{{ product.description }}</p>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		props: {
			product: {
				type: Object
			}
		}
	}
</script>