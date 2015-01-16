<!DOCTYPE html><!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]--><!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]--><!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]--><!--[if IE 9 ]><html class="ie ie9" lang="en-US"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!--><html lang="en-US"><!--<![endif]--><head> <title>Waveline | <?php echo $title?> </title> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta name="description" content="<?php echo $meta_description;?>" /> <meta name="keywords" content="<?php echo $meta_keywords;?>" /> <meta name="author" content="Waveline S.A.C." /> <meta name="rating" content="General" /> <meta name="robots" CONTENT="index,follow" /> <?php $ruta = explode("/",uri_string()); $category = $ruta[0]; $name = $ruta[1]; if(!is_null($category) && !is_null($name)){ if(!is_numeric($name)){ ?> <meta property="og:url" content="<?php echo site_url().convert_slug($obj_products->category."/".$obj_products->name);?>" /> <meta property="og:title" content="<?php echo $obj_products->name;?>" /> <meta property="og:description" content="<?php $obj_products->sumilla;?>" /> <meta property="og:image" content="<?php echo SERVER2.$obj_products->big_image;?>"/> <?php } ?> <?php } ?> <link rel="shortcut icon" href="<?php echo site_url().'static/images/icon.ico?999';?>"> <link rel="stylesheet" type="text/css" media="all" href="<?php echo site_url().'static/css/bootstrap/bootstrap.css?999';?>" /> <link rel="stylesheet" type="text/css" media="all" href="<?php echo site_url().'static/css/bootstrap/responsive.css?999';?>" /> <link rel='stylesheet' href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css?ver=3.2.1' type='text/css' media='all' /> <link rel='stylesheet' href='<?php echo site_url().'static/css/style/style.css?999'?>' type='text/css' media='all' /> <link rel='stylesheet' href='http://livedemo00.template-help.com/woocommerce_51107/wp-content/themes/theme51107/main-style.css' type='text/css' media='all' /> <link rel='stylesheet' href='http://livedemo00.template-help.com/woocommerce_51107/wp-content/plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' /> <link rel='stylesheet' href='http://livedemo00.template-help.com/woocommerce_51107/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' /><!--Banner Grande--> <script type='text/javascript' src='<?php echo site_url().'static/js/jquery.js?999 ';?>'></script> <!--Banner Grande--> <script src="<?php echo site_url().'static/cms/js/core/bootstrap-modal.js?999';?>"></script> <script src="<?php echo site_url().'static/cms/js/core/bootbox.min.js?999';?>"></script> <style type='text/css'> h1 { font: normal 30px/35px Open Sans; color: #000; } h2 { font: normal 22px/22px Open Sans; color: #000; } h3 { font: normal 18px/22px Open Sans; color: #000; } h4 { font: normal 15px/18px Open Sans; color: #000; } h5 { font: normal 12px/18px Open Sans; color: #000; } h6 { font: normal 12px/18px Open Sans; color: #000; } body { font-weight: normal; } .logo_h__txt, .logo_link { font: normal 40px/48px Open Sans; color: #2a343c; } .sf-menu>li>a { font: normal 14px/18px Open Sans; color: #626262; } .nav.footer-nav a { font: normal 13px/18px Open Sans; color: #fff; } </style> <script type="text/javascript"> jQuery(function() { jQuery("ul.sf-menu").superfish({ delay: 1000, animation: { opacity: "show", height: "show" }, speed: "normal", autoArrows: false, disableHI: true }); var a = document.querySelector && document.querySelector('meta[name="viewport"]'), d = navigator.userAgent, b = function() { a.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" }, c = function() { if (a && /iPhone|iPad/.test(d) && !/Opera Mini/.test(d)) { a.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0"; document.addEventListener("gesturestart", b, false) } }; c() }); </script> <script type="text/javascript"> var site = '<?php echo site_url();?>'; </script></head>