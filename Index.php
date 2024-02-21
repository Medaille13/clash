<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet"> 
    <link href="./Sass/main.scss<?php echo '?v='.time(); ?>" rel="stylesheet" type="text/css" />
    <title>Initiation</title>
</head>
<body>
    <main>

    <section class="section">
        <div class="row">
            <article class="card">
                <h1>Le combat ultime mais de quel côté êtes-vous?</h1>
            </article>
        </div>
    </section>  


    <section class="section section2" id="survolm">
        <div class="row">
            <article class="card">  
                <h4>Mario</h4>
                    <button id="moustache">Team Mario ? Click</button>
                    <img src="./image/mario.png" alt="">
            </article>  
        </div>
    </section>   

    <section class="section section3">
        <div class="row">
            <article class="card">
                <article>
                <img id="mariodecu" src="image/mario.gif"></img>
                <img id="sonicdecu" src="image/shocked.gif"></img>
                </article>

                <h4>Présentation de ces 2 icones du jeux vidéo</h4>
                <p>Mario est un personnage facilement reconnaissable à sa moustache, à sa salopette bleue, à ses gants blancs et à sa casquette rouge marquée d'un M inscrit dans un cercle blanc.</p>
                <p>Sonic est un hérisson anthropomorphique bleu céruléen qui possède la particularité de pouvoir courir à la vitesse du son, soit 1 225 km/h .</p>
                
            </article>
        </div>
    </section>  

    <!-- 
    <section id="lesmodals">
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  </div>
  <div class="modal-body">
                    <img id="mariodecu" src="image/mario.gif"></img>
                    <img id="sonicdecu" src="image/shocked.gif"></img>

  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
    </section>
    -->
    <section class="section section4" id="survols">
        <div class="row">
            <article class="card">
                <h4>Sonic</h4>
                    <button id="herisson">Team Sonic ?</button>
                    <img src="./image/main.avif" alt="">
            </article>
        </div>
    </section>  

    </main>     

    <script src="./js/jsclicnotification.js<?php echo '?v='.time(); ?>"></script>
    <script src="./js/jsmusicsurvol.js<?php echo '?v='.time(); ?>"></script>
    <script src="./js/jsanimation.js<?php echo '?v='.time(); ?>"></script>

</body>
</html>