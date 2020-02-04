<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
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

global $product;
?>

<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper display-none"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php // echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php // echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>


            <div class="row">
                
                <div class="col font-alt d-inline-flex" style="margin-bottom: 0; margin-top: 10px;">
                        
                    <div class="icon-anexo"></div>
                        
                    <p>leia a <a target="_blank" href="http://entrenuvens.com/wp-content/uploads/2019/11/Entre-Nuvens-_-Termos-de-Uso-Política-de-Privacidade-entrenuvens.com_.pdf">licença de uso de imagem</a>.</p>
                        
                </div>
                
            </div>
            
            <div class="font-alt d-inline-flex">
                        
                <div class="icon-tag"></div>
                        
                <p><strong>ID:</strong> <?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?>.</p>
                        
            </div>
            
            
            <!-- author -->

<?php $the_author = get_the_author_meta('user_nicename', $post->post_author ); ?>

            <div class="row margin-top row-author">
                
                <div class="col-4 col-md-2 col-lg-5 col-xl-3 text-align-right">
                    <a href="<?php bloginfo('url'); if( $the_author === 'quadros' ) : ?>/quadros<?php else : ?>/fotografo/<?php the_author_meta('user_nicename', $post->post_author ); endif; ?>" >
    
           <?php if ( $the_author === 'entre-nuvens' ) { ?>       
                        
                    <div class="author-destaque single-product">
                        
                        <div class="icon-best-star"></div>
                        
                    </div>
                        
            <?php } else if( $the_author === 'quadros' ) { ?> 
                        
                        <style>
                            .author-img-product img { border-radius: 15px; box-shadow: none!important; }
                        </style> 
                        
            <?php } ?> 
                        
                        <div class="author-img-product"><?php echo get_avatar( get_the_author_meta( 'ID' ), auto); ?></div>
                        
                    </a>
                </div>
                
                <div class="col">
                    
<?php if( !empty( get_field('video_url') ) ) { ?>                    
                    <p>Vídeo de:<br>
<?php } else { ?>
                    <p>Foto de:<br>
<?php } ?>       
                    <a href="<?php bloginfo('url'); if( $the_author === 'quadros' ) : ?>/quadros<?php else : ?>/fotografo/<?php the_author_meta('user_nicename', $post->post_author ); endif; ?>" ><strong><?php the_author(); ?></strong></a></p>
                </div>
                
            </div>