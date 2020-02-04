<?php
/*
Template name: Upload
*/

defined( 'ABSPATH' ) || exit; ?>

        <?php get_header(); ?>

        <div id="main" class="container-fluid">
            
<div id="upload" class="container">
    
    <div class="row justify-content-center margin-bottom">
        <h2>Upload de imagens aéreas</h2>
    </div>
    
    <div id="menu-user" class="row">
 
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
            
            <p><b>Opa! Ficamos felizes que queira fazer parte da revoada! :D</b><br>Preencha os dados abaixo e nós entraremos em contato.</p>
            
            <div class="row">
                
                <div class="col-12 display-none">
                    
<?php echo do_shortcode('[contact-form-7 id="643" title="Upload de imagem"]'); ?>                    
                    
                </div>
                
                <div class="col-12">
            
<?php 
                    
echo do_shortcode('[wpforms id="642" title="false" description="false"]'); 
            
?>
                    
<script>
    
    //Adiciona estilos ao WP Form
    $('#wpforms-form-642').find('input').addClass('form-control').addClass('form-control-preto');
    $('#wpforms-form-642').find('textarea').addClass('form-control').addClass('form-control-preto');
    
</script>                
                    
                </div>
                
            </div>
            
        </div>
        
    </div>

<?php do_action( 'woocommerce_after_cart' ); ?>               
</div>


            
            <!-- FOOTER -->
            <?php get_footer(); ?>