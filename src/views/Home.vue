<template>
<div id="home">
  <div class="hero">
  <div class="homeText" align="center">
  <h1>cabinet comptable et fiscal saado sarl</h1>
  <div class="yellowBar"></div>
  <h3>-Saado fiduciaire a été créé en 2008 par Ahmed Haraki-</h3>
  </div>
  <video autoplay muted loop class="myvideo">
    <source src="../assets/rpw.mp4" type="video/mp4">
  </video>
  </div>
<div id="expert-reminder">
  <div>
    <img src="../assets/profile1.jpg">
    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  </div>
  <label>05 28 33 83 62 / 06 14 89 98 99 | 107, Appat n°6 – Rue sebta zone industrielle tassila Inezgane – Agadir | fiduciairesaadokettara@outlook.fr</label>
</div>
<div style="display:flex;flex-direction:column;">
<h1 style="color:#4b66b7">SERVICES ET ACTIVITÉES</h1>
<SaadoServices  forhome='true'></SaadoServices>
<a href="/#/services" class="read">read more</a>
</div>
<div id="RDV-reminder">
  <div><h1>Allez, Prenez un rendez-vous</h1>
  <a href="./#/Rdv" class='rdv-button'>cliquez ici</a>
  </div>
</div>
</div>
</template>
<style>
#home{ width: 100%;}
.hero{width: 100%;height: 100%;}
.myvideo{
  width: 100%;object-fit: cover;height: 42.35em;
}
.homeText{
height: 37.5em;width: 100%;
position: absolute; padding-top: 80px;
overflow: auto;background-color: rgba(23,46,115,0.5);
}
.homeText h1{
padding-top: 100px;padding-left: 40px;padding-right: 40px;color: white;
animation-name: fadeInOpacity;
  animation-timing-function: ease-in;
  animation-duration: 1s;
}
.yellowBar{
  width: 30%;height: 5px; background-color: yellow;position: relative;
  animation-name: fromleft;
  animation-duration: 1s;
}
.homeText h3{
  letter-spacing: 1px;position: relative;
  margin-top:2em;
  font-size: 20px;
  animation-name:fromBottom;
  animation-duration: 1s;
}
#expert-reminder{padding-bottom:5em;}
#expert-reminder div{
  display: flex;
  justify-content: space-around;
  padding:4em;padding-bottom: 1em;
}
#expert-reminder div img{
  width: 20em;height: 20em;
  border-radius: 10em;
}
#expert-reminder div p{
  padding-top:5em;
}

#expert-reminder label{
  padding:1em;
  font-size: 18px;color: gray;
}
.act-re{
  width: 100%;height: 500px;
  background-color:#c9ddff;
}
#RDV-reminder{
  background-image: url("../assets/rdv2.png");
  background-size: cover;
  width: 100%;
  color: white;text-transform: uppercase;
  background-attachment: fixed;
}
#RDV-reminder div{
  background-color: rgba(0,0,0,0.5);width: 100%;padding-bottom: 10em;
}
#RDV-reminder div h1{padding-top:2em;margin-bottom: 2em}
#RDV-reminder div a:hover{
  background-color: #5491f5;color: white;
}
.rdv-button{
 padding:1em;padding-left: 3em;padding-right: 3em;
 font-weight: bold;color: white;text-decoration: none;
 letter-spacing: 5px;font-size: 25px;
 background-color: transparent;color: #5491f5;
 border: 2px solid #5491f5;
}
a:link {
  text-decoration: none;
}
.read{
  border:2px solid #f58620;
  background-color: transparent;/*#fcdcd1*/;
  color: #f58620;font-weight: bold;
  text-transform: uppercase;padding:1em;width: 11em;align-self: center;margin-bottom: 2em;
}
.read:hover{background-color:#f58620;color: #fcdcd1;}
/*.more{-webkit-transform:rotate(45deg);}*/
/*Mes Annimations*/
@keyframes fadeInOpacity {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes fromleft{
  from{
    left:-8em;
  }
  to{
    left:0px;
  }
}
@keyframes fromright{
  from{
    right:-4em;
  }
  to{
    right:0px;
  }
}
@keyframes fromBottom{
  from{
    bottom: -4em;
  }
  to{
    bottom:0em;
  }
}
@media only screen and (max-width: 600px) {
  .homeText h1{
    font-size: 2em;padding-top: 250px;
  }
  #expert-reminder div img{
  width: 5em;height: 5em;
  border-radius: 2.5em;
}
#expert-reminder div p{padding-top:0em;margin-top:0px;font-size: 12px;}
}


</style>
<script>
import SaadoServices from "@/components/SaadoServices.vue"
  export default{
        components:{
          SaadoServices,
        }
  }
</script>