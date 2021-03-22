<template>
	<div id="mycalendar">
		<div>
		<ul class="month">
			<li class='prev' v-on:click='moove(true,false)'>&#10094;</li>
			<li>{{myDay.name}}&nbsp;{{myDay.number}}&nbsp;{{myDay.month.name}}&nbsp;{{myDay.year}}</li>
			<li class='next'  v-on:click='moove(false,true)'>&#10095;</li>
		</ul>
		<ul class='weekdays'>
			<li v-for='day in days' :key="days.indexOf(day)">{{day}}</li>
		</ul>
		<ul class="days">
			<li v-for='j in myDay.month.dayCount' :key="j" v-bind:class="{'otherdays':true,'currentday':(j==myDay.number),'weekend':((a=new Date(myDay.year,myDay.month.number,j).getDay())==0||a==6)}" v-bind:style="j==1 ?  {marginLeft: m} : 'border: none;'" v-on:click='showTime(new Date(myDay.year,myDay.month.number,j))'>{{j}}</li>
		</ul>
	</div>
	<div id='timing'>
		<div v-if='avVisibility'>
					<span>{{clickedDate.date}}</span>
		<ul>
			<li v-for="av in clickedDate.availability" :key='av.id' v-bind:class="{'takenTime':(av.available==false)}" @click="reserve(av)">{{av.timing}}</li>
		</ul>
			
		</div>
		<div v-else>
			click to show the availability...
		</div>
	</div>
	</div>
</template>
<style>

    #mycalendar{width: 500px;background-color: #dbdae0;padding-bottom: 10px;border-radius: 3em;box-shadow: 0px 5px 5px 0px black;margin-bottom: 1em;}		
    .month{
			display: flex;
			justify-content: space-around;
			padding: 10px;
			background-color: black;
			color: #a4b6c6;font-weight: bold;
			margin : 0px;list-style: none;
	}
		.weekdays{
			display: flex;
			color: #592036;
			background-color: #e8e8ea;
			padding:0px; 
			margin: 0px;
		}
		.weekdays li{
			width: 72px;list-style: none;
			text-align: center;
		}
		.days{
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			padding:0px;list-style: none;
			height:200px;

		}
		.otherdays{
			background-color: white;
			margin:2px;
			margin-right: 8px;
			text-align: center;
			width: 60px;
			height: 30px;
		}
		.currentday{
			font-weight: bold;
			font-size: 24px;
			color: #f58620;
		}
		#timing ul{
			padding: 0px;margin:0px;
			display: flex;flex-direction: row;
			justify-content:center;
			height:37px;
			align-content: center;
			padding-top: 5px;list-style: none;
		}
		#timing ul li{
			background-color: white;
			padding-left:  17px;
			padding-right:  17px;
			margin-right: 8px;
			padding-top: 5px;
			padding-bottom: 5px;
			height: 20px;
			border :solid 1px black;
		}
		.takenTime{
			background-color: gray;
			color: red;
		}
		.weekend{
			background-color: #f2eaea;
		}
		.next,.prev{padding-left:10px;padding-right:10px;}
		.next:hover,.prev:hover{background-color:rgba(252,220,209,0.3);}
</style>
<script>
var months = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];
	var days = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"];
	var currentM = new Date().getMonth();
	var currentY = new Date().getFullYear();
export default{
	name : 'mycalendar',
	data(){
		return{
			days:days,
			myDay:{
					name:days[new Date().getDay()-1],
					number : new Date().getDate(),
					month: {
							name: months[currentM],
							number: currentM,
							dayCount : new Date(currentY,currentM+1,0).getDate()
						},

					year: currentY,
					fullDate: {
						date: new Date(),
						availability:[{
							id:1,
							timing : '9-10',
							available: true
						},
					{
							id:2,
							timing : '10-11',
							available: true
					},
					{
							id:3,
							timing : '11-12',
							available: true
					},
					{
							id:4,
							timing : '12-13',
							available: true
					}]},
			},
			avVisibility: false, 
			selectedDate: [{
				date:"",
				availability:{}
			}],
			clickedDate: {}
			}
		},
		methods:{
			moove : function(prev,next){
				if(prev){
					if(currentM > 0) currentM--;
					else{
						currentM=11;
						this.myDay.year--;
					}
				}
				else if(next){
					if(currentM<11) currentM++;
					else {
						currentM=0;
						this.myDay.year++;
					}
				}
				else{
					console("make a choice prev or next")
				}
				this.myDay.month.name = months[currentM];
				this.myDay.month.number = currentM;
				this.myDay.month.dayCount =  new Date(this.myDay.year,currentM+1,0).getDate();
			},
			showTime : function(cd){

				this.avVisibility=true;
				var obj ={};
					obj["date"] = cd;
					obj["availability"]=[{
							id:1,
							timing : '9-10',
							available: true
						},
					{
							id:2,
							timing : '10-11',
							available: true
					},
					{
							id:3,
							timing : '11-12',
							available: true
					},
					{
							id:4,
							timing : '12-13',
							available: true
					}];
				fillTab(this.selectedDate,this.selectedDate.length-1,cd,obj);//remplir le selectedDate array using the recursion function that rejects the date if it's alredy taken

				//fill the clickedDate from the selectedDate 
				for(var i=0;i<this.selectedDate.length;i++){
					var previousClick = this.selectedDate[i].date;
					var newClick = cd.toString();
					typeof(previousClick)==='object'?previousClick=previousClick.toString():previousClick;//parse all to string to compare

					if(previousClick.localeCompare(newClick)===0){
						this.clickedDate = this.selectedDate[i];
					}
				}
				console.log(this.selectedDate);
				console.log(this.clickedDate);
				
			},
			reserve(t){
				t.available = false;
			}
		},
		computed:{
			m(){ 
				var daynuminWeek = new Date(this.myDay.year,this.myDay.month.number,1).getDay()-1;
				var res = (daynuminWeek>=0) ? (daynuminWeek*70)+1 : 6*70 ;
				return res+'px';
			}

		}
	}

	function fillTab(tab,l,value,myval){
		
		if(l==0){
				tab.push(myval);
		}
		else{
			if(tab[l].date.getTime()!==value.getTime()){
			console.log("mkhtalfine: "+l+" douz");
			fillTab(tab,l-1,value,myval);
			}
			else{
				console.log("bhal bhal");
			}
		}

	}

</script>
