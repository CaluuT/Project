jQuery('document'). ready(function($){
    


    /*Creacion de variables*/
    var menupress = $('.menu'),
        menu = $('.nav ul'),
        a = $('.carlitos'),
        b = $('.sex a')

    /*Función para el menu desplegable*/
    menupress.click(function(){

        if(menu.hasClass('show')){

            menu.removeClass('show');
            
        }
        else{

            menu.addClass('show');
            
        }


    });

    



});
