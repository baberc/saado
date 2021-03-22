<template>
	<div id='RDV' align="center">	
		<h1>Prise de RDV facile...</h1>
		<form id='rdv_form' @submit='checkForm($event)'>
			<input type="date" v-model="av_date">
			<div>
				<input type="time" v-model="av_hour" min="9:00" max="13:00">
				<small>&nbsp; Heures de travail sont de 9h à 13h</small>
			</div>
			<input type="text" v-model="clt_name" placeholder="nom et prenom*" required>
			<input type="email" v-model="clt_mail" placeholder="email*" required>
			<input type="tel" v-model="clt_phone" placeholder="N° téléphone">
			<textarea v-model="desc" placeholder="veuillez entrer quelques lignes..."></textarea>
			<input type="submit" name="ok" value="réserver" class="read">
			<span style="color:darkblue;" id="answer"></span>
		</form>
	</div>
</template>
<style>
#RDV{
	width: 100%;padding-top: 130px;background-color:#e6eaed;
	color:#394977;padding-bottom: 3em;
	animation: fadeInOpacity 0.5s linear;
}
#RDV h1{color:#4b66b7;margin: 0px;margin-bottom: 20px;}
#rdv_form{
			width:600px;height: 400px;
			display: flex;flex-direction: column;justify-content:space-around;
			box-shadow: 0px 0px 20px gray;
			padding: 2em;padding-bottom: 0px;
			border-radius: 10px;background-color: #f0f3f5;
		}

@media only screen  and (max-width: 600px){
	#RDV{
		padding-top: 250px;
	}
	#RDV h1{font-size: 2em;}
	#rdv_form{
		width: 200px;
	}
}
</style>
<script>
	export default{
		name:'RDV',
		data(){
			return{
				av_date: "2021-01-01",
				av_hour:"09:10",
				clt_mail:"",
				clt_name:"",
				clt_phone:"",
				desc:""
			}
		},
		methods:{
			makeRDV: function(){
				var monRDV = new Date(this.av_date);
				monRDV.setHours(this.av_hour.substring(0,2));
				monRDV.setMinutes(this.av_hour.substring(5,3));
				//formater la date to match the mysql datetime
				return this.formatDate(monRDV);
			},
			formatDate: function(da){
				var d = new Date(da),
				year = d.getFullYear(),
				month = d.getMonth()+1,
				day = d.getDate(),
				hour = d.getHours();
				if(day < 10) day = '0'+day;
				if(month< 10) month = '0'+month;
				var date = [year,month,day].join('-');
				var time = hour+':00:00';
				return date+' '+time;
			},
			checkForm: function(event){
				event.preventDefault();
				this.loadFile('http://localhost:8888/saado-with-vue/saadoBackend/treatment.php',this.makeRDV(),this.clt_mail,this.desc,this.clt_name,this.clt_phone);
			
			},
			loadFile: function(fichier,param1,param2,param3,param4,param5){
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						console.log(xhttp.responseText);
						document.getElementById('answer').innerHTML=xhttp.responseText;
						
						//formulaire.reset();
						}};
						xhttp.open("POST", fichier, true);
						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xhttp.send("madate="+param1+"&clt_mail="+param2+"&state_desc="+param3+"&name="+param4+"&phone="+param5);
					}
				}
	}
</script>
