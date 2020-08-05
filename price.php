<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( $price_html = $product->get_price_html() 
            && $product->get_attribute( 'height' )
            && $product->get_attribute( 'width' )) : ?>
	<span class="price"><?php $var=round($product->get_attribute( 'width' )*$product->get_attribute( 'height' )*$product->get_price()/10000, 1);// 10000 for cm, ex: 9cm = 0,09m
	echo number_format($var, 2, ',', '.'); ?>&#8378;</span> <!-- Turkish Liras ->
	<?php elseif($price_html = $product->get_price_html()): // if you do not enter size of product, it shows only price ?>
	<span class="price"><?php echo $price_html; ?></span>
<?php endif; ?>
