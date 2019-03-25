function rightHeight(elem) {
    var height = 0;

    $(elem).each(function() {
        if (height<$(this).height()) {
           height = $(this).height();
        }
    });
    $(elem).height(height);
}

$(window).on('load', function () {

    $('body').addClass('loaded');
    $('.loader-logo').addClass('logo-opacity');


    if ($(window).width()>767) {
        rightHeight(".solutions-item");
    }
  //  rightHeight(".vacancies-block");

    // if (($.session.get("id")!=undefined)&&($.session.get("id")!='')&&($.session.get("id")!=null)) {      
    //     var dist = $($.session.get("id")).offset().top;
    //     $.session.set("id","");
    //     $('html, body').animate({'scrollTop': dist - 50}, 1000);
    // } 

    $(".sol-counter").each(function( index ) {      
        var height = $(this).height();
        $(this).siblings('.solutions-item-hover').css('height',height);
    });

});

$(document).ready(function () {

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

    // $(function() {  
    //     $("body").niceScroll({
    //         cursorcolor:"#6e9fef",
    //         scrollspeed:150,
    //         zindex:1000,
    //         // cursorborder: 'none',
    //         cursorborderradius: "1px",
    //         cursorwidth: "10px",
    //         horizrailenabled: false
    //     });
    //     $(".solutions-item-hover .sol-wrapper p").niceScroll({
    //         cursorcolor:"#6e9fef",
    //         // cursorcolor:"#52AE60",
    //         scrollspeed:150,
    //         zindex:1000,
    //         // cursorborder: 'none',
    //         cursorborderradius: "1px",
    //         cursorwidth: "10px",
    //         horizrailenabled: false
    //     });
    // });

	$('.members-outer').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    items:4,
        responsive : {
            480 : {
                items:2
            },
            768 : {
                items:2
            },
            991 : {
                items:4
            }
        }
	});

    // var map;
    // var mapCoordinates = new google.maps.LatLng(55.6001509, 12.9972613);

    // function initialize() {

    //     var mapOptions = {  

    //         backgroundColor: "#142a2f", // background color "#142a2f"
    //         zoom: 16, // scale
    //         disableDefaultUI: true,
    //         draggable: true,
    //         scrollwheel: true,
    //         center: mapCoordinates,
    //         mapTypeId: google.maps.MapTypeId.ROADMAP,

    //         //----------- styles ----------
    //         styles: [
    //             {
    //                 "featureType": "landscape.natural",
    //                 "elementType": "geometry.fill",
    //                 "stylers": [
    //                     { "color": "#326a77" }
    //                 ]
    //             },
    //             {
    //                 "featureType": "landscape.man_made",
    //                 "stylers": [
    //                     { "color": "#f7941e" },
    //                     { "visibility": "off" }
    //                 ]
    //             },
    //             {
    //                "featureType": "water",
    //                "stylers": [
    //                    { "color": "#80C8E5" },  // water color
    //                    { "saturation": 0 }
    //                ]
    //             },
    //             {
    //                 "featureType": "road.arterial",
    //                 "elementType": "geometry",
    //                 "stylers": [
    //                     { "color": "#D7D7D7" }
    //                 ]
    //             },
    //             {
    //                 "elementType": "labels.text.stroke",
    //                 "stylers": [
    //                     { "visibility": "off" }
    //               ]
    //             },
    //             {
    //                 "elementType": "labels.text",
    //                 "stylers": [
    //                     { "color": "#ffffff" }
    //                 ]
    //             },
    //             {
    //                 "featureType": "poi",
    //                 "stylers": [
    //                     { "visibility": "off" }
    //                 ]
    //             }
    //         ]
    //     //------------ end --------------
    //     };

    //     map = new google.maps.Map(document.getElementById('map'), mapOptions);

    //     var marker = new google.maps.Marker({
    //         position: mapCoordinates,
    //         map: map,
    //         icon: {
    //             url: "images/marker.png", 
    //         }
    //     });

    // } 

    // google.maps.event.addDomListener(window, 'load', initialize);

    // $('a.scrolling, .logo.scrolling').click(function() {

    //     $('.hamburger').removeClass('open');
    //     $('.hamburger').addClass('closed');
    //     $('.mobile-links-wrapper').removeClass('display-block');
    //     $('body').removeClass('height');
    //     $('html').removeClass('height');
    //     Closed = false;

    //     var element = $(this).attr('href');
    //     if ($(element).is(":visible")) {
    //         var dist = $(element).offset().top;
    //         $('html, body').animate({'scrollTop': dist - 50}, 1000);
    //     } else {
    //         $.session.set("id",element); 
    //         location.replace("index.html");
    //     }

    //     return false;
    // });

    $(".main-container .learn-info").click(function() {

        if ($(window).width()>=767) {

            var data_sect = $(this).attr('data-sect');

            var p = $(this).siblings('p').html();
            $('.additional-container .second-it-wrap h3').html(p);
            var title = $(this).siblings('.sol-wrapper-title').children('h3').html();
            $('.additional-container .first-it-wrap h3').html(title);
            var img = $(this).siblings('.img-wrap').html();
            $('.additional-container .img-wrap').html(img);
            switch(data_sect) {
                case '1':
                     $('.additional-container .second-it-wrap p').html('Текст');
                    break;
                case '2':
                    $('.additional-container .second-it-wrap p').html('Текст');           
                    break;
                case '3':
                    $('.additional-container .second-it-wrap p').html("Текст"); 
                    break;
                case '4':
                    $('.additional-container .second-it-wrap p').html("Текст"); 
                    break;
            } 

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

});

$(window).resize(function() {
    if ($(window).width()>767) {
        rightHeight(".solutions-item");
    } else {
        $(".solutions-item").removeAttr('style');
    }
 //   rightHeight(".vacancies-block");
    $(".solutions-item-hover").removeAttr('style');
    $(".sol-counter").each(function( index ) {      
        var height = $(this).height();
        $(this).siblings('.solutions-item-hover').css('height',height);
    });

});


$(window).scroll(function() {
   if ($(this).scrollTop() > 0) {
   		$('.header-line').addClass('fixed');
   } else {
		$('.header-line').removeClass('fixed');
   }

   if ($(this).scrollTop() > 0) {
        $('.header-line').addClass('header-on-scroll');
        $('.header-line img').addClass('logo-style');
   } else {
        $('.header-line').removeClass('header-on-scroll');
        $('.header-line img').removeClass('logo-style');
   }

   if ($(this).scrollTop() == 0) {
        $('.header-line li a').removeClass('active');
   }

    if ($('#main').is(":visible")) {

        $('section[id]').each(function() {
            let id = $(this).attr('id');
            console.log('id ' + id);
            if ($(this).offset().top-100 < $(window).scrollTop()) {
          
                $('.header-line li a').removeClass('active');
                $('.header-line li a[href="#'+id+'"]').addClass('active');
                let height = $('section#contacts-wrapper').height();
                console.log('height ' + height);
                if ($('section#contacts-wrapper').offset().top < $(window).scrollTop()+height) {
                    $('.header-line li a').removeClass('active');
                    $('.header-line li a[href="#contacts-wrapper"]').addClass('active');
                }
            }
        });

    }

});