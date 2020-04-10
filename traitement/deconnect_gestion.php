

<!------------------------------------>
<!--  Se déconnecter de gestion -->
<!------------------------------------>
<div id="deconnect_gestion" class="deconnect_gestion">
    <!------------------------------------>
    <!-- Barre de navigation -->
    <!------------------------------------>
    <div class="nav_deconnect_gestion">
        <div>
            <h3>SE DÉCONNECTER</h3>
        </div>
        <div>
            <a class="close_deconnect_gestion" href="gestion.php" title="Fermer Se déconnecter et revenir à Gestion"><img src="image/close.png" alt="fermer fenêtre"></a>
        </div>
    </div>

    <!--------------------->
    <!-- formulaire -->
    <!--------------------->
    <div class="form_deconnect_gestion">
        <form id="form_deconnect_gestion" method="post" action="#">
            <fieldset>
                <p>Voulez-vous vraiment vous déconnecter ?</p>
            </fieldset>
            
            <fieldset class="btn_deconnect_gestion">
                <a href="gestion.php"><button class="annule_gestion" name="annuler" type="button">ANNULER</button></a>
                <a href="?deconnect=ok"><button class="valide_gestion" name="valider" type="button">VALIDER</button></a>
            </fieldset>
        </form>
    </div>

    <!------------------------->
    <!-- footer -->
    <!------------------------->
    <footer></footer>

