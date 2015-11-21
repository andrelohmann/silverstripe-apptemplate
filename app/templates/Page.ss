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
        --%>

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
        
        <%--
			//Back to Top Button
			<% include BackToTopButton %>
		 --%>
        
        <!-- Latest compiled and minified JavaScript -->
        
        <%--
			//activate smooth scrolling Navigation on OnePagers
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
        --%>
    </body>
</html>