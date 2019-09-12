<template>
	<div class="row justify-content-sm-center">
		<product-card-component v-bind:product="product" v-for="product in products" v-bind:key="product.id"></product-card-component>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				name: 'Products Component v2',
				products: [],
				endpoint: "/productos"
			}
		},
		created() {
			this.fetchProducts();
		},
		methods: {
			fetchProducts() {
				axios.get(this.endpoint).then((response) => {
					this.products = response.data.data;
				});
			}
		}
	}
</script>
