<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <title>{title}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{base}css/bootstrap.min.css" rel="stylesheet">
    <link href="{base}css/font-awesome.min.css" rel="stylesheet">
    <link href="{base}css/prettyPhoto.css" rel="stylesheet">
    <link href="{base}css/jquery.bxslider.css" rel="stylesheet">
    <link href="{base}css/style.css" rel="stylesheet">
    <link class="style" href="{base}css/style-default.css" rel="stylesheet">
    <link href="{base}css/swicther.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400italic' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/favicon.png"><!--favicon image-->
  </head>

  <body>

<!--   <div id="style-menu">
      <div class="switch-btn"><i class="icon-cog"></i></div>
      <ul class="clearfix">
        <li class="switch-title">Choose Color</li>
        <li><a class="orange" href="#" data-rel="css/style-default.css"></a></li>
        <li><a class="red" href="#" data-rel="css/style-red.css"></a></li>
        <li><a class="blue" href="#" data-rel="css/style-blue.css"></a></li>
        <li><a class="green" href="#" data-rel="css/style-green.css"></a></li>
        <li><a class="purple" href="#" data-rel="css/style-purple.css"></a></li>
        <li><a class="yellow" href="#" data-rel="css/style-yellow.css"></a></li>
      </ul>
  </div> -->
  
<section class="wrapper clearfix">
    <section id="header" class="clearfix">
        <div class="container menu">
            <div class="center clearfix">
                    <ul class="navigation clearfix">
                        <li><a href="{base}">Anasayfa<span class="navi-line"></span></a></li>
                        <li><a href="{base}hakkimizda">HAKKIMIZDA<span class="navi-line"></span></a></li>
                        <li>
                            <a href="{base}araclar">KİRALIK ARAÇLAR<span class="navi-line"></span></a>
                        </li>
                        <li>
                            <a href="{base}referanslar">Referanslar<span class="navi-line"></span></a>
                        </li>
                        <li><a href="{base}iletisim">İLETİŞİM<span class="navi-line paged"></span></a></li>
                    </ul><!--/.navigation-->  
            </div><!--/.center-->  
        </div><!--/.menu-->

    </section><!--/header-->
    <section class="grey clearfix">
        <div class="motto container">
            <a class="logo" href="{base}"><img src="{base}images/logo.png" alt="logo"></a>
            <!-- <p class="logo-text">Arac K&#304;ralama</p> -->
        </div><!--/.motto-->
    </section><!--/.gray-->

    <section class="content clearfix">  
        <div class="content-inner container">
             <h3 class="big-text" style="font-family:arial; font-weight:bold;">İLETİŞİM</h3>  
            <div id="map_canvas" class="content-inner clearfix"></div><!--GOOGLE MAP HERE-->
            
            <div class="title-box clearfix">
                <i class="icon-cogs"></i>
                <h3 class="title-content" style="font-family:arial; font-weight:bold;">İLETİŞİM ADRESLERİMİZ</h3>
                <p class="mini-text">Sizi ofisimize bekliyoruz</p>
            </div><!--/.title-box-->
            
            <div class="row">
                <div class="span6 content-inner">
<!--                     <p>An alteration of the timeline for the superhero, The Flash, creates ripples alters the Universe. The Flash must team with other heroes to restore the 
                    timeline while the Earth is ravaged by a war between Aquaman’s Atlantis and Wonder Woman.</p> -->
                    <div class="spacing-20 clearfix"></div>
                    <ul class="address-content clearfix">
                        {contact_iteration}
                        <li><i class="icon-home"></i> <span>Adres:</span> {address}</li>
                        <li><i class="icon-phone"></i><span>Telefon:</span>{phone}</li>
                        <!-- <li><i class="icon-envelope"></i> <span>Eposta:</span> <a href="{email}"> {email}</a></li> -->
                        {/contact_iteration}
                    </ul>
                    
                </div><!--/.content-inner-->
                
                <div class="span6 content-inner">
                    <div id="form-wrapper">
                                <div id="form-inner">
                                    <div id="ErrResults"><!-- retrive Error Here --></div>
                                    <div id="MainResult"><!-- retrive response Here --></div>
                                    <div id="MainContent">
                                        <form id="MyContactForm" name="MyContactForm" method="post">
                                            <p class="name"><span>İsim:</span> 
                                            <input type="text" name="name" id="name" placeholder="İsminiz ...">
                                            <label for="name" id="nameLb"><span class="error">*Lütfen boş bırakmayın</span></label>
                                            </p>
                                            <p><span>Eposta:</span> 
                                            <input type="email" name="email" id="email" placeholder="Eposta adresiniz ...">
                                            <label for="email" id="emailLb"><span class="error">*Lütfen boş bırakmayın</span></label>
                                            </p>
<!--                                             <p><span>Phone:</span> 
                                            <input type="text" name="phone" id="phone" placeholder="Your Telephone ...">
                                            <label for="phone" id="phoneLb"><span class="error">*Telephone Field Required</span></label>
                                            </p> -->
                                            <p class="textarea"><span>Mesaj:</span>  
                                            <textarea name="message" id="message" placeholder="Mesajınız ..." rows="3"></textarea>
                                            <label for="message" id="messageLb"><span class="error">*Lütfen boş bırakmayın</span></label>
                                            </p>
                                            <div class="clearfix"></div>
                                            <a href="#" class="contact-btn">G&Ouml;nder</a>
                                        </form>
                                    </div><!--MainContent-->
                                </div><!--form-inner-->
                    </div><!--form-wrapper-->
                </div><!--/.content-inner-->
            </div><!--/.row-->
            
        </div><!--/.content-inner-->
        
        
    </section><!--/.content-->

    
    <section id="footer" class="clearfix">
        <div class="content container">
        </div><!--/.container-->
        <div class="border-grey container"></div>
        <div class="copyright clearfix">
            <div class="container center">
                <p>Copyright 2013 &#169; Masalhane <a href="http://www.masalhane.com">Masalhane</a></p>
            </div><!--/.container-->
        </div><!--/.copyright-->
    </section><!--/footer-->  

</section><!--/.wrapper-->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    



    <script src="{base}js/jquery.js"></script>
    <script type="text/javascript" src="{base}js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="{base}js/contact.js"></script>
    <script src="{base}js/jquery.prettyPhoto.js"></script> 
    <script src="{base}js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="{base}js/jquery.easing.js"></script>
    <script type="text/javascript" src="{base}js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="{base}js/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="{base}js/ticker.js"></script>
    <script type="text/javascript" src="{base}js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="{base}js/hoverIntent.js"></script>
    <script type="text/javascript" src="{base}js/superfish.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{base}js/jquery.ui.map.js"></script>
    <script type="text/javascript" src="{base}js/map.js"></script>
    <script type="text/javascript" src="{base}js/map-marker.js"></script>
    <script type="text/javascript" src="{base}js/jquery.cookie.js"></script>
    <script type="text/javascript" src="{base}js/jquery.inview.js"></script>
    <script type="text/javascript" src="{base}js/script.js"></script>
    <script type="text/javascript" src="{base}js/switcher.js"></script>
    

</body></html>