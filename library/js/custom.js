jQuery(document).ready(function($) {
    //alert('hallo'); 	
 
    //external links
    $('a').filter(function() {
	    return this.hostname && this.hostname !== location.hostname;
	  }).attr("target","_blank").append(' <i class="fa fa-external-link-square"></i>');
    
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
    
    //responsive tables 
    $('table').wrap('<div class="table-responsive"></div>');
    
    //accordion
    $('.collapse').collapse();
    //$('#accordion > h3 > a').addClass('collapse');
    
    
    
    
});