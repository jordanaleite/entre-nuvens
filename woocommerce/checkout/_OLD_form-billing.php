<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="woocommerce-billing-fields">
	<?php if ( wc_ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>

		<h3><?php esc_html_e( 'Billing &amp; Shipping', 'woocommerce' ); ?></h3>

	<?php else : ?>

		<h3><?php esc_html_e( 'Billing details', 'woocommerce' ); ?></h3>

	<?php endif; ?>

	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

	<div class="woocommerce-billing-fields__field-wrapper">
		<?php
		$fields = $checkout->get_checkout_fields( 'billing' );
        
       /* foreach ( $fields as $key => $field ) {
			woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
		} */
        
        $user = wp_get_current_user();
		?>
        
        <div class="form-row">
            
            <div class="form-group col-12 col-md-6 validate-required" id="billing_first_name_field" data-priority="10">
                <label class="label-title">Nome*</label>
                <input placeholder="" class="form-control form-control-preto" type="text" id="billing_first_name" name="billing_first_name" value="<?php echo esc_attr( $user->first_name ); ?>" autocomplete="given-name">
            </div>
            
            <div class="form-group col-12 col-md-6 validate-required" id="billing_last_name_field" data-priority="20">
                <label class="label-title">Sobrenome*</label>
                <input placeholder="" class="form-control form-control-preto" type="text" id="billing_last_name" name="billing_last_name" value="<?php echo esc_attr( $user->last_name ); ?>" autocomplete="family-name">
            </div>
            
        </div>
        
        <div class="form-row">
            
            <div class="form-group col-6 col-md-8 validate-required validate-email" id="billing_email_field" data-priority="110">
                <label class="label-title">E-mail*</label>
                <span class="woocommerce-input-wrapper"><input type="email" class="form-control form-control-preto" name="billing_email" id="billing_email" placeholder="" value="<?php echo esc_attr( $user->user_email ); ?>" autocomplete="email username"></span>
            </div>
            
            <div class="form-group col-6 col-md-4 validate-required validate-phone" id="billing_phone_field" data-priority="100">
                <label class="label-title">Telefone*</label>
                <input placeholder="" class="form-control form-control-preto" type="tel" id="billing_phone" name="billing_phone" value="<?php echo esc_attr( $user->user_phone ); ?>" autocomplete="tel">
            </div>
            
        </div>
        
        <div class="form-row">
            
            <div class="form-group col-12 col-md-8 address-field validate-required" id="billing_address_1_field" data-priority="50">
                <label class="label-title">Endereço com número*</label>
                <input placeholder="" class="form-control form-control-preto" type="text" id="billing_address_1" name="billing_address_1" value="<?php echo esc_attr( $user->user_address_1 ); ?>" autocomplete="address_line1">
            </div>
            
            <div class="form-group col-12 col-md-4 address-field" id="billing_address_2_field" data-priority="60">
                <label class="label-title">Complemento</label>
                <input placeholder="" class="form-control form-control-preto" type="text" id="billing_address_2" name="billing_address_2" value="<?php echo esc_attr( $user->user_address_2 ); ?>" autocomplete="address_line2">
            </div>
            
        </div>
        
        <div class="form-row">    
            
            <div class="form-group col-6 col-md-4 address-field validate-required" id="billing_city_field" data-priority="70">
                <label class="label-title">Cidade*</label>
                <input placeholder="" class="form-control form-control-preto" type="text" id="billing_city" name="billing_email" value="<?php echo esc_attr( $user->user_city ); ?>" autocomplete="address_level2">
            </div>
            
            <div class="form-group col-6 col-md-2 address-field validate-required validate-state" id="billing_state_field" data-priority="80">
                <label class="label-title">Estado*</label>
                <select class="form-control form-control-preto" type="text" id="billing_state" name="billing_state" autocomplete="address_level1" tabindex="-1" aria-hidden="true">
                    <option value="" selected>Selecione</option><option value="AC">Acre</option><option value="AL">Alagoas</option><option value="AP">Amapá</option><option value="AM">Amazonas</option><option value="BA">Bahia</option><option value="CE">Ceará</option><option value="DF">Distrito Federal</option><option value="ES">Espírito Santo</option><option value="GO">Goiás</option><option value="MA">Maranhão</option><option value="MT">Mato Grosso</option><option value="MS">Mato Grosso do Sul</option><option value="MG">Minas Gerais</option><option value="PA">Pará</option><option value="PB">Paraíba</option><option value="PR">Paraná</option><option value="PE">Pernambuco</option><option value="PI">Piauí</option><option value="RJ">Rio de Janeiro</option><option value="RN">Rio Grande do Norte</option><option value="RS">Rio Grande do Sul</option><option value="RO">Rondônia</option><option value="RR">Roraima</option><option value="SC">Santa Catarina</option><option value="SP">São Paulo</option><option value="SE">Sergipe</option><option value="TO">Tocantins</option>
                </select>
            </div>
            
            <div class="form-group col-6 col-md-2 address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40">
                <label class="label-title">País*</label>
                <input placeholder="" class="form-control form-control-preto" type="text" id="billing_country" name="billing_country" value="<?php echo esc_attr( $user->user_country ); ?>" autocomplete="country">
            </div>
            
            <div class="form-group col-6 col-md-4 address-field validate-required validate-postcode" id="billing_postcode_field" data-priority="90">
                <label class="label-title">CEP*</label>
                <input placeholder="" class="form-control form-control-preto" type="text" id="billing_postcode" name="billing_postcode" value="<?php echo esc_attr( $user->user_postcode ); ?>" autocomplete="postal-code">
            </div>
            
        </div>
    </div>

	<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>
</div>

<?php if ( ! is_user_logged_in() && $checkout->is_registration_enabled() ) : ?>
	<div class="woocommerce-account-fields">
		<?php if ( ! $checkout->is_registration_required() ) : ?>

			<p class="form-row form-row-wide create-account">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true ); ?> type="checkbox" name="createaccount" value="1" /> <span><?php esc_html_e( 'Create an account?', 'woocommerce' ); ?></span>
				</label>
			</p>

		<?php endif; ?>

		<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>

		<?php if ( $checkout->get_checkout_fields( 'account' ) ) : ?>

			<div class="create-account">
				<?php foreach ( $checkout->get_checkout_fields( 'account' ) as $key => $field ) : ?>
					<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
				<?php endforeach; ?>
				<div class="clear"></div>
			</div>

		<?php endif; ?>

		<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
	</div>
<?php endif; ?>
