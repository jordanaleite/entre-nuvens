<?php
/**
 Página inicial do WooCommerce
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

        <div id="main-stock" class="container-fluid">

            <!-- banner home -->
            <div class="banner-img-100">
                
                <img src="http://entrenuvens.com/wp-content/uploads/2019/07/drone-buzios-rj-01.jpg" class="img-banner stock-image">
                
                <div class="stock-title branco text-align-center justify-content-center">
                    
                    <h1>o céu é seu</h1>
                    
                    <p>Até onde você iria se não houvesse nada lhe prendendo?<br>Imagens aéreas autênticas e exclusivas à sua disposição.</p>
                    
<!-- pesquisa -->
<form id="search-woo" role="search" method="get" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    
    <button class="btn btn-menu" type="submit" value="Search"><div class="icon-search"></div></button>
    
	<input type="search" class="form-control form-pesquisa" placeholder="voar para..." value="<?php the_search_query(); ?>" name="s" />
    
    <div class="icon-video"></div>
    
<div class="dropdown">    
    <button type="button" class="btn btn-menu dropdown-toggle" id="dropdownFiltro" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span id="text-filtro">Vídeo</span>
    </button>

    <div class="dropdown-menu display-none"  aria-labelledby="dropdownFiltro">
        <li class="dropdown-item">
            <a onclick="$('#text-filtro').text('foto');$('#c_product_cat').val('foto');"  class="font-alt filtro">foto</a>
        </li>
        <li class="dropdown-item">
            <a onclick="$('#text-filtro').text('video');$('#c_product_cat').val('video');" class="font-alt filtro">video</a>
        </li>
    </div>
</div>   
    
	<!-- <input type="hidden" name="post_type" value="product" /> -->
    
</form>
                    
                    <div class="home-tags">
                        
<?php
//Limita em 5 termos
function wpse_limit_terms( $terms ) {
    
    // Adjust to your needs
    $length = 5;

    // Slice the terms array
    if( is_array( $terms ) && count( $terms ) > $length )   
        $terms = array_slice( $terms, $offset = 0, $length );

    return $terms;
} 
add_filter( 'get_the_terms', 'wpse_limit_terms' );                     
                        
// get product_tags of the current product
$current_tags = get_the_terms( get_the_ID(), 'product_tag' );

//only start if we have some tags
if ( $current_tags && ! is_wp_error( $current_tags ) ) { 

    //create a list to hold our tags
    echo '<ul>';

    //for each tag we create a list item
    foreach ($current_tags as $tag) {

        $tag_title = $tag->name; // tag name
        $tag_link = get_term_link( $tag );// tag archive link

        echo '<li><a href="'.$tag_link.'">'.$tag_title.'</a></li>';
    }

    echo '</ul>';
}
                        
                        
// Remove filtro
remove_filter( 'get_the_terms', 'wpse_limit_terms' );                        
?>
                        
                    </div>
                    
                </div>
                
                <div class="blur blur-direita"></div>
                
                <div class="banner-title-100">
                    
                    <h5>pedra rosa</h5>
                    <p>Búzios - RJ</p>
                                
                </div>
                
            </div>
            
            <!-- feed das imagens -->
            <div id="grid-stock" class="container-fluid">
                
<?php
                
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                
$arg_home = array(
    'post_type' => 'product',
    'orderby' => 'rand',
    'paged' => $paged,
    'posts_per_page' => '12',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => array('44', '16'), //sem quadros
        ),
    ),
);
                
$the_query = new WP_Query( $arg_home );
                
if ( $the_query -> have_posts() ) : ?>
                
                <div class="grid">
                
<?php while ( $the_query -> have_posts() ) : $the_query -> the_post();
                    
                 wc_get_template_part( 'content', 'product' );
                    
endwhile; ?>   
                </div>
                
<?php if ( $the_query->max_num_pages > 1 ) : ?>
                
                <div class="row justify-content-center margin-bottom margin-top">
                    <div id="carregar" class="col text-align-center">
                        
                        <?php next_posts_link( '<div class="col col-md-2 btn btn-outline btn-carregar">carregar mais</div>', $the_query->max_num_pages ); ?>
                        
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
            
            <!-- GALERIAS -->
            
            <!-- DILVUGUE-SE -->
            <div id="stock">
                
                <div class="blur"></div>
                
                <div class="container branco align-items-center">
                    
                    <div class="row">
                        
                        <div class="col-12 col-md-6 col-lg-4">
                            
                            <h1>faça parte da revoada</h1>
                            
                            <p>Nossa comunidade está sempre em busca de novos talentos. Participe do nosso banco de imagens aéreas, <strong>divulgue e licencie suas imagens</strong>.</p>
                            
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>divulgue-se" class="btn btn-outline-branco">saiba como participar</a>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <div class="margin-bottom margin-top">
                
                <?php get_template_part('widget'); ?>
                
            </div>

<?php get_footer( 'shop' );
?>

