<template>
  <div id="app">
    <header>
     <div class="gmail">
      <img src="./assets/socialmedia/gmailgray.png" alt='gmail' class='icony' style="margin-top:11px;" />
      <label class="headerStyle" style="font-size: 13px;">fiduciairesaadokettara@outlook.fr</label>
     </div>
     <label class="headerStyle">Auprès du ministère de l'économie et des finances royaume du Maroc : Article 103 de la loi 127-12</label>
     <div style="display:flex;">
      <img src="./assets/socialmedia/phone2.png" alt='phonenumber' class='icony'/>
      <label class='headerStyle' style="font-size: 13px;">(+212) 5 28 33 83 62</label>
      <img src="./assets/socialmedia/whats.png" alt='phonenumber' class='icony'/>
      <label class='headerStyle' style="font-size: 13px;">06 14 89 98 99</label>
     </div>
     <div style="margin-right:6px;"><a href="#"><img src="./assets/socialmedia/fgray.png" alt="facebook" class="icony"></a>
     <a href="#"><img src="./assets/socialmedia/ingray.png" alt="linkedin" class="icony"></a></div>
    </header>
    <nav>
       <router-link to="/"><img src="./assets/logo/logof.png" alt="logo" class='homeLogo'></router-link>
      <div id="main-menu">
      <router-link to="/">accueil</router-link>
      <router-link to="/about">cabinet</router-link>
      <router-link to="/team">l'expert</router-link>
      <router-link to="/services">services</router-link>
      <router-link to="/contact">contact</router-link>
      <router-link to="/rdv">rdv</router-link>
      </div>
    </nav>
    <router-view/>
    <Myfooter></Myfooter>
   </div>
</template>
<style>
.icon{
  display: none;
}
html,body { margin: 0;height: 100%;background-color: #E9E9E9;}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #b0b0b0;
  height: 100%;
}
header{
   width: 100%;height: 80px; background-color: #1d262d;
   position: fixed;top:0px;z-index: 1;display: flex;justify-content: space-between;

}
.icony{width: 16px;height: 16px;margin-top:10px;margin-left: 5px;margin-right: 3px;}
.gmail{margin:0px;padding:0;padding-left:2px;display: flex}
.headerStyle{
  margin-top: 10px;height: 20px;
  color: #a4b6c6;font-weight: bold;font-size: 15px;
  overflow: auto;
}
header a img:hover{background-color: #fba707;border-radius: 3px;}
h2{
   font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
    font-size: 2.5em;
    font-weight: bold;
}
h1{
  font-size: 4em;
  margin-top: 10px;text-transform: uppercase;
}
p{
    text-align: justify;
    text-justify: inter-word;
    text-indent: 50px;
    text-overflow: hidden;
    padding-top: 10px;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 10px;
}

.homeLogo{
  width: 300px;height: 60px;
  margin-top: 5px;
}
#main-menu{
  padding-top: 20px;
}
nav {
  background-color: #f7f7f7;
  position: fixed;
  top: 40px;
  width: 100%;
  z-index: 1;
  display: flex;
  justify-content: space-around;
}

#main-menu a {
  font-weight: bold;color: #172e73;text-transform: uppercase;
  text-decoration: none;font-size:20px;margin-left: 25px;
}

nav a.router-link-exact-active {
  color: #5491F5/*42b983*/;
}
#main-menu a:hover{
 border-bottom : 2px solid orange;
}
@media only screen and (max-width: 600px) {
  .headerStyle{
    display:none;
  }
  #main-menu{
    display: flex;flex-direction: column;
  }
}

</style>
<script>
  import Myfooter from '@/components/Myfooter.vue';
  export default{
   components:{ 
    Myfooter
   },
  }
 
</script>

