<?php 
    /*
        Template Name: Team
    */

    require 'translation.php';   

?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $team3 ?> | 4front</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCshNp3k1FACpdtCmjbEDx4NBFDy0--FBU"></script>
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/images/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Mina:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/styles/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/styles/loader.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/styles/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/styles/mobile-menu.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/styles/vacancies.css">
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
    <body>

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

        <div class="mobile-links-wrapper">
            <ul>
                <li><a class="scrolling" href="#about-wrapper"><?php echo $menuitem1 ?></a></li>
                <li><a class="scrolling" href="#solutions-wrapper"><?php echo $menuitem2 ?></a></li>
                <li><a href="<?php echo $link1 ?>"><?php echo $menuitem3 ?><hr></a></li>
                <li><a href="<?php echo $link2 ?>"><?php echo $menuitem4 ?></a></li>
                <li><a class="scrolling" href="#contacts-wrapper"><?php echo $menuitem5 ?></a></li>
                <?php
                    pll_the_languages($params);                      
                ?>  
            </ul>
        </div>
        <div class="header-line">
            <div class="decor-line">
            </div>
            <div class="header-line-dec">
            </div>
            <div class="container no-padding vertical-align">
                <div class="col-xs-3 no-padding">
                    <a class="logo" href="<?php echo $link3 ?>">
                        <img src="<?php bloginfo('template_url')?>/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-xs-9 no-padding text-right">
                    <ul class="desktop-menu">
                        <li><a class="scrolling" href="#about-wrapper"><?php echo $menuitem1 ?><hr></a></li>
                        <li><a class="scrolling" href="#solutions-wrapper"><?php echo $menuitem2 ?><hr></a></li>    
                        <li><a href="<?php echo $link1 ?>"><?php echo $menuitem3 ?><hr></a></li>
                        <li><a href="<?php echo $link2 ?>"><?php echo $menuitem4 ?><hr></a></li>
                        <li><a class="scrolling" href="#contacts-wrapper"><?php echo $menuitem5 ?><hr></a></li>
                        <?php

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
        <section id="team-wrapper" class="teamwrapper">
            <div class="bg-pattern"></div>
            <div class="container">
                <h1 class="col-xs-12 text-center"><?php echo $team ?></h1>
                <div class="col-xs-12 members-outer"> 
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/martin2.jpg" alt="Martin Haagen">
                            </div>
                            <div class="person-name">Martin Haagen, <?php echo $ceo ?></div>
                            <div class="person-description">martin@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/linus2.jpg" alt="Linus Löfberg">
                            </div>
                            <div class="person-name">Linus Löfberg</div>
                            <div class="person-description">linus@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/simon2.jpg" alt="Simon Glimeld">
                            </div>
                            <div class="person-name">Simon Glimeld</div>
                            <div class="person-description">simon@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/mirlinda.jpg" alt="Mirlinda Xhil">
                            </div>
                            <div class="person-name">Mirlinda Xhil</div>
                            <div class="person-description">mirlinda@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/member-52.jpg" alt="Jani Kettula">
                            </div>
                            <div class="person-name">Jani Kettula</div>
                            <div class="person-description">jani@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/yuliya.jpg" alt="Yuliya Serenko">
                            </div>
                            <div class="person-name">Yuliya Serenko</div>
                            <div class="person-description">yuliya@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/roman.jpg" alt="Roman Dovbush">
                            </div>
                            <div class="person-name">Roman Dovbush</div>
                            <div class="person-description">roman@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/serhiyk.jpg" alt="Serhiy Kolesnik">
                            </div>
                            <div class="person-name">Serhiy Kolesnyk</div>
                            <div class="person-description">serhiy.kolesnyk@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/bohdan.jpg" alt="Bohdan Sahaiko">
                            </div>
                            <div class="person-name">Bohdan Sahaiko</div>
                            <div class="person-description">bohdan@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/ilya.jpg" alt="Ilya Khromov">
                            </div>
                            <div class="person-name">Ilya Khromov</div>
                            <div class="person-description">ilya.khromov@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/ihor.jpg" alt="Ihor Turko">
                            </div>
                            <div class="person-name">Ihor Turko</div>
                            <div class="person-description">ihor.turko@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/denys.jpg" alt="Denys Taldykin">
                            </div>
                            <div class="person-name">Denys Taldykin</div>
                            <div class="person-description">denys@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/serhiyt.jpg" alt="Serhii Taldykin">
                            </div>
                            <div class="person-name">Serhii Taldykin</div>
                            <div class="person-description">serhii.taldykin@4front.se </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/olexandr.jpg" alt="Oleksandr Kuzmych">
                            </div>
                            <div class="person-name">Oleksandr Kuzmych</div>
                            <div class="person-description">oleksandr@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/serhiykk.jpg" alt="Serhii Kushnirenko">
                            </div>
                            <div class="person-name">Serhii Kushnirenko</div>
                            <div class="person-description">serhii.kushnirenko@4front.se </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/serhiyn.jpg" alt="Serhii Nykytuk">
                            </div>
                            <div class="person-name">Serhiy Nykytuk</div>
                            <div class="person-description">serhiy.nykytyuk@4front.se</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 text-center own-pd">
                        <div class="member-wrapper">
                            <div class="mem-img-wrapper">
                                <img src="<?php bloginfo('template_url')?>/images/viktor.png" alt="Viktor Yaremenko">
                            </div>
                            <div class="person-name">Viktor Yaremenko</div>
                            <div class="person-description">viktor@4front.se</div>
                        </div>
                    </div>
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