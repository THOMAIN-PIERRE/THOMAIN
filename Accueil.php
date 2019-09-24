<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Accueil</title>
    
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
            position: absolute; 
            top: -25px;
            right: 5px;
            font-size: 20px;
            right: 
        }
        /*Nomdu restaurant*/
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
            border-top: 2px dotted white;

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
        #chef{
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

        }
        .titreplatdujour{
            text-align: center;
            font-weight: bold;
            font-size: 50px;
            padding-bottom: 10px;
            color: red;
        }
        .platdujour{
            text-align: center;
            font-weight: bold;
            font-size: 40px;
            color: black;
        }
        .commentaire{
            text-align: center;
            font-size: 30px;
            font-style: italic;
            color: black;
        }
        #sidebar p.centre{
            text-align: center;

        }
        .adresse{
            text-align: center;
            font-weight: bold;
            font-size: 40px;
            color: white;
            margin-top: 60px;
            margin-bottom: 40px;
        }
        .googlemap{
            text-align: center;  
        }
        
        .contact{
            text-align: center;
            margin-top: 40px;
            margin-left: 28px;
            font-size: 30px;
            font-weight: bold;
            color: white
        }
        .horaires{
            text-align: center;
            margin-top: 100px;
            font-size: 30px;
            font-weight: bold;
            color: white
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
            height: 210px;
            }

        #footer a{
        
            font-size: 20px;
            font-weight: bold;
            color: white;
            margin-right: 90px;
            margin-left: 110px;
        
        }
        #facebook{
            position: relative;
            left: 400px;
            bottom: 10px;
        }

        #instagram{
            position: relative;
            left: 200px;
            bottom: 10px;
        }
        #twitter{
            position: relative;
            right: 10px;
            bottom: 18px;
        }
        #haut_de_page{
            position: relative;
            right: 550px;
            top: 80px;
            
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
            <a href="test.html" target="_blank">ACCUEIL</a>
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
                    </div>
            <a href="LivreOr.html" target="_blank">LIVRE D'OR</a>
            <a href="Réservation.html" target="_blank">RESERVATION</a>
            
            <img id="image_entete" src="https://mk0hotellenouveowyay.kinstacdn.com/wp-content/uploads/2019/01/restaurant-7-mers-bandeau.jpg" alt="photo restaurant"/>
            <p id="mansalva">LE COUNIC</p>
            
            <div id="conteneur">
        <header id="haut">
                <h1>PLUS QU'UN RESTAURANT ... UNE EXPERIENCE GUSTATIVE</h1>     
        </header>
            <section id="contenu">
                <article class="article_un">
                    <h1>UN RESTAURANT MILITANT</h1>
                    <p>Le Counic est un concept de <strong>restaurant écoresponsable</strong> dont le but est d'offrir à tous l'accès à des <strong>produits frais, fabriqués localements par de petits producteurs</strong>. Un plât spécial est ainsi crée chaque jour à partir de produits 100% régionaux par notre chef. Dès la conception de nos menus, nous veillons à limiter notre empreinte carbone en choisissant des produits de saison issus de <strong>l’agriculture biologique locale</strong>, en veillant à l’équilibre légumes / viande du plat. Nous <strong>recyclons nos épluchures et réduisons les portions</strong> pour éviter le gaspillage alimentaire. Nous veillons également à <strong>limiter notre consommation d'eau et d'énergie</strong>. C'est pourquoi, l'eau de nettoyage des légumes est réutilisée pour arroser les herbes aromatiques qui servent à l'élaboration de vos plâts. En salle, la décoration et le mobilier reflétent notre engagement. Nous avons choisis des <strong>matériaux nobles et durables</strong> comme le bois et un éclairage à LED pour réduire la consommation d’énergie. Voilà les valeurs que nous défendons et les engagements que nous prenons.</p> 
                    <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                </article>
                <article class="article_deux">
                    <h1>UN CHEF D'EXCEPTION</h1>
                    <div>
                    <img id="chef" src="https://previews.123rf.com/images/rh2010/rh20101702/rh2010170200194/71846768-chef-cuisinier-%C3%A0-la-cuisine.jpg" alt="Mister Cuisto" width="330px" height="250px" border="2px">
                    <p>Formé à l'école Joel Robuchon, notre chef <strong>Jean Bertomieu (ou Mister Cool pour ses équipes)</strong> a seulement 29 ans, quand il prend les commandes des cuisines de <trong>l'hôtel Concorde Lafayette</strong> et dirige 90 cuisiniers, servant plusieurs milliers de repas par jour. Son professionnalisme, sa rigueur, son assurance, sa créativité lui taillent déjà une belle réputation. Après un passage remarqué en tant que chef et directeur de la restauration de <strong>l'hôtel Nikko</strong> où il décochera deux étoiles, <strong>il ouvre son restaurant à Oloron Sainte Marie en décembre 2010 : Le Counic</strong>.</p>
                    </div>
                </article>
                <br>
                <br>
                <article class="article_trois">
                        <h1>NOTRE CARTE</h1>
                        <p>Tous les jours, en plus de vos plâts habituels, retrouvez le plât de jour du chef garanti 100% régional et 100% écoresponsable. <strong>Cliquez sur les liens ci-dessous pour découvrir les plâts spécialement conçus pour vous cette semaine :</strong></p>
                    <nav id="navigation">   
                        <p><a href="Carte.html">Lundi</a><a href="Carte.html">Mardi</a><a href="Carte.html">Mercredi</a><a href="Carte.html">Jeudi</a><a href="Carte.html">Vendredi</a><a href="Carte.html">Samedi</a></p>
                    </nav>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p> 
                        <p id="menus">RETROUVEZ NOS MENUS CI-DESSOUS :</p>
                        <p class="menu_type">DEJEUNER (Entrée-Plât-Dessert, hors boissons)</p>
                        <ul class="listemenus">
                            <li>Menu Eco-responsable &rarr;  20 euros</li>
                            <li>Menu Classique       &rarr;  30 euros</li>
                            <li>Menu Prestige        &rarr;  40 euros</li>   
                        </ul>
                        <p class="menu_type">DINER (Entrée-Plât-Dessert, hors boissons)</p>
                        <ul class="listemenus">
                            <li>Menu Eco-responsable &rarr;  20 euros</li>
                            <li>Menu Classique       &rarr;  30 euros</li>
                            <li>Menu Prestige        &rarr;  40 euros</li>   
                        </ul>
                </article>
            </section>
            <aside id="sidebar">
                <div>
                    <p class="titreplatdujour">PLAT DU JOUR</p>
                    <p class="centre"><img src="https://i.f1g.fr/media/madame/400x/sites/default/files/img/2011/09/176392208jpg.jpg" alt= "Noix de Saint Jacques panées" width="550" height="500"/></p>
                    <p class="platdujour"> NOIX DE SAINT-JACQUES PANEES</p>
                    <p class="commentaire">"Votre chef gourmand revisite un monument de la cuisine antillaise et la cuisine française dans cette recette audacieuse à base de fruits et de poisson."</p>
                </div>
                <div class="adresse">
                    <p>Restaurant <i>"LE COUNIC"</i></p>
                    <p>13 Rue Alfred de Vigny</p>
                    <p>64400 Oloron Sainte Marie</p>
                </div>
                <div class="googlemap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2908.8641963315977!2d-0.613766049089123!3d43.19136027903747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd56ffed5ccfb807%3A0x9203b410fe09526e!2s13%20Rue%20Alfred%20de%20Vigny%2C%2064400%20Oloron-Sainte-Marie!5e0!3m2!1sfr!2sfr!4v1569146840392!5m2!1sfr!2sfr" width="500" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="contact">
                    <p>Tél : O5 59 39 70 23</p>
                    <a href="mailto:pierre.thomain@gmail.com">NOUS CONTACTER PAR MAIL</a>
                </div>
                <div class="horaires">
                    <h1>HORAIRES</h1>
                    <p>Du Lundi au Samedi</p>
                    <p>Midi : 11h à 15h</p>
                    <p>Soir : 19h à 23h</p>   
                </div>  
            </aside>
        <footer id="footer">
                    <a href="Mentions Légales.html" target="_blank">Mentions légales</a></li>
                    <a href="Politique de confidentialité.html" target="_blank">Politique de confidentialité</a></li>
                    <a href="https://www.pyrenees-bearnaises.com/pratique/presentation-de-loffice-de-tourisme-du-haut-bearn/" target="_blank">Office de tourisme</a></li>
                    <a id="facebook" href="https://facebook.com" target="_blank"><img src="https://cdn.pixabay.com/photo/2015/05/17/10/51/facebook-770688_960_720.png" alt="logo Facebook" width="60px" height="60px"/></a>
                    <a id="instagram" href="https://instagram.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/220px-Instagram_logo_2016.svg.png" alt="logo Instagram" width="60px" height="60px"/></a>
                    <a id="twitter" href="https://twitter.com" target="_blank"><img src="https://ciervoblanco.club/wp-content/uploads/2016/04/ciervo-blanco-club-de-lectura-twitter-logo.png" alt="logo Twitter" width="75px" height="75px"/></a>
                    <a id="haut_de_page" href="#Top">Haut de page</a>
        <footer>
    </body>
</html>



















    

