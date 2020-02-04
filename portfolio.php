<?php
/*
Template name: Portfólio
*/
?>

        <?php get_header(); ?>

        <div id="main" class="container-fluid">
            
            <!-- banner home -->
            <div class="banner-img">
                
                <img src="http://entrenuvens.com/wp-content/uploads/2019/07/drone-juquehy-sp-02.jpg" class="img-banner" style="margin-top: -130px;">
                
                <div class="banner-title">
                    
                    <h5>costa e montanha</h5>
                    <p>Juquehy - SP</p>
                                
                </div>
                
            </div>
            
            <!-- INFO -->
            <div class="container margin-top">
                
                <div class="row justify-content-center text-align-center">
                    
                    <div class="col">
                        
                        <h1>no ar</h1>
                    
                        <p class="margin-bottom">Sabe a sensação de fazer o que quiser da maneira que quiser? É a nossa preferida! Gostamos da praia deserta, da estrada livre, da casinha no meio do mato (alguém não gosta?). Esse é o nosso conteúdo autoral. Nosso drone, nossas imagens aéreas, nossos lugares e as nossas cores.</p>
                        
                        <h1>originais entre nuvens</h1>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <!-- GRID -->
            <div id="grid-stock" class="portifa container-fluid">
                
                <div class="grid">
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:40% 0 0 0;position:relative;">
    
    <iframe src="https://player.vimeo.com/video/360297268" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>A magia da ilha</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://player.vimeo.com/video/163633192" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Búzios: o paraíso secreto de Brigitte Bardot</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://player.vimeo.com/video/199991487" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Arraial do Cabo: Quantos tons tem o seu mar?</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://player.vimeo.com/video/372554407" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Pescadores e o pôr do sol de novela</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://player.vimeo.com/video/140469567" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Caiacando</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://player.vimeo.com/video/173161331" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>O Gramado da Cascata do Caracol</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://player.vimeo.com/video/139263643" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Ondas de véu de noiva</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class="display-none">
<?php
                
$user_query = new WP_Query( 'author_name=ugo&post_type=product' );
                
if ( $user_query -> have_posts() ) : ?>
                
                <div class="grid">
                
<?php 
while ( $user_query -> have_posts() ) : $user_query -> the_post(); ?>
                
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

<?php } else {       
    
    //imagem de thumbnail
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>

        <img class="image-card" src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
            
<?php } ?>
        
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
                    
<?php endwhile; ?>
                    
                    
                </div>
                
<?php if ( $user_query -> max_num_pages > 1 ) : ?>
                
                <div class="row justify-content-center margin-bottom">
                    <div id="carregar" class="col col-md-2 text-align-center">
                        
                        <?php next_posts_link( '<div class="col btn btn-outline btn-carregar">veja mais</div>' ); ?>
                        
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
                 
            </div>
            
            <!-- INFO -->
            <div id="produtora" class="container margin-top margin-bottom">
                
                <div class="row justify-content-center text-align-center">
                    
                    <h1>produtora entre nuvens</h1>
                    
                    <p>Para expandir os horizontes é preciso ter o tripé no chão. A jornada da Entre Nuvens passa por pessoas incríveis com ideias irresistíveis. Nossa produtora audiovisual trabalha com parceiros em todos os tipos de produção, de séries para o YouTube a longa-metragens para o cinema, passando por documentários, eventos e clipes musicais. Vivemos no céu, mas ele não é o limite - trabalhamos com câmeras, luzes e ações em todas as suas formas.</p>
                    
                </div>
                
            </div>
            
            <!-- VIDEOS -->
            <div class="portifa container-fluid">
                
                <div class="grid">
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://player.vimeo.com/video/372550104" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Tá pago - color correction</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://www.youtube.com/embed/S1HoNSh56vk" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Clipe Banda Rabuja</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://player.vimeo.com/video/352328586" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Meus Prêmios Nick 2018</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://www.youtube.com/embed/gMeFhg6V9qg" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Raiz do Futebol - Ep. 1 | Improviso</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://www.youtube.com/embed/xPiajGwinuI" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Raiz do Futebol - Ep. 4 | Praia</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://player.vimeo.com/video/355267450" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>MTV Miaw 2019</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://player.vimeo.com/video/352191451" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Dia de Brincar 2017</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://www.youtube.com/embed/y_foTw6MSOM" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>TNT Qu1rk</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://player.vimeo.com/video/189007686" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Casamento Entre Nuvens</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://www.youtube.com/embed/JzjcTxuYJYU" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>EcoMúsica | Cigarra (Cicada) | Fábio Caramuru</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="grid-item">
                        
                        <div class="image-card-box">
                            
<div class="image-card" style="padding:56.25% 0 0 0;position:relative;">
    
    <iframe src="https://www.youtube-nocookie.com/embed/UZlFOR6Dl_I" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    
</div>
                            <div class="image-title-video">
            
                                <h5>Hotel Vila da Santa | Experience & Dreams</h5>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <!-- INFO -->
            <div class="container margin-top margin-bottom">
                
                <div class="row justify-content-center text-align-center">
                    
                    <p>Você é uma pessoa incrível com uma ideia irresistível? Enfim a Entre Nuvens te encontrou! :)<br>Se quiser pedir um orçamento, é só clicar no botão abaixo. Mas se quiser falar sobre qualquer outra coisa, é só mandar um email para
 <strong>eai@entrenuvens.com</strong>.</p>
                    
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>orcamento" class="btn btn-outline">peça o seu orçamento</a>
                    
                </div>
                
            </div>
            
            <!-- FOOTER -->
            <?php get_footer(); ?>