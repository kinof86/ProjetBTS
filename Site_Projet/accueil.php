<?php
if(isset($_POST['deconnexion']))
{
  session_start();
session_destroy();
header('Location: index.php');
}
?>


<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="./style2.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="back">

  <div class="wrapper">

	   <div class="container">
		     <h1></h1>
         <div class="bandeau">
           <form method="post">
           <button class="boutonaccueil" onClick="window.location='personnes.php';" href="user.html">Personnes</a>
           <button class="boutoncontact" onClick="window.location='vehicules.php';" href="vehicules.html">Vehicules</a>
           <button class="boutonauteur" onClick="window.location='missions.php';">Missions</a>
        </div>
      </form>

            <form method="post">
            <button class="boutondeco" type="submit" name="deconnexion" id="deconnexion">Deconnexion</button>
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
