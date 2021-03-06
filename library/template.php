<?php

/**
 * Set or display the site description
 *
 * @param string  [$new_description       = ''] If set changes the site description, if empty outputs it
 * @param boolean [$strip_tags            = false] True strips html tags on output, false leaves them intact
 */
function site_description( $new_description = '', $strip_tags = false ) {

	if ( ! empty( $new_description ) ) {

		Flight::set( 'site.description', $new_description );

	} else {

		if ( $strip_tags ) {

			echo strip_tags( Flight::get( 'site.description' ) );

		} else {

			echo Flight::get( 'site.description' );

		}

	}

}


/**
 * Set or display the site header title
 *
 * @param string  [$new_description       = ''] If set changes the site description, if empty outputs it
 * @param boolean [$strip_tags            = false] True strips html tags on output, false leaves them intact
 */
function site_header_title( $new_description = '' ) {

	if ( ! empty( $new_description ) ) {

		Flight::set( 'site.header-title', $new_description );

	} else {

		echo Flight::get( 'site.header-title' );

	}

}


/**
 * Display Open Graph meta tags for different social platforms.
 * Minimum image size of 280 x 200
 *
 * @param string [$new_image       = ''] Url of image to display in og meta tags
 */
function site_meta_image( $new_image = '' ) {

	if ( ! empty( $new_image ) ) {

		Flight::set( 'site.meta-image', $new_image );

	} else {

		$image = Flight::get( 'site.meta-image' );

		if ( $image ) {
?>
	<meta itemprop="image" content="https://prothemedesign.com/img/open-graph/<?php echo $image; ?>?d=<?php echo DECACHE_CSS; ?>">
	<meta property="og:image" content="https://prothemedesign.com/img/open-graph/<?php echo $image; ?>?d=<?php echo DECACHE_CSS; ?>">
	<meta name="twitter:image:src" content="https://prothemedesign.com/img/open-graph/<?php echo $image; ?>?d=<?php echo DECACHE_CSS; ?>">
<?php

		}

	}

}


/**
 * Add a script to the sites footer
 * If no script set then display the scripts instead
 *
 * @param string  [$path  = '']    Path to the javascript file to load
 * @param boolean [$async = false] Whether or not to set the script to load asynchronously
 */
function site_script( $path = '', $async = false ) {

	$scripts = Flight::get( 'site.scripts' );

	if ( ! empty( $path ) ) {

		$scripts[] = array(
			'path' => $path,
			'async' => $async,
		);

		Flight::set( 'site.scripts', $scripts );

	} else {

		if ( $scripts ) {

			foreach( $scripts as $script ) {

				$async = '';
				if ( $script['async'] ) {
					$async = ' async';
				}
?>
		<script src="<?php echo $script['path']; ?>"<?php echo $async; ?>></script>
<?php
			}

		}

	}

}


/**
 * Set or display the site title
 *
 * @param string [$new_title       = ''] If set changes the title, if empty the site title is output
 */
function site_title( $new_title = '' ) {

	if ( ! empty( $new_title ) ) {

		Flight::set( 'site.title', $new_title );

	} else {

		echo Flight::get( 'site.title' );

	}

}


/**
 * Add some Breadcrumbs
 *
 * @param string $name What to show on the breadcrumb link
 * @param string $url  Url of the breadcrumb
 */
function site_breadcrumb_add( $name, $url ) {

	$crumbs = Flight::get( 'site.breadcrumbs' );

	$crumbs[] = array(
		'name' => $name,
		'url' => path( $url ),
	);

	Flight::set( 'site.breadcrumbs', $crumbs );

}


/**
 * Display site breadcrumbs
 */
function site_breadcrumbs() {

	$crumbs = Flight::get( 'site.breadcrumbs' );

	if ( count( $crumbs ) <= 1 ) {
		return;
	}
?>
	<nav class="breadcrumbs">
<?php
	foreach ( $crumbs as $crumb ) {
?>
		<a href="<?php echo $crumb['url']; ?>"><?php echo $crumb['name']; ?></a>
<?php
	}
?>
	</nav>
<?php

}


/**
 * Add page navigation
 */
function site_page_nav_add( $name, $url ) {

	$pages = Flight::get( 'site.page_nav' );

	$pages[] = array(
		'name' => $name,
		'url' => path( $url ),
	);

	Flight::set( 'site.page_nav', $pages );

}


/**
 * Display site breadcrumbs
 */
function site_page_nav() {

	$pages = Flight::get( 'site.page_nav' );

	if ( count( $pages ) <= 1 ) {
		return;
	}

	$current_url = path( Flight::request()->url );

?>
	<nav class="wrapper page-menu">
<?php
	foreach ( $pages as $page ) {

		$class = '';

		if ( $current_url === $page['url'] ) {

			$class = 'selected';

		}

?>
		<a href="<?php echo $page['url']; ?>" class="<?php echo $class; ?>"><?php echo $page['name']; ?></a>
<?php
	}
?>
	</nav>
<?php

}


/**
 * Get or set whether to open the popover or not
 *
 * @param  boolean [$value         = null] Get whether or not to display the feedback popover.
 * @return boolean Whether or not to display the feedback popover
 */
function site_popover( $value = null ) {

	if ( $value !== null ) {

		Flight::set( 'site.enable_popover', $value );

	} else {

		return Flight::get( 'site.enable_popover' );

	}

}


/**
 * Get or set whether to open the popover or not
 *
 * @param  boolean [$value         = null] Get whether or not to display the feedback popover.
 * @return boolean Whether or not to display the feedback popover
 */
function site_meta( $key = '', $value = null ) {

	$meta = Flight::get( 'site.meta' );

	if ( $key !== '' && $value !== null ) {

		$meta[ $key ] = $value;
		Flight::set( 'site.meta', $meta );

	} else {

		if ( $meta ) {

			foreach( $meta as $key => $value ) {

?>
	<meta property="<?php echo $key; ?>" content="<?php echo $value; ?>" />
<?php

			}

		}

	}

}


/**
 * Check if Payment is enabled and if it is then add the Gumroad script
 */
function site_enable_purchase() {

}


// Set Defaults

// default site description
site_description( 'Designing <strong>Professional WordPress Themes</strong> since 2007.' );

// default site title
site_title( 'Pro Theme Design - WordPress Themes and Plugins' );

// default site page header title
site_header_title( 'Pro Theme Design' );

// default site og:type
site_meta( 'og:type', 'website' );

// default og:image
site_meta_image( 'default.png' );

// default site scripts

site_script( 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js' );
site_script( js_path( 'main.min.js' ) );
