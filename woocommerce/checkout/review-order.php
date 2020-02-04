<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="shop_table woocommerce-checkout-review-order-table d-inline container">
    
		<?php
			do_action( 'woocommerce_review_order_before_cart_contents' );

			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) { ?>
                
         
                
			<?php $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					?>
        
					<div class="row row-item margin-bottom <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                        
						<div class="col-12 col-md-5 product-name">
                            
                            <?php $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
                    
                    echo $thumbnail; ?>

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
  
                        </div>
                        
					</div>
					<?php
				}
			} ?>

			<?php do_action( 'woocommerce_review_order_after_cart_contents' );
		?>
    
	<div class="row">

		<div class="col col-md-3 mr-auto cart-subtotal font-alt">
			<div><?php _e( 'Subtotal', 'woocommerce' ); ?></div>
			<div><?php wc_cart_totals_subtotal_html(); ?></div>
		</div>

		<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
			<div class="col col-md-3 font-alt cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
				<div><?php wc_cart_totals_coupon_label( $coupon ); ?></div>
				<div><?php wc_cart_totals_coupon_html( $coupon ); ?></div>
			</div>
		<?php endforeach; ?>

		<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

			<?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

			<?php wc_cart_totals_shipping_html(); ?>

			<?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

		<?php endif; ?>

		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
			<div class="fee">
				<div><?php echo esc_html( $fee->name ); ?></div>
				<div><?php wc_cart_totals_fee_html( $fee ); ?></div>
			</div>
		<?php endforeach; ?>

		<?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
			<?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
				<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
					<div class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
						<div><?php echo esc_html( $tax->label ); ?></div>
						<div><?php echo wp_kses_post( $tax->formatted_amount ); ?></div>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<div class="tax-total">
					<div><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></div>
					<div><?php wc_cart_totals_taxes_total_html(); ?></div>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

		<div class="col col-md-6 ml-auto order-total font-alt">
            <div><strong><?php _e( 'Total', 'woocommerce' ); ?></strong></div>
			<div><?php wc_cart_totals_order_total_html(); ?></div>
		</div>

		<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

	</div>
    
</div>
