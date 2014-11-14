<?php $this->load->view("header");?>

<body class="home">
<div id="motopress-main" class="main-holder">
    <header class="header">
    <div class="container">
    <div class="row">
    <div class="span12">
        <!--Menu Navigacion Secundary-->
        <?php $this->load->view("nav_secondary");?>
    </div>
    </div>
    </div>
    </header>
    <script src="<?php echo site_url().'static/cms/js/core/jquery.js?1';?>"></script>  

    <!--Slide Banner-->
    <script type='text/javascript' src='<?php echo site_url().'static/js/banner.js?1';?>'></script>    
    <div id="parallax-slider-5406108c1acd1" class="parallax-slider">
      <ul class="baseList">
          <li data-preview="<?php echo site_url().'static/images/banner/slide2.jpg?1';?>">
          </li>
          <li data-preview="<?php echo site_url().'static/images/banner/slide3.jpg?1';?>">
          </li>
          <li data-preview="<?php echo site_url().'static/images/banner/slide1.jpg?1';?>">
          </li>
      </ul>
    </div>
    <!--End Slide for banner-->
    
    <div class="motopress-wrapper content-holder">
    <div class="container">
    <div class="row">
    <div class="span12">
    <div class="row">
    <div class="span12">
    
    <!--Custom banners-->    
    <div class="custom_banners">
        <div class="custom_banners_wrap_inner">
            <div class="row ">
                <?php foreach ($product_custom as $value) {?>
                        <div class="span4">
                            <a href="<?php echo site_url().convert_slug($value->category."/".$value->name);?>" class="banner-wrap ">
                                <figure class="featured-thumbnail">
                                    <img src="<?php echo SERVER2.$value->custom_image;?>" alt="<?php echo $value->name;?>"/>
                                </figure>
                                <div class="extra-wrap"><h5><?php echo corta_texto($value->name,16);?></h5>
                                    <div class="link-align banner-btn">Comprar Ahora</div>
                                </div>
                            </a> 
                        </div>
                <?php } ?>
            </div> 
        </div>
    </div>
    
        <link rel="stylesheet" type="text/css" href="<?php echo site_url().'static/css/plugins/RotatingImageSlider/css/style.css?1';?>" />
        <script type="text/javascript" src="<?php echo site_url().'static/css/plugins/RotatingImageSlider/js/jquery.transform-0.9.3.min_.js';?>"></script>
        <script type="text/javascript" src="<?php echo site_url().'static/css/plugins/RotatingImageSlider/js/jquery.mousewheel.js?1';?>"></script>
        <script type="text/javascript" src="<?php echo site_url().'static/css/plugins/RotatingImageSlider/js/jquery.RotateImageMenu.js?1';?>"></script>
    <div class="custom_banners">
    <div class="content">
			<h1></h1>
			<div class="rm_wrapper">
				<div id="rm_container" class="rm_container">
					<ul>
                                            <li data-images="rm_container_1" data-rotation="-15"><img src="<?php echo site_url().'upload/products/5.jpg?1';?>"/></li>
                                            <li data-images="rm_container_2" data-rotation="-5"><img src="<?php echo site_url().'upload/products/zapatilla.jpg?1';?>"/></li>
                                            <li data-images="rm_container_3" data-rotation="5"><img src="<?php echo site_url().'upload/products/limpiar.jpg?1';?>"/></li>
                                            <li data-images="rm_container_4" data-rotation="15"><img src="<?php echo site_url().'upload/products/rostro.jpg?1';?>"/></li>
					</ul>
					<div id="rm_mask_left" class="rm_mask_left"></div>
					<div id="rm_mask_right" class="rm_mask_right"></div>
					<div id="rm_corner_left" class="rm_corner_left"></div>
					<div id="rm_corner_right" class="rm_corner_right"></div>
					<h2>ÚNETE A WAVELINE</h2>
					<div style="display:none;">
						<div id="rm_container_1">
                                                 <?php 
                                                    foreach ($zapatillas as $value) { ?>
                                                        <img src="<?php echo SERVER2.$value->custom_image;?>"/>
                                                    <?php } ?>
						</div>
						<div id="rm_container_2">
                                                    <?php 
                                                    foreach ($ropa as $value) { ?>
                                                        <img src="<?php echo SERVER2.$value->custom_image;?>"/>
                                                    <?php } ?>
						</div>
						</div>
						<div id="rm_container_3">
							<?php 
                                                    foreach ($limpieza as $value) { ?>
                                                        <img src="<?php echo SERVER2.$value->custom_image;?>"/>
                                                    <?php } ?>
						</div>
						<div id="rm_container_4">
							 <?php 
                                                    foreach ($belleza as $value) { ?>
                                                        <img src="<?php echo SERVER2.$value->custom_image;?>"/>
                                                    <?php } ?>
						</div>
					</div>
				</div>
				<div class="rm_nav">
					<a id="rm_next" href="#" class="rm_next"></a>
					<a id="rm_prev" href="#" class="rm_prev"></a>
				</div>
				<div class="rm_controls">
					<a id="rm_play" href="#" class="rm_play">Play</a>
					<a id="rm_pause" href="#" class="rm_pause">Pause</a>
				</div>
			</div>
                </div>    
    </div> 
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
<!--call footer-->    
    <?php $this->load->view("footer");?>
<!--End call footer-->
</div>
<script type='text/javascript' src='<?php echo site_url().'static/js/add_car.js?1';?>'></script>    
<script type='text/javascript' src='<?php echo site_url().'static/js/superfish.js?1';?>'></script>
<script type='text/javascript' src='<?php echo site_url().'static/js/jquery.mobilemenu.js?1';?>'></script>
<script type='text/javascript' src='<?php echo site_url().'static/js/device.min.js?1';?>'></script>
<script type='text/javascript' src='<?php echo site_url().'static/js/parallaxSlider.js?1';?>'></script>
</body>
</html>