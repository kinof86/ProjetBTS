<html lang="fr" dir="ltr">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<title>Résultats de requêtes</title>
	</head>

	<body>

		<?php
		require 'connexion_bdd.php';

		try
		{
			// Tentative de connexion à la base de données avec les options définies dans le fichier connexion_bdd.php
			$bdd = new PDO($dsn,$login,$mdp,$pdo_options);

			//Définition de la requête SQL


			$identifiant=$_POST['identifiant'];
			$motdepasse=$_POST['motdepasse'];

			$sql="INSERT INTO login (login,password) VALUES ('$identifiant','$motdepasse') ";

			// Reponses des requêtes
			$reponse=$bdd->query($sql);

			?>



			<?php

			// Déconnexion
			$reponse->closeCursor();

		}
		catch ( Exception $e )
		{
			echo "Connection à MySQL impossible : ", $e->getMessage();
			die();
		}
		?>

		<a style="color:#000000;text-decoration: none" href="../index.html"><input type="button" value="Retour"></a>
	</body>
</html>
