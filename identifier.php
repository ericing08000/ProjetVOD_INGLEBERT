<?php
session_start();

if(isset($_POST['button']))
{
    if($_POST['nom']=="Eric")
        {
        $_SESSION['nom']="Eric"; 
        header("location:gestion.php");
        }
    else
        {
        $erreur="Votre nom n'est pas valide";
        }

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
            <label><?php if(isset($erreur)) echo "<a>".$erreur."</a>";?></label>
            <input placeholder ="Nom" name="nom" type="text" tabindex="1" required autofocus/>
        </fieldset>
        <fieldset>
            <input placeholder ="Mot de passe" name="mdp" type="password" tabindex="2" required/>
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
