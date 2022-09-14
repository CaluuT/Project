jQuery('document'). ready(function($){
    /**/



    var menupress = $('.menu'),
        menu = $('.nav ul'),
        a = $('.carlitos'),
        b = $('.sex a')


    menupress.click(function(){

        if(menu.hasClass('show')){

            menu.removeClass('show');
            
        }
        else{

            menu.addClass('show');
            
        }


    });

    



});
