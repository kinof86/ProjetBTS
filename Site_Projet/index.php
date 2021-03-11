<?php

session_start();

require "connexion_bdd.php";
$message = '';

if(isset($_SESSION['user_id']) && isset($_SESSION['username']))
{
	header('location:accueil.php');
}

if(isset($_POST['connexion']))
{
  $username = htmlspecialchars(trim($_POST['identifiant']));
  $password = htmlspecialchars(trim($_POST['motdepasse']));

if (isset($username) || isset($password)){

	$query = "
		SELECT * FROM login
  		WHERE login = :username AND password = :password
	";
	$statement = $bdd->prepare($query);
	$statement->execute(
		array(
			':username' => $username,
			':password' => md5($password)
		)
	);
	$count = $statement->rowCount();
	$row   = $statement->fetch(PDO::FETCH_ASSOC);
	if($count == 1 && !empty($row))
	{
				$_SESSION['user_id'] = $row['id'];
				$_SESSION['username'] = $row['login'];

				header('location:accueil.php');
	}
	else
	{
		$message = '
		<div class="alertzone">
			<span>Mauvais identifiant ou mot de passe !</span>
		</div>';
	}
}
else {
	$message = '
	<div class="alertzone">
		<span>Vous devez remplir tous les champs !</span>
	</div>';
}}
?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="back">
</div>
  <div class="wrapper">
	   <div class="container">
		     <h1>Login</h1>

             <form method="post">
			             <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant">
			             <input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe">
                   <button type="submit" name="connexion" id="connexion">Connexion</button>
                   <button type="button" onClick="window.location='inscription.php';" id="inscription">Inscription </button>
</form>
<?php echo $message; ?>

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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
