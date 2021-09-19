<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Highstarter
 *
 * @since 1.0
 * @version 1.0
 * @copyright  Copyright (c) 2020, Atanas Yonkov
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
?>

</main>

<footer id="footer" class="o-footer" role="contentinfo">
	<figure class="o-footer__logo">
		<?php highstarter_the_custom_logo(); ?>
	</figure>
	<div class="o-footer__hours">
		<h5>Hours</h5>
		<?php the_field('hours', 'option'); ?>
	</div>
	<div class="o-footer__subscribe">
		<h5>Email Signup</h5>
		<?php the_field('footer_email', 'option'); ?>
	</div>
	<?php // get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
	<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
</footer>

<?php wp_footer(); ?>

</body>

</html>
