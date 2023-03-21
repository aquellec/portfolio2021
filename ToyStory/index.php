<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function(){
            // Notre script pour afficher et envoyer les messages
        });
    </script>

    <title>Toy Story</title>
  </head>
  <body>
      <!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark py-3 shadow-sm">
  <div class="container"><a class="navbar-brand" href="#">
      <img src="Toy_Story_logo.png" alt="" width="50" height="auto" class="d-inline-block align-text-top">
      
    </a>
  
    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a href="#" class="nav-link">Accueil</a></li>
        <li class="nav-item"><a href="#toystory" class="nav-link">Toy Story</a></li>
        <li class="nav-item"><a href="#tchat" class="nav-link">tchat</a></li>
        <li class="nav-item"><a href="#drag" class="nav-link">Jeu drag & drop</a></li>
        <li class="nav-item"><a href="#newsletter" class="nav-link">Formulaire newletter</a></li>
        <li class="nav-item"><a href="#pong" class="nav-link">Jeu pong en canvas</a></li>
        <li class="nav-item"><a href="#poussin" class="nav-link">Enigme du poussin/o</a></li>
        
        
      </ul>
    </div><!-- ./navbarSupportedContent -->
  </div><!-- ./container -->
</nav><!-- ./navbar -->

<!-- Background video -->
<div class="video-background-holder">
  <div class="video-background-overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="ToyStory.mp4" type="video/mp4">
    </video><!-- end video source-->
    
  </div><!-- end video-background-overlay-->
</div>  
<div class="container ">
  <h1 class="text-center mt-5">Voici différents jeux sur le thème de Toy Story</h1>

  <!--  image left  -->
  <div class="row my-5" id="toystory">
    <div class="col-md-6">

      <img src="tp_toystory.jpg" alt="" class="w-100" />
    </div>
    <!-- /.col-md-6 -->
    <div class="col-md-6">

      <div class="row align-items-center h-100">
        <div class="col">
          <h1 class="display-3">Cartes ToyStory</h1>
          <p class="lead">Voici des cartes animées ToyStory
            <br /><br />
            <a href="tp_toystory/index.html" class="">En savoir plus</a>
          </p>

        </div>
      </div>

    </div>
    <!-- /.col-md-6 -->

  </div>
  <!-- /.row -->

  <!--  image right  -->
  <div class="row my-5" id="tchat">
    <div class="col-md-6 order-md-6">

    <h1 class="text-center">Parlez avec les personnages de ToyStory !</h1>
    <div id="affichage">
        ici les messages....
    </div>
    <p>
        <form id="monform">
        
        
        <input type="text" id="pseudo" placeholder="Votre pseudo">

        <input type="text" id="message" placeholder="Votre message">
          <br>
        <input type="submit" id="envoyer" value="envoyer">
        </form>
    </p>

    
    </div>
    <!-- /.col-md-6 -->
    <div class="col-md-6 order-md-1">

      <div class="row align-items-center h-100">
        <div class="col">
          <h1 class="display-3">Tchat intéractif</h1>
          <p class="lead">Tapez "*bleu" et le fond deviendra bleu ! Pour revenir à la normale tapez "*normal"
            
          </p>

        </div>
      </div>

    </div>
    <!-- /.col-md-6 -->

  </div>
    

  <!--  image left  -->
  <div class="row my-5" id="drag">
    <div class="col-md-6">

      <img src="pointclick.jpg" alt="" class="w-100" />
    </div>
    <!-- /.col-md-6 -->
    <div class="col-md-6">

      <div class="row align-items-center h-100">
        <div class="col">
          <h1 class="display-3">Drag & Drop et Point & Click</h1>
          <p class="lead">Ce jeu consistait à faire un jeu en drag & drop
            <br /><br />
            <a href="tp_point&click/pointclick.html" class="">En savoir plus</a>
          </p>

        </div>
      </div>

    </div>
    <!-- /.col-md-6 -->

  </div>
  <div class="row my-5" id="newsletter">
    <div class="col-md-6 order-md-6">

    <form action="validation.php" method="post" id="formulaire">
        <fieldset>
            <legend class="text-center">Inscrivez-vous à notre newsletter pour recevoir des nouvelles de woody et ses amis !</legend>
            <p id="valid_form"></p>
            <p id="name_error"></p>
            <label for="nom">Nom* :</label> 
            <input id="nom" name="nom" type="text" placeholder="Votre nom" maxlength="15">
            <p id="mail_error"></p>
            <label for="email" required="required">Email* :</label>
            <input id="email" name="email" type="email" placeholder="123@exemple.com">
            <input id="envoie" type="submit" name="envoie">
        </fieldset>
    </form>
    

    
    </div>
    <!-- /.col-md-6 -->
    <div class="col-md-6 order-md-1">

      <div class="row align-items-center h-100">
        <div class="col">
          <h1 class="display-3">Formulaire newletter</h1>
          <p class="lead">Push and pull classes were added to change the order on desktop but still have the image before the text on mobile.
            
            
          </p>

        </div>
      </div>

    </div>
    <!-- /.col-md-6 -->

  </div>
  <div class="row my-5"id="pong" >
    <div class="col-md-6">

    <canvas width='500px' height='500px' id="monCanvas">
    </div>
    <!-- /.col-md-6 -->
    <div class="col-md-6">

      <div class="row align-items-center h-100">
        <div class="col">
          <h1 class="display-3">Jeu pong en canvas</h1>
          <p class="lead">Appuyer sur la barre d'espace pour faire sauter Woody <br>Evitez Sid et son chien pour atteindre le score le plus élevé !
            
          </p>

        </div>
      </div>

    </div>
    <!-- /.col-md-6 -->

  </div>
  <div class="row my-5" id="poussin">
    <div class="col-md-6 order-md-6">

    <div id="grd_conteneur">
        <div id="conteneur">
        <div id="des1"></div>
        <button id="bas1">+</button>
        </div>

        <div id="conteneur">
            <div id="des2"></div>
            <button id="bas2">+</button>
        </div>

        <div id="conteneur">
            <div id="des3"></div>
            <button id="bas3">+</button>
        </div>

        <div id="conteneur">
            <div id="des4"></div>
            <button id="bas4">+</button>
        </div>
    </div>
    <h4 id="gagné">Vous avez gagné</h4>
    <h4 id="perdu">Vous avez perdu</h4>
    <button id="valider">Vérifier</button>
    

    
    </div>
    <!-- /.col-md-6 -->
    <div class="col-md-6 order-md-1">

      <div class="row align-items-center h-100">
        <div class="col">
          <h1 class="display-3">Jeu code secret</h1>
          <p class="lead">Pour reusssir cette enigme, vous devez mettre les méchants de chaque film de toy story dans l'ordre !
            
          </p>

        </div>
      </div>

    </div>
    <!-- /.col-md-6 -->

  </div>

  <!-- /.row -->

