'use strict';
{
    jQuery(function($){
        $('.question').on('click', function(){
            $(this).next().slideToggle();
            $(this).toggleClass('slide');
        });

        
    });
}