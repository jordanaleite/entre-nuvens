<?php
/*
Template name: PagSeguro
*/
?>

        <?php get_header(); ?>

<div id="home-content" class="container-fluid">
            
            <!-- texto editável na plataforma -->
            <div id="" class="container">
                
                <div class="row">
                    
                    <div class="col-12 align-items-center">
                        
     <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
            <?php the_content();
                            
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>       
                        
                    </div>
                    
                </div>
                
            </div>
            
            <?php get_template_part('widget-stock'); ?>
            
            <!-- FOOTER -->
            
            <?php get_footer(); ?>