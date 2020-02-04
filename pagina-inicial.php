<?php
/*
Template name: Índex
*/
?>

        <?php get_header(); ?>

        <div id="home-content" class="container-fluid">
            
            <!-- banner home -->
            <div class="banner-home">
              <div id="bannerhome" class="carousel slide" data-ride="carousel">
                  
                <ol class="carousel-indicators">
                  <li data-target="#bannerhome" data-slide-to="0" class="active"></li>
                  <li data-target="#bannerhome" data-slide-to="1"></li>
                  <li data-target="#bannerhome" data-slide-to="2"></li>
                  <li data-target="#bannerhome" data-slide-to="3"></li>
                </ol>
                  
                <div class="carousel-inner">
                    
                  <div class="carousel-item img-1">
                      
                    <!-- <img src="http://entrenuvens.com/wp-content/uploads/2019/11/CAPA-drone-ilhagrande-rj-03.jpg" class="d-block"> -->
                      
                  </div>
                    
                  <div class="carousel-item img-2">
                      
                    <!-- <img src="http://entrenuvens.com/wp-content/uploads/2019/11/CAPA-drone-gramado-rs-02-2.jpg" class="d-block"> -->
                      
                  </div>
                    
                  <div class="carousel-item img-3">
                      
                    <!-- <img src="http://entrenuvens.com/wp-content/uploads/2019/11/CAPA-drone-cabofrio-rj-02.jpg" class="d-block"> -->
                      
                  </div>
                    
                  <div class="carousel-item img-4">
                      
                    <!-- <img src="http://entrenuvens.com/wp-content/uploads/2019/11/CAPA-drone-buzios-rj-02.jpg" class="d-block"> -->
                      
                  </div>
                  
                </div>
                  
              </div>
                
                <div class="brand-home">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/_imagens/entre-nuvens-br.png" class="brand">
                </div>
                
            </div>
            
            <!-- VALORES -->
            <div id="valores" class="container">
                
                <div class="row justify-content-center margin-bottom">
                    <h1>entre nuvens</h1>
                </div>
                
                <div class="row text-align-center margin-bottom justify-content-center">
                    
                    <div class="col-12 col-md-4 justify-content-center">
                        
                        <div class="icon-drone"></div>
                        
                        <h2>drones</h2>
                        
                        <p>Voe por lugares incríveis através de fotos e vídeos com olhares autênticos e cuidadosamente selecionados.</p>
                        
                    </div>
                    
                    <div class="col-12 col-md-4 justify-content-center">
                        
                        <div class="icon-planet"></div>
                        
                        <h2>sustentabilidade</h2>
                        
                        <p>Trabalhamos com materiais e processos com o menor impacto possível no meio ambiente.</p>
                        
                    </div>
                    
                    <div class="col-12 col-md-4 justify-content-center">
                        
                        <div class="icon-love-big"></div>
                        
                        <h2>comunidade</h2>
                        
                        <p>Você é bem-vindo(a) para criar e compartilhar conteúdo com a gente :)</p>
                        
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>divulgue-se/" class="btn btn-outline">quero participar</a>
                        
                        <div class="profile-list">
                            
                            <ul>
                                <li class="">
                                    <a class="" target="_blank" href="https://www.instagram.com/entrenuvens/"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="">
                                    <a class="" target="_blank" href="https://www.facebook.com/entrenuvens.ia/"><i class="fab fa-facebook-square"></i></a>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <!-- STOCK -->
            <div id="stock">
                
                <div class="blur"></div>
                
                <div class="container branco align-items-center">
                    
                    <div class="row">
                        
                        <div class="col-12 col-md-6 col-lg-4">
                            
                            <h1>o céu é seu</h1>
                            
                            <p>Voe como um pássaro pelo banco de imagens <strong>Stock Entre Nuvens</strong> - imagens de drone selecionadas por curadoria para vocë usar como quiser. Explore novos territórios com <a target="_blank" href="http://entrenuvens.com/wp-content/uploads/2019/11/Entre-Nuvens-_-Termos-de-Uso-Política-de-Privacidade-entrenuvens.com_.pdf">uma única licença</a> para todos os tipos de uso.</p>
                            
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>stock" class="btn btn-outline-branco">stock entre nuvens</a>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <!-- QUADROS -->
            <div id="quadros">
                
                <div class="container branco align-items-center">
                    
                    <div class="row">
                        
                        <div class="col-12 col-md-6">
                            
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/_imagens/quadro-buzios.png" class="d-block">
                            
                        </div>
                        
                        <div class="col-12 col-md-6 align-self-center">
                            
                            <h1>sua janela</h1>
                            
                            <p><strong>Nossas fotos mais exuberantes impressas com qualidade de museu em edições numeradas.</strong> Afinal, se é para ter paredes a nossa volta, que sejam com janelas abertas para a imensidão do mundo. </p>
                            
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>quadros" class="btn btn-outline-branco">loja de quadros</a>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <!-- SOBRE -->
            <div id="sobre" class="container">
                
                <div class="row justify-content-center text-align-center margin-bottom">
                    <h1>um céu de possibilidades</h1>
                    
                    <p class="margin-bottom">Quando descobrimos que câmeras podiam voar, percebemos que a câmera presa no tripé era boa, mas não suficiente. Somos uma produtora audiovisual que sabe ter os tripés no chão, mas se descobriu especializada em imagens aéreas quando percebeu que nenhuma câmera tem tanta liberdade quanto a que está no céu. Somos apaixonados por drones! Com eles vamos encontrar a terra prometida e te mostrar onde fica, porque, se um pode voar, todos podem.</p>
                    
                    <iframe width="720" height="405" src="https://www.youtube.com/embed/1cWC1qtYHXQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
                </div>
                
                <div class="row text-align-center">
                    
                    <div class="col-12 col-md-4 justify-content-center">
                        
                        <div class="icon-video"></div>
                        
                        <h2>vídeos</h2>
                        
                        <p>Imagens que fazem seu próprio caminho.</p>
                        
                    </div>
                    
                    <div class="col-12 col-md-4 justify-content-center">
                        
                        <div class="icon-imagem"></div>
                        
                        <h2>fotos</h2>
                        
                        <p>Cada instante é individual e auto-suficiente.</p>
                        
                    </div>
                    
                    <div class="col-12 col-md-4 justify-content-center">
                        
                        <div class="icon-panorama"></div>
                        
                        <h2>conteúdo</h2>
                        
                        <p>Como você, também somos contadores de histórias.</p>
                        
                    </div>
                    
                </div>
            </div>
            
            <!-- GRID -->
           <div id="grid-home" class="container-fluid">         
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
                    
                </div>
                
            </div>
            
            <!-- CLIENTES -->
            <div id="clientes" class="container margin-bottom">
                
                <div class="row margin-bottom text-align-center justify-content-center">
                    
                    <div class="col">
                        
                        <p>Apaixonados por drones e imagens aéreas, mas vamos além.</p>
                
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio/" class="btn btn-outline">conheça nosso portfólio</a>
                        
                    </div>
                    
                </div>
                
                <div class="row justify-content-center">
                    
                    <h1>confiam em nós</h1>
                
                </div>
                
                <div class="row text-align-center">
                    
                    <div class="col align-self-center">
                        
                        <div class="marca">
                            <img src="http://entrenuvens.com/wp-content/uploads/2019/09/logo-mtv.png">
                        </div>
                        
                    </div>
                    
                    <div class="col align-self-center">
                        
                        <div class="marca">
                            <img src="http://entrenuvens.com/wp-content/uploads/2019/09/logo-nickelodeon-e1573740019606.png">
                        </div>
                        
                    </div>
                    
                    <div class="col align-self-center">
                        
                        <div class="marca">
                            <img src="http://entrenuvens.com/wp-content/uploads/2019/09/logo-uol.png">
                        </div>
                        
                    </div>
                    
                    <div class="col align-self-center">
                        
                        <div class="marca">
                            <img src="http://entrenuvens.com/wp-content/uploads/2019/09/logo-tnt.png">
                        </div>
                        
                    </div>
                    
                    <div class="col align-self-center">
                        
                        <div class="marca">
                            <img src="http://entrenuvens.com/wp-content/uploads/2019/11/Logo_Kanope-@4x-e1573753794704.png">
                        </div>
                        
                    </div>
                    
                    <div class="col align-self-center">
                        
                        <div class="marca">
                            <img src="http://entrenuvens.com/wp-content/uploads/2019/11/logo-brokenglass-e1573740097757.png">
                        </div>
                        
                    </div>
                    
                    <div class="col align-self-center">
                        
                        <div class="marca">
                            <img src="http://entrenuvens.com/wp-content/uploads/2019/09/logo-ventu.png">
                        </div>
                        
                    </div>
                    
                    <div class="col align-self-center">
                        
                        <div class="marca">
                            <img src="http://entrenuvens.com/wp-content/uploads/2019/12/logo_WUDD.png">
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <?php get_template_part('widget'); ?>
            
            <!-- FOOTER -->
            <?php get_footer(); ?>