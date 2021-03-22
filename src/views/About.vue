<template>
  <div class="about">
    <div class="content">
        <h2>SAADO Fiduciaire</h2>
        <p>SAADO fiduciaire a été créé en 2008 par Monsieur Ahmed Harraki. En très peu de temps, le cabinet a réussi à gagner la confiance de nombreuses entités de renom et se faire vite une place dans le marché du conseil financier grâce notamment à la compétence irréprochable de son équipe.</p><p>Ainsi, SAADO FIDUCIAIRE  est le cabinet idéal pour le chef d’entreprise qui souhaite disposer d’un interlocuteur pluridisciplinaire, offrant une haute qualité de service et faisant preuve d’une grande réactivité.</p>
      <ul class="numbers"><li>I.F= 40 18 68 03</li><li>RC= 16 485 AGADIR</li><li>PATENTE= 48 75 82 70</li><li>CNSS= 42 28 723 </li><li>I.C.E= 00 05 32 36 00 00 03 1</li></ul>
    </div>
  </div>
</template>
<style type="text/css">
    .about{
        background:url("../assets/company2.jpg") no-repeat center;
        background-size: cover;
        height: 100%;
        width: 100%;
        overflow: hidden;
    }
  .content {
       background: rgba(0, 0, 0, 0.5);
       color: #f1f1f1;
       width: 50%;
       height:100%;
       padding-top: 100px;
       overflow: hidden;
      animation: fadeInOpacity 1s linear;
    }
    .numbers{
      position: relative;
      animation: fromleft 1.5s linear;
      color:lightyellow;
    }
    .content p{
      padding-top: 0px;
    }
   .content  ul{
      list-style: none;margin-top: -10px;
      
    }
    .content  ul li{
      font-weight: bold;padding: 5px;
    }
    @media only screen  and (max-width: 600px){
       .content{
        width: 100%;padding-top: 14em;padding-bottom: 1em;
       }
    }
</style>
