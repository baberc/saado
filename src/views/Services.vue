<template>
<div id="services">
	<div>
		<div class="m-heading">
			<h1>nos missions</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
		</div>
		<SaadoServices mission='true'></SaadoServices>
	</div>

	<div>
		<div class="act-heading"><h1>nos Activitées</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p></div>
		<SaadoServices activity='true'></SaadoServices>
	</div>
</div>
</template>
<style>
	#services{width: 100%;background-color: #f2f2f2;margin-top:100px;overflow: auto;}
	.m-heading{
		background-color: #172e73;background-image: url('../assets/miss1.jpg');
		background-size: cover;height: 25em;
		background-position: center;text-align: center;
		padding-top: 20px;margin: 0px;
	}
	.m-heading h1{
		padding-top: 1em;color: white;
		position: relative;
		animation-name: fromBottom;
		animation-duration: 1s;
	}
	.m-heading p{
		animation-name: fadeInOpacity;
		animation-timing-function: ease-in;
		animation-duration: 1s;color: white;
	}
	.act-heading{
		background-image:url('../assets/actiback.jpg');
		color: #2c2f52;
		background-size: cover;height: 25em;
		background-position: center;text-align: center;
		padding-top: 100px;margin: 0px;
	}
	

</style>
<script>
import SaadoServices from "@/components/SaadoServices.vue";

export default{
		components:{
			SaadoServices
		}
}
</script>