<?php
/**
 Content do looping
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="grid-item" <?php wc_product_class( '', $product ); ?>>
    
    <div class="image-card-box">
        
        <a href="<?php the_permalink(); ?>">
        
    <?php
            
        //vídeos
if( !empty( get_field('video_url') ) ) { ?>

<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="<?php echo get_field('video_url'); ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>

<script src="https://player.vimeo.com/api/player.js"></script>
                                
                <div class="image-title-video">
            
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

<?php } else {       
    
    //imagem de thumbnail
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
            
        </div>
            
<?php } ?>             
        
        </a>
        
    </div>
    
</div>
