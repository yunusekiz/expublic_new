<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Expublic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Expublic, public experience.">
    <meta name="author" content="Expublic">
    <!-- Styles -->
    <link href="{base}css/bootstrap.css" rel="stylesheet">
    <link href="{base}css/style.css" rel="stylesheet">
    <link rel='stylesheet' id='prettyphoto-css'  href="{base}css/prettyPhoto.css" type='text/css' media='all'>
    <link href="{base}css/fontello.css" type="text/css" rel="stylesheet">
    <!--[if lt IE 7]>
            <link href="css/fontello-ie7.css" type="text/css" rel="stylesheet">  
        <![endif]-->
    <!-- Google Web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CDN for Glyphicons -->
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->
    <style>
    body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
    </style>
    <link href="{base}css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="{base}img/favicon.ico">
    <!-- JQuery -->
    <script type="text/javascript" src="{base}js/jquery.js"></script>
    <!-- Load ScrollTo -->
    <script type="text/javascript" src="{base}js/jquery.scrollTo-1.4.2-min.js"></script>
    <!-- Load LocalScroll -->
    <script type="text/javascript" src="{base}js/jquery.localscroll-1.2.7-min.js"></script>
    <!-- prettyPhoto Initialization -->
    <script type="text/javascript" charset="utf-8">
          $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
          });
        </script>
    </head>
    <body>
    <!--******************** NAVBAR ********************-->
    <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <h1 class="brand"><!-- <a href="#top">Expublic!</a> --> <a href="#top"><img src="img/logo.png"></a>  </h1>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <nav class="pull-right nav-collapse collapse">
              <ul id="menu-main" class="nav">
               <!--  <li><a title="portfolio" href="#portfolio">Portfolio</a></li> -->
                <li><a title="services" href="#services">Hizmetlerimiz</a></li>
                <!-- <li><a title="news" href="#news">News</a></li> -->
                <li><a title="team" href="#team">Ekibimiz</a></li>
                <li><a title="contact" href="#contact">İletişim</a></li>
              </ul>
            </nav>
          </div>
          <!-- /.container -->
        </div>
        <!-- /.navbar-inner -->
      </div>
      <!-- /.navbar -->
    </div>
    <!-- /.navbar-wrapper -->
    <div id="top"></div>
    <!-- ******************** HeaderWrap ********************-->
    <div id="headerwrap">
      <header class="clearfix">
        <h1><span></span> {headline_iteration}{title}{/headline_iteration}.</h1>
        <div class="container">
          <div class="row">
            <div class="span12">
              <ul class="icon">
                {social_iteration}
                <!-- <li><a href="#" target="_blank"><i class="icon-pinterest-circled"></i></a></li> -->
                <li><a href="{facebook}" target="_blank"><i class="icon-facebook-circled"></i></a></li>
                <li><a href="{twitter}" target="_blank"><i class="icon-twitter-circled"></i></a></li>
                <!-- <li><a href="{g_plus}" target="_blank"><i class="icon-gplus-circled"></i></a></li> -->
                <li><a href="#{skype}" target="_blank" title="{skype}"><i class="icon-skype-circled"></i></a></li>
                {/social_iteration}
              </ul>
            </div>
          </div>
        </div>
      </header>
    </div>
    <!--******************** Feature ********************-->
    <div class="scrollblock">
      <section id="feature">
        <div class="container">
          <div class="row">
            <div class="span12">
              <article>
                <p>We work to make web a beautiful place.</p>
                <p>We craft beautiful designs and convert them into</p>
                <p>fully functional and user-friendy web app.</p>
              </article>
            </div>
            <!-- ./span12 -->
          </div>
          <!-- .row -->
        </div>
        <!-- ./container -->
      </section>
    </div>
    <hr>
    <hr>
    <!--******************** Services Section ********************-->
    <section id="services" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-cog-circled"></i></div>
        <h1>Hizmetlerimiz</h1>
        
        <div class="row">
          {service_iteration}
          <div class="span3">
            <div class="align"> <i class="{service_icon} sev_icon"></i> </div>
            <h2>{service_title}</h2>
            <p>{service_detail}</p>
          </div>
          {/service_iteration}
          
