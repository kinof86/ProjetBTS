<?php
try // ON TEST LA CONNEXION A LA BDD
    {
      $bdd = new PDO('mysql:host=localhost;dbname=gps_distant', 'ui', 'ui'); // ON CREER NOTRE OBJET PDO (Normalement tu utilises aussi PDO vu en cours)
    }
   catch(Exception $e) // SI IL Y A UNE ERREUR ON LA CAPTURE
   {
     die('Erreur : '.$e->getMessage()); // ON FAIRE MOURRIR LA PAGE AVEC L'ERREUR
   }
?>
