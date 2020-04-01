
//Afficher le dropdown langage
$(document).ready(function(){
    $('.button ul li ul').hide();
    $('.button ul li ').hover(
        function(){
            $(this).children('ul').slideDown(200);
        },
        function(){
            $(this).children('ul').slideUp(200);
        })
})

// //----------Gestion-----------
// //Fermer la fenêtre "Gestion sur la croix"
// $(document).ready(function(){
//     $(".gestion a").click(function(){
//         $('.gestion').hide();
//     })
// })
// //Cacher la fenêtre "Gestion" au démarrage
// $(document).ready(function(){
//     $(".gestion").hide();
// })

//----------Nous contacter-----------
//Fermer la fenêtre "Nous contacter sur la croix"
$(document).ready(function(){
    $("a.close_contact").click(function(){
        $('.contact').hide();  
    })
})
//Cacher la fenêtre "Nous contacter" au démarrage
$(document).ready(function(){
    $(".contact").hide();    
})
//Afficher la fenêtre "Nous contacter"
$(document).ready(function(){
    $("li.btn_contact").click(function(){
        $('.contact').show();    
    }) 
})

//----------S'identifier-----------
//Fermer la fenêtre "s'identifier sur la croix"
// $(document).ready(function(){
//     $("a.close_identifier").click(function(){
//         $('.identifier').hide();  
//     })
// })
//Cacher la fenêtre "Nous contacter" au démarrage
// $(document).ready(function(){
//     $(".identifier").hide();    
// })
//Afficher la fenêtre "s'identifier"
// $(document).ready(function(){
//     $("li.btn_connexion").click(function(){
//         $('.identifier').show();    
//     }) 
// })