</div>
<footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container">
    <!--Grid row-->
    <div class="d-flex flex-row justify-content-center">
      <!--Grid column-->
      
        <a class="m-4 text-white" href="#">Accueil</a>
        <a class="m-4 text-white" href="#toystory">Toy Story</a>
        <a class="m-4 text-white" href="#tchat">Tchat</a>
        <a class="m-4 text-white" href="#drag">Drag & Drop</a>
        <a class="m-4 text-white" href="#newsletter">Newsletter</a>
        <a class="m-4 text-white" href="#pong">Jeu Intéractif</a>
        <a class="m-4 text-white" href="#poussin">énigme</a>
      </div>
     
    </div>
    <!--Grid row-->
  
    <!-- Grid container -->
      </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright: Amandine Quellec
      
    </div>
    <!-- Copyright -->
  </footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
      // Poussin
      window.addEventListener('keydown', function(e) {
   if (e.keyCode == 32 && e.target == document.body) {
      e.preventDefault();
   }
});
    $(document).ready(function(){
        console.log("démarrage bien effectué");

        var y1=0;
        var y2=0;
        var y3=0;
        var y4=0;

       $("#bas1").click(function(){
           console.log("on appuie sur le bouton !")
           //il faut descendre vers l'image suivante
           y1 += 151
           if (y1>453)y1=0; // ... tirer au sort un nouvelle position (de 100 en 100) voir random()
           console.log(y1);
           $( "#des1").animate({'background-position-y' : y1 + "px"})
       })
       $("#bas2").click(function(){
           console.log("on appuie sur le bouton !")
           //il faut descendre vers l'image suivante
           y2 += 151
           if (y2>453)y1=0; // ... tirer au sort un nouvelle position (de 100 en 100) voir random()
           console.log(y1);
           $( "#des2").animate({'background-position-y' : y2 + "px"})
       })
       $("#bas3").click(function(){
           console.log("on appuie sur le bouton !")
           //il faut descendre vers l'image suivante
           y3 += 151
           if (y3>453)y1=0; // ... tirer au sort un nouvelle position (de 100 en 100) voir random()
           console.log(y1);
           $( "#des3").animate({'background-position-y' : y3 + "px"})
       })
       $("#bas4").click(function(){
           console.log("on appuie sur le bouton !")
           //il faut descendre vers l'image suivante
           y4 += 151
           if (y4>453)y1=0; // ... tirer au sort un nouvelle position (de 100 en 100) voir random()
           console.log(y1);
           $( "#des4").animate({'background-position-y' : y4 + "px"})
       })
       $('#valider').click(function(){
                   if(y1==302 && y2==151 && y3==0 && y4==453){
                       console.log("Gagné !");
                       $('#gagné').css('display', 'block');
                       $('#perdu').css('display', 'none');
                   } else{
                       $("#des1").animate({ 'background-position-y' : 0});
                       $("#des2").animate({ 'background-position-y' : 0});
                       $("#des3").animate({ 'background-position-y' : 0});
                       $("#des4").animate({ 'background-position-y' : 0});
                       y1=0;
                       y2=0;
                       y3=0;
                       y4=0;
                       console.log("Perdu, essaye à nouveau...")
                       $('#perdu').css('display', 'block');
                   }
               })
        });
