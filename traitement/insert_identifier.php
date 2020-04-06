<?php

// On va chercher les connections de la bdd sur connect_bdd.php dans le dossier include :
//   include ('../include/connect_bdd.php');
  include ('../include/connect_bdd.php');

// On vérifie que les «inputs» ne soient pas vides avant d’enregistrer dans la bdd :
  $nom_contact = !empty($_POST['nom_contact']) ? $_POST['nom_contact'] : NULL;
  $mail_contact = !empty($_POST['mail_contact']) ? $_POST['mail_contact'] : NULL;
  $message_contact = !empty($_POST['message_contact']) ? $_POST['message_contact'] : NULL;

// On prépare la requête dans une variable «$sql»: 
$sql = $bdd->prepare ("INSERT INTO contact (nom_contact, mail_contact, message_contact )
                        VALUES ( :nom_contact, :mail_contact, :message_contact)");

// On éxecute la requête «$sql»:
  $sql->execute(array(
      'nom_contact' => $nom_contact,   
      'mail_contact' => $mail_contact,
      'message_contact' => $message_contact
  ));

// On vide la requête «$sql» :
  $sql-> closeCursor();

// On revient sur la page index.php :
  header('location:../index.php');

?>