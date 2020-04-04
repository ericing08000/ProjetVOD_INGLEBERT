<!------------------------------------>
<!-- Connexion au server de l'école--->
<!------------------------------------>
<?php
try   {
  $serveur="db5000303640.hosting-data.io";
  $user = "dbu526574";
  $dbase = "dbs296627";
  $pass = "TiS|5+z6";

  // Je me connecte à ma bdd
  $bdd = new PDO("mysql:host=$serveur;dbname=$dbase", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}catch(Exception $e)
{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}


?>
