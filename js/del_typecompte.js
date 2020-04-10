//-----------------------------------
//----------Se déconnecter-----------
//-----------------------------------
    //Fermer la fenêtre 
    $(document).ready(function(){
        $(".annule_del_typecompte").click(function(){
            $('.del_typecompte').hide();
        });   
    });

    //Cacher la fenêtre 
    $(document).ready(function(){
        $(".del_typecompte").hide(); 
            
    });

    //Afficher la fenêtre 
    $(document).ready(function(){
        $(".center_typecompte").click(function(){
            $('.del_typecompte').show();    
        }); 
    });
