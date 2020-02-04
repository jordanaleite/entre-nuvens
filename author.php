<?php
/**
 Author
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>

        <div id="main-stock" class="container-fluid">

            <!-- banner home -->
            <div class="banner-img">
                
<?php
                
$author_id = get_the_author_meta('ID');
                
global $post;
$author = $post->post_author;                
                
$arg_banner = array(
    'post_type' => 'product',
    'author'   => $author_id,
    'orderby' => 'rand',
    'posts_per_page' => '1',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => '16', //somente fotos
        ),
    ),
);                
                
$banner_query = new WP_Query( $arg_banner );
                
if ( $banner_query -> have_posts() ) : 
while ( $banner_query -> have_posts() ) : $banner_query -> the_post(); ?>
                
<?php           
                
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );  ?>
                
        <img src="<?php echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" class="img-banner" style="margin-top: -150px;">
                
                <a href="<?php the_permalink(); ?>">
                
                <div class="banner-title">
                    
                    <h5><?php the_title(); ?></h5>
                    
        <?php if ( !empty( get_post_meta( get_the_ID(), 'cidade', true ) ) ) { ?>                    
                    
                    <p>
                        <?php echo esc_attr( get_post_meta( get_the_ID(), 'cidade', true ) ); ?>
                        
        <?php if ( !empty( get_post_meta( get_the_ID(), 'estado', true ) ) ) { ?>
                        
                        - <?php echo esc_attr( get_post_meta( get_the_ID(), 'estado', true ) ); ?>
        <?php } ?>                
                        
                    </p>
<?php } ?> 
                                
                </div>
                
                </a>
                
<?php endwhile; else : ?>
                        
                <img src="https://entrenuvens.com/wp-content/uploads/2019/07/drone-juquehy-sp-02.jpg" class="img-banner" style="margin-top: -150px;">
                
                <div class="banner-title">
                    
                    <h5>costa e montanha</h5>
                    <p>Juquehy - SP</p>
                                
                </div>
                        
<?php endif; ?>                    
                
            </div>         
            
            <!-- author profile -->
            <div class="author-img">              
                
            <?php if ( is_author('entre-nuvens') ) : ?>           
                    <div class="author-destaque">
                        
                        <div class="icon-best-star"></div>
                        
                    </div>
                        
            <?php endif; ?> 
                
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 255 ); ?>
                
            </div>
            
            <div class="container margin-top margin-bottom author-title">
                
                <div class="row justify-content-center text-align-center">
                    
                    <div class="col col-md-6">
                        
                        <h1><?php the_author(); ?></h1>
                        
                        <p><?php echo the_author_meta('description'); ?></p>
                    </div>
                    
                </div>
                
                <div class="row justify-content-center profile-icon">
                
<?php

//se não há cidade cadastrada                    
if ( !empty( get_user_meta( get_the_author_meta('ID'), 'cidade', true ) ) ) { ?>                    

                    <div class="font-alt d-inline-flex">
                        
                        <div class="icon-local"></div>
                        
                        <?php echo $author; ?>
                        
                        <p><?php echo get_user_meta( get_the_author_meta('ID'), 'cidade', true ); ?> - <?php echo get_user_meta( get_the_author_meta('ID'), 'estado', true ); ?></p>
                        
                    </div>
                    
<?php
    
//fecha else         
};
                    
//imagens                    
$args_image = array( 
    'author' => $author_id,
    'post_type'   => 'product',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => '16', //somente fotos
        ),
    ),
);

$image_query = new WP_Query( $args_image );
$image_count = $image_query->found_posts;
                    
//vídeos                    
$args_video = array( 
    'author' => $author_id,
    'post_type'   => 'product',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => '44', //somente vídeos
        ),
    ),
);

$video_query = new WP_Query( $args_video );
$video_count = $video_query->found_posts;
                    
?>
                
                    <div class="font-alt d-inline-flex">
                        
                        <div class="icon-video"></div>
                        
                        <p><?php echo $video_count; ?> videos</p>
                        
                    </div>
                
                    <div class="font-alt d-inline-flex">
                        
                        <div class="icon-imagem"></div>
                        
                        <p><?php echo $image_count; ?> fotos</p>
                        
                    </div>
                
                </div>
                
            </div>          
            
            <!-- feed das imagens -->
            <div id="grid-stock" class="container-fluid">         
<?php

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                
$arg = array(
    'post_type' => 'product',
    'posts_per_page' => '12',
    'orderby' => 'rand',
    'paged' => $paged,
    'author'  => $author_id,
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => array('44', '16'), //sem quadros
        ),
    ),
);
                
$the_query = new WP_Query( $arg );
                
if ( $the_query -> have_posts() ) : ?>
                
                <div class="grid">
                
<?php 
while ( $the_query -> have_posts() ) : $the_query -> the_post();
                    
                 wc_get_template_part( 'content', 'product' );
                   
endwhile; ?>
                    
                    
                </div>
                
<?php if ( $the_query -> max_num_pages > 1 ) : ?>
                
                <div class="row justify-content-center margin-bottom margin-top">
                    <div id="carregar" class="col text-align-center">
                        
                        <?php next_posts_link( '<div class="col col-md-2 btn btn-outline btn-carregar">carregar mais</div>', $the_query -> max_num_pages ); ?>
                        
                    </div>
                </div>
                
<?php endif;
                
else : ?>
                
                <div class="row justify-content-center">
                    <div class="col text-align-center">
                        
                        <p>Ops, parece que não há publicações aqui.</p>
                        
                    </div>
                </div>
                
                
<?php
wp_reset_postdata();
endif; ?>
                 
            </div>
            
            

<?php get_footer( 'shop' );
?>

