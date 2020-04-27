function pm_remove_all_styles() {
	
if(!is_product_category()) {
    global $wp_styles;
    $wp_styles->queue = array();
	}
}
add_action('wp_print_styles', 'pm_remove_all_styles', 100);
