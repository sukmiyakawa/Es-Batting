'use strict';
{
    jQuery(function($){
        $('.div4').on('click', function(){
            $('.div4').addClass('open');
            $('.div5').removeClass('open');
            $('.div6').removeClass('open');
        });
        $('.div5').on('click', function(){
            $('.div4').removeClass('open');
            $('.div5').addClass('open');
            $('.div6').removeClass('open');
        });
        $('.div6').on('click', function(){
            $('.div4').removeClass('open');
            $('.div5').removeClass('open');
            $('.div6').addClass('open');
        });
    });
}