//-----------------------------------
//----------Se déconnecter-----------
//-----------------------------------

//Fermer la fenêtre 
$(document).ready(function(){
    $("a.close_deconnect_gestion").click(function(){
        $('.deconnect_gestion').hide();
        $('.annule_gestion').hide();  
    })
    $(".annule_gestion").click(function(){
        $('.deconnect_gestion').hide();
    })
})

//Cacher la fenêtre 
$(document).ready(function(){
    $(".deconnect_gestion").hide();       
})

//Afficher la fenêtre 
$(document).ready(function(){
    $("div.logout").click(function(){
        $('.deconnect_gestion').show();    
    }) 
})
