<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                            <a href="{base}referanslar">Referanslar<span class="navi-line paged"></span></a>
                        </li>
                        <li><a href="{base}iletisim">İLETİŞİM<span class="navi-line"></span></a></li>
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
            <h3 class="big-text">referanslar</h3>
            {reference_iteration}
            <p class="strong">{reference_detail}</p>
            {/reference_iteration}
          
            <div class="spacing-40 clearfix"></div>
            
            <div class="row">
                {auto_iteration}
                <div class="span3 animated content-inner">
                    <a href="{cover_big_photo}" class="work-hover" data-rel="prettyPhoto">
                        <div class="mask">
                            <p class="mask-border">GÖRÜNTÜLE</p>
                        </div><!--/.mask-->
                        <img src="{cover_thumb_photo}" alt="{brand_name} {auto_title}">
                    </a><!--/.work-hover-->
                    <div class="works-caption clearfix">
                       <!--  <span class="border-work"></span>
                        <i class="icon-glass work-icon"></i> -->
                        <h3><a href="{base}araclar/detay/{auto_id}/{brand_css}/{auto_css}" title="Fiyat Bilgisi İçin Tıklayınız">{brand_name}</a></h3>
                        <a href="{base}araclar/detay/{auto_id}/{brand_css}/{auto_css}" title="Fiyat Bilgisi İçin Tıklayınız"><p>{auto_title}</p>
                    </div>
                </div><!--/.span3--> 
                {/auto_iteration}               
                
                <div class="clearfix"></div>

            </div><!--/.row-->
           <!--  <p class="caution">*Jika sakit masih berlanjut, segera hubungi dokter anda terdekat.</p>
            <p class="caution">**Kisah ini hanya fiktif belaka, kesamaan tokoh dan tempat hanya kebetulan belaka, tidak ada sangkut paut dengan paranormal.</p> -->
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
	<script type="text/javascript" src="{base}js/jquery.cookie.js"></script>
    <script type="text/javascript" src="{base}js/jquery.inview.js"></script>
	<script type="text/javascript" src="{base}js/script.js"></script>
    <script type="text/javascript" src="{base}js/switcher.js"></script>
  	

</body></html>