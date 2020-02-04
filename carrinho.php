<?php
/*
Template name: Carrinho
*/

defined( 'ABSPATH' ) || exit; ?>

        <?php get_header(); ?>

        <div id="main" class="container-fluid">
            
<div id="carrinho" class="container">
    
    <div class="row justify-content-center margin-bottom">
        <h2>carrinho</h2>
    </div>
    
    <div id="menu-user" class="row">
 
<a href="#" class="btn-mobile-content" type="button" data-target=".mobile-content" aria-expanded="false">
    <div class="col font-alt d-inline-flex">
                        
        <div class="icon-options"></div>
                        
        <p>Detalhes da conta</p>
                        
    </div>
</a>        
        
        <div class="col-12 col-md-3 user-menu fade collapse show">
            
            <?php do_action( 'woocommerce_account_navigation' ); ?>
            
            <div class="row margin-top">
                
                <div class="col font-alt d-inline-flex">
                        
                    <div class="icon-anexo"></div>
                        
                    <p>leia nossos<br><a target="_blank" href="http://entrenuvens.com/wp-content/uploads/2019/08/Termos-de-Uso-Stock-Entre-Nuvens.pdf">termos e licenças</a>.</p>
                        
                </div>
                
            </div>
            
        </div>
         
        <div class="col-12 col-md-8 user-content">
            
<?php do_action('woocommerce_before_cart'); ?>
            
<form class="container" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="POST">

<?php do_action( 'woocommerce_before_cart_contents' ); 
     
    //para cada produto selecionado
    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        
        $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
        
        $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
        
        //se há produtos
        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
            
            $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key ); ?>
    
<div class="row row-item margin-bottom">
        
    <div class="col-12 col-md-5">
        
        <div class="product-thumbnail">
            
<?php      
            
        //vídeos
if( !empty( get_field('video_url') ) ) { ?>

<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="<?php echo get_field('video_url'); ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>

<script src="https://player.vimeo.com/api/player.js"></script>            
        
<?php } else {          
            
$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

if ( ! $product_permalink ) { ?>     
    
            <a href="<?php echo $product_permalink ?>"><?php echo $thumbnail ?></a>
    
<?php } else {
    
        printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
    
 } } ?>
            
        </div>
        
    </div>
    
    <div class="col-12 col-md-7">
        
        <h3 class="product-name"><?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' ) ?></h3>
        
        <?php echo wc_get_formatted_cart_item_data( $cart_item ); ?> 
        
<?php
    
$post_obj    = get_post( $cart_item['product_id'] ); // The WP_Post object
$post_author = $post_obj->post_author;
            
$author = get_the_author_meta( 'display_name', $post_author );
            
$product_id = $cart_item['product_id'];
            
//categoria dos produtos
$categories = get_the_terms($post_obj, 'product_cat');
$formato = '';

if ( !empty( $categories ) ) {
  foreach ( $categories as $cat ) {
    $formato .= $cat->slug . '';
  }
};            
    
if( $formato === 'video' ) { ?>                    
                    <p>Vídeo de <strong><?php echo $author; ?></strong></p>
<?php } else { ?>
                    <p>Foto de <strong><?php echo $author; ?></strong></p>
<?php } ?>
        
        <div class="row row-cart">
                
            <div class="font-alt d-inline-flex">
                        
                <div class="icon-tag"></div>
                        
                <p>ID: <strong><?php echo $product_id; ?></strong>.</p>
                        
            </div>
                
        </div>
        
        <div class="row row-cart">
            
           <div class="font-alt d-inline-flex">
                        
                <div class="icon-money"></div>
                        
                <p class="product-price">Preço: <strong><?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); ?></strong>.</p>
                        
            </div> 
            
        </div>
        
<?php            
            
    if( $formato === 'quadro' ) { ?>     
        
          <div class="row row-cart">
            
           <div class="font-alt d-inline-flex">
                        
                <div class="icon-imagem"></div>
                        
                <p class="product-price">Formato: <strong><?php echo $formato ?></strong>.</p>
                        
            </div> 
            
        </div>
        
<?php } else if( $formato === 'video' ) { ?>
        
          <div class="row row-cart">
            
           <div class="font-alt d-inline-flex">
                        
                <div class="icon-video"></div>
                        
                <p class="product-price">Formato: <strong><?php echo $formato ?></strong>.</p>
                        
            </div> 
            
        </div>
        
<?php } else { ?>  
        
        <div class="row row-cart">
            
           <div class="font-alt d-inline-flex">
                        
                <div class="icon-imagem"></div>
                        
                <p class="product-price">Formato: <strong><?php echo $formato ?></strong>.</p>
                        
            </div> 
            
        </div>
        
<?php } ?>  
            
        <div class="row row-cart row-remove">
            
           <div class="font-alt d-inline-flex">
                        
                <div class="icon-lixo"></div>
                        
                <p class="small product-remove"><?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
				    '<a href="%s" aria-label="%s" data-product_id="%s" data-product_sku="%s">Remover item</a>',
				    esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
				    __( 'Remove this item', 'woocommerce' ),
				    esc_attr( $product_id ),
				    esc_attr( $_product->get_sku() )
								), $cart_item_key ); ?></p>
                        
            </div> 
            
        </div>
        
    </div>
 
</div>        
       <?php 
        //end if
        };
        
    //end foreach    
    }; do_action( 'woocommerce_cart_contents' ); ?>
    
<?php
    
   include(
       locate_template( 'woocommerce/cart/shipping-calculator.php' )
   ); ?>
    
<?php if ( wc_coupons_enabled() ) { ?>
    
<div class="row">
    
    <div class="col">
        
        <p>Tem algum cupom de desconto?</p>
        
        <form class="form-inline">
            
            <input type="text" name="coupon_code" class="form-control form-control-preto form-cupom" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" />
    
            <button type="submit" class="btn btn-outline btn-cupom" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>">validar cupom</button>
            
        </form>
    
<?php do_action( 'woocommerce_cart_coupon' ); ?>        
        
    </div>
    
</div>     
    
<?php } ?>    
    
<div class="row float-right margin-top">
        
    <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" type="submit" class="btn btn-outline" name="update_cart" value="">Finalizar compra</a>    
        
</div>
    
<?php do_action( 'woocommerce_cart_actions' ); ?>

<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>    

<?php do_action( 'woocommerce_after_cart_contents' ); ?>    
</form>
            
        </div>
        
    </div>

<?php do_action( 'woocommerce_after_cart' ); ?>               
</div>


            
            <!-- FOOTER -->
            <?php get_footer(); ?>