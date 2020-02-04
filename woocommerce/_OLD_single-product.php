<?php
/**
 * Single
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<div id="single-product" class="container-fluid">
    
    <div class="row margin-bottom">
        
        <!-- a imagem -->
        <div class="col col-md-8">
            
<div class="image-single">
 
<?php    
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
    
    <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
    
</div>
            
        </div>
        
        <!-- detalhes da imagem -->
        <div id="product-details" class="col col-md-4">
            
            <h1><?php the_title(); ?></h1>
            
<?php
        
if ( have_posts() ) : while ( have_posts() ) : the_post();
    
global $product;
            
$cidade = array_shift( wc_get_product_terms( $post->ID, 'cidade', array( 'fields' => 'names' ) ) );
            
?>
            
            <div class="row">
                
                <div class="col font-alt d-inline-flex" style="margin-bottom: 0;">
                    
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
            
            <div class="font-alt d-inline-flex">
                        
                <div class="icon-data"></div>
                        
                <p><?php echo get_the_date(); ?></p>
                        
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
            
            <?php include '' ?>
            
            <div class="price margin-top">
                <h1><?php echo $product->get_price_html(); ?></h1>
            </div>
 
<!-- add to card -->            
<?php
echo wc_get_stock_html( $product );     
            
do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="POST" enctype='multipart/form-data'>
    
    <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>


	<button type="submit" name="add-to-cart" class="btn btn-outline btn-comprar" value="<?php echo esc_attr( $product->get_id() ); ?>">comprar imagem</button>

	<?php wc_query_string_form_fields( $product_url ); ?>

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
    
</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>


            
            <div class="row">
                
                <div class="col font-alt d-inline-flex" style="margin-bottom: 0; margin-top: 10px;">
                        
                    <div class="icon-anexo"></div>
                        
                    <p>leia a <a target="_blank" href="#">licença de uso de imagem</a>.</p>
                        
                </div>
                
            </div>
            
            <div class="font-alt d-inline-flex">
                        
                <div class="icon-tag"></div>
                        
                <p><strong>ID:</strong> <?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?>.</p>
                        
            </div>
            
            
            <!-- author -->
            <div class="row margin-top row-author">
                
                <div class="col-3">
                    <a href="<?php bloginfo('url'); ?>/fotografo/<?php the_author_meta('user_nicename', $post->post_author ) ?>" >
                        <div class="author-img-product"><?php echo get_avatar( get_the_author_meta( 'ID' ), auto); ?></div>
                    </a>
                </div>
                
                <div class="col">
                    <p>Foto de:<br>
                    <a href="<?php bloginfo('url'); ?>/fotografo/<?php the_author_meta('user_nicename', $post->post_author ) ?>" ><strong><?php the_author(); ?></strong></a></p>
                </div>
                
            </div>
            
           <!-- <div class="row share-icon" style="margin-bottom: 0; margin-top: 10px;">
                
                <div class="col-4 font-alt d-inline-flex">
                        
                    <div class="icon-love"></div>
                        
                    <p><a target="_blank" href="#">favoritar</a></p>
                        
                </div>
                
                <div class="col font-alt d-inline-flex">
                        
                    <div class="icon-plus"></div>
                        
                    <p><a target="_blank" href="#">adicionar a galeria</a></p>
                        
                </div>
                
            </div> -->
            
<?php
//link do post
$crunchifyURL = urlencode(get_permalink());               

//título do post
$crunchifyTitle = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
                       
//thumbunail
$crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );               
//construção do link                        
$twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';
$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;                      
                        
?>            
            
            <div class="font-alt d-inline-flex" style="margin-top: 10px;">
                        
                <div class="icon-share"></div>
                        
                <p><a data-toggle="collapse" href="#share" role="button" aria-expanded="false" aria-controls="share">compartilhar imagem</a></p>

            </div>
            
            <div class="collapse" id="share">
                    <ul>
                        <li><a target="_blank" href="<?php echo $facebookURL; ?>"><i class="fab fa-facebook-square"></i> Facebook</a></li>
                        
                        <li><a target="_blank" href="<?php echo $twitterURL; ?>"><i class="fab fa-twitter-square"></i> Twitter</a></li>
                    </ul>
                </div>
            
          
<?php
endwhile; endif;
?>
            
        </div>
        
    </div>
    
  
<?php

$terms = get_the_tags( get_the_ID() );
        
$related_args = array(
	'post_type' => 'product',
	'posts_per_page' => '3',
	'post_status' => 'publish',
	'post__not_in' => array( get_the_ID() ),
	'orderby' => 'rand',
	'tag' => array( $terms ),
);
                
$user_query = new WP_Query( $related_args );
                
if ( $user_query -> have_posts() ) : ?>
    
    <div class="row margin-top justify-content-center text-align-center">
        
        <h1>imagens relacionadas</h1>
        
    </div>
                <div class="grid margin-bottom" data-masonry='{ "itemSelector": ".grid-item" }'>
                
<?php 
while ( $user_query -> have_posts() ) : $user_query -> the_post(); ?>
                
                    <div class="grid-item">
    
                        <div class="image-card-box">
        
                            <a href="<?php the_permalink(); ?>">
        
    <?php
    
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>

                            <img class="image-card" src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
        
                        <div class="image-title">
            
                                <h5><?php the_title(); ?></h5>
                            
<?php if ( !empty( get_post_meta( get_the_ID(), 'cidade', true ) ) ) { ?>                    
                    
                    <p>
                        <?php echo esc_attr( get_post_meta( get_the_ID(), 'cidade', true ) ); ?>
                        
        <?php if ( !empty( get_post_meta( get_the_ID(), 'estado', true ) ) ) { ?>
                        
                        - <?php echo esc_attr( get_post_meta( get_the_ID(), 'estado', true ) ); ?>
        <?php } ?>                
                        
                    </p>
<?php } ?>                               
            
                            <div class="icons-title">
                                <div class="icon-love"></div>
                                <div class="icon-plus"></div>
                            </div>
                        </div>
        
                        </a>
        
                    </div>
    
                </div>
                    
<?php endwhile; endif; ?>
                    
                    
                </div>

<?php get_footer( 'shop' );
