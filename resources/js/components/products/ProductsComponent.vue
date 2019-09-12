<template>
	<material-transition-group tag="div" class="row justify-content-sm-center">
		<product-card-component v-bind:product="product" v-for="(product,index) in products" v-bind:data-index="index" v-bind:key="product.id"></product-card-component>
	</material-transition-group>
</template>

<script>
import { setTimeout } from 'timers';
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
			},
		}
	}
</script>
