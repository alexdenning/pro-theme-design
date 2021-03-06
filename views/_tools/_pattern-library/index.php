		<div class="wrapper text">
			<?php site_breadcrumbs(); ?>

			<h1>Pro Theme Design Styleguide</h1>
			<p class="intro">This is the Pro Theme Design Living Pattern Library. This page includes examples of all the most common site elements with an example and the code required to reproduce the element.</p>
			<p>This pattern library was inspired by the super simple <a href="https://github.com/adactio/Pattern-Primer/" target="_blank">Pattern Primer by Adactio</a>.</p>
		</div>

		<div class="wrapper page-styleguide">

			<div class="pattern">

				<h2>Brand Colours</h2>

				<div class="colours">
					<div class="colour blue"></div>
					<div class="colour blue-dark"></div>
					<div class="colour green"></div>
					<div class="colour green-dark"></div>
					<div class="colour red"></div>
					<div class="colour red-dark"></div>
					<div class="colour yellow"></div>
					<div class="colour yellow-dark"></div>
					<div class="colour orange"></div>
					<div class="colour orange-dark"></div>
					<div class="colour purple"></div>
					<div class="colour purple-dark"></div>
					<div class="colour grey-100"></div>
					<div class="colour grey-90"></div>
					<div class="colour grey-80"></div>
					<div class="colour grey-70"></div>
					<div class="colour grey-60"></div>
					<div class="colour grey-50"></div>
					<div class="colour grey-40"></div>
					<div class="colour grey-30"></div>
					<div class="colour grey-20"></div>
					<div class="colour grey-10"></div>
				</div>
			</div>

			<h2>Pro Theme Design Pattern Library</h2>
<?php
	$path = site_view_path( '_styleguide' );
	$files = array();
	$handle = opendir( $path );

	while ( false !== ( $file = readdir( $handle ) ) ) {
		if ( '.html' === substr( $file, -5 ) ) {
			$files[] = $file;
		}
	}

	natsort( $files );

	foreach ( $files as $file ) {
		$name = $file;

		$name = str_replace( '--', ' : ', $name );
		$name = str_replace( '-', ' ', $name );
		$name = str_replace( '.html', '', $name );
		$name = ucwords( $name );
?>
			<div class="pattern">
				<h3><?php echo $name; ?>
					<small class="meta">
						<a href="<?php echo path( 'views/_styleguide/' . $file ); ?>" rel="nofollow"><i class="fa fa-file" aria-hidden="true"></i><?php echo $file; ?></a>
						<a href="#" class="toggle" rel="nofollow"><i class="fa fa-code" aria-hidden="true"></i>Code</a>
					</small>
				</h3>
				<div class="pattern-wrapper">
					<div class="display">
						<?php include( $path . '/' . $file ); ?>
					</div>
					<div class="source">
						<textarea><?php echo trim( htmlspecialchars( file_get_contents( $path . '/' . $file ) ) ); ?></textarea>
					</div>
				</div>
			</div>
<?php
	}
?>
		</div>
<?php
	site_include_view( '_partials/more-themes.php' );
