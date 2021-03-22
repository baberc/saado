<template>
	<div class='contactAll'>
		<div class="infos">
			<h1>Contactez Nous</h1>
			<div class="coords">
				<div>
					<h3>adresse</h3>
					<span>107,  Appat n°6 – Rue sebta zone industrielle tassila Inezgane – Agadir</span>
				</div>
				<div><h3>tel</h3>
					<ul>
						<li>GSM : +212 - 6 14 89 98 99</li>
						<li>TEL : +212 – 5 28 33 83 62</li>
						<li>fiduciairesaadokettara@outlook.fr</li>
					</ul>
					</div>
				<div><h3>horaire</h3><span>LUN-VEN 09:00 – 13:00</span></div>
				<div><h3>suivez nous</h3>
					<a href="#"><img src="../assets/socialmedia/facebook2.png" alt="facebook" class="social_media"></a>&nbsp;
					<a href="#"><img src="../assets/socialmedia/linkedin2.png" alt="linkedin" class='social_media'></a>
				</div>
		</div>
		</div>
		<div id="googleMap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1916.073883286216!2d-9.52756597094328!3d30.385723050302076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c8159f85da37%3A0x5d4a7284d1e1b242!2sRue%20Sebta%2C%20Dcheira%20El%20Jihadia%2080000!5e0!3m2!1sen!2sma!4v1603296019461!5m2!1sen!2sma" width="600" height="450" frameborder="0" style="border:0;background-color:white" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
</template>
<style type="text/css">
.contactAll{background-color: #E9E9E9;  width: 100%;display: flex;flex-direction: row;overflow: auto; }
.infos{width: 50%;padding-top: 90px;animation: fadeInOpacity 1s linear;}
.infos h1{padding: 0px;margin:20px;color: #4b66b7;overflow: auto;}

	#googleMap{
		width: 50%;
		padding-top: 120px;margin-top: 10px;
		overflow: auto;
	}
	#googleMap iframe{
		border-radius: 25px;
         border: 2px solid #73AD21;
	}
	.coords{
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		padding: 0px;margin:0px;
	}
	.coords div{
		background-color: rgb(255,255,255);
		margin-left: 5%;
		margin-bottom: 5%;
		width: 43%;
		padding-bottom: 20px;
		padding-top: 20px;
		padding-left:0px;
		padding-right:0px;
		overflow: auto;
		}
	.coords div ul{
		padding-left:0px;
		list-style: none;
	}
	.coords div h3{
		text-transform: uppercase;
		letter-spacing: 3px;
		font-weight: bold;
	}
	@media only screen  and (max-width: 600px){
		.infos{
			width: 100%;
		}
		.contactAll{
			padding-top:10em;
			flex-direction: column;
		}
		#googleMap{
			width: 100%;padding-top: 0px;overflow: hidden;margin-right: 10px;margin-bottom:1em;
		}
	}
</style>