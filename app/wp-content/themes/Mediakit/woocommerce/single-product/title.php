<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 1.6.4
 */
global $product;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<div class="info-content">

    <?php
        // Availability
        $availability      = $product->get_availability();
        $availability_html = empty( $availability['availability'] ) ? '' : '<p class="disponible ' . esc_attr( $availability['class'] ) . '">disponibilidad: ' . esc_html( $availability['availability'] ) . '</p>';

        echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
    ?>

    <h2 itemprop="name"><span><?php the_title(); ?></span></h2>
