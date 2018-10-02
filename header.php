<?php
use Lean\Load;

$args = wp_parse_args( $args, [
	'class' => '',
	'website-title' => get_bloginfo( 'name' ),
	'logo' => '',
	'logo-mobile' => '',
	'menu-location' => 'main_menu',
]);
?>

<section class="o__header <?php echo esc_attr( $args['class'] ); ?>">

	<div class="o__header__container container">

		<div class="o__header__logo">

			<a class="o__header__logo-link" href="<?php bloginfo( 'url' ); ?>">

			  	<?php if ( $args['logo-mobile'] ) : ?>

					<img
						class="o__header__logo o__header__logo--mobile"
						src="<?php echo esc_url( $args['logo-mobile'] ); ?>"
						alt="<?php echo esc_attr( $args['website-title'] ); ?>" />

				<?php endif; ?>

				<?php if ( $args['logo'] ) : ?>

					<img
						class="o__header__logo"
						src="<?php echo esc_url( $args['logo'] ); ?>"
						alt="<?php echo esc_attr( $args['website-title'] ); ?>" />

				<?php endif; ?>

				<?php if ( ! $args['logo'] && ! $args['logo-mobile'] )  : ?>

					<h1 class="o__header__title">
						<?php echo esc_html( $args['website-title'] ); ?>
					</h1>

				<?php endif; ?>

			</a>

		</div>

		<div class="o__header__menu-container">

			<button class="o__header__hamburger hamburger--spring hamburger" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>

			<?php
			wp_nav_menu([
				'theme_location' => esc_attr( $args['menu-location'] ),
				'container' => 'nav',
				'container_class' => 'o__header__menu-subcontainer',
				'menu_class' => 'o__header__menu',
			]);
			?>

		</div>

	</div>

</section>
