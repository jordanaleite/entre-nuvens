<?php
/**
 * Single Product Image
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

//categoria dos produtos
$categories = get_the_terms($post->ID, 'product_cat');
$formato = '';

if ( !empty( $categories ) ) {
  foreach ( $categories as $cat ) {
    $formato .= $cat->slug . '';
  }
};

    //vídeos
    if( !empty( get_field('video_url') ) )
    { ?>

<div style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="<?php echo get_field('video_url'); ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>

<script src="https://player.vimeo.com/api/player.js"></script>

<?php } 
    //quadros com galeria    
    else if( $formato === 'quadro' ) {    
 
?>

<div id="carouselQuadro" class="carousel slide" data-ride="carousel">
      
  <div class="carousel-inner">
      
<?php    
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>      
      
    <div class="carousel-item image-single active">
      <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
    </div>
      
<?php
        
$attachment_ids = $product->get_gallery_attachment_ids();
        
foreach( $attachment_ids as $attachment_id ) { 
    
    $image_url = wp_get_attachment_url( $attachment_id ); ?>
      
    <div class="carousel-item image-single">
      <img src="<?php echo $image_url; ?>">
    </div>
      
<?php } ?>
      
  </div>    
   
  <ol class="carousel-indicators">    
      
      <li data-target="#carouselQuadro" data-slide-to="0" class="active"></li>
      
<?php    
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>       
      
<?php
        
$attachment_number = $product->get_gallery_attachment_ids();
        
foreach( $attachment_number as $key=>$value ) { ?> 
      
      <li data-target="#carouselQuadro" data-slide-to="<?php echo ++$key; ?>"></li>
      
<?php } ?>      
      
  </ol>
  
    
  <a class="carousel-control-prev" href="#carouselQuadro" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
    
  <a class="carousel-control-next" href="#carouselQuadro" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    
</div>


<?php } 
    //fotos e outros.
    else { ?>

    <div class="image-single">

<?php    
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
    
    <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">

    </div>

<?php } ?>
        
<?php

// export preview

global $post;
$slug = $post->post_name;        
        
        if( !empty( get_field('video_download') ) ) { ?>           
<div class="export-preview">
    
    <a href="<?php echo get_field('video_download'); ?>" download="<?php echo $slug ?>-StockEntreNuvens.mp4" data-placement="left" data-toggle="tooltip" title="Download da amostra">
            
        <div class="icon-download"></div>
            
    </a>
</div>    
        
<?php } else if( $formato === 'quadro' ) { /* nothing here */ } else { ?>

<div class="export-preview">
        
    <a href="<?php echo $image[0]; ?>" download="<?php echo $slug ?>-StockEntreNuvens.jpg" data-placement="left" data-toggle="tooltip" title="Download da amostra">
            
        <div class="icon-download"></div>
            
    </a>
    
</div>
        
<?php } ?>        
    