jQuery(function() {
    jQuery(window).scroll(function() {
		if (screen.width >= '1000') {
        var mass = Math.max(0.90, 1-0.0005* jQuery(this).scrollTop());
        jQuery('.nav-item').css('transform', 'scale(' + mass + ')');
			}
    });
});



jQuery(function(){
    jQuery('.navbar').data('size','big');
});

jQuery(window).scroll(function(){
    if(jQuery(document).scrollTop() > 0 && screen.width >= '1000') 
    {
        if(jQuery('.navbar').data('size') == 'big')
        {
            jQuery('.navbar').data('size','small');
            jQuery('.navbar').stop().animate({
                'height' :'68px'
            },200);
        }
    }
    else
    {
        if(jQuery('.navbar').data('size') == 'small')
        {
            jQuery('.navbar').data('size','big');
            jQuery('.navbar').stop().animate({
                height:'100px'
            },200);
        }
    }
});


jQuery(function(){
    jQuery('.img-fluid.logo').data('size','big');
}); 

jQuery(window).scroll(function(){
    if( jQuery(document).scrollTop() > 0 && screen.width >= '1000')
    {
        if( jQuery('.img-fluid.logo').data('size') == 'big')
        {
            jQuery('.img-fluid.logo').data('size','small');
            jQuery('.img-fluid.logo').stop().animate({
                'height':'70px',
                'width' : '160px'
            },200);
        }
    }
    else
    {
        if(jQuery('.img-fluid.logo').data('size') == 'small')
        {
            jQuery('.img-fluid.logo').data('size','big');
            jQuery('.img-fluid.logo').stop().animate({
                'height':'101px',
                'width' : '250px'
            },200);
        }
    }
});


jQuery(function(){
    jQuery('.navbar-collapse').data('size','big');
}); 

jQuery(window).scroll(function(){
    if( jQuery(document).scrollTop() > 0 && screen.width >= '1000')
    {
        if( jQuery('.navbar-collapse').data('size') == 'big')
        {
            jQuery('.navbar-collapse').data('size','small');
            jQuery('.navbar-collapse').stop().animate({
                'height':'65px',
            },200);
        }
    }
    else
    {
        if(jQuery('.navbar-collapse').data('size') == 'small')
        {
            jQuery('.navbar-collapse').data('size','big');
            jQuery('.navbar-collapse').stop().animate({
                'height':'100px',
            },200);
        }
    }
});


jQuery(window).scroll(function(){
    if(jQuery(document).scrollTop() > 100)
    {
        if( jQuery('#upbutton').is(':hidden'))
        {
            jQuery('#upbutton').css({opacity : 1}).fadeIn('slow');
        }
    }
    else
    {
        jQuery('#upbutton').stop(true, false).fadeOut('fast');
    }
});
jQuery('#upbutton').on('click', function() {
    jQuery('html, body').stop().animate({scrollTop : 0}, 300);
});


									   
															
jQuery(".submit-cf").click(function() {
    jQuery(".card-callus").animate({"height" : "640"}, 200);
 });

  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
