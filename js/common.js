'use strict';
{
    jQuery(function($){
         $('.btn_menu').on('click', function(){
            $('.btn_menu').toggleClass('open');
            $('.menu').toggleClass('active');
        });
        $('.menu_item').on('click', function(){
            $('.btn_menu').removeClass('open');
            $('.menu').removeClass('active');
        });

        
    });
}