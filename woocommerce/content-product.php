<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div <?php post_class('medium-6 columns product'); ?> >
	<div class="row collapse">
		<hr>

		<div class="medium-6 columns">
			<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
		</div>
		<div class="medium-6 columns">
			<?php
				do_action( 'woocommerce_shop_loop_item_title' );
				woocommerce_template_single_price();
				//do_action( 'woocommerce_after_shop_loop_item' );
				//do_action( 'woocommerce_after_shop_loop_item_title' );
				woocommerce_template_single_add_to_cart();
			?>
		</div>
	</div> <!-- end row -->

	<div class="row collapse">
		<div class="small-12 columns album-preview">
			<?php woocommerce_template_single_excerpt(); ?>
		</div>
		<div class="small-12 columns">
					<h3>Product Description</h3>
			<?php
				the_content();
			?>
		</div>
	</div>
</div>
