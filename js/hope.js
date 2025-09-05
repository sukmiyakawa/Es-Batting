'use strict';
{
    jQuery(function($){
        let displayWidth = $('html body').outerWidth();
        if(displayWidth<768){
            $(window).on('scroll',function(){
                if($(window).scrollTop()>300){
                    $('.gold_hightlight--first').addClass('active');    
                }
                if($(window).scrollTop()>700){
                    $('.gold_hightlight--second').addClass('active');    
                }
                if($(window).scrollTop()>800){
                    $('.gold_hightlight--third').addClass('active');    
                }
            });
        }
        else{
            $(window).on('scroll',function(){
                if($(window).scrollTop()>0){
                    $('.gold_hightlight--first').addClass('active');    
                    $('.gold_hightlight--second').addClass('active');    
                    $('.gold_hightlight--third').addClass('active');    
                }
            });
        }
    });
}