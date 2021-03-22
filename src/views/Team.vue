<template>
	<div class="all">
	<div id='team'>
		<div class='heading'>
		<img src="../assets/profile1.jpg" alt="profile_pic"/>
		<h2 class='nom'>Ahmed Haraki</h2>
		<p class='job'>gérant et comptable agréé</p>
		</div>
		<p style="color:#394770;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<ul>
			<li>
				<a href="#"><img src="../assets/socialmedia/facebook2.png" alt="facebook" class="social_media"></a>
			</li>
			<li>
				<a href="#"><img src="../assets/socialmedia/linkedin2.png" alt="linkedin" class='social_media'></a>
			</li>
		</ul>
	</div>
</div>
</template>
<style type="text/css">
.all{
		/*background: url("../assets/teamBack.jpg") no-repeat center;*/
		background-color: #8a96b9;
		width: 100%;height: 100%;
	}
	#team{
		/*background: rgba(0, 0, 0, 0.6);*/
		width: 50%;
		height: 100%;
		margin-top: 80px;
		margin-left: 25%;
		margin-right: 20%;
		overflow: auto;padding:0px;
		animation: fadeInOpacity 2s linear;
	}
	.heading{
		padding:0px;padding-top: 50px;
		display: flex;
		flex-wrap: wrap;
	}
	.heading img{
		width: 150px;
		height:150px;
		margin-left: 50px;
		margin-top:50px;
		/*position: relative;
		top: 20px;left: 0px;right: 100px;bottom: 20px;*/
	}
	.nom{
		margin-left: 50px;
		margin-top:90px;color:#f7f7f7;
	}
	.job{
	text-transform: uppercase;letter-spacing: 4px;color: #172e73;
	margin-top: 0px;margin-left: 130px;
	margin-top: -70px;margin-bottom: 30px;

	}
	#team ul li{
		display: inline;
		margin-left: 10px;
	}

	.social_media{
		width: 40px;
		height:40px;
	}
	
</style>