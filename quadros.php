<?php
/*
Template name: Quadros
*/

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>

        <div id="main-stock" class="container-fluid">

            <!-- banner home -->
            <div class="banner-img-100">     
                
                <img id="img-quadros" class="img-banner">
                
                <div class="col-12 col-md-6 col-lg-4 page-title branco">
                    
                    <h1>Quadros Entre Nuvens</h1>
                    
                    <p><strong>Nossas fotos mais exuberantes impressas em edições numeradas.</strong> Afinal, se é para terem paredes a nossa volta, que sejam com janelas abertas para a imensidão do mundo.</p>
                    
                </div>
                
                <div class="blur"></div>
                
            </div>
            
            <!-- INFO -->
            <div class="container margin-top">
                
                <div class="row justify-content-center text-align-center">
                    
                    <h1>Fine Art</h1>
                    
                    <p>Nossos quadros são obras cuidadosamente feitas e selecionadas. Essas fotos nunca estarão disponíveis para licença na versão digital, pois foram feitas exclusivamente para se tornarem quadros. Todas são impressas em Fine Art ( <u><a type="button" class="" data-toggle="tooltip" data-placement="top" title="O Papel Algodão é composto de fibras naturais ( algodão ou celulose alfa ) específicas para impressões de alto padrão, utilizadas em museus do mundo inteiro. São obras que atravessam gerações, pois a estimativa é de que artes impressas em Papel Algodão durem por mais de 200 anos.">Papel Algodão</a></u> ), possuem edições numeradas e muito limitadas.</p>
                    
                </div>
            
            </div>
            
            <!-- feed das imagens -->
            <div id="grid-stock" class="container-fluid">         
<?php
         
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;                
                
$arg = array(
    'post_type' => 'product',
    //'orderby' => 'rand',
    'paged' => $paged,
    'posts_per_page' => '12',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => array('26'), //apenas quadros
        ),
    ),
);
                
$the_query = new WP_Query( $arg );
                
if ( $the_query -> have_posts() ) : ?>
                
                <div class="grid">
                
<?php 
while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
                
                    <div class="grid-item" <?php wc_product_class( '', $product ); ?>>
    
                        <div class="image-card-box">
        
                            <a class="quadro-link" href="<?php the_permalink(); ?>">
        
    <?php
    
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>

                            <img class="image-card" src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
                                
                            <div class="quadro-title">

                                <h4><?php the_title(); ?></h4>
                            
                                <p><?php echo $product->get_attribute( 'cidade' ) ?></p>
                            
                            </div>
        
                        </a>
        
                    </div>
    
                </div>
                    
<?php endwhile; ?>
                    
                    
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
            
            

<?php get_footer( 'shop' ); ?>

