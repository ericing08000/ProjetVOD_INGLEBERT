<!------------------------------------>
<!-- ProjetVOD Fil-rouge 24/03/2020 -->
<!------------------------------------>
<?php

if(!isset($_GET['nom']))

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="deconnect_gestion.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <title>ProjetVOD <?php if(isset($_GET['nom'])) echo ": Bienvenue ".$_GET['nom'];?></title>
    </head>

<body id="body" class="accueil">
    <!-------------------------------->
    <!-- Barre de navigation -->
    <!-------------------------------->
    <?php include ("include/navbar.php"); ?>

    <!-------------------------------->
    <!-- Nous contacter -->
    <!-------------------------------->
    <?php include ("include/contact.php"); ?>

    <!-------------------------------->
    <!-- scripts -->
    <!-------------------------------->
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>

</body>
</html>