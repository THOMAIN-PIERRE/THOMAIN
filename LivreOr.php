<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Livre d'Or</title>
        <script LANGUAGE="JavaScript" type="text/javascript">
            function display() {
              DispWin = window.open('','NewWin', 'toolbar=no,status=no,width=300,height=200')
              message = "<ul><li><b>NOM: </b>" + document.formulaire.user_name.value;
              message += "<li><b>e-MAIL: </b>" + document.formulaire.user_email.value;
              message += "<li><b>COMMENTAIRE: </b>" + document.formulaire.user_message.value + "</ul>";
              DispWin.document.write(message);
            }
            </script>
    </head>
    <style>
        
        @import url('https://fonts.googleapis.com/css?family=Lato|Mansalva&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Lato&display=swap');
        
        .up {
            border: 2px solid black;
            background-color: black;
            height: 50px;
            color: white;
            font-weight: bold;
            font-family:Arial;
            
        }
        /*Choix de la langue pour le site*/
        p.langue{
            position:absolute;
            top: 15px;
            left: 5px;
            font-size: 20px;
        }
        
        p.contact{
            position:absolute; 
            top: -75px;
            right: 5px;
            font-size: 20px;
            right: 
        }
        /*Nom du restaurant*/
        #mansalva{
            position: absolute;
            top: 250px;
            left: 500px;
            font-family: 'Mansalva', cursive;
            font-size: 80px;
            color: white;
            background-color: blue;
            padding: 10px 15px;
            border-radius: 40px;
            border: 7px solid black;
         }
        /*Image d'entête*/
        #image_entete{
            width: 1517px;
            height: 400px;

        }
        body{
            background-color:#7c7878;
        }
        


        /*Code css de la page web*/

        /* Styles généraux*/
        body{
            padding:0;
            background-color: #7c7878;
            font-family: 'Lato', sans-serif;
            
        }
        body, h1, h2, p{
            margin: 0;

        }
        #conteneur{
            width:1500px;
            margin: 20px auto 0 auto;
            padding: 10px;
            background-color: #7c7878;
            margin-top: 2px;
            margin-right: 200px;
        }
        /* Entête*/
        #haut{
            margin:0 0 10px 0;
            padding: 5px;
            background-color: #C0C0C0;
        }
        #haut h1, #haut h2 {
            color:white;
        }
        /*Contenu principal*/
        #contenu{
            float: left;
            width: 900px;
            padding: 1px;
            border-radius: 40px;
            background-color: #7c7878;

        }
        #haut{
            font-size: 30px;
            font-weight: bold;
            border-radius: 40px;
            text-align: center;
        }
        #contenu h1{
            font-size: 25px;
            font-weight: bold;
            color: white;
            text-align: center;
            margin: 10px 0 10px 0;
        }
        #contenu p{
            font-size: 20px;
            color: black;
        }

        article{
            margin: 0 0 20px 0;
            

        }
        #navigation{
            margin: 0 0 5px 0;
            padding: 0;
            background-color: blue;
            margin-top: 20px;
            margin-bottom: 20px;

        }
        #navigation a{
            text-decoration: none;
            color: white;
            font-size: 17px;
            margin-bottom: 15px;
        }
        #panorama{
           float:left;
           margin-top: 5px;
           margin-right: 10px;
        }
        #salle_restaurant1{
           float:right;
           margin-top: 5px;
           margin-right: 10px;
        }
        #salle_restaurant2{
           float:left;
           margin-top: 5px;
           margin-right: 10px;
           
        }
        #salle_séminaire1{
           float:left;
           margin-top: 5px;
           margin-right: 10px;
           margin-left: 200px;
        }
        #salle_séminaire2{
           float:left;
           margin-top: 5px;
           margin-right: 10px;
        }
        .listemenus{
            font-size: 35px;
            font-weight: bold;
            list-style: none;
            text-align: center;
            margin-top: 50px; 
            color: white;  
        }
        #menus{
            font-weight: bold;
            margin-top: 20px;
            
        }
        .menu_type{
            font-size: 80px;
            font-weight: bold;
            text-align: center;
            margin-top: 50px; 
        }
        .menu{
            color:white;
            text-align: center;
            font-size: 40px;
            margin-top: 40px;
            margin-bottom : 40px;
        }
        .table{
            color:black;
            text-align: center;
            font-size: 40px;
        }
        .vin{
            color:white;
            font-size: 40px;
            list-style: none;
        }
        .bar{
            color:white;
            text-align: justify;
            font-size: 40px;
        }
        #carte_des_vins{
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
       
        /*Colonne latérale*/
        #sidebar{
            float: left;
            width: 550px;
            margin: 0 0 0 10px;
            padding: 18px;
            background-color: #C0C0C0;
            margin-top : 2px;
            margin-bottom: 10px;
            border-radius: 40px;
            height: 1230px;

        }
        .information{
            text-align: center;
            font-weight: bold;
            font-size: 50px;
            padding-bottom: 10px;
            color: red;
        }
        .jour{
            text-align: center;
            font-weight: bold;
            font-size: 30px;
            color: white;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .plat{
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            color: white;
            margin-top: 15px;
            margin-bottom: 60px;
        }
        .
        #sidebar p.centre{
            text-align: center;

        }
        .adresse{
            text-align: center;
            font-weight: bold;
            font-size: 35px;
            color: white;
            margin-top: 90px;
            margin-bottom: 90px;
            width: 460px;
            margin-left: 40px;
        }
        .poste_de_travail{
            text-align: center;  
            margin-bottom: 90px;
        }
        .photo_assiette{
            text-align: center;  
            margin-bottom: 60px;
            margin-left: 10px;
        }
        
        .contact{
            text-align: center;
            margin-top: 90px;
            margin-left: 5px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            margin-bottom: 60px;
            
        }
        .horaires{
            text-align: center;
            margin-top: 180px;
            font-size: 30px;
            font-weight: bold;
            color: white;
        }
        .lien_livre_or{
            text-align: justify;
            margin-left: 100px;
            margin-top: 120px;
            font-size: 30px;
            font-weight: bold;
            color: white;
            width: 350px;
        }
        .lo{
            text-align: justify;
            margin-left: 40px;
            margin-top: 30px;
            font-size: 30px;
            font-weight: bold;
            width: 350px;
        }
        
        
        /*Barre de navigation*/
        /* Conteneur navbar */
        .navbar {
        overflow: hidden;
        background-color: #7c7878;
        font-family: Arial;
        }

        /* Lien à l'intérieur de la navbar */
        .navbar a {
        float: left;
        font-size: 29px;
        font-weight: bold;
        color: white;
        text-align: center;
        padding: 20px 45.8px;
        text-decoration: none;
        }

        /* Le container dropdown */
        .dropdown {
        float: left;
        overflow: hidden;
        }

        /* Bouton Dropdown */
        .dropdown .dropdown-button {
        font-size: 29px;
        font-weight: bold;
        border: none;
        outline: none;
        color: white;
        padding: 20px 50px;
        background-color: #7c7878;
        font-family: inherit; /* Important pour l'alignement vertical sur téléphone mobile */
        margin: 0; /* Important pour l'alignement vertical sur téléphone mobile */
        }

        /* Ajouter un background bleu au lien de la navbar quand la souris passe dessus */
        .navbar a:hover, .dropdown:hover .dropdown-button {
         background-color: blue;
        }

        /* Contenu du dropdown (caché par défaut) */
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        z-index: 1;
        }

        /* Liens à l'intérieur du dropdown */
        .dropdown-content a {
        float: none;
        color: black;
        padding: 15px 20px;
        text-decoration: none;
        display: block;
        text-align: left;
        }

        /* Ajouter une couleur bleue de background aux liens du dropdown quand la souris passe dessus */
        .dropdown-content a:hover {
        background-color: blue;
        }

        /* Montrer le menu dropdown quand la souris passe dessus */
        .dropdown:hover .dropdown-content {
        display: block;
        }






        /* LE FOOTER*/

        #footer{
            background-color: black;
            clear: both;
            height: 220px;
            }

        #footer a{
            font-size: 20px;
            font-weight: bold;
            color: white;
            margin-right: 90px;
            margin-left: 110px;
        
        }
        #infos_complémentaires{
            position: relative;
            left: 160px;
            top: 20px;
            
        }

        #logos{
            position: relative;
            left: 330px;
            top: 50px;
        }
        
        #haut_de_page{
            position: relative;
            top: 80px;
            left: 570px;
            
        }

        /*Photo sidebar page Livre d'Or*/   
        #lo{
            
            margin-top: 30px; 
            width:"500px";
            height:"400px";
            position: relative;
            left: 50px;
        }
        /*Cmmunication au client concernant le livre d'or*/
        #livre_or{
            Position: relative;
            margin-right: 50px;
            margin-left:50px;
            top: 60px;
            Text-align: center;
            Color: white;
            font-size: 30px;
            font-weight: bold;
            font-family: 'Lato', sans-serif;
            width: 450px;
            Text-align: justify;      
        }
        /*Titre du formulaire du livre d'or*/
        .titre_formulaire{
            text-align: center;
            color: white;
            font-size: 30px;
            font-weight: bold;
            font-family: 'Lato', sans-serif;
            margin-top: 40px;
            margin-bottom: 40px;
        }
        
    /*Elements de stylisation de mon tableau*/    
        form {
  /* Pour le centrer dans la page */
  margin: 0 auto;
  width: 600px;

  /* Pour voir les limites du formulaire */
  padding: 1em;
  border: 2px solid white;
  border-radius: 3em;
}

