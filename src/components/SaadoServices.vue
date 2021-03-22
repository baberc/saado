<template>
<div id="saadoServices">
	<div class="m-info" v-if="mission">
			<div class="m-content" v-for='mission in missions' v-bind:key='mission.id'>
					<img v-if='mission.id==1' src="../assets/servicesIcons/comptable.png" class='m-img'>
					<img v-else-if='mission.id==2' src="../assets/servicesIcons/fiscal.png" class='m-img'>
					<img v-else-if='mission.id==3' src="../assets/servicesIcons/social.png" class='m-img'>

					<h2 class='m-h2'>{{mission.title}}</h2>
				<ul><li v-for="c in mission.content" v-bind:key='c'>{{c}}</li></ul>
				
			</div>
	</div>	
	<div class="act" v-if="activity">
		<div class="act-title">
			<ul>
				<li v-for='act in activities' v-bind:key="act.id" @click='show(act.id)'>{{act.title}}</li>
			</ul>
		</div>
		<div class="act-content">
			<div  v-if='triger'>
			<h2>{{activities[actIndex].title}}</h2>
			<div v-if='actIndex==2' style="padding-top:1em"><li v-for="cg in activities[2].content" :key="cg" style="text-align:left;margin-left: 6em;margin-bottom:1em">{{cg}}</li></div>
			<p v-else>{{activities[actIndex].content}}</p>
			</div>
			<div  v-else>
			<h2>{{activities[0].title}}</h2>
			<p>{{activities[0].content}}</p>
			</div>
		</div>
	</div>
	<div v-if='forhome'>
		<div class="m-info" style="background-color: #b1cdf9">
		<div class="m-home-style" v-for='mission in missions' v-bind:key='mission.id'><img v-if='mission.id==1' src="../assets/servicesIcons/comptable.png" class='m-img'>
					<img v-else-if='mission.id==2' src="../assets/servicesIcons/fiscal.png" class='m-img'>
					<img v-else-if='mission.id==3' src="../assets/servicesIcons/social.png" class='m-img'>
				<h2 class='m-h2'>{{mission.title}}</h2>
				<a href="/#/services"><img src="../assets/more.png" style="width:2em;"></a>
		</div>
		</div>

		<div class="act-home-style">
				<li v-for='act in activities' v-bind:key="act.id">{{act.title}}</li>
		</div>
		
	</div>
</div>
</template>
<style>
	.m-info{
		display: flex;justify-content: space-around;width: 100%;
		padding-top:4em; padding-bottom: 4em;
		background-color: #2C2F52}
	.m-content{
		background-color: #F8F8F8;
		margin: 20px; width: 30%;border-radius: 20px;box-shadow: 2px;
	}
	.m-content ul{text-align: left;overflow: auto;height: 200px;}
	.m-h2{
		font-family: "Roboto", Sans-serif;font-size: 21px;  font-weight: 500;line-height: 1em;letter-spacing: -0.3px; color: #444444;}
	.m-img{height: 60px;width: 60px;padding-top: 10px;}

	.act{display: flex;width: 100%;height: 100%;padding-top: 20px;padding-bottom: 20px;}
	.act-title{
		width: 40%;margin:20px;margin-top: 70px;margin-bottom: 50px;
		text-transform: uppercase;
		text-align: left;color: darkgray;
	}
	.act-title ul{
		list-style: none;
	}
	.act-title ul li{
		margin-bottom: 30px;padding: 5px;
		border-right:  2px solid ;
	}
	.act-title ul li:hover{
		color:black;
	}
	.act-content{
		margin-right: 30px;margin-top:20px;padding:2em;padding-top: 3em;
		background-color: #172e73;width: 60%;
		border-radius: 5px;
		box-shadow: 0px 2px 18px black;
	}
	.act-content h2{color:#b0def1;text-transform: capitalize;
		text-shadow: 2px 1px 10px black}
	.m-home-style{
		height:13em;width: 20%;
		padding-top: 2em;
		background-color:white;
		border-radius: 15em;
		box-shadow:  inset 5px 0px 30px 5px #b1cdf9 ;
	}
	.m-home-style:hover{
		box-shadow:  inset 25px -5px 50px 15px #b1cdf9 ;
	}
	.act-home-style{
		width: 100%;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
		padding-top:7em;padding-bottom: 7em;

	}
	.act-home-style li{
		margin:2em;padding:1.5em;
		list-style: none;
		background-color:white;
		width: 17em;
		border-radius: 1em;
		box-shadow:   0px 0px 20px 2px silver ;
		-webkit-transform:rotate(-45deg);
		/*
		
		
		background-color:white;
		
		*/
	}
	@media only screen and (max-width: 600px){
		.m-info{display: flex;flex-direction: column;
		padding:0em;padding-top:2em;margin:0px;}
		.m-home-style{width: 70%;align-self: center;
			margin-bottom:2em;}
		.m-content{width: 100%;}
	}
</style>
<script>
import json from "@/assets/Myservices.json";
export default{
	name:"SaadoServices",
	props:['mission','activity','forhome'],
	data () {
		return {
			missions: json.missions,
			activities: json.activities,
			triger: false,
			actIndex: ""
		}	
	},
	methods: {
		show : function(a){
				this.triger = true;
				this.actIndex = a-1;
			//	console.log('my index is'+this.actIndex);
			},
	}	
}
	
</script>