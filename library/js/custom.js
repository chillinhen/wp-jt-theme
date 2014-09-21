jQuery(document).ready(function($) {
    //alert('hallo'); 	
    
    //change menu 
    $('#menu-hauptmenu').removeClass('navbar-nav').addClass('nav-justified');
    
    // equalize banner
    var bannerHeight = $('.sidebar > .banner').height();
    $('.main > .banner').css('height',bannerHeight);
    //change some icons
    $('.content article ul').addClass('fa-ul');
    $('ul.fa-ul').children('li').prepend('<i class="fa fa-check"></i>');
    
    
    //accordion
    $('.collapse').collapse();
    $('#accordion > h3 > a').each(function(){
	$(this).prepend('<i class="fa fa-caret-right"></i>');

    });
    
});