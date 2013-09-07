<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{title}{title_detail}</title>
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
    <link href="css/swicther.css" rel="stylesheet">
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
                        <li><a href="{base}">Anasayfa<span class="navi-line "></span></a></li>
                        <li><a href="{base}hakkimizda">HAKKIMIZDA<span class="navi-line"></span></a></li>
                        <li>
                            <a href="{base}araclar">KİRALIK ARAÇLAR<span class="navi-line paged"></span></a>
                        </li>
                        <li>
                            <a href="{base}referanslar">Referanslar<span class="navi-line"></span></a>
                        </li>
                        <li><a href="{base}iletisim">İLETİŞİM<span class="navi-line"></span></a></li>
                    </ul><!--/.navigation-->  
            </div><!--/.center-->  
        </div><!--/.menu-->
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
        	<h3 class="big-text" style="font-family:arial; font-weight:bold;">ARAÇ DETAYLARI</h3>
            
            <div class="row">
            {auto_detail_iteration}

            	<div class="span8 animated content-inner port-image">
                	<a class="work-hover" data-rel="prettyPhoto" href="{base}{auto_big_photo}">
                        <div class="mask">
                        	<p class="mask-border">GÖRÜNTÜLE</p>
                        </div>
                        <img alt="{brand_name} {auto_title}" src="{base}{auto_big_photo}">
                    </a>
                </div><!--/.span8-->
                
                
            	<div class="span4 content-inner port-detail">
                	<h3 class="port-title" style="font-family:arial; font-weight:bold;">{brand_name} {auto_title}</h3>
                	<!-- <img alt="{brand_name} {auto_title}" src="{base}{auto_big_photo}"> -->
                    <!-- <p>{auto_detail}</p> -->
                    <!-- <div class="spacing-20 clearfix"></div> -->
<!--                     <ul class="port-list-detail">
                    	<li><i class="port-icon icon-filter"></i><span class="strong"> Client:</span> Gemah Ripah</li>
                        <li><i class="port-icon icon-bookmark-empty"></i><span class="strong"> Date:</span> 20 July 2013</li>
                        <li><i class="port-icon icon-tag"></i><span class="strong"> Category:</span> Web Design, Branding, Identity</li>
                    </ul> --><!--/.port-list-detail-->
                    <div class="spacing-20 clearfix"></div>
                    <!-- <a class="read-more" href="#">View Project</a> -->
                </div><!--/.span4-->
            
            {/auto_detail_iteration}  
            </div><!--/.row-->
        </div><!--/.content-inner-->    
        
        <div class="content-inner container">
        	<div class="title-box clearfix">
                <i class="icon-beaker"></i>
                <h3 class="title-content" style="font-weight:bold;">DİĞER ARAÇLARIMIZ</h3>
               <a href="{base}araclar"> <p class="mini-text">bütün araçlarımızı görmek için tıklayın</p></a>
            </div><!--/.title-box-->
            
            <div class="row">
                {auto_iteration}
                <div class="span3 animated content-inner">
                    <a href="{base}{cover_big_photo}" class="work-hover" data-rel="prettyPhoto">
                        <div class="mask">
                            <p class="mask-border">GÖRÜNTÜLE</p>
                        </div><!--/.mask-->
                        <img src="{base}{cover_thumb_photo}" alt="{brand_name} {auto_title}">
                    </a><!--/.work-hover-->
                    <div class="works-caption clearfix">
                       <!--  <span class="border-work"></span>
                        <i class="icon-glass work-icon"></i> -->
                        <h3><a href="{base}araclar/detay/{auto_id}/{brand_css}/{auto_css}" title="detaylar">{brand_name}</a></h3>
                        <a href="{base}araclar/detay/{auto_id}/{brand_css}/{auto_css}" title="detaylar"><p>{auto_title}</p></a>
                    </div>
                </div><!--/.span3--> 
                {/auto_iteration}               
                
                <div class="clearfix"></div>

            </div><!--/.row-->
        </div><!--/.content-inner-->
        
 <!--        <div class="content-inner port-pager container">
       	 	<a class="prev-port" href="#"><i class="icon-long-arrow-left"></i> Prev</a>
        	<a class="next-port" href="#">Next <i class="icon-long-arrow-right"></i></a>
        </div> --><!--/.content-inner-->
    	
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
    <script src="js/jquery.fitvids.js"></script>
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