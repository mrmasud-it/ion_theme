<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ion_theme
 */

?>

<!-- Footer -->
<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
								<div class="6u">
								<?php  
									if ( ! is_active_sidebar( 'footer-1' ) ) {
										return;
									}
								?>
								<?php dynamic_sidebar( 'footer-1' ); ?>
								</div>
								<div class="6u">
								<?php  
								if ( ! is_active_sidebar( 'footer-2' ) ) {
									return;
								}
								?>
								<?php dynamic_sidebar( 'footer-2' ); ?>
								</div>
							</div>
						</div>

						<div class="6u">
							<?php  
								if ( ! is_active_sidebar( 'footer-3' ) ) {
									return;
								}
							?>
							<?php dynamic_sidebar( 'footer-3' ); ?>
							
							<ul class="icons">
								<?php  
									if ( ! is_active_sidebar( 'social' ) ) {
										return;
									}
								?>
								<?php dynamic_sidebar( 'social' ); ?>
							</ul>
						</div>

					</div>
					<ul class="copyright">
						<?php  
							if ( ! is_active_sidebar( 'footer-4' ) ) {
								return;
							}
						?>
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</ul>
				</div>
			</footer>

<?php wp_footer(); ?>

</body>
</html>
