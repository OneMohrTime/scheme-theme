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

<footer id="footer" class="o-site__footer" role="contentinfo">
	<!-- <figure class="site__footer--image">
		<img src="{{ theme.link }}/assets/images/logo--footer.png" alt="The Pyramid Scheme logo" />
	</figure> -->
	<div class="site__footer--left">
		<h5>Hours</h5>
		<?php the_field('hours', 'option'); ?>
	</div>
	<div class="site__footer--right">
		<h5>Email Signup</h5>
		<?php the_field('footer_email', 'option'); ?>
	</div>
	<div class="container">
		<div class="row mb-5">
			<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				get_template_part( 'template-parts/footer/site', 'info' );
			?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>


</body>

</html>
