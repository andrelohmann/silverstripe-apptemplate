<!DOCTYPE html>
<html>
    <head>
        <% base_tag %>
        <title>$Title</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        $MetaTags(false)
        <%-- Bootstrap --%>
        
        <%-- link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" /--%>
        <%-- link rel="stylesheet" href="{$ThemeDir}/libs/bootstrap/css/default/bootstrap.min.css" /--%>
        
        <!-- Optional theme -->
        <%--link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css" /--%>
        <link rel="stylesheet" href="{$ThemeDir}/libs/bootstrap/css/paper/bootstrap.min.css" />

        <!-- http://daneden.github.io/animate.css/ -->
        <%--link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css" rel="stylesheet" /--%>
        <link href="{$ThemeDir}/css/animate/animate.min.css" rel="stylesheet" />
        <link href="{$ThemeDir}/css/animate/animationdelay.css" rel="stylesheet" />

        <!-- http://fortawesome.github.io/Font-Awesome/ -->
        <%--link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" /-->
        <link href="{$ThemeDir}/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <!-- https://useiconic.com/open/ -->
        <%--link href="//cdn.jsdelivr.net/open-iconic/1.1.0/font/css/open-iconic-bootstrap.min.css" rel="stylesheet" /--%>
        <link href="{$ThemeDir}/libs/open-iconic/css/open-iconic-bootstrap.min.css" rel="stylesheet" />
        <!-- http://ionicons.com/ -->
        <%--link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" /--%>
        <link href="{$ThemeDir}/libs/ionicons/css/ionicons.min.css" rel="stylesheet" />
        
        <%--
            // necessary shariff styles
            // include font-awesome before
            <link href="shariff/css/shariff.min.css" rel="stylesheet" />
        --%>
        
        <style type="text/css">

            body {
                padding-top: 64px;
                padding-bottom: 64px;
            }
        </style>

        <!-- Fav and touch icons -->
        <!-- iPad (Retina) ICON -->
        <link rel="apple-touch-icon" sizes="144x144" href="{$ThemeDir}/images/logos/logo_144x144.png" />
        <!-- iPhone (Retina) ICON -->
        <link rel="apple-touch-icon" sizes="114x114" href="{$ThemeDir}/images/logos/logo_114x114.png" />
        <!-- iPad ICON -->
        <link rel="apple-touch-icon" sizes="72x72" href="{$ThemeDir}/images/logos/logo_72x72.png" />
        <!-- iPhone ICON -->
        <link rel="apple-touch-icon" href="{$ThemeDir}/images/logos/logo_57x57.png" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{$ThemeDir}/images/logos/logo_32x32.png" />

        <!-- iPhone SPLASHSCREEN-->
        <link href="{$ThemeDir}/images/logos/splash_320x480.png" media="(device-width: 320px)" rel="apple-touch-startup-image" />
        <!-- iPhone (Retina) SPLASHSCREEN-->
        <link href="{$ThemeDir}/images/logos/splash_640x960.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
        <!-- iPad (portrait) SPLASHSCREEN-->
        <link href="{$ThemeDir}/images/logos/splash_768x1024.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image" />
        <!-- iPad (landscape) SPLASHSCREEN-->
        <link href="{$ThemeDir}/images/logos/splash_1024x768.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image" />
        <!-- iPad (Retina, portrait) SPLASHSCREEN-->
        <link href="{$ThemeDir}/images/logos/splash_1536x2048.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
        <!-- iPad (Retina, landscape) SPLASHSCREEN-->
        <link href="{$ThemeDir}/images/logos/splash_2048x1536.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <%--script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script--%>
            <script src="{$ThemeDir}/javascript/html5shiv/html5shiv.min.js"></script>
            <%--script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script--%>
            <script src="{$ThemeDir}/javascript/respond/respond.min.js"></script>
        <![endif]-->
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <%--script src="https://code.jquery.com/jquery.min.js"></script--%>
        <script src="{$ThemeDir}/javascript/jquery/jquery.min.js"></script>
        <%--script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script--%>
        <script src="{$ThemeDir}/libs/bootstrap/javascript/bootstrap.min.js"></script>

        <%-- activate smooth scrolling Navigation on OnePagers --%>
        <script type="text/javascript">
            /* Smooth scrolling para anclas */  
            $(function() {
                $('a[href*=#]:not([href=#])').bind('click',function(e){
                    e.preventDefault();
                    var link = $(this);
                    var anchor = link.attr('href');
                    $('html, body').stop().animate({
                        scrollTop: $(anchor).offset().top
                    }, 1000);
                });
            });
        </script>
        <%-- end --%>

        <%-- Back to Top Button on OnePagers --%>
        <style type="text/css">
            #back-top span {
                position:fixed;
                bottom:30px;
                right:30px;
                color:#eee;
                background-color:rgba(0,0,0,0.3);
                -webkit-transition:all .25s ease;
                -moz-transition:all .25s ease;
                -ms-transition:all .25s ease;
                -o-transition:all .25s ease;
                transition:all .25s ease;
                padding:10px;
                border-radius:5px;
                text-align:center;
            }

            #back-top span:hover {
                background-color:rgba(0,0,0,0.7);
            }

            #back-top span i {
                font-size:3em;
            }
        </style>

        <script type="text/javascript">
            $(document).ready(function(){
                // hide #back-top first
                $("#back-top").hide();
    
                // fade in #back-top
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 100) {
                            $('#back-top').fadeIn();
                        } else {
                            $('#back-top').fadeOut();
                        }
                    });

                    // scroll body to 0px on click
                    $('#back-top span').click(function () {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 500);
                        return false;
                    });
                });
            });
        </script>
        <%-- end --%>

    </head>
    <body id="page-top" data-spy="scroll" data-target="#top-nav"><%-- activated scroll-spy for Top Navigation on OnePagers --%>
        <nav id="top-nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container"><!-- This container will center the Navbar Contents to the fluid width, by uncommenting it, the whole width will be used -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home/index">Brandname</a>
                </div>

                <div class="collapse navbar-collapse" id="top-navigation">
                    <% if $CurrentMember %>
                    <ul class="nav navbar-nav">
                        <li class="<% if $URLPath == profile/index %>active<% end_if %>"><a href="profile/index"><%t TopMenu.PROFILE "TopMenu.PROFILE" %></a></li>
                    </ul>
                    <% end_if %>
                    $BootstrapNavbarModalLoginForm
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
        $BootstrapNavbarModalLoginForm.Modal
        
        <%--
            // Include CookiesWarning if gua-cookie-policy module is installed
            <% include CookiesWarning %>
        <%--

        $Layout
        
        <%--
            // If you like to use shariff, place the following code somewhere on your Page
            // configure following this guide: https://github.com/heiseonline/shariff#options-data-attributes
            <div class="container">
                <div class="shariff" data-backend-url="shariffbackend" data-lang="$CurrentLang" data-url="$AbsoluteURLPath" data-orientation="horizontal"></div>
            </div>
        --%>

        <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bottom-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <p class="navbar-text navbar-left">&copy; 2015</p>
                </div>
                
                <div class="collapse navbar-collapse" id="bottom-navigation">
                    <ul class="nav navbar-nav">
                        <li class="<% if $URLPath == home/terms %>active<% end_if %>"><a href="home/terms"><%t BottomMenu.TERMS "BottomMenu.TERMS" %></a></li>
                        <li class="<% if $URLPath == home/privacy %>active<% end_if %>"><a href="home/privacy"><%t BottomMenu.PRIVACY "BottomMenu.PRIVACY" %></a></li>
                        <li class="<% if $URLPath == home/contact %>active<% end_if %>"><a href="home/contact"><%t BottomMenu.CONTACT "BottomMenu.CONTACT" %></a></li>
                        <li class="<% if $URLPath == home/imprint %>active<% end_if %>"><a href="home/imprint"><%t BottomMenu.IMPRINT "BottomMenu.IMPRINT" %></a></li>
                    </ul>
                    $BootstrapNavbarLanguageForm
                </div>
            </div>
        </nav>
        <%-- Back to Top Button --%>
        <div id="back-top">
            <span><i class="fa fa-chevron-up"></i></span>
        </div>
        <!-- Latest compiled and minified JavaScript -->
        <%--
            // Necessary shariff library
            <script src="shariff/javascript/shariff.min.js"></script>
        <%--
            // See the Getting Started docs for more information:
            // http://getbootstrap.com/getting-started/#support-ie10-width
        --%>
        <script type="text/javascript">
            (function () {
                'use strict';
                if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                    var msViewportStyle = document.createElement('style')
                    msViewportStyle.appendChild(
                        document.createTextNode(
                            '@-ms-viewport{width:auto!important}'
                        )
                    )
                    document.querySelector('head').appendChild(msViewportStyle)
                }
            })();
        </script>
        <%--
            // Include Google Analytics if gua-cookie-policy module is installed
            <% include GoogleAnalytics %>
        <%--
    </body>
</html>