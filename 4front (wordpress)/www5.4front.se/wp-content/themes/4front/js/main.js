function rightHeight(elem) {
    var height = 0;

    $(elem).each(function() {
        if (height<$(this).height()) {
           height = $(this).height();
        }
    });
    $(elem).height(height);
}

/*function customscroll() {
    if ($(window).width()>991) {
        $("body").removeClass('scroll-own');
        $("html").removeClass('scroll-own');
        $(function() {  
            $("body").niceScroll({
                cursorcolor:"#52AE60",
                zindex:1000,
                cursorborder: 'none',
                cursorwidth: "7px",
                horizrailenabled: false
            });
        }); 
    } else {
        $("body").addClass('scroll-own');
        $("html").addClass('scroll-own');
        $("body").getNiceScroll().remove();
    }
}*/

$(window).on('load', function () {

    if (($.cookie("cookie-4front")==undefined)||($.cookie("cookie-4front")=='')||($.cookie("cookie-4front")==null)) {
        $('.cookies-wrapper').addClass('ok');
    }

    $('.btn-wrapper button').click(function () {
        $.cookie("cookie-4front", 'ok', {
           expires : 10, 
           path : '/'     
        });
        $('.cookies-wrapper').removeClass('ok');
    });

   $('body').addClass('loaded');
   $('.loader-logo').addClass('logo-opacity');

    if ($(window).width()>767) {
   //     rightHeight(".solutions-item");
    }

    if (($.session.get("id")!=undefined)&&($.session.get("id")!='')&&($.session.get("id")!=null)) {      
        var dist = $($.session.get("id")).offset().top;
        $.session.set("id","");
        $('html, body').animate({'scrollTop': dist - 50}, 1000);
    } 

    $(".sol-counter").each(function( index ) {      
        var height = $(this).height();
        $(this).siblings('.solutions-item-hover').css('height',height);
    });

    if ($('.vacancies-block.v-animate').is(":visible")) {

        $(".col-xs-12:nth-child(odd) .vacancies-block.v-animate").animated("bounceInLeft", "fadeOut");
        $(".col-xs-12:nth-child(even) .vacancies-block.v-animate").animated("bounceInRight", "fadeOut");

    }

});

