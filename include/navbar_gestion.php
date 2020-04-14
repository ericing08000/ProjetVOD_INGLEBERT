<!------------------------------>
<!-- Barre de navigation -->
<!------------------------------>
<?php

if(!isset($_GET['name'])){
    $_GET['name'] = 'Film';
}
else
{
    $_GET['name'];
}
    
?>
<!------------------------------>
<!-- Barre de navigation -->
<!------------------------------>
<div class="nav">
    <div>
        <h3>GESTION : <?php echo $_GET['name'];?></h3>
    </div>
    <div class="logout">
        <a href="#">SE DECONNECTER</a>
    </div>
</div>

<!------------------------------>
<!-- Boutons et rechercher -->
<!------------------------------>
    <div class="btn_gestion_film">
        <div class="active1"><a href="gestion.php?name=Film">Film</a></div>
        <div class="active2"><a href="gestion_typefilm.php?name=Type de film">Type de film</a></div>
        <div class="active3"><a href="gestion_compte.php?name=Compte">Compte</a></div>
        <div class="active4"><a href="gestion_typecompte.php?name=Type de compte">Type de compte</a></div>
    </div>