<?php

require "connexion_bdd.php";
$message = '';

if(isset($_POST['validation_inscription']))
{
  $username = htmlspecialchars(trim($_POST['identifiant']));
  $password = htmlspecialchars(trim($_POST['motdepasse']));
  $nom      = htmlspecialchars(trim($_POST['nom']));

  if (isset($username) || isset($password) || isset($nom)){
  	$query = "INSERT INTO login (login,password,nom) VALUES (:username,:password,:nom)";
    $statement = $bdd->prepare($query);
    $statement->execute(array(':username' => $username,':password' => md5($password), ':nom' => $nom));
    }
    header('Refresh:0;URL=index.php');
  }
?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="back">
</div>
  <div class="wrapper">
	   <div class="container">
		     <h1>Inscription</h1>

             <form method="post">
			             <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant" required="required">
			             <input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" required="required">
                   <input type="texte" name="nom" id="nom" placeholder="Nom" required="required">
                   <form method="post" action>
                   <button type="submit"  name ="validation_inscription" id="validation_inscription"  >Inscription</button>
                   <button type="button" onClick="window.location='index.php';" id="retour">Retours </button>

</form>

	                   </div>

	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js">
  </script>

</body>
</html>