<!--       <div class="span3">
            <div class="align"> <i class="icon-desktop sev_icon"></i> </div>
            <h2>Web design</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
          
          <div class="span3">
            <div class="align"> <i class="icon-vector sev_icon"></i> </div>
            <h2>Print Design</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
          
          <div class="span3">
            <div class="align"> <i class="icon-basket sev_icon"></i> </div>
            <h2>Ecommerce</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
          
          <div class="span3">
            <div class="align"> <i class="icon-mobile-1 sev_icon"></i> </div>
            <h2>Marketing</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div> -->
          
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
    <!--******************** Testimonials Section ********************-->
    <section id="testimonials" class="single-page hidden-phone">
      <div class="container">
        <div class="row">
          <div class="blockquote-wrapper">
            <blockquote class="mega">
              <div class="span4">
                <p class="cite">John Doe &amp; Sons:</p>
              </div>
              <div class="span8">
                <p class="alignright">"We highly appreciate the enthusiasm and creative talent of the people at Legend!"</p>
              </div>
            </blockquote>
          </div>
          <!-- /.blockquote-wrapper -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
    <hr>
    <!--******************** Team Section ********************-->
    <section id="team" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-group-circled"></i></div>
        <h1>Ekibimiz</h1>
        
        <div class="row">
          {team_iteration}
          <div class="span2 offset1">
            <div class="teamalign"> <img class="team-thumb img-circle" src="{base}{team_big_photo}" alt=""> </div>
            <h3>{team_title}</h3>
            <div class="job-position">{team_detail}</div>
          </div>          
          {/team_iteration}
          
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="span10 offset1">
            <hr class="featurette-divider">
            <div class="featurette">
              <h2 class="featurette-heading">Biraz da kendimizden bahsedelim. <span class="muted"></span></h2>
              <p>Biz verdiğimiz hizmetler konusunda hem uzman hem de genç bir kadroya sahibiz. Türkiye’de birçok üniversitede gençlerden oluşan genç, dinamik, yaratıcı, çağa ayak uydurmuş bir takıma sahibiz. Yılların tecrübesiyle gençlerin enerjisinin buluştuğu tek şirketiz.  Hedefler doğrultusunda sonuç odaklı çalışan, verdiği hizmetlerde kaliteyi ön planda tutan, sektöre yeni bir soluk getirmeyi amaçlayan, verilen hizmetlerde gerçekçi ve mütevazi fiyatlar belirleyen bir ajansız.
              </p>

            </div>
            <!-- /.featurette -->
            <hr class="featurette-divider">
          </div>
          <!-- .span10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!--******************** Contact Section ********************-->
    <section id="contact" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-mail-2"></i></div>
        <h1>İletişim!</h1>
        <div class="row">
          <div class="span6">
            <div class="cform" id="theme-form">
              <form action="#" method="post" class="cform-form">
                <div class="row">
                  <div class="span6"> <span class="your-name">
                    <input type="text" name="your-name" placeholder="İsim, Soyisim" class="cform-text" size="80" title="İsim, Soyisim" required>
                    </span> </div>
                </div>
                <div class="row">
                  <div class="span3"> <span class="phone">
                    <input type="text" name="your-phone" placeholder="Telefon" class="cform-text" size="40" title="Telefon" required>
                    </span> </div>
                  <div class="span3"> <span class="your-email">
                    <input type="text" name="your-email" placeholder="E-posta" class="cform-text" size="40" title="E-posta" required>
                    </span> </div>
                </div>
                <div class="row">
                  <div class="span6"> <span class="message">
                    <textarea name="message" class="cform-textarea" cols="40" rows="10" title="Mesaj" placeholder="Mesaj" required></textarea>
                    </span> </div>
                </div>
                <div>
                  <input type="submit" value="Gönder" class="cform-submit pull-left">
                </div>
                <div class="cform-response-output"></div>
              </form>
            </div>
          </div>
          <!-- ./span12 -->
          <div class="span6">
            <div class="cform" id="theme-form">
                <div class="row">
                  <div class="span6">
                    {contact_iteration}
                      <b>Adres :</b>   {address}<br/>
                      <b>Telefon :</b>  {phone}<br/>
                      <b>E-posta : </b> {email}<br/>
                     <b> Faks   :  </b> {g_plus}<br/><br/>
                     {/contact_iteration}

                  </div>
                   <div class="span6">
<iframe width="570" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?sll=39.90395040000005,32.81741050000004&amp;sspn=0.006222447019527742,0.01716723198968925&amp;t=m&amp;q=Me%C5%9Frutiyet+Cd,+Ankara,+T%C3%BCrkiye&amp;ie=UTF8&amp;hq=&amp;hnear=Me%C5%9Frutiyet+Cd,+Ankara%2F%C3%87ankaya,+T%C3%BCrkiye&amp;ll=39.923692,32.854958&amp;spn=0.036861,0.097847&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?sll=39.90395040000005,32.81741050000004&amp;sspn=0.006222447019527742,0.01716723198968925&amp;t=m&amp;q=Me%C5%9Frutiyet+Cd,+Ankara,+T%C3%BCrkiye&amp;ie=UTF8&amp;hq=&amp;hnear=Me%C5%9Frutiyet+Cd,+Ankara%2F%C3%87ankaya,+T%C3%BCrkiye&amp;ll=39.923692,32.854958&amp;spn=0.036861,0.097847&amp;z=13&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">Daha Büyük Görüntüle</a></small>                  </div>
                </div>

                <div class="cform-response-output"></div>
            </div>
          </div>          
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <hr>
    <div class="footer-wrapper">
      <div class="container">
        <footer>
          <small>&copy; 2013 Expublic</small>
        </footer>
      </div>
      <!-- ./container -->
    </div>
    <!-- Loading the javaScript at the end of the page -->
    <script type="text/javascript" src="{base}js/bootstrap.js"></script>
    <script type="text/javascript" src="{base}js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="{base}js/site.js"></script>
    
    <!--ANALYTICS CODE-->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-xxxxxxx-1']);
      _gaq.push(['_setDomainName', 'xxxxxxxxx.com']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    </body>
    </html>
