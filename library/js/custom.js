jQuery(document).ready(function($) {
    //alert('hallo'); 	
    
    //change menu 
    $('#menu-hauptmenu').removeClass('navbar-nav').addClass('nav-justified');
    
    // equalize banner and content
    //Home
    var bannerHeightHome = $('.home .sidebar > .banner').height();
    //alert(bannerHeight);
    $('.home .main > .banner').css('height',bannerHeightHome);
    
    var contentHeightHome = $('.home .main > .content').height();
    $('.home .sidebar > .content').css('height',contentHeightHome);

   
    //change some icons
    $('.content article ul').addClass('fa-ul');
    $('ul.fa-ul').children('li').prepend('<i class="fa fa-check"></i>');
    
    
    //accordion
    $('.collapse').collapse();
    $('#accordion > h3 > a').each(function(){
	$(this).prepend('<i class="fa fa-caret-right"></i>');
	$(this).click(function(){
	    $(this).children('i').removeClass('fa-caret-right').addClass('fa-caret-down');
	},function(){
	    $(this).children('i').removeClass('fa-caret-down').addClass('fa-caret-right');
	});

    });
    $('#accordion > h3 > a:first-child').removeClass('collapse');
    
});