
//Afficher le dropdown langage
$(document).ready(function(){
    $('.button ul li ul').hide();
    $('.button ul li ').hover(
        function(){
            $(this).children('ul').slideDown(200);
        },
        function(){
            $(this).children('ul').slideUp(200);
        }
    )
})

//Fermer la fenêtre "Gestion"
$(document).ready(function(){
    $(".gestion a").click(function(){
        $('.gestion').hide();
    })
})
//Cacher la fenêtre "Gestion"
$(document).ready(function(){
    $(".gestion").hide();
})

//Fermer la fenêtre "Nous contacter"
$(document).ready(function(){
    $("a.close_contact").click(function(){
        $('.contact').hide();  
    })
})
//Cacher la fenêtre "Nous contacter"
$(document).ready(function(){
    $(".contact").hide();    
})

//Afficher la fenêtre "Nous contacter"
$(document).ready(function(){
    $("li.btn_contact").click(function(){
        $('.contact').show();    
    }) 
})

$(document).ready(function(){
    console.log("jquery est pret !")
})