div + div {
  margin-top: 1em;
}

label {
  /* Afin de s'assurer que toutes les étiquettes aient la même dimension et soient alignées correctement */
  display: inline-block;
  width: 100px;
  text-align: right;
  font-size: 22px;
  
}

input, textarea {
  /* Afin de s'assurer que tous les champs textuels utilisent la même police
     Par défaut, textarea utilise une police à espacement constant */
  font: 1.4em sans-serif;

  /* Pour donner la même dimension à tous les champs textuels */
  width: 400px;
  height: 40px;
  border-radius: 15px;
 

  -moz-box-sizing: border-box;
       box-sizing: border-box;

  /* Pour harmoniser l'apparence des bordures des champs textuels */
  border: 1px solid white;
}

input:focus, textarea:focus {
  /* Afin de réhausser les éléments actifs */
  border: 5px solid yellow;
  box-shadow:5px 5px 5px 5px black;
}

textarea {
  /* Pour aligner correctement les champs multilignes et leurs étiquettes */
  vertical-align: top;


  /* Pour donner assez d'espace pour entrer du texte */
  height: 15em;

  /* Pour permettre aux utilisateurs de redimensionner un champ textuel horizontalement
     Cela ne marche pas avec tous les navigateurs  */
  resize: vertical;
}


  /* Pour positionner les boutons de la même manière que les champs textuels */
