<!--SFPPAGE-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Demo Title</title>
        
    <link rel="shortcut icon" type="SFPURLLINK/image/x-icon" href="img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="SFPURLLINK/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="SFPURLLINK/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="SFPURLLINK/css/bootstrap-theme.min.css">
        <link type="text/css" rel="stylesheet" href="SFPURLLINK/css/main.css"> 
        <link type="text/css" href="SFPURLLINK/css/selector.css" rel="stylesheet">
        <!--SFPScript type="text/javascript" src="SFPURLLINK/js/vendor/modernizr-2.6.2.min.js"></SFPScript-->

        <!--SFPScript type="text/javascript" src="SFPURLLINK/js/selector.js"></SFPScript-->
    
    
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
        
        
        
        
        <div id="index" class="main_wrap SFPTWO_BACKGROUND">
        	<div class="SFPTWO_TEXTEDIT"><h3 class="SFPTWO_TAGEDIT explicit_edit">Presents....</h3></div>
        	<div style="overflow: hidden;" class="SFPTWO_IMAGEEDIT"><a style="cursor: pointer;" class="sfpDynamic logo disabled"><img id="images1" src="SFPURLLINK/img/logo.jpg" alt=""></a><!-- end of logo --></div>
            <div class="SFPTWO_TEXTEDIT"><h2 class="SFPTWO_TAGEDIT explicit_edit">Full moon party</h2></div>
            <ul class="venue">
            	<li><div class="SFPTWO_TEXTEDIT"><span class="SFPTWO_TAGEDIT explicit_edit">Place: Volkelseweg 22,uden</span></div></li>
            	<li><div class="SFPTWO_TEXTEDIT"><span class="SFPTWO_TAGEDIT explicit_edit">Date: 18th october 2014</span></div></li>
            	<li><div class="SFPTWO_TEXTEDIT"><span class="SFPTWO_TAGEDIT explicit_edit">Time: 21:00</span></div></li>
            </ul><!-- end of venue -->
            	<div class="SFPTWO_TEXTEDIT"><p class="neon_text SFPTWO_TAGEDIT explicit_edit">Sign up with your favorite<br>social media channel:</p></div>
            <ul class="blog">
            	<li><a class="sfpDynamic disabled" style="cursor: pointer;" onclick="Login();"><div class="SFPTWO_IMAGEEDIT"><img id="images" src="SFPURLLINK/img/facebook_btn.png" alt="" /></div></a></li>
            <!--	<li><a href="https://www.google.com/" target="_blank"><div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/830-epic/img/google_btn.png" alt="" /></div></a></li>-->
            	<!--<li><a href="http://www.twitter.com/" target="_blank"><img src="img/twitter_btn.png" alt="" /></a></li>-->
            </ul><!-- end of blog -->
        </div><!-- end of main_wrap -->
        
        
        

        <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript">window.jQuery || document.write('<script src="SFPURLLINK/js/vendor/jquery-1.10.2.min.js"><\/script>')</SFPScript-->
        <!--SFPScript type="text/javascript" src="SFPURLLINK/js/bootstrap.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="SFPURLLINK/js/plugins.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="SFPURLLINK/js/jquery.cookie.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="SFPURLLINK/js/main.js"></SFPScript-->
        
        
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function{(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->
        
        <!--SFPScript>
        
        (function($){
        	$(function(){
        	   (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));
              
              window.fbAsyncInit = function (){
                    FB.init({
                        appId      : '1505052056407910',
                        cookie     : true,  // enable cookies to allow the server to access 
                                            // the session
                        xfbml      : true,  // parse social plugins on this page
                        version    : 'v2.1' // use version 2.0
                      });
                  };
                });
            })(jQuery);
        
            // This function is called when someone finishes with the Login
            // Button.  See the onlogin handler attached to it in the sample
            // code below.
            function Login()
            {
                FB.login(function(response) {
                   if (response.authResponse) {
                     console.log('Welcome!  Fetching your information.... ');
                         FB.api('/me', function(response) {
                           FB.api('/me/picture',
                           
                            {
                               "redirect": false,
                               "height": "184",
                               "type": "small",
                               "width": "174"
                             },
                                        
                            function(responsePic) { 
                                       
                            $.cookie('pEmail',response.email);
                            
                            $.ajax({
                                type : 'POST',
                                url : 'database.php',
                                data : {'param':'CHECK',pId : response.id, pName : response.name, pImg: responsePic.data['url'], appId : '1505052056407910'},
                                success : function(data)
                                {
                                    if(data == 0)
                                    {
                                        window.location.href = 'not_invited.php';
                                    }
                                    else if(data == 1)
                                    {
                                        window.location.href = 'vip.php';
                                    }
                                    else
                                    {
                                        alert("Your invitation is not yet approved");
                                    }
                                } 
                            });
                        });
                      }); 
                   } else {
                        window.location.href = 'pervert.php';
                   }
                 },{scope:'SFPFBSCOPE'});
            }   
       </SFPScript-->