<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' ); ?>

<p><strong>Seu perfil</strong><br>Mantenha sempre seus dados atualizados.</p>

<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >

	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

	<div class="form-row form-group col">
        
		<label class="label-title" for="account_first_name">Nome:</label>
		<input type="text" class="form-control form-control-preto" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr( $user->first_name ); ?>" />
        
	</div>
    
	<div class="form-row form-group col">
        
		<label class="label-title" for="account_last_name">Sobrenome:</label>
		<input type="text" class="form-control form-control-preto" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr( $user->last_name ); ?>" />
        
	</div>
    
	<div class="clear"></div>

	<div class="form-row form-group col">
        
		<label class="label-title" for="account_display_name">Nome de exibição:</label>
		<input type="text" class="form-control form-control-preto" name="account_display_name" id="account_display_name" value="<?php echo esc_attr( $user->display_name ); ?>" />
        <p class="small margin-none">Será assim que seu nome será exibido na seção da conta e nos comentários.</p>
        
	</div>
    
	<div class="clear"></div>

	<div class="form-row form-group col">
        
		<label class="label-title" for="account_email">E-mail:</label>
		<input type="email" class="form-control form-control-preto" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr( $user->user_email ); ?>" />
        
	</div>
    
    <!-- password change -->
    <div class="form-row form-group col pass-reset">
        <a class="btn btn-outline" data-toggle="collapse" href="#passChange" role="button" aria-expanded="false" aria-controls="passChange">Deseja mudar sua senha?</a>
        
<div class="collapse" id="passChange">
    
    <div class="row">
        
        <div class="col">
            
            <label class="label-title" for="password_current">Senha atual:</label>
            <input type="password" class="form-control form-control-preto" name="password_current" id="password_current" />
            <p class="small margin-none">Deixe em branco caso não queira alterar.</p>
            
        </div>
        
        <div class="col">
            
            <label class="label-title" for="password_1">Nova senha:</label>
            <input type="password" class="form-control form-control-preto" name="password_1" id="password_1" />
            <p class="small margin-none">Deixe em branco caso não queira alterar.</p>
            
        </div>
        
        <div class="col">
            
            <label class="label-title" for="password_2">Confirmar a nova senha:</label>
            <input type="password" class="form-control form-control-preto" name="password_2" id="password_2" />
            <p class="small margin-none">Deixe em branco caso não queira alterar.</p>
            
        </div>
        
    </div>
    
</div>
        
    </div>
    
	<div class="clear"></div>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<div class="row float-right">
		<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
        
		<button type="submit" class="btn btn-outline" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
        
		<input type="hidden" name="action" value="save_account_details" />
        
	</div>

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
    
</form>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