$(document).ready(function () {

    $('.panel-heading').click(function() {
        $(this).toggleClass('in').next().slideToggle();
        $('.panel-heading').not(this).removeClass('in').next().slideUp();
    });

    var Closed = false;

    $('.hamburger').click(function () {
        if (Closed == true) {
            $(this).removeClass('open');
            $(this).addClass('closed');
            $('.mobile-links-wrapper').removeClass('display-block');
            $('body').removeClass('height');
            $('html').removeClass('height');
            Closed = false;
        } else {               
            $(this).removeClass('closed');
            $(this).addClass('open');
            Closed = true;
            $('.mobile-links-wrapper').addClass('display-block');
            $('body').addClass('height');
            $('html').addClass('height');
        }
    });

    //customscroll();

    $(".solutions-item-hover .sol-wrapper p").niceScroll({
        cursorcolor:"#52AE60",
        zindex:1000,
        cursorborder: 'none',
        cursorwidth: "7px",
        horizrailenabled: false
    });

	$('#customers-wrapper .owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    items:4,
        autoplay:true,
        autoplayTimeout:2000,
        responsive : {
            320 : {
                items:1
            },
            480 : {
                items:2
            },
            768 : {
                items:3
            },
            991 : {
                items:4
            }
        }
	});

    $('a.scrolling, .logo.scrolling').click(function() {

        $('.hamburger').removeClass('open');
        $('.hamburger').addClass('closed');
        $('.mobile-links-wrapper').removeClass('display-block');
        $('body').removeClass('height');
        $('html').removeClass('height');
        Closed = false;

        var element = $(this).attr('href');
        if ($(element).is(":visible")) {
            var dist = $(element).offset().top;
            $('html, body').animate({'scrollTop': dist - 50}, 1000);
        } else {
            $.session.set("id",element); 
            var html = $('.logo').attr('href');
            location.replace(html);
        }

        return false;
    });

    $(".main-container .learn-info").click(function() {

        if ($(window).width()>=767) {

            var data_sect = $(this).attr('data-sect');

            var p = $(this).siblings('p').html();
            $('.additional-container .second-it-wrap h3').html(p);
            var title = $(this).siblings('.sol-wrapper-title').children('h3').html();
            $('.additional-container .first-it-wrap h3').html(title);
            var img = $(this).siblings('.img-wrap').html();
            $('.additional-container .img-wrap').html(img);

            var html;

            $(".solutions-item-hover p").each(function( index ) {    
                var dtsecthover = $(this).attr('data-sect');
                if (data_sect==dtsecthover) {
                    html = $(this).html();
                }
            });  

            $('.additional-container .second-it-wrap p').html(html); 

            $('.main-container').addClass('change');
            $('.additional-container').addClass('change');

        } else {
            var dtsect = $(this).attr('data-sect');

            $(".solutions-item-hover").each(function( index ) {    
                var dtsecthover = $(this).attr('data-sect');
                if (dtsect==dtsecthover) {
                    $(this).addClass('open');
                }
            });  

        }

    });

    $(".additional-container .learn-info").click(function() {

        if ($(window).width()>=767) {

            $('.main-container').removeClass('change');
            $('.additional-container').removeClass('change');

        } 

    });

    $(".solutions-item-hover").click(function() {

        var dtsect = $(this).attr('data-sect');

        $(".solutions-item-hover").each(function( index ) {    
            var dtsecthover = $(this).attr('data-sect');
            if (dtsect==dtsecthover) {
                $(this).removeClass('open');
            }
        });  

    });

    function initialize() {

        var map;
        var mapCoordinates;

        mapCoordinates = new google.maps.LatLng(55.6001509, 12.9972613);

        var mapOptions = {  

            backgroundColor: "#142a2f", // background color
            zoom: 16, // scale
            disableDefaultUI: true,
            draggable: false,
            scrollwheel: true,
            center: mapCoordinates,
            mapTypeId: google.maps.MapTypeId.ROADMAP,

            //----------- styles ----------
            styles: [
                {
                    "featureType": "landscape.natural",
                    "elementType": "geometry.fill",
                    "stylers": [
                        { "color": "#326a77" }
                    ]
                },
                {
                    "featureType": "landscape.man_made",
                    "stylers": [
                        { "color": "#f7941e" },
                        { "visibility": "off" }
                    ]
                },
                {
                   "featureType": "water",
                   "stylers": [
                       { "color": "#80C8E5" },  // water color
                       { "saturation": 0 }
                   ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        { "color": "#D7D7D7" }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        { "visibility": "off" }
                  ]
                },
                {
                    "elementType": "labels.text",
                    "stylers": [
                        { "color": "#ffffff" }
                    ]
                },
                {
                    "featureType": "poi",
                    "stylers": [
                        { "visibility": "off" }
                    ]
                }
            ]
        //------------ end --------------
        };

        map = new google.maps.Map(document.getElementById('map'), mapOptions);

        var marker = new google.maps.Marker({
            position: mapCoordinates,
            map: map,
            icon: {
                url: "/wp-content/themes/4front/images/marker.png", 
            }
        });

    } 

    google.maps.event.addDomListener(window, 'load', initialize);

    $('#return-to-top').click(function() {      
        $('body,html').animate({
            scrollTop : 0                
        }, 500);
    });

    $('.subscribe-btn').click(function() {   
        $('.modal-wrapper-all').addClass('display');
        $('#call-modal').addClass('open');
        $('body').addClass('mask');
        $('body').addClass('display');
        $('html').addClass('display');
        $('.close-modal-block').addClass('open');
    });

    $('#call-modal .close-btn').on('click', function () {
        $('#call-modal').removeClass('open');
        $('.modal-wrapper-all').removeClass('display');
        $('body').removeClass('mask');
        $('body').removeClass('display');
        $('html').removeClass('display');
        $('.close-modal-block').removeClass('open');
    });

});

$(window).resize(function() {
    if ($(window).width()>767) {
      //  rightHeight(".solutions-item");
    } else {
      //  $(".solutions-item").removeAttr('style');
    }
 //   rightHeight(".vacancies-block");
    $(".solutions-item-hover").removeAttr('style');
    $(".sol-counter").each(function( index ) {      
        var height = $(this).height();
        $(this).siblings('.solutions-item-hover').css('height',height);
    });

    //customscroll();

});


$(window).scroll(function() {

   if ($(this).scrollTop() > 0) {
   		$('.header-line').addClass('fixed');
   } else {
		$('.header-line').removeClass('fixed');
   }

   if ($(this).scrollTop() == 0) {
        $('.header-line li a').removeClass('active');
   }

    $('section[id]').each(function() {
        var id = $(this).attr('id');
        if ($(this).offset().top-100 < $(window).scrollTop()) {
      
            $('.header-line li a').removeClass('active');
            $('.header-line li a[href="#'+id+'"]').addClass('active');
            var height = $('section#contacts-wrapper').height();
            if ($('section#contacts-wrapper').offset().top < $(window).scrollTop()+height) {
                $('.header-line li a').removeClass('active');
                $('.header-line li a[href="#contacts-wrapper"]').addClass('active');
            }
        }
    });

    if ($(this).scrollTop() >= 50) {        
        $('#return-to-top').fadeIn(200);   
    } else {
        $('#return-to-top').fadeOut(200);  
    }

});