//--------------------------------
//---  Se déconnecter  -----------
//--------------------------------
    
    $(document).ready(function(){
        //Fermer la fenêtre déconnection
        $("a.close_deconnect_gestion").click(function(){
            $('.deconnect_gestion').hide();
        });
        $(".annule_gestion").click(function(){
            $('.deconnect_gestion').hide();
        });

            //Cacher la fenêtre déconnection
            $(".deconnect_gestion").hide(); 

                //Afficher la fenêtre déconnection dans gestion film
                $("div.logout a").click(function(){
                $('.deconnect_gestion').show();  
                });
    });
    
    
