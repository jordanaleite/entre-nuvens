<?php

// WORDPRESS TITLE
function custom_setup() {
   add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'custom_setup' );



//WooCommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_post_type_support( 'product', 'author' );


// SUPPORT THUMBNAIL
add_theme_support( 'post-thumbnails' );








//LOGIN PAGE STYLE
function my_custom_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}

add_action( 'login_enqueue_scripts', 'my_custom_login_stylesheet' );

//change url
function wpb_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'wpb_login_logo_url' );
 
function wpb_login_logo_url_title() {
    return 'Entre Nuvens';
}
add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );









//DEFAULT GRAVATAR
add_filter( 'avatar_defaults', 'wpb_new_gravatar' );

function wpb_new_gravatar ($avatar_defaults) {
    
    $myavatar = 'http://entrenuvens.com/wp-content/uploads/2019/11/logo_simbolo_preto.png';
    $avatar_defaults[$myavatar] = "Entre Nuvens";
    return $avatar_defaults;
    
}















//USER MENU NAVIGATION
//add carrinho & fotógrafo
add_filter ( 'woocommerce_account_menu_items', 'misha_one_more_link' );
function misha_one_more_link( $menu_links ){
 
	// we will hook "anyuniquetext123" later
	$new = array( 'carrinho' => 'Carrinho', 'upload' => 'Upload de imagem aérea' );
 
	// or in case you need 2 links
	// $new = array( 'link1' => 'Link 1', 'link2' => 'Link 2' );
 
	// array_slice() is good when you want to add an element between the other ones
	$menu_links = array_slice( $menu_links, 0, 1, true ) 
	+ $new 
	+ array_slice( $menu_links, 1, NULL, true );
 
 
	return $menu_links;
 
 
};
 
add_filter( 'woocommerce_get_endpoint_url', 'misha_hook_endpoint', 10, 4 );
function misha_hook_endpoint( $url, $endpoint, $value, $permalink ){
 
    if( $endpoint === 'carrinho' ) {
 
		  // ok, here is the place for your custom URL, it could be external
		  $url = site_url('/carrinho');
 
    } else if ( $endpoint === 'upload' ) {
        
        $url = site_url('/upload');
    }
    
	   return $url;
       
};




//remove pedidos
add_filter ( 'woocommerce_account_menu_items', 'misha_remove_my_account_links' );
function misha_remove_my_account_links( $menu_links ){
 
	//unset( $menu_links['orders'] );
    unset( $menu_links['edit-address'] );
 
    if ( !is_user_logged_in() && is_page('carrinho') ) {
        
        unset( $menu_links['customer-logout'] );
        unset( $menu_links['dashboard'] );
        unset( $menu_links['downloads'] );
        unset( $menu_links['edit-account'] );
        unset( $menu_links['payment-methods'] );
        
    };
    
	//unset( $menu_links['dashboard'] ); // Remove Dashboard
	//unset( $menu_links['payment-methods'] ); // Remove Payment Methods
	//unset( $menu_links['orders'] ); // Remove Orders
	//unset( $menu_links['downloads'] ); // Disable Downloads
	//unset( $menu_links['edit-account'] ); // Remove Account details tab
	//unset( $menu_links['customer-logout'] ); // Remove Logout link
 
	return $menu_links;
 
};








// CHECKOUT
/*Customizando o checkout
function custom_override_checkout_fields( $fields ) {
     $fields['order']['order_comments']['placeholder'] = 'My new placeholder';
     $fields['order']['order_comments']['label'] = 'My new label';
     return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' ); */



//remove order comments
function js_remove_checkout_fields( $fields ) {

    // Billing fields
    unset( $fields['billing']['billing_company'] );
    /*unset( $fields['billing']['billing_phone'] );
    unset( $fields['billing']['billing_state'] );
    unset( $fields['billing']['billing_address_1'] );
    unset( $fields['billing']['billing_address_2'] );
    unset( $fields['billing']['billing_city'] );
    unset( $fields['billing']['billing_postcode'] ); */

    // Shipping fields
    unset( $fields['shipping']['shipping_company'] );
    unset( $fields['shipping']['shipping_phone'] );
    unset( $fields['shipping']['shipping_state'] );
    unset( $fields['shipping']['shipping_first_name'] );
    unset( $fields['shipping']['shipping_last_name'] );
    unset( $fields['shipping']['shipping_address_1'] );
    unset( $fields['shipping']['shipping_address_2'] );
    unset( $fields['shipping']['shipping_city'] );
    unset( $fields['shipping']['shipping_postcode'] );

    // Order fields
    unset( $fields['order']['order_comments'] );

    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'js_remove_checkout_fields' );






