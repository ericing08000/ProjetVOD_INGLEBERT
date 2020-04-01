<!--  nous contacter -->
<div id="contact" class="contact">
    <!-- Header -->
    <div class="nav_contact">
        <div>
            <h3>NOUS CONTACTER</h3>
        </div>
        <div>
            <a class="close_contact" href="#"><img src="image/close.png" alt="fermer fenêtre"></a>
        </div>
    </div>
    <!-- Boutons -->
    <div class="form_contact">
        <form id="form_contact" method="post" action="traitement/insert_contact.php" target="_blank">
        <fieldset>
            <input placeholder ="Nom" name="nom_contact" type="text" tabindex="1" required autofocus/>
        </fieldset>
        <fieldset>
            <input placeholder ="Email" name="mail_contact" type="text" tabindex="2" required/>
        </fieldset>
        <fieldset class="textarea">
            <textarea placeholder ="Message" name="message_contact" cols="40" rows="3" tabindex="3" required></textarea>
        </fieldset>
        <fieldset class="btn_envoyer_contact">
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ENVOYER</button>
        </fieldset>
        
        </form>
    </div>

    
    <footer></footer>
</div>
