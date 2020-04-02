<?php
session_start();
$_session = array();

session_destroy();

echo "Vous êtes maintenant déconnecté";
echo "<a href=javascript:window.close();> revenir à l'accueil</a>"

?>
