<?php //traitement php de la page : le formulaire renvoie sur ce script !

	//test si le formulaire est soumis :
	//si oui, la variable $_POST n'est pas vide et contient les valeurs des input du formulaire
	if(!empty($_POST))
	{
		try{
			
			//recup des valeurs dans des variables
			$nom = $_POST["tbNom"];
			$prenom = $_POST["tbPrenom"];
			echo "Infos : ", $nom, " ", $prenom; //pour vérifier en debug !

			//connexion à la base de données
			$db="livre_or"; //le nom de la base de données
			$username="username"; //l'utilisateur mysql
			$password="password"; //et son pwd 
			$bdd = null;
			try {
				$bdd = new PDO("mysql:dbname=$db;host=localhost", $username, $password);
			}
			catch(exception $e) {
				die('Erreur :'.$e->getMessage());
			}
			
			//préparation de la requete d'insertion
			//c'est une "requête paramétrée"
			$rep=$bdd->prepare("insert into reservation (nom, prenom) values (:nom, :prenom)");
			$rep->bindParam('nom', $nom, PDO::PARAM_STR);
			$rep->bindParam('prenom', $prenom, PDO::PARAM_STR);
			$rep->execute();
			echo "Inscription effectuée !"; //pour vérifier en debug !
		}
		catch(Exception $e){
			die('Erreur :'.$e->getMessage());
		} 	
	}


?>

<!--structure html de la page -->
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<title>Formulaire PHP</title>
</head>
<body>
	
	<!-- le formulaire renvoie sur la page elle-même pour le traitement -->
	<form action="." method="post">
		<label for="tbNom">Nom</label>
		<input type="text" id="tbNom" name="tbNom" />
		<label for="tbPrenom">Prenom</label>
		<input type="text" id="tbPrenom" name="tbPrenom" />

		<button type="submit">Ok</button>
	</form>



</body>

</html>