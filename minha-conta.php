<?php
/*
Template name: Minha Conta
*/
?>

        <?php get_header(); ?>

        <div id="main" class="container-fluid">
            
<div id="user-account" class="container">
    
    <div class="row justify-content-center user-title">
        <h2>configurações de usuário</h2>
    </div>
    
    <div class="row">
        
<a href="#" class="btn-mobile-content" type="button" data-target=".mobile-content" aria-expanded="false">
    <div class="col font-alt d-inline-flex">
                        
        <div class="icon-options"></div>
                        
        <p>Detalhes da conta</p>
                        
    </div>
</a> 
        
        <div class="col-12 col-md-3 user-menu fade collapse show">
            
            <?php do_action( 'woocommerce_account_navigation' ); ?>
            
            <div class="row margin-top">
                
                <div class="col font-alt d-inline-flex">
                        
                    <div class="icon-anexo"></div>
                        
                    <p>leia nossos<br><a target="_blank" href="http://entrenuvens.com/wp-content/uploads/2019/08/Termos-de-Uso-Stock-Entre-Nuvens.pdf">termos e licenças</a>.</p>
                        
                </div>
                
            </div>
            
        </div>
        
        <div class="col-12 col-md-8 user-content">
            
            <?php do_action( 'woocommerce_account_content' ); ?>
            
        </div>
        
    </div>
    
</div>
            
            <!-- FOOTER -->
            <?php get_footer(); ?>