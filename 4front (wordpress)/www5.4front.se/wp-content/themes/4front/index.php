<?php 
    require 'translation.php';   
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title1 ?> | 4front</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCshNp3k1FACpdtCmjbEDx4NBFDy0--FBU"></script>
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/images/favicon.png">
        <!--<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Mina:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/styles/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/styles/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/styles/loader.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/styles/mobile-menu.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/styles/media.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-59915005-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-59915005-1');
        </script>
        <script type="text/javascript">
            var psSite = "8f8dedcdd0";
            (function() {
                var AL = document.createElement('script'); AL.type = 'text/javascript'; AL.async = true;
                AL.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + "tr.apsislead.com/al_v2.js";
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(AL, s)
            })();
        </script>
        <noscript><img src="http://tr.apsislead.com/?id=8f8dedcdd0" style="border:0;display:none;"></noscript>
        <script type="text/javascript">
            _linkedin_data_partner_id = "350210";
            </script><script type="text/javascript">
            (function(){var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);})();
        </script>
        <noscript>
            <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=350210&fmt=gif" />
        </noscript>
    </head>
    <body id="main">

        <div class="subscribe-btn">Subscribe</div>

        <?php wp_head(); ?>

        <div class="cookies-wrapper">
            <div class="container vertical-align">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <h4>Cookies policy</h4>
                    <p>The website uses cookies to improve user experience. By using website you consent to all cookies in accordance our Cookie Policy.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 vertical-align"> 
                    <div class="col-xs-12 text-center btn-wrapper">
                        <a href="<?php echo $cookieslink ?>">> <span>Read more</span></a>
                        <button>Agree</button>
                    </div>      
                </div>
            </div>    
        </div>

        <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

        <div id="loader-wrapper">
            <div id="loader"></div>
            <img class="loader-logo" src="<?php bloginfo('template_url')?>/images/logo.png" alt="logo">
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <header id="start">
            <div class="mobile-links-wrapper">
                <ul>
                    <li><a class="scrolling" href="#about-wrapper"><?php echo $menuitem1 ?></a></li>
                    <li><a class="scrolling" href="#solutions-wrapper"><?php echo $menuitem2 ?></a></li>                      
                    <li><a href="<?php echo $link1 ?>"><?php echo $menuitem3 ?></a></li>
                    <li><a href="<?php echo $link2 ?>"><?php echo $menuitem4 ?></a></li>
                    <li><a class="scrolling" href="#contacts-wrapper"><?php echo $menuitem5 ?></a></li>
                    <?php
                        pll_the_languages($params);                      
                    ?>  
                </ul>
            </div>
            <div class="bg-opacity">
            </div>
            <div class="bg-opacity2">
            </div>
            <div class="header-line">
                <div class="decor-line">
                </div>
                <div class="header-line-dec">
                </div>
                <div class="container no-padding vertical-align">
                    <div class="col-xs-3 no-padding">
                        <a class="logo scrolling" href="#start">
                            <img src="<?php bloginfo('template_url')?>/images/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="col-xs-9 no-padding text-right">
                        <ul class="desktop-menu">
                            <li><a class="scrolling" href="#about-wrapper"><?php echo $menuitem1 ?><hr></a></li>
                            <li><a class="scrolling" href="#solutions-wrapper"><?php echo $menuitem2 ?><hr></a></li>                       
                            <li><a href="<?php echo $link1 ?>"><?php echo $menuitem3 ?><hr></a></li>
                            <li><a href="<?php echo $link2 ?>"><?php echo $menuitem4 ?><hr></a></li>
                            <li><a class="scrolling" href="#contacts-wrapper"><?php echo $menuitem5 ?><hr></a></li> <?php

                                $params = array(
                                    'display_names_as'  => 'slug',
                                );

                                pll_the_languages($params);
                                
                            ?>             
                        </ul>
                        <div class="mobile-menu-wrapper">       
                            <div class="hamburger closed">
                                <div class="burger-main">
                                    <div class="burger-inner">
                                        <span class="top"></span>
                                        <span class="mid"></span>
                                        <span class="bot"></span>
                                    </div>
                                </div>
                                <div class="svg-main">
                                    <svg class="svg-circle">
                                        <path class="path" fill="none" stroke="#326a77" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2"/>
                                    </svg>
                                </div>
                                <div class="path-burger">
                                    <div class="animate-path">
                                        <div class="path-rotation"></div>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container no-padding">
                    <h1><?php echo $maintitle ?></h1>
                    <h3><?php echo $subtitle ?></h3>
                    <a class="scrolling" href="#about-wrapper">
                        <button><?php echo $menuitem1 ?></button>
                    </a>
                </div>
            </div>
        </header>
        <section id="about-wrapper">
            <div class="bg-pattern"></div>
            <div class="container no-padding">
                <h1 class="text-center"><?php echo $menuitem1 ?></h1>    
                <div class="member-wrapper text-center">
                    <div class="mem-img-wrapper">
                        <img src="<?php bloginfo('template_url')?>/images/martin2.jpg" alt="Martin Haagen">
                    </div>
                    <div class="person-name">Martin Haagen</div>
                    <div class="person-description"><?php echo $ceo ?>, 4front AB</div>
                </div>
                <?php echo $fronttext ?>
            </div>
        </section>
        <section id="solutions-wrapper">
            <div class="bg-pattern-light"></div>
            <div class="scheme-inner">
                <div class="container no-padding text-center">
                    <h1><?php echo $menuitem2 ?></h1>       
                    <div class="col-xs-12">
                        <div class="col-xs-12">
                            <img class="scheme-img" src="<?php bloginfo('template_url')?>/images/scheme10.png" alt="scheme">
                        </div>                       
                    </div>
                </div>
            </div>
            <div class="solutions-inner">
                <div class="container no-padding main-container">
                    <div class="col-lg-3 col-md-3 col-sm-6 sol-outer first-it-wrap">
                        <div class="solutions-item sol-counter">
                            <div class="sol-wrapper vertical-align">
                                <div class="inner-sol-w">
                                    <div class="sol-wrapper-title">
                                        <h3><?php echo $service1 ?></h3> 
                                        <hr>         
                                    </div>                                  
                                    <div class="img-wrap vertical-align">            
                                        <i class="fa fa-cogs" aria-hidden="true"></i>      
                                    </div>
                                    <p class="vertical-align"><?php echo $service1sub ?></p>
                                    <button class="learn-info" data-sect='1'><?php echo $learnmore ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="solutions-item solutions-item-hover" data-sect='1'>
                            <div class="sol-wrapper">
                                <div class="inner-sol-w">
                                    <div class="sol-wrapper-title">
                                        <h3><?php echo $service1sub ?></h3>      
                                        <hr> 
                                    </div>
                                    <p data-sect='1'><?php echo $service1main ?></p>
                                    <button class="learn-info" data-sect='1'><?php echo $showless ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 sol-outer second-it-wrap">
                        <div class="solutions-item sol-counter">
                            <div class="sol-wrapper vertical-align">
                                <div class="inner-sol-w">
                                    <div class="sol-wrapper-title">
                                        <h3><?php echo $service2 ?></h3>
                                        <hr>
                                    </div>
                                    <div class="img-wrap vertical-align"> 
                                        <i class="fa fa-code" aria-hidden="true"></i>
                                    </div>
                                    <p class="vertical-align"><?php echo $service2sub ?></p>
                                    <button class="learn-info" data-sect='2'><?php echo $learnmore ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="solutions-item solutions-item-hover" data-sect='2'>
                            <div class="sol-wrapper">
                                <div class="inner-sol-w">
                                    <div class="sol-wrapper-title">
                                        <h3><?php echo $service2sub ?></h3>      
                                        <hr> 
                                    </div>
                                    <p data-sect='2'><?php echo $service2main ?></p>
                                    <button class="learn-info" data-sect='2'><?php echo $showless ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 sol-outer third-it-wrap">
                        <div class="solutions-item sol-counter">
                            <div class="sol-wrapper vertical-align">
                                <div class="inner-sol-w">
                                    <div class="sol-wrapper-title">
                                        <h3><?php echo $service3 ?></h3>
                                        <hr>
                                    </div>
                                    <div class="img-wrap vertical-align"> 
                                        <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                    </div>
                                    <p class="vertical-align"><?php echo $service3sub ?></p>
                                    <button class="learn-info" data-sect='3'><?php echo $learnmore ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="solutions-item solutions-item-hover" data-sect='3'>
                            <div class="sol-wrapper">
                                <div class="inner-sol-w">
                                    <div class="sol-wrapper-title">
                                        <h3><?php echo $service3sub ?></h3>      
                                        <hr> 
                                    </div>
                                    <p data-sect='3'><?php echo $service3main ?></p>
                                    <button class="learn-info"  data-sect='3'><?php echo $showless ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 sol-outer fourth-it-wrap">
                        <div class="solutions-item sol-counter">
                            <div class="sol-wrapper vertical-align">
                                <div class="inner-sol-w">
                                    <div class="sol-wrapper-title">
                                        <h3><?php echo $service4 ?></h3>
                                        <hr>
                                    </div>                  
                                    <div class="img-wrap vertical-align"> 
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                    </div>
                                    <p class="vertical-align"><?php echo $service4sub ?></p>
                                    <button class="learn-info" data-sect='4'><?php echo $learnmore ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="solutions-item solutions-item-hover" data-sect='4'>
                            <div class="sol-wrapper">
                                <div class="inner-sol-w">
                                    <div class="sol-wrapper-title">
                                        <h3><?php echo $service4sub ?></h3>      
                                        <hr> 
                                    </div>
                                    <p data-sect='4'><?php echo $service4main ?></p>
                                    <button class="learn-info" data-sect='4'><?php echo $showless ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container no-padding additional-container">
                    <div class="col-md-3 col-sm-12 col-xs-12 sol-outer first-it-wrap">
                        <div class="solutions-item">
                            <div class="sol-wrapper vertical-align">
                                <div class="inner-sol-w">
                                    <div class="sol-wrapper-title">
                                        <h3>Configurations</h3> 
                                        <hr>         
                                    </div>                                  
                                    <div class="img-wrap vertical-align">            
                                        <i class="fa fa-cogs" aria-hidden="true"></i>      
                                    </div>
                                    <button class="learn-info"><?php echo $showless ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12 second-it-wrap">
                        <div class="solutions-item">
                            <div class="sol-wrapper sol-info vertical-align">
                                <div class="inner-sol-w">
                                    <div class="sol-wrapper-title">
                                        <h3>4front configures Salesforce quickly and efficiently</h3>       
                                    </div>
                                    <p>For Salesforce to be implemented as quickly and intelligently as possible for specific processes and tools in your company, it’s important that the configuration be correct.
                                    4front has broad experience with Salesforce configuration in many larger and smaller organizations and makes the configuration smart and tailored to your projects and systems. Our specialists can also assist with ongoing configuration work or work with projects both before and after the configuration.</p> 
                                </div>                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team-wrapper">
            <div class="bg-pattern"></div>
            <div class="container">
                <h1 class="col-xs-12 text-center"><?php echo $team ?></h1>
                <div class="col-xs-12 members-outer"> 
                    <div class="col-lg-3 col-md-3 col-xs-6 text-center">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/linus2.jpg" alt="Linus Löfberg">
                            </div>
                            <div class="person-name">Linus Löfberg</div>
                            <div class="person-description">linus@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-6 text-center col-member-display-l">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/simon2.jpg" alt="Simon Glimeld">
                            </div>
                            <div class="person-name">Simon Glimeld</div>
                            <div class="person-description">simon@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-6 text-center col-member-display">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/mirlinda.jpg" alt="Mirlinda Xhil">
                            </div>
                            <div class="person-name">Mirlinda Xhil</div>
                            <div class="person-description">mirlinda@4front.se</div>
                        </div>
                    </div>   
                    <div class="col-lg-3 col-md-3 col-xs-6 text-center col-member-display">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/member-52.jpg" alt="Jani Kettula">
                            </div>
                            <div class="person-name">Jani Kettula</div>
                            <div class="person-description">jani@4front.se</div>
                        </div>
                    </div> 
                </div>
                <div class="col-xs-12 text-center">
                    <a href="<?php echo $teamlink ?>"><button class="team-btn"><?php echo $team2 ?></button></a>
                </div>
            </div>
        </section>
        <section id="customers-wrapper">
            <div class="bg-pattern-light"></div>
            <div class="container">
                <h1 class="col-xs-12"><?php echo $customers ?></h1>
                <div class="owl-carousel col-xs-12 no-padding">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 text-center vertical-align"><img src="<?php bloginfo('template_url')?>/images/spotify-logo.png" alt="logo"></div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 text-center vertical-align"><img src="<?php bloginfo('template_url')?>/images/qlik-logo-2x.png" alt="logo"></div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 text-center vertical-align"><img src="<?php bloginfo('template_url')?>/images/Qmatic-logo+sq+new.png" alt="logo"></div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 text-center vertical-align"><img src="<?php bloginfo('template_url')?>/images/Lund_University_logotype.png" alt="logo"></div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 text-center vertical-align"><img src="<?php bloginfo('template_url')?>/images/visitdenmark.png" alt="logo"></div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4 text-center vertical-align"><img src="<?php bloginfo('template_url')?>/images/fiskars.png" alt="logo"></div>
                </div>
            </div>
        </section>
        <section id="contacts-wrapper">          
            <div id="map">
            </div>     
            <div class="container contacts-inner">
                <h1 class="col-xs-12"><?php echo $contactus ?></h1> 
                <div class="col-md-6 col-sm-4 col-xs-12 address-wrapper">
                    <div><a href="mailto:info@4front.se">info@4front.se</a></div>
                    <div class="address-inner">
                        4front AB<br>
                        Regementsgatan 8<br>
                        211 42 Malmö<br>
                        Sweden
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <?php echo do_shortcode('[cf7-form cf7key="footer-contact-form-2"]'); ?>
                </div>
            </div>
        </section>
        <footer>
            <div class="header-line-dec">
            </div>
            <div class="container">            
                <div class="col-xs-6 vertical-align">© 4front AB, 2013—2018</div>
                <div class="col-xs-6 text-right vertical-align">     
                    <div class="icons-wrapper">
                        <a href="https://www.facebook.com/4frontab"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/4frontab"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/4front.ab/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/company/4front-ab/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    </div>
                </div>        
            </div>
        </footer>
        <div class="modal-wrapper-all">
            <div id="call-modal" style="" class="main-subscribe-modal">
                <div class="modal-wrapper">
                     <?php echo do_shortcode('[activecampaign form=9]')?>
                     <p class="policy-p">We take your privacy seriously. No spam.<br>See our <a href="<?php echo $cookieslink ?>">terms &amp; privacy here</a>.</p>
                </div>
                <div class="close-btn">
                    <img src="<?php bloginfo('template_url')?>/images/close.png" alt="close">
                </div>
            </div>
            <div class="close-modal-block">
            </div>
        </div>
        <div id="mask"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script src="<?php bloginfo('template_url')?>/js/jquery.nicescroll.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
        <script src="<?php bloginfo('template_url')?>/js/jquery.session.js"></script>
        <script src="<?php bloginfo('template_url')?>/js/main.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>