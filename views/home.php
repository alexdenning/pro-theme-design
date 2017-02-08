<?php
/**
 * Homepage Template
 *
 * @package ptd
 */

	include( '_partials/head.php' );

?>

	<body class="page-home">

		<section class="home-header">

			<header class="masthead" id="masthead" role="banner">

				<div class="wrap">

					<h1 class="site-title">
						<?php include( 'img/logos/logo.svg' ); ?>
						<span><?php site_header_title(); ?></span>
					</h1>

					<p class="site-description">
						<span>Responsive,</span>
						<span>Elegant,</span>
						<span>WordPress Themes</span>
					</p>

					<p class="actions">
						<a href="<?php echo path( '/themes/' ); ?>" class="button">Browse Themes</a>
						<!-- <a href="<?php echo path( '/why-us/' ); ?>" class="button minor">Why Us?</a> -->
					</p>

				</div>

			</header>

			<div class="tiles">
<?php
	// Include small theme images.
	foreach ( $themes as $theme ) {
?>
	<a href="<?php echo $theme['url']; ?>">
		<img src="<?php echo image_path( 'theme-monitor/' . $theme['image'] ); ?>" />
		<span><?php echo $theme['name']; ?></span>
	</a>
<?php
	}
?>
			</div>

		</section>

		<section class="intro wrapper text">

			<p>WordPress Themes for agencies, and small businesses.</p>
			<p>Join over <strong><?php echo paid_customers(); ?></strong> happy WordPress themers.</p>

		</section>

		<section class="themes">

			<h2>Recent <a href="<?php echo path( '/themes/' ); ?>">WordPress Themes</a></h2>

<?php
	// Include large theme image.
	$theme = array_shift( $themes );
	include( site_view_path( '_partials/theme-big.php' ) );
?>

			<div class="block-wrapper wrapper">

<?php
	// Include small theme images.
	$template = site_view_path( '_partials/theme-small.php' );
	foreach ( $themes as $theme ) {
		include( $template );
	}
?>

			</div>

		</section>

<?php
	include( '_partials/footer.php' );