//MEMBERS ONLY
function redirect_non_logged_users() {

    if ( !is_user_logged_in() ) {
    
        if ( is_page( array( 'minha-conta', 'carrinho', 'upload' || is_checkout() ) ) ) {
            
            //vai pro login
            wp_redirect( get_permalink( 11 ) );
            exit;
    } }
};

add_action( 'template_redirect', 'redirect_non_logged_users' );







//LOGIN REDIRECT
function redirect_logged_users() {

    if ( is_user_logged_in() && is_page('login') ) {

        wp_safe_redirect( get_permalink( get_page_by_path( 'minha-conta' ) ) ); 
        exit;
    }
};

add_action( 'template_redirect', 'redirect_logged_users' );







// REMOVE ADMIN BAR
function remove_admin_bar() {
    
    if ( !current_user_can('administrator') && !is_admin() ) {
        
        show_admin_bar(false);
    }
}

add_action('after_setup_theme', 'remove_admin_bar');





//METABOX local
function local_box()
{
    $screens = ['post', 'product'];
    foreach ($screens as $screen) {
        add_meta_box(
            'local',   // Unique ID
            'Localização:',  // Box title
            'local_html',  // callback
            $screen        // Post type
        );
    }
};

function local_html($post)
{
    ?>
    <ul style="display: inline-flex">
        <li style="margin-right: 40px;">
            <label for="cidade">Cidade:</label>
            <input id="cidade" name="cidade" type="text" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'cidade', true ) ); ?>"/>
        </li>
        <li>
            <label for="estado_field">Estado:</label>
            <select name="estado_field">
                
<?php $value = get_post_meta($post->ID, 'estado', true); ?>                
                
<option value="">Escolha</option>
<option value="AC" <?php selected($value, 'AC'); ?>>AC</option>
<option value="AL" <?php selected($value, 'AL'); ?>>AL</option>
<option value="AP" <?php selected($value, 'AP'); ?>>AP</option>
<option value="AM" <?php selected($value, 'AM'); ?>>AM</option>                
<option value="BA" <?php selected($value, 'BA'); ?>>BA</option>
<option value="CE" <?php selected($value, 'CE'); ?>>CE</option>
<option value="ES" <?php selected($value, 'ES'); ?>>ES</option>
<option value="GO" <?php selected($value, 'GO'); ?>>GO</option>           
<option value="MA" <?php selected($value, 'MA'); ?>>MA</option>
<option value="MT" <?php selected($value, 'MT'); ?>>MT</option>
<option value="MS" <?php selected($value, 'MS'); ?>>MS</option>
<option value="MG" <?php selected($value, 'MG'); ?>>MG</option>                
<option value="PA" <?php selected($value, 'PA'); ?>>PA</option>
<option value="PB" <?php selected($value, 'PB'); ?>>PB</option>
<option value="PR" <?php selected($value, 'PR'); ?>>PR</option>
<option value="PE" <?php selected($value, 'PE'); ?>>PE</option>
<option value="PI" <?php selected($value, 'PI'); ?>>PI</option>
<option value="RJ" <?php selected($value, 'RJ'); ?>>RJ</option>           
<option value="RN" <?php selected($value, 'RN'); ?>>RN</option>
<option value="RS" <?php selected($value, 'RS'); ?>>RS</option>
<option value="RO" <?php selected($value, 'RO'); ?>>RO</option>
<option value="RR" <?php selected($value, 'RR'); ?>>RR</option>                
<option value="SC" <?php selected($value, 'SC'); ?>>SC</option>
<option value="SP" <?php selected($value, 'SP'); ?>>SP</option>
<option value="SE" <?php selected($value, 'SE'); ?>>SE</option>
<option value="TO" <?php selected($value, 'TO'); ?>>TO</option>
                
            </select>
        </li>
    </ul>
    <?php
};

