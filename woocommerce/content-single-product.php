<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div id="stock-<?php the_ID(); ?>" class="row margin-bottom">

    <!-- a imagem -->
    <div id="product-image" class="col-12 col-lg-8">
	   <?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	   do_action( 'woocommerce_before_single_product_summary' );
	   ?>
    </div>

	<!-- detalhes da imagem -->
    <div id="product-details" class="col-12 col-md-10 col-lg-4">
		<?php
        
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );

		?>
        
	</div>

</div>

<div id="product-tabs">
    
    <div class="row justify-content-center">
        
        <div id="description" class="col-12 col-md-8">
            
           <?php //printa apenas descrição
            do_action( 'woocommerce_single_product_tabs' ); ?> 
            
        </div>
        
    </div>
    
    <div class="row justify-content-center">
        
        <div id="related" class="col-12">
            
            <?php //printa apenas produtos relacionados
            do_action( 'woocommerce_single_product_related' ); ?>
            
        </div>
        
    </div>
        
    <?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	//do_action( 'woocommerce_after_single_product_summary' );
	?> 
    
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
