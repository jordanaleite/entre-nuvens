<?php
/*
Template name: Orçamento
*/
?>

        <?php get_header(); ?>

        <div id="main" class="container-fluid">
            
            <!-- banner home -->
            <div class="banner-img">
                
                <img src="http://entrenuvens.com/wp-content/uploads/2019/07/drone-saopedro-rj-01.jpg" class="img-banner" style="margin-top: -200px;">
                
                <div class="banner-title">
                    
                    <h5>pesca</h5>
                    <p>São Pedro - RJ</p>
                                
                </div>
                
            </div>
            
            <!-- INFO -->
            <div class="container margin-top margin-bottom">
                
                <div class="row justify-content-center text-align-center">
                    
                    <div class="col">
                        
                        <h1>o seu pedaço do céu</h1>
                    
                        <p class="margin-bottom">Você é uma pessoa incrível com uma ideia irresistível? Aqui você é livre como o vento!<br>Entre em contato pelo formulário abaixo e <strong>peça o seu orçamento</strong>!</p>
                        
    <?php
        global $response;
        echo $response;
    ?>
                        
                    </div>
                    
                </div>
                
                <div class="row justify-content-center text-align-center">
                    <h1>fale sobre o projeto</h1>
                </div>
                
                <div id="projeto-form">
                        
                    <?php echo do_shortcode('[contact-form-7 id="346" title="Orçamento"]') ?>
                        
                </div>           
                
            </div>
            
            <?php get_template_part('widget-stock'); ?>
            
            <!-- FOOTER -->
            <?php get_footer(); ?>