function local_save_postdata($post_id)
{
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        'cidade',
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     };
    
    if (array_key_exists('estado_field', $_POST)) {
        update_post_meta(
            $post_id,
            'estado',
            $_POST['estado_field']
        );
    }
};

add_action('save_post', 'local_save_postdata');
add_action('add_meta_boxes', 'local_box');










//ORDERS THUMBNAILS
// Add a new custom column to admin order list
add_filter( 'manage_edit-shop_order_columns', 'admin_orders_list_add_column', 10, 1 );
function admin_orders_list_add_column( $columns ){
    $columns['custom_column'] = __( 'Preview', 'woocommerce' );

    return $columns;
}

// The data of the new custom column in admin order list
add_action( 'manage_shop_order_posts_custom_column' , 'admin_orders_list_column_content', 10, 2 );
function admin_orders_list_column_content( $column, $post_id ){
    global $the_order;

    if( 'custom_column' === $column ){
        $count = 0;

        // Loop through order items
        foreach( $the_order->get_items() as $item ) {
            $product = $item->get_product(); // The WC_Product Object
            $style   = $count > 0 ? ' style="padding-left:6px;"' : '';

            // Display product thumbnail
            printf( '<span%s>%s</span>', $style, $product->get_image( array( 50, 50 ) ) );

            $count++;
        }
    }
};







//CHANGE AUTHOR PERMALINK
function change_author_permalinks()
{
    global $wp_rewrite;
    $wp_rewrite->author_base = 'fotografo'; // Change 'member' to be the base URL you wish to use
    $wp_rewrite->author_structure = '/' . $wp_rewrite->author_base. '/%author%';
}
add_action('init','change_author_permalinks');








//ADD CITY AND STATE TO USERS
function city_user_contactmethods( $methods, $user ) {
    $methods['cidade'] = 'Cidade';
    $methods['estado'] = 'Estado';

    return $methods;
}

add_filter( 'user_contactmethods', 'city_user_contactmethods', 10, 2 );










//SEARCH QUERY FOR AUTHORS

add_filter( 'posts_search', 'db_filter_authors_search' );
function db_filter_authors_search( $posts_search ) {
	// Don't modify the query at all if we're not on the search template
	// or if the LIKE is empty
	if ( !is_search() || empty( $posts_search ) )
		return $posts_search;
	global $wpdb;
	// Get all of the users of the blog and see if the search query matches either
	// the display name or the user login
	add_filter( 'pre_user_query', 'db_filter_user_query' );
	$search = sanitize_text_field( get_query_var( 's' ) );
	$args = array(
		'count_total' => false,
		'search' => sprintf( '*%s*', $search ),
		'search_fields' => array(
			'display_name',
			'user_login',
		),
		'fields' => 'ID',
	);
	$matching_users = get_users( $args );
	remove_filter( 'pre_user_query', 'db_filter_user_query' );
	// Don't modify the query if there aren't any matching users
	if ( empty( $matching_users ) )
		return $posts_search;
	// Take a slightly different approach than core where we want all of the posts from these authors
	$posts_search = str_replace( ')))', ")) OR ( {$wpdb->posts}.post_author IN (" . implode( ',', array_map( 'absint', $matching_users ) ) . ")))", $posts_search );
	return $posts_search;
}
/**
 * Modify get_users() to search display_name instead of user_nicename
 */
function db_filter_user_query( &$user_query ) {
	if ( is_object( $user_query ) )
		$user_query->query_where = str_replace( "user_nicename LIKE", "display_name LIKE", $user_query->query_where );
	return $user_query;
}










//OUT OF STOCK
add_filter( 'woocommerce_variation_is_active', 'grey_out_variations_when_out_of_stock', 10, 2 );

function grey_out_variations_when_out_of_stock( $grey_out, $variation ) {

    if ( ! $variation->is_in_stock() )
        return false;

    return true;
};




//CART PRODUCT NAME
add_filter( 'woocommerce_product_variation_title_include_attributes', '__return_false' );
add_filter( 'woocommerce_is_attribute_in_product_name', '__return_false' );



//RELATED PRODUCTS
//tab
add_action( 'woocommerce_single_product_tabs', 'woocommerce_output_product_data_tabs', 10 );

//produtos relacionados
add_action( 'woocommerce_single_product_related', 'woocommerce_output_related_products', 20 );