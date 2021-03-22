<template>
	<footer>
      <div>
        <img src="../assets/logo/logof.png" alt="logo" class='footerlogo'/>
        <div class="privacy">
          <img src="../assets/socialmedia/copyright-logo.png" class="copyright-logo">
          <label>2020 Tous droits réservés | Developed by Sana Abouelfadel</label>
        </div>
      </div>

      <div>
        <h2>le cabinet</h2>
        <p>SAADO FIDUCIAIRE est le cabinet idéal pour le chef d’entreprise qui souhaite disposer d’un interlocuteur pluridisciplinaire, offrant une haute qualité de service et faisant preuve d’une grande réactivité</p>
      </div>

      <div>
        <h2>suivez-nous</h2>
         <a href="#"><img src="../assets/socialmedia/fblackr.png" alt="facebook" class="footersm"></a>
         <a href="#"><img src="../assets/socialmedia/inblackr.png" alt="linkedin" class="footersm"></a>
         <a href="#"><img src="../assets/socialmedia/mblackr.png" alt="mail" class="footersm"></a>
  
      </div>
    </footer>
</template>
<style>
	footer{
  width: 100%;
  height: 300px ;
  background-color: #182130;/*#333*/
  display: flex;
  justify-content: space-around;
  color: #a4b6c6;
  padding: 0px;margin: 0px;
  overflow: auto;
}
footer h2 {
   text-transform: uppercase;font-weight: bold;
   color: white;
}
footer p{
   text-indent: 0px;
}
footer div{
  width: 30%;
  overflow: hidden;
}
footer div a{
  margin: 10px;
}
.footersm{
   width: 4em;height: 4em;
   background-color: #a4b6c6;
   border-radius: 5em;
}
footer div a img:hover{
  background-color: #fba707;
}
.footerlogo{
   width: 340px;height: 80px;
   margin-top: 100px;
}
.copyright-logo{
  width: 10px;height: 10px;
}

.privacy{
  margin-top: 10px;
  width: 100%;
  font-size:12px;
}
</style>
<script>
	export default {
		name: 'Myfooter'
	}
</script>