<?php
/**
 * Displays footer site info
 *
 * @package Highstarter
 *
 * @since 1.0
 * @version 1.0
 * @copyright  Copyright (c) 2020, Atanas Yonkov
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
?>

<div class="o-footer__copyright">
	<p>
		&copy; 2013 &ndash; <?php echo date('Y'); ?> // All Rights Reserved //
		<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '', ' // ' );
		} ?>
		<a href="<?php echo home_url( 'terms' ); ?>" class="c-link">
			<?php printf( __( 'Terms of Use', 'highstarter' ) ); ?>
		</a>
	</p>
	<p>
		<a href="<?php echo esc_url( 'https://onemohrti.me' ); ?>" class="c-link">
			<?php printf( __( 'Website by %s', 'highstarter' ), 'Derek Mohr' ); ?>
		</a>
	</p>
</div>

<?php
$isDarkMode = get_theme_mod('enable_dark_mode', 1);
if ($isDarkMode) : ?>
<button class="wpnm-button">
	<div class="wpnm-button-inner-left"></div>
	<div class="wpnm-button-inner"></div>
</button>
<?php endif; ?>