</script>
<script>

// newsletter
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#envoie').addEventListener('click', e => {
            e.preventDefault()
            envoiFormulaire()
        })
    })

    function envoiFormulaire() {
        var p = $('#nom').val();
        var a = $('#email').val();
        $.ajax({
            dataType: 'json',
            type: 'POST',
            url: 'validation.php',
            data: {
                name: p,
                mail: a
            },
            success: function(reponse) {
                $('#valid_form').html('')
                $('#name_error').html('')
                $('#mail_error').html('')
                $('#valid_form').css('display', 'none')
                $('#name_error').css('display', 'none')
                $('#mail_error').css('display', 'none')
                if (reponse === true) {
                    $('#valid_form').html('Votre inscription est validée')
                    $('#valid_form').css('display', 'block')

                } else {
                    $.each(reponse, function(leChamp, lErreur) {
                        selecteur = '#' + leChamp + '_error'
                        $(selecteur).html(lErreur)
                        $('#' + leChamp + '_error').css('display', 'block')
                    })
                }
            },
            error: function() {
                console.log('Problème a l\'appel de la page de validation')
            }
        })
    }
</script>

    <script type="text/javascript">

        $(document).ready(function(){
            $("#monform").on("submit",function(event){
                event.preventDefault();
            })

            setInterval(function(){
                                    console.log("raffraichir la liste des messages");
                                    $.ajax({ url:'affichage.php',})
                                        .done(function(resultat){
                                          $("#affichage").html(resultat);
                    const words = resultat.split('*');
                    var taille = words.length;
                    console.log(words[taille -1]);

                    if (words[taille -1] == "bleu</br>"){
                        $('#affichage').css('background-color', 'blue');
                       
                    }
                    if (words[taille -1] == "normal</br>"){
                        $('#affichage').css('background-color', '#ffb');
                       
                    }
                    
                    
                                        });
                                  }, 1000);

            console.log("démarrage du js...")
            $("#envoyer").click(function(){
                console.log("on appuie sur le bouton!");
                $pseudo = $('#pseudo').val();
                $message = $('#message').val();
                console.log("et le pseudo est : " + $pseudo);
                console.log("et le message est: " + $message);
                //bon maintenant il faut envoyer tout ça à dire.php...
                $("#message").focus();
                $.ajax({
                    method: "GET",
                    data: {pseudo:$("#pseudo").val() , message:$("#message").val()},
                    url:'dire.php',
                });
                $("#message").focus();
                $("#message").val("");

            });
        });

    </script>
    <script type="text/javascript">

 

var x=250; var y=250; var vity=4; var vitx=6; var sauter=0; var oldsauter=0; var xobs=455; var yobs=200; var compteur=0;

 

$(document).ready( function() {
 


var canvas1 = document.getElementById('monCanvas');
var context = canvas1.getContext('2d');

var exemple = new Image();
exemple.src = "ballon2.png";

var back = new Image();
back.src = "back.jpg";

var exemple2 = new Image();
exemple2.src = "barre2.png";

var obstacle = new Image();
obstacle.src = "obstacle2.png";

$('body').keydown(function(ev) {
            if (ev.keyCode == 32) sauter = 1;
});

$('body').keyup(function(ev) {
            if (ev.keyCode == 32) {
                sauter = 0;
                oldsauter = 0
            };
});



var montimer = setInterval(function(){
    
    context.drawImage(back, 0, 0);
    context.drawImage(exemple, x, y); //ballon
    context.drawImage(exemple2, 0, 0); 
    context.drawImage(exemple2, 0, 455);
    context.drawImage(obstacle, xobs, yobs);
    context.fillText(compteur, 130, 100);
    context.fillText("Score : ", 50, 100);
    context.font = "bold 14px verdana";

                
                
    y+=vity;
    x+=vitx;
                //if(y>250){vity= -vity*1; y=250}
                
                if (y > 430){ vity = -vity*0.65; y = 430; compteur = 0;}
                if (y < 35){ vity = -vity; y = 35; compteur = 0;}
                if (x > 475){ vitx = -vitx; x = 475; compteur++; xobs = 0;}
                if (x < 0){ vitx = -vitx; x = 0; compteur++; xobs = 455;}
                if (x > 474) {
                yobs = Math.round(Math.random() * 350) + 20;
                
            } else if (x < 1) {
                yobs = Math.round(Math.random() * 350) + 20;
                
            }
            
                if (y > (yobs -30) && y < (yobs +30) && x < 35 )
                {
                   
                    compteur = 0;
                    
                }  

                
                

                if (y > (yobs -30) && y < (yobs +30) && x > 454)
                {
                    compteur = 0;
                    
                }
                
            if (sauter == 1 && oldsauter == 0) {
                oldsauter = 1;
                vity -= 4;
            }
            vity += 0.2;
            
}, 25 );


});

</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>