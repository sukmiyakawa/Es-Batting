'use strict';
{
    jQuery(function($){
        let displayWidth = $('html body').outerWidth(),
            pre_position = 0;

        if(displayWidth<768){
            $('.subNavi_item--ball').css('position','relative');
            $(window).on('scroll',function(){
                if($(window).scrollTop()<750){
                    var scroll = $(this).scrollTop();
                    console.log(scroll);
                    $('.subMenu').addClass('fixed');    
                }else{
                    $('.subMenu').removeClass('fixed');    
                }
                
                if(pre_position < window.scrollY) {
                    //下にスクロールしたときの処理
                    
                    if($(window).scrollTop()<1){
                        $('.subNavi_item--reservation').css('border-top','none');
                        $('.subNavi_item--ball').addClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_three');

                    }else if($(window).scrollTop()>=1 && $(window).scrollTop()<465){
                        $('.subNavi_item--ball').css('border-top','7px solid var(--accentcolor');
                        $('.subNavi_item--reservation').css('border-top','none');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_three');
                    }else if($(window).scrollTop()>=465 && $(window).scrollTop()<650){
                        $('.subNavi_item--ball').css('border-top','');
                        $('.subNavi_item--reservation').css('border-top','none');
                        $('.subNavi_item--ball').addClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_three');

                    }else if($(window).scrollTop()>=650 && $(window).scrollTop()<750){
                        $('.subNavi_item--reservation').css('border-top','7px solid var(--accentcolor)');
                        $('.subNavi_item--ball').addClass('downfase_three');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                    }
                    
                } else {
                    //上にスクロールしたときの処理
                    if($(window).scrollTop()<1){
                        $('.subNavi_item--ball').css('border-top','7px solid var(--accentcolor');
                        $('.subNavi_item--reservation').css('border-top','none');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_three');
                    }
                    if($(window).scrollTop()>1 && $(window).scrollTop()<465){
                        $('.subNavi_item--reservation').css('border-top','none');
                        $('.subNavi_item--ball').addClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_three');
                    }
                    if($(window).scrollTop()>=465 && $(window).scrollTop()<650){
                        $('.subNavi_item--reservation').css('border-top','none');
                        $('.subNavi_item--ball').addClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_three');
                    }
                    if($(window).scrollTop()>=650 && $(window).scrollTop()<750){
                        $('.subNavi_item--reservation').css('border-top','none');
                        $('.subNavi_item--ball').addClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_three');
                    }
                }
                pre_position = window.scrollY;
            });
        }

        if(displayWidth>=1024){

            $(window).on('load scroll',function(){
                var scroll = $(this).scrollTop();
                console.log(scroll);
                if($(window).scrollTop()>150 && $(window).scrollTop()<904){
                    $('.subMenu').addClass('sticky');     
                }

                $('.subNavi_item--ball').css('position','relative');
                if(pre_position < window.scrollY) {
                    //下にスクロールしたときの処理
                    if($(window).scrollTop()>0 && $(window).scrollTop()<1){
                        $('.subNavi_item--ball').addClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_three');
                    }else if($(window).scrollTop()>1 && $(window).scrollTop()<300){
                        $('.subNavi_item--ball').css('border-left','5px solid var(--accentcolor');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_three');
                        
                    }else if($(window).scrollTop()>=300 && $(window).scrollTop()<600){
                        $('.subNavi_item--ball').css('border-left','');
                        $('.subNavi_item--ball').addClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_three');

                    }else if($(window).scrollTop()>=600 && $(window).scrollTop()<904){
                        $('.subNavi_item--ball').addClass('downfase_three');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_two');

                    }
                    
                } else {
                    var scroll = $(window).scrollTop();
                    console.log(scroll);
                    //上にスクロールしたときの処理
                    if($(window).scrollTop()>0 && $(window).scrollTop()<1){
                        $('.subNavi_item--ball').css('border-left','5px solid var(--accentcolor');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_three');
                    }
                    if($(window).scrollTop()>1 && $(window).scrollTop()<300){
                        $('.subNavi_item--ball').addClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_three');
                    }
                    if($(window).scrollTop()>=300 && $(window).scrollTop()<700){
                        $('.subNavi_item--ball').addClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_three');

                    }if($(window).scrollTop()>=700 && $(window).scrollTop()<1000){
                        $('.subNavi_item--ball').addClass('upfase_three');
                        $('.subNavi_item--ball').removeClass('upfase_one');
                        $('.subNavi_item--ball').removeClass('upfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_one');
                        $('.subNavi_item--ball').removeClass('downfase_two');
                        $('.subNavi_item--ball').removeClass('downfase_three');
                    }
                }
                pre_position = window.scrollY;
            });
        }
    });
}