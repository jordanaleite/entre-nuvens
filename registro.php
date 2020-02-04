<?php
/**
 Template name: Registro do vendedor
 */

defined( 'ABSPATH' ) || exit;
?>

        <?php get_header(); ?>

        <div id="main" class="container-fluid">
            
            <!-- banner home -->
            <div class="banner-img-100">
                
                <img src="http://entrenuvens.com/wp-content/uploads/2019/07/drone-saopedro-rj-01.jpg" class="img-banner">
                
                <div class="row row-login registro">
                    
                    <div class="col col-md-5 login branco">
                    
                        <h1>entre para essa comunidade</h1>
                    
                        <p>Participe da comunidade que vivencia o mundo com outros ângulos! <strong>Faça seu cadastro</strong> e nos mostre seu trabalho pelos ares!</p>
                        
                    </div>
                    
                    <div class="col branco login">
                        
<!-- form registro -->
<form id="registro-form" method="POST">
    
    <?php do_action( 'woocommerce_register_form_start' ); ?>
      
      <div class="form-row">
          
          <div class="form-group col col-md-6">
              
              <input placeholder="nome" class="form-control form-control-branco" name="username" id="reg_username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>">
              
          </div>
          
          <div class="form-group col col-md-6">
              
              <input placeholder="cpf / cpnj" class="form-control form-control-branco" type="text" name="" value="">
              
          </div>
          
      </div>
    
     <div class="form-group col" style="padding: 0;">
              
              <input placeholder="e-mail" class="form-control form-control-branco" type="email" name="email" id="reg_email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>">
              
    </div>
    
     <div class="form-group col" style="padding: 0;">
              
        <input placeholder="seu portfólio" class="form-control form-control-branco" type="text" name="password" id="reg_url" value="<?php echo ( ! empty( $_POST['url'] ) ) ? esc_attr( wp_unslash( $_POST['url'] ) ) : ''; ?>">
              
    </div>
    
    <?php do_action( 'woocommerce_register_form' ); ?>
    
    <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
          Declaro que aceito os <a target="_blank" href="http://entrenuvens.com/wp-content/uploads/2019/08/Termos-de-Uso-Stock-Entre-Nuvens.pdf">termos de compromisso</a>.
      </label>
    </div>
  </div>
      
      <button class="btn btn-outline-branco float-right" type="submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>">cadastrar-se</button>
      
    <?php do_action( 'woocommerce_register_form_end' ); ?>
    
</form>                        
                        
                    </div>
                    
                </div>
                
                <div class="blur"></div>
                
                <div class="banner-title-100">
                    
                    <h5>caracol</h5>
                    <p>São Pedro - RJ</p>
                                
                </div>
                
            </div>
            
            <!-- WIDGET -->
            <div class="container margin-top margin-bottom">
                
                <div class="row">
                    
                    <div class="col col-widget">
                        
                        <h2>a entre nuvens</h2>
                        
                        <p>Etiam eget consectetur ipsum. Maecenas fringilla commodo velit, eu ullamcorper massa.</p>
                        
                    </div>
                    
                    <div class="col col-widget">
                        
                        <h2>dúvidas frequentes</h2>
                        
                        <p>Etiam eget consectetur ipsum. Maecenas fringilla commodo velit, eu ullamcorper massa.</p>
                        
                    </div>
                    
                    <div class="col col-widget">
                        
                        <h2>termos & licenças</h2>
                        
                        <p>Etiam eget consectetur ipsum. Maecenas fringilla commodo velit, eu ullamcorper massa.</p>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <!-- FOOTER -->
            <?php get_footer(); ?>
