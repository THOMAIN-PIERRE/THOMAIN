<?php //traitement php de la page : le formulaire renvoie sur ce script !

	//test si le formulaire est soumis :
	//si oui, la variable $_POST n'est pas vide et contient les valeurs des input du formulaire
	if(!empty($_POST))
	{
		try{
			
			//recup des valeurs dans des variables
			$user_name= $_POST["user_name"];
            $user_email = $_POST["user_email"];
            $user_message = $_POST["user_message"];
			echo "Infos : ", $user_name, " ", $user_email, " " , $user_message; //pour vérifier en debug !

			//connexion à la base de données
			$db="livre_or"; //le nom de la base de données
			$username="phpmyadmin"; //l'utilisateur mysql
			$password="Pandore11,"; //et son pwd 
			$bdd = null;
			try {
				$bdd = new PDO("mysql:dbname=$db;host=localhost", $username, $password);
			}
			catch(exception $e) {
				die('Erreur :'.$e->getMessage());
			}
			
			//préparation de la requete d'insertion
			//c'est une "requête paramétrée"
			$rep=$bdd->prepare("insert into table_livre_or (NOM, E-MAIL, COMMENTAIRE) values (:user_name, :user_email, :user_message)");
			$rep->bindParam('NOM', $user_name, PDO::PARAM_STR);
            $rep->bindParam('E-MAIL', $user_email, PDO::PARAM_STR);
            $rep->bindParam('COMMENTAIRE', $user_message, PDO::PARAM_STR);
			$rep->execute();
			echo "Inscription effectuée !"; //pour vérifier en debug !
		}
		catch(Exception $e){
			die('Erreur :'.$e->getMessage());
		} 	
	}


?>