.button {
  padding-left: 150px; /* même dimension que les étiquettes */
  
}


  /* Cette marge représente approximativement le même espace
     que celui entre les étiquettes et les champs textuels */
button {
  margin-left: 2em;
  padding: 5px 5px;
  font-size: 20px;
  color: black;
  border-radius: 30px;
  background-color: white;
}


/*Code pour afficher la couleur verte sur le cadre d'un champs rempli de façon valide*/

input:valid {
  border: 5px solid lightgreen;
}


/*Gestion de la photo et de l'astérisque dans la section principale de ma page livre d'or*/

#info_champs_obligatoires {
   text-align: left;
   margin-left: 150px;
   margin-top: 10px;   
}
#img_formulaire_lo{
    width: 600px;
    height: 400px;
    margin-left: 145px;
    margin-bottom: 40px;
    margin-top: 70px;
}

 
    </style>
<body>
    <header> 
        <div class="up">
        <p class="langue">Français | English</p>
        <p class="contact"> Contact &nbsp;&nbsp;05 59 39 70 23</p>
        </div>   
    </header>
    <nav class="navbar">
            <a href="Accueil.html" target="_blank">ACCUEIL</a>
            <a href="Restaurant.html" target="_blank">RESTAURANT</a>
            <a href="Carte.html" target="_blank">CARTE</a>
                <div class="dropdown">
                        <button class="dropdown-button">RECETTES
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="recette1.html">Asperges rôties et oeuf poché au magret fumé</a>
                          <a href="recette2.html">Foie gras de canard chaud aux clémentines</a>
                          <a href="recette3.html">Poulet basquaise bleu-blanc coeur</a>
                          <a href="recette4.html">Gratin de légume aux piments d'espelette</a>
                          <a href="recette5.html">Poulet basquaise</a>
                        </div>
                      </div>
            <a href="LivreOr.html" target="_blank">LIVRE D'OR</a>
            <a href="Réservation.html" target="_blank">RESERVATION</a>
    </nav>      
            <img id="image_entete" src="https://mk0hotellenouveowyay.kinstacdn.com/wp-content/uploads/2019/01/restaurant-7-mers-bandeau.jpg" alt="photo restaurant"/>
            <p id="mansalva">LE COUNIC</p>
            <div id="conteneur">
            <div id="haut">
                <h1>LIVRE D'OR DU RESTAURANT</h1>     
            </div>
            <section id="contenu">
                <article>
                    <div class="titre_formulaire">
                        <h2 align="center">FORMULAIRE DE CONTACT</h2>
                    </div>   
                    <form name="formulaire" action="test.php" method="post" autocomplete="off">
                            <div>
                                 <label for="nom">Nom<b>*</b>&nbsp</label>
                                 <input type="text" id="nom" name="user_name" required>
                            </div>

                            <div>
                                  <label for="courriel">Courriel<b>*</b>&nbsp</label>
                                  <input type="email" id="courriel" name="user_email" required>
                            </div>

                            <div>
                                   <label for="message">Message<b>*</b>&nbsp</label>
                                   <textarea id="message" name="user_message" required></textarea>
                            </div>

                                   <div class="button">
                                   <button id="okButton" type="submit" value="display" onclick="display();">Envoyer le message</button>
                                   </div>
                    </form>
                        <p id="info_champs_obligatoires"><b>*</b>Champs Obligatoires</p>
                        <img id="img_formulaire_lo" src="https://mk0hotellenouveowyay.kinstacdn.com/wp-content/uploads/2010/10/bar-vue-mer-saint-malo.jpg" alt="Salon de discussion">
                    </div>      
                </article>
            </section>
            <aside id="sidebar">
                    <img id="lo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPLqYOUEUvw7PHIlKKLBprgJmEx9WVKjN1jXNBwGJ65IDr1d24" alt="Livre d'Or" width="450" height="400">
                    <p id="livre_or">Parceque l'avis de nos clients compte pour nous, nous avons choisi de mettre a votre disposition ce Livre d'Or afin de recueillir vos avis, vos commentaires, vos suggestions. Cet espace d'expression vous est dédié, faites en bon usage. Nous attendons vos messages avec impatience !</p>
            </aside>
            <footer id="footer">
                    <div id="infos_complémentaires">    
                        <a href="Mentions_Legales.html" target="_blank">Mentions légales</a></li>
                        <a href="Politique_de_confidentialite.html" target="_blank">Politique de confidentialité</a></li>
                        <a href="https://www.pyrenees-bearnaises.com/pratique/presentation-de-loffice-de-tourisme-du-haut-bearn/" target="_blank">Office du tourisme</a></li>
                    </div> 
                    <div id="logos"> 
                        <a id="facebook" href="https://facebook.com" target="_blank"><img src="https://cdn.pixabay.com/photo/2015/05/17/10/51/facebook-770688_960_720.png" alt="logo Facebook" width="60px" height="60px"/></a>
                        <a id="instagram" href="https://instagram.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/220px-Instagram_logo_2016.svg.png" alt="logo Instagram" width="60px" height="60px"/></a>
                        <a id="twitter" href="https://twitter.com" target="_blank"><img src="https://ciervoblanco.club/wp-content/uploads/2016/04/ciervo-blanco-club-de-lectura-twitter-logo.png" alt="logo Twitter" width="75px" height="75px"/></a>
                     </div>   
                        <a id="haut_de_page" href="#Top">Haut de page</a>
        </footer>
        </div>
    </body>
</html>










































    

