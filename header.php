<!DOCTYPE html>
<html class="js" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<title><?php if (is_front_page()){ echo"The Official Seye Kuyinu website";} else{ ?><?php wp_title('&#149;'); ?>  &rarr; <?php bloginfo('name');} ?> </title>
<meta name="description" content="Design co-founder at Kwirkly>
  <meta name="author" content="Seye Kuyinu">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <script scrc="<?php bloginfo('template_url'); ?>/js/init.js"></script>
  <link rel="Shortcut Icon" type="image/x-icon" href="http://seyekuyinu.com/favicon.ico" />
  
<link rel="openid.server" href="http://www.myopenid.com/server">
<link rel="openid.delegate" href="http://seyekuyinu.myopenid.com/">
<?php wp_head();?>
</head>

<body>
<header class="header">
  <div class="wrap">
    <div class="header-avatar"><a class="avatar-link" href="<?php bloginfo('url');?>/blog" style="background-image:url(<?php bloginfo('template_url'); ?>/images/faceshot3.jpg)"></a></div>

    <hgroup class="header-text">
      <h2 class="header-name"><a class="home-link" href="<?php bloginfo('url');?>/blog">Seye Kuyinu</a></h2>
      <h3 class="header-title">Co-founder @ <a href="http://kwirkly.com/">Kwirkly</a></h3>
    </hgroup>

    <section class="header-social">
      <ul class="header-social-icons">
        
        <li class="dribbble"><a class="icon" href="http://dribbble.com/seye"><i class="fa fa-dribbble"></i></a>
        
        
        </li><li class="github"><a class="icon" href="http://github.com/seyekuyinu"><i class="fa fa-github"></i> </a>
        
        
        </li><li class="twitter"><a class="icon" href="http://twitter.com/seye"><i class="fa fa-twitter"></i></a>
        
        </li><li class="rss"><a class="icon" href="http://feeds.feedburner.com/SeyeKuyinu"><i class="fa fa-rss"></i></a>
      </li></ul>
      <ul class="header-social-buttons">
        
      </ul>
    </section>
  </div>
</header>