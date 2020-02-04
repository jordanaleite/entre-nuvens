<?php
/*
Template name: Finalizar Compra
*/

defined( 'ABSPATH' ) || exit; ?>

        <?php get_header(); ?>

        <div id="main" class="container-fluid">
            
<div id="carrinho" class="container">
    
    <div class="row justify-content-center margin-bottom">
        <h2>finalizar compra</h2>
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
            
<?php            
do_action( 'woocommerce_before_checkout_form', $checkout );

?>
            <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="row" id="customer_details">
            
			<div class="col">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="container">
        
        <div class="row">
            <?php do_action( 'woocommerce_checkout_order_review' ); ?>
        </div>
		
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>            
            
            
        </div>
        
    </div>             
</div>


            
            <!-- FOOTER -->
            <?php get_footer(); ?>