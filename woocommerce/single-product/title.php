<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce/Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

the_title( '<h1>', '</h1>' ); ?>

<?php
    
global $product;
            
$cidade = array_shift( wc_get_product_terms( $post->ID, 'cidade', array( 'fields' => 'names' ) ) );
            
?>
            
            <div class="row">
                
                <div class="col font-alt d-inline-flex">
                    
<?php if ( !empty( get_post_meta( get_the_ID(), 'cidade', true ) ) ) { ?>                    
                        
                    <div class="icon-local"></div>
                    
                    <p>
                        <?php echo esc_attr( get_post_meta( get_the_ID(), 'cidade', true ) ); ?>
                        
        <?php if ( !empty( get_post_meta( get_the_ID(), 'estado', true ) ) ) { ?>
                        
                        - <?php echo esc_attr( get_post_meta( get_the_ID(), 'estado', true ) ); ?>
        <?php } ?>                
                        
                    </p>
<?php } ?>                    
                        
                </div>

        </div>
            
            <div class="tag-list">
            
<?php
                
$taxonomy = 'product_tag'; // Product tag custom taxonomy

$tags = get_the_terms( $post->ID, $taxonomy );

foreach ( $tags as $tag ) {
    
    $link = get_term_link( $tag );
    
    echo '<a class="btn btn-outline" href="' . $link . '">';
    echo $tag->name;
    echo '</a>';
};
?>      </div> 
