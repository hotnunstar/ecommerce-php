<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2><?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            {loop=$products}
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="<?php echo htmlspecialchars( $value["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                        </div>
                        <h2><a href="/products/<?php echo htmlspecialchars( $values["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></h2>
                        <div class="product-carousel-price">
                            <ins>R$<?php echo formatPrice($value["vlprice"]); ?></ins>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Comprar</a>
                        </div>                       
                    </div>
                </div>
            <?php } ?>

        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                        <ul class="pagination">
                            <?php $counter0=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key0 => $value0 ){ $counter0++; ?>

                                <li><a href="{value.link}"><?php echo htmlspecialchars( $value["page"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                            <?php } ?>

                        </ul>
                    </nav>                        
                </div>
            </div>
        </div>
    </div>
</div>