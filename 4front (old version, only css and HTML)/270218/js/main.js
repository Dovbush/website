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

    if (($.session.get("id")!=undefined)&&($.session.get("id")!='')&&($.session.get("id")!=null)) {      
        var dist = $($.session.get("id")).offset().top;
        $.session.set("id","");
        $('html, body').animate({'scrollTop': dist - 50}, 1000);
    } 

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

    $(function() {  
        $("body").niceScroll({
            cursorcolor:"#52AE60",
            scrollspeed:150,
            zindex:1000,
            cursorborder: 'none',
            cursorwidth: "7px",
            horizrailenabled: false
        });
        $(".solutions-item-hover .sol-wrapper p").niceScroll({
            cursorcolor:"#52AE60",
            scrollspeed:150,
            zindex:1000,
            cursorborder: 'none',
            cursorwidth: "7px",
            horizrailenabled: false
        });
    });

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

    var map;
    var mapCoordinates = new google.maps.LatLng(55.6001509, 12.9972613);

    function initialize() {

        var mapOptions = {  

            backgroundColor: "#142a2f", // background color
            zoom: 16, // scale
            disableDefaultUI: true,
            draggable: true,
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
                url: "images/marker.png", 
            }
        });

    } 

    google.maps.event.addDomListener(window, 'load', initialize);

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
            location.replace("index.html");
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
            switch(data_sect) {
                case '1':
                     $('.additional-container .second-it-wrap p').html('For Salesforce to be implemented as quickly and intelligently as possible for specific processes and tools in your company, it’s important that the configuration be correct. 4front has broad experience with Salesforce configuration in many larger and smaller organizations and makes the configuration smart and tailored to your projects and systems. Our specialists can also assist with ongoing configuration work or work with projects both before and after the configuration.');
                    break;
                case '2':
                    $('.additional-container .second-it-wrap p').html('4front developers and IT technicians help you achieve the best results you need in the smartest way—and as a Salesforce Partner, we guarantee specialists with the latest knowledge of the Salesforce platform. Our developers are also coached in scrum methodology to ensure projects are implemented as efficiently as possible with the greatest possible focus on customer benefit. With Salesforce Cloud Services, you can create custom logic and applications—and offer your customers completely new opportunities. Read more about Salesforce in the sections "Why Salesforce" and "Salesforce applications" or contact us. We’ll be pleased to tell you more about our developers and their specific skills.');           
                    break;
                case '3':
                    $('.additional-container .second-it-wrap p').html("4front has a long history with implementation for medium and large companies in Sweden, Denmark, and all over the world. Implementation is the first step when you get started on your CRM system—so it's important that you hire an experienced specialist for agile project manager and Salesforce expertise. Our Salesforce-certified specialists in CRM, marketing automation, development, and system integration come up with all types of IT solutions—and make the transition as quick and easy as possible before the next step of the process: configuration."); 
                    break;
                case '4':
                    $('.additional-container .second-it-wrap p').html("Most companies occasionally need extra help with internal support of their processes. 4front has flexible specialists who work in your or our office, ranging from project management and system administration to common support issues or advanced data access and back-end. We have many very satisfied customers—both in Sweden and all over the world."); 
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

   if ($(this).scrollTop() == 0) {
        $('.header-line li a').removeClass('active');
   }

//   if ($('#main').is(":visible")) {

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

//    }

});