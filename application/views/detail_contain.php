<?php $this->load->view("header");?>
<body>
    <div id="motopress-main" class="main-holder">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?php $this->load->view("nav_secondary"); ?> </div>
                </div>
            </div>
        </header>
<style>
.area_description{display: block;}
.area_comment{display: none;}

.democlick2{display: none;}

.description_tab:focus ~ .democlick2 {display: block;}
.reviews_tab:focus ~ .democlick2 {display: none;}
</style>




        <div class="content-holder woocommerce">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="row">
                            <div class="span12">
                                <section class="title-section">
                                    <h1 class="title-header"><?php echo $obj_products->name;?></h1>
                                    <ul class="breadcrumb breadcrumb__t"> <a class="home" href="<?php echo site_url().'home';?>">Home</a> /
                                        <a href="<?php echo site_url().convert_slug($obj_products->category);?>">
                                            <?php echo $obj_products->category;?></a> /
                                        <?php echo $obj_products->name;?></ul>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
<!--<div class="democlick2">
  ....... cualquier contenido .......
</div>-->
                    <span tabindex="0">demo con focus</span>
                    <div class="span9 right" id="content">
                        <div class="product">
                            <div class="images">
                                <!--Principal Image--><a href="<?php echo SERVER2.$obj_products->custom_image."?999";?>" class="zoom"> <img src="<?php echo SERVER2.$obj_products->custom_image."?999";?>" class="attachment-shop_single wp-post-image" alt="<?php echo convert_slug($obj_products->name);?>"/> </a>
                                <!--Show Thumbnails-->
                                <div class="thumbnails"> <a href="<?php echo SERVER2.$obj_products->big_image;?>" class="zoom first" data-rel="prettyPhoto[product-gallery]"> <img width="90" height="90" src="<?php echo SERVER2.$obj_products->big_image."?999";?>" class="attachment-shop_thumbnail" alt="<?php echo convert_slug($obj_products->name);?>"/> </a> <a href="<?php echo SERVER2.$obj_products->medium_image;?>" class="zoom" data-rel="prettyPhoto[product-gallery]"> <img width="90" height="90" src="<?php echo SERVER2.$obj_products->medium_image."?999";?>" class="attachment-shop_thumbnail" alt="<?php echo convert_slug($obj_products->name);?>"/> </a> <a href="<?php echo SERVER2.$obj_products->small_image;?>" class="zoom last" data-rel="prettyPhoto[product-gallery]"> <img width="90" height="90" src="<?php echo SERVER2.$obj_products->small_image."?999";?>" class="attachment-shop_thumbnail" alt="<?php echo convert_slug($obj_products->name);?>"/> </a> </div>
                            </div>
                            <div class="summary">
                                <!--SHOW PRICE DELETE-->
                                <?php 
                                if($obj_products->price_del > 0){ ?>
                                    <span class="price">
                                        <del>
                                            <span class="amount"><?php echo $obj_products->price_del;?></span>
                                        </del>
                                    </span>
                                    <div class="clearfix"></div>  
                                <?php } ?>
                                
                                
                                <div>
                                    <p class="price"><span class="amount"><?php echo format_number($obj_products->price);?></span> </p>
                                </div>
                                <div itemprop="description">
                                    <p>Comision Ganada:
                                        <?php echo format_number($obj_products->pay_sale);?></p>
                                </div>
                                <p class="stock ">
                                    <?php echo $obj_products->stock;?> en stock</p>
                                <form class="cart" method="post" action="<?php echo site_url()."home/add_car "?>">
                                    <div>
                                        <?php if($obj_products->active == 1 ){ ?>
                                        <div>Talla
                                            <p>
                                                <input type="text" name="size" value="" class="input-text text" size="2" /> </p>
                                        </div>
                                        <?php } ?> Cantidad
                                        <br/>
                                        <div class="quantity">
                                            <input type="number" step="1" min="1" max="150" name="quantity" value="1" class="input-text qty text" size="3" />
                                            <input type="hidden" name="product_id" value="<?php echo $obj_products->product_id;?>" class="input-text text" size="4" /> </div>
                                    </div>
                                    <button type="submit" class="button">Agregar al Carro</button>
                                </form>
                                <div class="product_meta"><span class="tagged_as">Tags: <?php $tags = explode(",",$obj_products->tags); foreach ($tags as $value) { ?> <a href="<?php echo site_url().'tags/'.convert_slug($value);?>"><?php echo $value;?></a> <?php } ?></span> </div>
                                <!--social link-->
                                <ul class="share-buttons unstyled clearfix">
                                    <li class="facebook">
                                        <div id="fb-root"></div>
                                        <script>
                                            (function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                        </script>
                                        <div class="fb-share-button" data-href="<?php echo site_url().convert_slug($obj_products->category."/".$obj_products->name);?>" data-layout="button_count"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="woocommerce-tabs">
                                <ul class="tabs">
                                    <li class="description_tab"> <a href="#">Descripción</a> </li>
                                    <li class="reviews_tab"> <a href="#">Comentarios <?php echo "(".count($comments).")";?></a> </li>
                                </ul>
                                <div class="area_description">
                                    <div class="panel entry-content" id="tabdescription">
                                        <h2>Descripción del Producto</h2>
                                        <br/>
                                        <p><?php echo $obj_products->description;?></p>
                                    </div>
                                </div>
                                
                                <div  class="panel entry-content" id="tab-reviews">
                                    <div id="reviews" class="comments">
                                            <div id="comments" class="comment_container">
                                            <ol class="commentlist">
                                                <?php foreach ($comments as $value) { ?>
                                                <li class="comment even thread-even depth-1">
                                                    <div class="comment_container"> <img alt='<?php echo $value->name;?>' src='<?php echo site_url().' static/images/person.png?999 ';?>' class='avatar avatar-60 photo' height='60' width='60' />
                                                        <div class="comment-text">
                                                            <p class="meta"> <strong itemprop="author"><?php echo $value->name;?></strong> &ndash;
                                                                <time datetime="2014-01-27T16:22:02+00:00">
                                                                    <?php echo formato_fecha($value->date_comment);?></time>
                                                            </p>
                                                            <div class="description">
                                                                <p>
                                                                    <?php echo $value->comment;?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php } ?> </ol>
                                            </div>
                                        <div class="area_comment">
                                            <div id="review_form_wrapper">
                                                <div id="review_form">
                                                    <div id="respond" class="comment-respond">
                                                        <h3 id="reply-title" class="comment-reply-title">Agregar un Comentario</h3>
                                                        <p></p>
                                                        <form id="commentform" action="<?php echo site_url();?>detail_contain/comments" method="post">
                                                            <p class="comment-form-author">
                                                                <input id="product_id" type="hidden" name="product_id" value="<?php echo $obj_products->product_id;?>" />
                                                                <label for="author">Nombre <span class="required">*</span> </label>
                                                                <input id="name" name="name" type="text" value="" size="30" aria-required="true" /> </p>
                                                            <p class="comment-form-email">
                                                                <label for="email">Correo <span class="required">*</span> </label>
                                                                <input id="email" name="email" type="text" value="" size="30" aria-required="true" /> </p>
                                                            <p class="comment-form-comment">
                                                                <label for="comment">Comentario</label>
                                                                <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                            </p>
                                                            <p class="form-submit">
                                                                <input name="submit" type="submit" id="submit" value="Enviar" /> </p>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <!--PRODUCTOS RELACIONADOS--><span style="display: none"><img src="<?php echo SERVER2.$obj_products->big_image;?>"/></span>
                            <div class="related products">
                                <h2>Productos Relacionados</h2>
                                <ul class="products">
                                    <?php foreach ($related as $value) { ?>
                                    <li class="product">
                                        <!--<p class="number_text">Comisión</p>-->
<!--                                        <p class="number_price">
                                            <?php //echo format_number($value->pay_sale);?>
                                        </p> -->
                                        <span class="image_oferta"></span> 
                                        <a href="<?php echo site_url().convert_slug($value->category."/".$value->name);?>"><img class="image_products" src="<?php echo SERVER2.$value->big_image."?999";?>" class="attachment-shop_catalog" alt="<?php echo $value->name;?>"/> <h3><?php echo corta_texto($value->name,17);?></h3> </a>
                                        <div class="short_desc">
                                            <?php echo corta_texto($value->description,60);?> 
                                        </div> 
                                        <span class="price">
                                             <!--SHOW PRICE DELETE-->
                                                <?php 
                                                if($value->price_del > 0){ ?>
                                                        <del>
                                                            <span class="amount"><?php echo $value->price_del;?></span>
                                                        </del>
                                                <?php } ?>
                                            <ins><span class="amount">S/.<?php echo $value->price;?></span></ins>
                                        </span>
                                        <br/>
                                        <br/>
                                        <form method="post" action="<?php echo site_url()." home/add_car "?>">
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="product_id" value="<?php echo $value->product_id;?>" />
                                            <button type="submit" class="button add_to_cart_button">Agregar al Carro</button>
                                        </form>
                                    </li>
                                    <?php } ?> </ul>
                            </div>
                        </div>
                    </div>
                    <!--CATEGORIAS-->
                    <div class="sidebar span3" id="sidebar">
                        <div id="categories-3">
                            <h3>Categorías</h3>
                            <ul>
                                <?php foreach ($category as $value) { ?>
                                <li>
                                    <a href="<?php echo site_url(). convert_slug($value->name);?>">
                                        <?php echo $value->name;?></a>
                                </li>
                                <?php } ?> </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view("footer");?></div>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo site_url().'static/css/prettyPhoto.css?999';?>" />
    <script type='text/javascript' src='<?php echo site_url().'static/js/add_car.js?999';?>'></script>
    <script type='text/javascript' src='<?php echo site_url().'static/js/comments.js?999';?>'></script>
    <script type='text/javascript' src='<?php echo site_url().'static/backoffice/js/jquery.prettyPhoto.min.js?999';?>'></script>
    <script type='text/javascript' src='<?php echo site_url().'static/backoffice/js/jquery.prettyPhoto.init.min.js?999';?>'></script>
    <script type='text/javascript' src='<?php echo site_url().'static/backoffice/js/single-product.min.js?999';?>'></script>
    <script type='text/javascript' src='<?php echo site_url().'static/js/superfish.js?999';?>'></script>
    <!--<script type='text/javascript' src='<?php echo site_url().'static/js/jquery.mobilemenu.js?999';?>'></script>-->
</body>

</html>