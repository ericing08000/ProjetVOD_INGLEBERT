//------------------------------------
//--Liste déroulante de la navbar-----
//------------------------------------
    //Afficher le dropdown langage
    $(document).ready(function(){
        $('.button ul li ul').hide();
        $('.button ul li ').hover(
            function(){
                $(this).children('ul').slideDown(200);
            },
            function(){
                $(this).children('ul').slideUp(200);
            });
    });

//------------------------------------
//----------Nous contacter-----------
//------------------------------------
    //Fermer la fenêtre "Nous contacter sur la croix"
    $(document).ready(function(){
        $("a.close_contact").click(function(){
            $('.contact').hide();  
        });
    });
    //Cacher la fenêtre "Nous contacter" au démarrage
    $(document).ready(function(){
        $(".contact").hide(); 
        $("li.btn_gestion").hide(); 
    });
    //Afficher la fenêtre "Nous contacter"
    $(document).ready(function(){
        $("li.btn_contact").click(function(){
            $('.contact').show();    
        });
    });

//-----------------------------------------
//Cacher le bouton de Gestion de la navbar
//-----------------------------------------
    $(document).ready(function(){
        $("a.close_contact").click(function(){
            $('.contact').hide();  
        });
    });

