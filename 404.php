<?php
/*
Template name: 404 error
*/
?>

        <?php get_header(); ?>

        <div id="main" class="container-fluid">
            
            <!-- banner home -->
            <div class="banner-img-100">
                
                <img src="http://entrenuvens.com/wp-content/uploads/2019/07/drone-cabofrio-rj-01.jpg" class="img-banner">
                
                <div class="col col-md-4 page-title branco">
                    
                    <h1>ops! Cortaram suas asinhas :(</h1>
                    
                    <p>Parece que houve um problema nessa página. Melhor <a href="<?php bloginfo('url'); ?>"><strong>voltar e decolar de novo</strong></a>.</p>
                    
                </div>
                
                <div class="blur"></div>
                
                <div class="banner-title-100">
                    
                    <h5>barcos de pescadores</h5>
                    <p>Cabo Frio - RJ</p>
                                
                </div>
                
            </div>
            
            <div class="margin-top">
                
                <?php get_template_part('widget-stock'); ?>
                
            </div>
            
            <!-- FOOTER -->
            <?php get_footer(); ?>