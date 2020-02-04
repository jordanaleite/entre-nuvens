<?php
/*
Template name: Login
*/
?>

        <?php get_header(); ?>

        <div id="main" class="login-box container-fluid">
            
            <!-- banner home -->
            <div class="banner-img-100">
                
                <img src="https://entrenuvens.com/wp-content/uploads/2019/12/drone-campo-futebol-03.jpg" class="img-banner">
                
                <div class="row row-login">
                    
                     <div class="col login branco">
                    
                        <h1>acessar conta</h1>
                    
                        <p>Já é parte da comunidade? <strong>Entre aqui.</strong></p>
                    
<!-- login form -->
<form id="login-form" method="POST" action="<?php bloginfo('url'); ?>/minha-conta/">
      
      <div class="form-row">
          
          <?php do_action( 'woocommerce_login_form_start' ); ?>
          
          <div class="form-group col col-md-6">
              
              <input placeholder="e-mail" class="form-control form-control-branco" type="text" name="username" id="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>">
              
          </div>
          
          <div class="form-group col col-md-6">
              
              <input placeholder="senha" class="form-control form-control-branco" type="password" name="password" id="password">
              
          </div>
          
          <?php do_action( 'woocommerce_login_form' ); ?>
          
          
          
      </div>
    
        <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
      
      <button class="btn btn-outline-branco float-right" type="submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>">entrar</button>
    
     <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" name="rememberme" type="checkbox" id="rememberme" value="forever">
            <label class="form-check-label">
                Deixe-me conectado.
            </label>
        </div>
         <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>">Esqueceu sua senha?</a>
    </div>
    
    <div class="form-row">
        
        <div class="form-group col col-md-6">
            <a class="btn btn-primary btn-sm" style="background-color: #3b5998; border-color: #3b5998" href="https://entrenuvens.com/gestao/?loginSocial=facebook" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="facebook" data-popupwidth="475" data-popupheight="175"><i class="fab fa-facebook-square" style="margin-right: 8px;"></i>Entrar com <b>Facebook</b></a>
        </div>
        
    </div>
    
    <div class="form-row">
        
        <div class="form-group col col-md-6">
            <a class="btn btn-primary btn-sm" style="background-color: #dc4e41; border-color: #dc4e41" href="https://entrenuvens.com/gestao/?loginSocial=google" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="google" data-popupwidth="600" data-popupheight="600"><i class="fab fa-google" style="margin-right: 8px;"></i> Entrar com <b>Google</b></a>
        </div>
        
    </div>
      
    <?php
        wc_print_notices();
    ?>
    
    <?php do_action( 'woocommerce_login_form_end' ); ?>
    
</form>
                    
                    </div>
                
                    <div class="col new-login branco">
                    
                        <h1>chegou agora?</h1>
                    
                        <p>Participe da comunidade que vive sem medo de altura.<br><strong>Faça seu cadastro</strong> e aprecie a vista :)</p>
                        
<!-- register form -->
<form id="acesso-form" method="POST" <?php do_action( 'woocommerce_register_form_tag' ); ?>>
    
    <?php do_action( 'woocommerce_register_form_start' ); ?>
      
      <div class="form-row">
          
          <div class="form-group col col-md-6">
              
              <input placeholder="nome de usuário" class="form-control form-control-branco" name="username" id="reg_username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>">
              
          </div>
          
          <div class="form-group col col-md-6">
              
              <input placeholder="cpf / cpnj" class="form-control form-control-branco" type="text" name="" value="">
              
          </div>
          
      </div>
    
     <div class="form-group col" style="padding: 0;">
              
              <input placeholder="e-mail" class="form-control form-control-branco" type="email" name="email" id="reg_email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>">
              
    </div>
    
     <div class="form-group col" style="padding: 0;">
              
        <input placeholder="senha" class="form-control form-control-branco" type="password" name="password" id="reg_password" value="<?php echo ( ! empty( $_POST['password'] ) ) ? esc_attr( wp_unslash( $_POST['password'] ) ) : ''; ?>">
              
    </div>
    
    <?php //do_action( 'woocommerce_register_form' ); ?>
    
    <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Declaro que aceito os <a target="_blank" href="http://entrenuvens.com/wp-content/uploads/2019/08/Termos-de-Uso-Stock-Entre-Nuvens.pdf">termos e licenças</a>.<span class="required">*</span>
      </label>
    </div>
  </div>
      
      <button class="btn btn-outline-branco float-right" type="submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>">cadastrar-se</button>
      
    <?php do_action( 'woocommerce_register_form_end' ); ?>
    
</form>
                    
                    </div>
                    
                </div>
                
                
                <div class="banner-title-100">
                    
                    <h5>campo de futebol</h5>
                    <p>São Paulo - SP</p>
                                
                </div>
                
            </div>
            
            <div class="margin-top margin-bottom">
                
                <?php get_template_part('widget-stock'); ?>
                
            </div>
            
            <!-- FOOTER -->
            <?php get_footer(); ?>