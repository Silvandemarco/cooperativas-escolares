<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Education_Zone
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>

<?php if (false) { ?>
	<aside id="secondary" class="widget-area" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
		<?php dynamic_sidebar( 'right-sidebar' ); ?>
	</aside><!-- #secondary -->
<?php } ?>