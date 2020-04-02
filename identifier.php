<?php
session_start();

//Connection à la base de données en local
include("include/connect_local.php");

$nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL ;
$mdp = !empty($_POST['mdp']) ? $_POST['mdp'] : NULL ;
//echo $nom ." ".$mdp;

$req = $bdd -> prepare ("SELECT * FROM compte WHERE nom = :nom ");
$req -> execute(array(
            'nom' => $nom
));
$resultat = $req -> fetch();
// echo $resultat['nom'];

if($resultat['nom'] == $nom)
    {
        if($resultat['mdp'] == $mdp)
        {
            if(isset($resultat['mdp'])){
                //echo "tout est ok";   
                $_SESSION['id_compte'] = $resultat['id_compte'];
                $_SESSION['nom'] = $nom;
                //echo $_SESSION['nom']." ".$_SESSION['id_compte'];
                header("location:gestion.php");
            }
                
        }
        else
        {
            $erreur = "Mot de passe invalide";
            echo $erreur;
        }
    }
else
    {
        $erreur = "compte non trouvé";
        echo $erreur;
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/identifier.css">
    <title>S'identifier</title>
</head>
<body>

<!--  s'identifier -->
<div id="identifier" class="identifier">
    <!-- Header -->
    <div class="nav_identifier">
        <div>
            <h3>S'IDENTIFIER</h3>
        </div>
        <div>
            <a class="close_identifier" href="javascript:window.close();" title="Fermer S'identifier et revenir à l'accueil"><img src="image/close.png" alt="fermer fenêtre"></a>
        </div>
    </div>
    <!-- Formulaire -->
    <div class="form_identifier">
        <form id="form_identifier" method="post" action="identifier.php">
        <fieldset>
            <input placeholder ="Nom" name="nom" type="text" tabindex="1" required autofocus/>
        </fieldset>
        <fieldset>
            <input placeholder ="Mot de passe" name="mdp" type="password" tabindex="2"/>
        </fieldset>
        <fieldset class="btn_envoyer_identifier">
            <a href="#"> Créer un compte</a>
            <button name="button" type="submit" value="envoyer">ENTRER</button>
        </fieldset>
        
        </form>
    </div>

    
    <footer>
 
    </footer>
    
    
    
    </div>
    
</body>
</html>