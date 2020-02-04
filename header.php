<!DOCTYPE html>
<html lang="pt">
    
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- no phone bugs -->
    <meta name="format-detection" content="telephone=no">
    
    <!-- Google Analytics & Vimeo -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78128153-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-78128153-1');
    </script>
    
    <script type="text/javascript" defer="defer" src="https://extend.vimeocdn.com/ga/43875768.js"></script>
    
    <!-- booststrap css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
    
    <!-- font awesome tag -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-0c38nfCMzF8w8DBI+9nTWzApOpr1z0WuyswL4y6x/2ZTtmj/Ki5TedKeUcFusC/k" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/635a844bd8.js"></script>
    
    <title>
        <?php if(!is_front_page()) : wp_title(''); ?> | <?php endif; bloginfo('name'); ?>
    </title>
    
	<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/_imagens/favicon.png" type="image/png" sizes="65x72">
    <link rel=”canonical” href=”<?php get_site_url(); ?>”>
	
    <?php wp_head(); ?>
    
</head>
    
<body>
    
    <div class="main">
        
        <div id="menu" class="container-fluid">
            
         <?php
			
			$bg_nav = 'bg-transparent';
			
			if( is_account_page() || is_single() || is_cart() || is_checkout() || is_page('upload') ){
				$bg_nav = 'bg-light';
			}
		?>   
            
            <?php if( $bg_nav  == 'bg-transparent' ): ?>
            <div id="shadow-nav" class="box-shadow-nav"></div>
            <?php endif; ?>
            
            <nav id="navbar" class="navbar navbar-expand-lg navbar-light <?php echo $bg_nav; ?>">
                
                <a class="navbar-brand pink" href="<?php bloginfo('url'); ?>">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/_imagens/entre-nuvens-br.png" class="logo-nav logo-desktop brand-transparent"><img src="<?php echo get_bloginfo('template_directory'); ?>/_imagens/entre-nuvens-pt.png" class="logo-nav logo-desktop brand-light">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/_imagens/logo-entre-nuvens-br.png" class="logo-nav logo-mobile brand-transparent"><img src="<?php echo get_bloginfo('template_directory'); ?>/_imagens/logo-entre-nuvens-pt.png" class="logo-nav logo-mobile brand-light">
                </a>
                
            <?php if( is_woocommerce() || is_search() || is_author() ) : ?>    
                
<form class="form-inline search-mobile ml-auto mr-auto" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
  <div class="form-mobile">
    
    <button class="btn btn-menu" type="submit" id="searchsubmit" value="Search"><div class="icon-search"></div></button>  
    <input placeholder="voar para..." class="form-control form-menu form-menu-mobile" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
      
  </div>
</form>
            <?php endif; ?>
                
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="icon-menu"></div>
                </button>
                
                <div class="collapse navbar-collapse col" id="navbarSupportedContent">
                        
                <?php if( is_woocommerce() || is_search() || is_author() ) : ?>   
                        
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item align-self-center search-desktop">
                            
<form class="form-inline" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
  <div class="w-100">
      
    <input placeholder="voar para..." class="form-control form-menu" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
    <button class="btn btn-menu" type="submit" id="searchsubmit" value="Search"><div class="icon-search"></div></button>  
      
  </div>
</form>
                            
                    </li>        
                </ul>
                        
                <?php endif; ?>    
                        
                    <ul class="navbar-nav ml-auto">    
                        
                      <li class="nav-item">
                          <a class="nav-link" href="<?php bloginfo('url'); ?>/stock">stock</a>
                      </li>
                        
                      <li class="nav-item">
                          <a class="nav-link" href="<?php bloginfo('url'); ?>/quadros">quadros</a>
                      </li>
                        
                    <li class="nav-item">
                          <a class="nav-link" href="<?php bloginfo('url'); ?>/portfolio">portfólio</a>
                      </li>
                        
                    <li class="nav-item">
                          <a class="nav-link" href="<?php bloginfo('url'); ?>/sobre">nós</a>
                      </li>
                        
                    <li class="nav-item">
                          <a class="nav-link" href="<?php bloginfo('url'); ?>/orcamento">orçamento</a>
                      </li>
                        
                    </ul>
                    
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item acesso-user">
                        
                    <?php 
                        
$user = wp_get_current_user();
                        
                        if ( is_user_logged_in() ) : ?>
                        
                        <a class="nav-link" href="<?php bloginfo('url'); ?>/minha-conta">
                            
                            <span class="user-name"><?php echo esc_attr( $user->display_name ); ?></span>
                            
                            <div class="icon-user"></div>
                        </a>
                        
                    <?php else : ?>
                        
                        <a class="nav-link" href="<?php bloginfo('url'); ?>/login">minha conta <div class="icon-user"></div></a>
                        
                    <?php endif; ?>
                        
                    </li>
                        
                    </ul>
                </div>   
            </nav>
            
        </div>