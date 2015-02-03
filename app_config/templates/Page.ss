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
        
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.3.2/paper/bootstrap.min.css" />

        <!-- http://fortawesome.github.io/Font-Awesome/ -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
        <!-- https://useiconic.com/open/ -->
        <link href="//cdn.jsdelivr.net/open-iconic/1.1.0/font/css/open-iconic-bootstrap.min.css" rel="stylesheet" />
        
        <style type="text/css">

            body {
                padding-top: 64px;
                padding-bottom: 64px;
            }
            /*
            
            @font-face {
                font-family: 'UbuntuTitlingBold';
                src: url('{$ThemeDir}/webfonts/UbuntuTitling-Bold-webfont.eot');
                src: url('{$ThemeDir}/webfonts/UbuntuTitling-Bold-webfont.eot?#iefix') format('embedded-opentype'),
                     url('{$ThemeDir}/webfonts/UbuntuTitling-Bold-webfont.woff') format('woff'),
                     url('{$ThemeDir}/webfonts/UbuntuTitling-Bold-webfont.ttf') format('truetype'),
                     url('{$ThemeDir}/webfonts/UbuntuTitling-Bold-webfont.svg#UbuntuTitlingBold') format('svg');
                font-weight: normal;
                font-style: normal;
            }
            
            .navbar-inner {
                background-color: goldenrod; / * background color will be black for all browsers * /
                background-image: -moz-linear-gradient(top, goldenrod, gold);
                background-image: -webkit-gradient(linear, 0 0, 0 100%, from(goldenrod), to(gold));
                background-image: -webkit-linear-gradient(top,goldenrod,gold);
                background-image: -o-linear-gradient(top,goldenrod,gold);
                background-image: linear-gradient(to bottom,goldenrod,gold);
                border-color: #222;
                background-repeat: no-repeat;
                filter: none;
            }

            .navbar .navbar-text {
                color: white;
            }
            
            .navbar .nav > li > a {
                text-shadow: none;
                color: white;
            }
            
            .navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus {
                background-color: orange;
                box-shadow: inset 0px 3px 8px rgba(0, 0, 0, 0.126);
                color: #555555;
                text-decoration: none;
            }

            .navbar .navbar-brand {
                font-family: UbuntuTitlingBold, "Helvetica Neue", Helvetica, Arial, sans-serif;
                padding: 5px 5px 4px 0px;
                color: white;
            }
            
            .jumbotron {
                padding: 10px;
                margin-bottom: 10px;
                font-size: 18px;
                font-weight: 200;
                line-height: 30px;
                color: inherit;
                background: transparent url(app_home/images/hero-unit-bg.png) 0px 0px repeat;
                -webkit-border-radius: 6px;
                -moz-border-radius: 6px;
                border-radius: 6px;
            }*/
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
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
                        <li><a href="profile/index"><%t TopMenu.PROFILE "TopMenu.PROFILE" %></a></li>
                    </ul>
                    <% end_if %>
                    $BootstrapNavbarModalLoginForm
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
        $BootstrapNavbarModalLoginForm.Modal

        $Layout

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
                        <li><a href="home/terms"><%t BottomMenu.TERMS "BottomMenu.TERMS" %></a></li>
                        <li><a href="home/privacy"><%t BottomMenu.PRIVACY "BottomMenu.PRIVACY" %></a></li>
                        <li><a href="home/contact"><%t BottomMenu.CONTACT "BottomMenu.CONTACT" %></a></li>
                        <li><a href="home/imprint"><%t BottomMenu.IMPRINT "BottomMenu.IMPRINT" %></a></li>
                    </ul>
                    $BootstrapNavbarLanguageForm
                </div>
            </div>
        </nav>
        <!-- Latest compiled and minified JavaScript -->
    </body>
</html>