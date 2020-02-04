<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<div class="related products row margin-top justify-content-center text-align-center">

		<h2><?php esc_html_e( 'Related products', 'woocommerce' ); ?></h2>
        
    </div>

<?php

$terms = get_the_terms( $post->ID , 'product_tag', 'string');
$term_ids = wp_list_pluck( $terms, 'term_id' );
           
$arg_data = array(
    'post_type' => 'product',
    'post__not_in' => array( $post_id ),
    //'orderby' => 'relevance',
    'posts_per_page' => '4',
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'product_tag',
            'field' => 'term_id',
            'terms' => $term_ids,
        ),
        array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => array( '44', '16' ), //sem quadros
        ),
    ),
);
    
$related_query = new WP_Query( $arg_data );
                
if ( $related_query -> have_posts() ) : ?>

                <div class="grid">
                
<?php 
while ( $related_query -> have_posts() ) : $related_query -> the_post();
                    
                 wc_get_template_part( 'content', 'product' );
                    
endwhile; wp_reset_postdata(); endif; ?>
                    
                    
                </div>

<?php endif; ?>
