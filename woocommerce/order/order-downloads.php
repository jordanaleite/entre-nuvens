<?php
/**
 * Order Downloads.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-downloads.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="woocommerce-order-downloads">
    
    <h2>Meus downloads</h2>
    
    <div class="container">

		<?php      
        
foreach ( $downloads as $download ) : ?>
        
			<div class="row row-item margin-bottom">
                
				<div class="col-12 col-md-5 display-none">
                    
                    <div class="product-thumbnail">
            
<?php
            
//$product = apply_filters( 'woocommerce_order_item_product', $order->get_product_from_item( $item ), $item );
       
//echo $product->get_image();

?>
            
                    </div>

				</div>
                
                <div class="col-12 col-md-7">
                    
<?php if ( $download['product_url'] ) { ?>                    
                    
                    <a target="_blank" href="<?php esc_url( $download['product_url'] ) ?>">
                        <h3 class="product-name"><?php echo esc_html( $download['product_name'] ); ?></h3>
                    </a>
                    
<?php } else { ?>
                    <h4 class="product-name"><?php echo esc_html( $download['product_name'] ); ?></h4>       
<?php } ?>
                    
                    <p class="product-price">Downloads restantes: <strong><?php echo is_numeric( $download['downloads_remaining'] ) ? esc_html( $download['downloads_remaining'] ) : esc_html__( '&infin;', 'woocommerce' ); ?></strong>.</p>
                    
<?php if ( ! empty( $download['access_expires'] ) ) { ?>                    
                    
                    <p class="product-price">Expira em: <strong><?php echo '<time datetime="' . esc_attr( date( 'Y-m-d', strtotime( $download['access_expires'] ) ) ) . '" title="' . esc_attr( strtotime( $download['access_expires'] ) ) . '">' . esc_html( date_i18n( get_option( 'date_format' ), strtotime( $download['access_expires'] ) ) ) . '</time>'; ?></strong></p>
                    
<?php } else { ?>  
                    <p class="product-price">Expira em: <strong><?php echo esc_html_e( 'Never', 'woocommerce' ); ?></strong></p>
<?php } ?>              
                    
                    <p class="product-price">Link: <strong><?php echo '<a href="' . esc_url( $download['download_url'] ) . '" class="woocommerce-MyAccount-downloads-file button alt">' . esc_html( $download['download_name'] ) . '</a>'; ?></strong></p>
                    
                </div>
 
			</div>
        
		<?php endforeach; ?>
        
    </div>
</div>
