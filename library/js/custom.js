jQuery(document).ready(function($) {
    //alert('hallo'); 	
 
    //external links
    $('a').filter(function() {
	    return this.hostname && this.hostname !== location.hostname;
	  }).attr("target","_blank").append(' <i class="fa fa-external-link-square"></i>');
    
    //change menu 
    $('#menu-hauptmenu').removeClass('navbar-nav').addClass('nav-justified');
    
    // equalize banner
    var bannerHeight = $('.sidebar > .banner').height();
    $('.main > .banner').css('height',bannerHeight);
    //change some icons
    $('.content article ul').addClass('fa-ul');
    $('ul.fa-ul').children('li').prepend('<i class="fa fa-check"></i>');
    
    //responsive tables 
    $('table').wrap('<div class="table-responsive"></div>');
    
    //accordion
    $('.collapse').collapse();
    $('#accordion > h3').addClass('collapseHeadline');
    $('.collapseHeadline > a').each(function(){
	$(this).click(function(){
	    $(this).toggleClass('show');
	});
    });
    
    
    
});