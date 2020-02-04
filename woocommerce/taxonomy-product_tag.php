<?php
/**
 Search
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

        <div id="main-stock" class="container-fluid">

            <!-- banner home -->
            <div class="banner-img">
                
<?php
                
$tag_array = get_queried_object();
$tag = $tag_array->slug;          
                
$arg_banner = array(
    'post_type' => 'product',
    'orderby' => 'relevance',
    'posts_per_page' => '1',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_tag',
            'field' => 'slug',
            'terms' => $tag,
        ),
    ),
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
                
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' ); ?>                 
                
                <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" class="img-banner" style="margin-top: -150px;">  
                
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
                        
                <img src="https://entrenuvens.com/wp-content/uploads/2019/07/drone-gramado-rs-03.jpg" class="img-banner" style="margin-top: -150px;">
                
                <div class="banner-title">
                    
                    <h5>campo</h5>
                    <p>Gramado - RS</p>
                                
                </div>
                        
<?php endif; ?>                  
                
            </div>
            
            <div class="container margin-top margin-bottom">
                <div class="row justify-content-center text-align-center">
                    <h1>você pesquisou por <strong><?php single_cat_title(); ?></strong></h1>
                </div>
            </div>
            
            <!-- feed das imagens -->
            <div id="grid-stock" class="container-fluid">         
<?php

$search_term = get_search_query();
                
$arg_data = array(
    'post_type' => 'product',
    'orderby' => 'relevance',
    'posts_per_page' => '12',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_tag',
            'field' => 'slug',
            'terms' => $tag,
        ),
    ),
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => array('44', '16'), //sem quadros
        ),
    ),
);
    
$user_query = new WP_Query( $arg_data );
                
if ( $user_query -> have_posts() ) : ?>
                
                <div class="grid">
                
<?php 
while ( $user_query -> have_posts() ) : $user_query -> the_post();
                    
                 wc_get_template_part( 'content', 'product' );
                    
endwhile; ?>
                    
                    
                </div>
                
<?php if ( $user_query -> max_num_pages > 1 ) : ?>
                
                <div class="row justify-content-center margin-bottom margin-top">
                    <div id="carregar" class="col text-align-center">
                        
                        <?php next_posts_link( '<div class="col col-md-2 btn btn-outline btn-carregar">carregar mais</div>', $user_query->max_num_pages ); ?>
                        
                    </div>
                </div>
                
<?php endif;
                
else : ?>
                
                <div class="row justify-content-center">
                    <div class="col text-align-center">
                        
                        <p>Ops, parece que não há nada aqui.</p>
                        
                    </div>
                </div>
                
                
<?php
wp_reset_postdata();
endif; ?>
                 
            </div>
            
            <!-- PLUS -->
            <div class="container">
                
                <div class="row justify-content-center text-align-center margin-bottom">
                    
                    <h1>não encontrou o que queria?</h1>
                    
                    <p>Estamos sempre atualizando o acervo da Stock Entre Nuvens, mas queremos te dar novas possibilidades. Se ainda não encontrou o que queria, você pode entrar em contato com a gente para <a href="<?php echo esc_url( home_url( '/' ) ); ?>orcamento">pedir um orçamento</a> e assim podemos produzir o conteúdo que falta exclusivamente para você.</p>
                    
                </div>
                
            </div>
            
            

<?php get_footer( 'shop' );
?>

