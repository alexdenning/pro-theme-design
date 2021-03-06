<?php

/**
 *
 */
function get_documentation_data() {

	$docs = array(

		// general docs

		'wordpress-com-themes' => array(
			'name' => 'WordPress.com Themes',
			'type' => 'general',
			'related' => array( 'wordpress-com-vs-wordpress-org', 'transfer-from-wordpress-com' ),
		),
		'support-vs-customization' => array(
			'name' => 'Support vs. Customization',
			'type' => 'general',
			'og-image' => 'help.jpg',
		),
		'support-account' => array(
			'name' => 'Creating a Temporary Support Account',
			'type' => 'general',
			'og-image' => 'help.jpg',
		),
		'transfer-from-wordpress-com' => array(
			'name' => 'WordPress.com theme Transfer',
			'type' => 'general',
			'related' => array( 'wordpress-com-vs-wordpress-org', 'wordpress-com-themes', 'refunds' ),
		),
		'theme-installation' => array(
			'name' => 'Theme Installation',
			'type' => 'general',
			'related' => array( 'theme-installation' ),
		),
		'child-theme-installation' => array(
			'name' => 'Child Theme Installation',
			'type' => 'general',
		),
		'demo-content' => array(
			'name' => 'Theme Demo Content',
			'type' => 'general',
			'description' => 'Demo content to help you get started with your theme.',
		),
		'refunds' => array(
			'name' => 'Refunds',
			'type' => 'general',
			'related' => array( 'transfer-from-wordpress-com' ),
			'og-image' => 'refund.jpg',
		),
		'affiliates' => array(
			'name' => 'Affiliates',
			'type' => 'general',
		),
		'translating-your-website-content' => array(
			'name' => 'Translating Your Website Content',
			'og-image' => 'localisation.jpg',
			'type' => 'general',
		),
		'license' => array(
			'name' => 'Software License',
			'type' => 'general',
		),
		'localization' => array(
			'name' => 'Localization',
			'type' => 'general',
			'description' => 'View your theme in your native language.',
			'og-image' => 'localisation.jpg',
			'icon' => 'language',
		),
		'theme-customization' => array(
			'name' => 'Theme Customization',
			'type' => 'general',
			'description' => 'Some basic information on how to customize your theme purchase',
			'og-image' => 'code.jpg',
		),
		'wordpress-com-vs-wordpress-org' => array(
			'name' => 'The Difference Between WordPress.com and WordPress.org',
			'type' => 'general',
			'related' => array( 'transfer-from-wordpress-com', 'wordpress-com-themes' ),
		),
		'theme-updates' => array(
			'name' => 'Theme Updates',
			'type' => 'general',
			'related' => array( 'theme-license-key', 'keeping-website-up-to-date', 'theme-installation' ),
			'og-image' => 'update.jpg',
		),
		'wordpress-requirements' => array(
			'name' => 'Theme Requirements',
			'type' => 'general',
		),
		'keeping-website-up-to-date' => array(
			'name' => 'Keeping Your WordPress Website Up To Date',
			'type' => 'general',
			'related' => array( 'theme-license-key', 'theme-updates' ),
		),
		'speeding-up-your-wordpress-site' => array(
			'name' => 'Speeding Up Your WordPress Website',
			'type' => 'general',
			'related' => array( 'image-resizing', 'jetpack' ),
		),
		'posts-vs-pages' => array(
			'name' => 'The Difference Between Posts and Pages',
			'type' => 'general',
		),
		'theme-previews' => array(
			'name' => 'Theme Previews',
			'type' => 'general',
		),
		'payment-methods' => array(
			'name' => 'Payment Methods',
			'type' => 'general',
		),
		'theme-license-key' => array(
			'name' => 'Theme License Key',
			'type' => 'general',
			'related' => array( 'keeping-website-up-to-date', 'theme-updates' ),
		),


		// features

		'featured-content' => array(
			'name' => 'Featured Content',
			'type' => 'feature',
			'requires' => 'jetpack',
			'description' => 'Select your best content to appear in a Slider or other special area on the homepage.',
			'related' => array( 'customizer', 'featured-image' ),
			'icon' => 'thumb-tack',
		),
		'custom-front-page' => array(
			'name' => 'Custom Front Page',
			'type' => 'feature',
			'description' => 'Change the design of your front page to make it exactly as you want.',
			'related' => array( 'custom-page-templates', 'customizer' ),
			'icon' => 'home',
		),
		'custom-page-templates' => array(
			'name' => 'Custom Page Templates',
			'type' => 'feature',
			'description' => 'Different page layouts for static WordPress pages.',
			'related' => array( 'custom-front-page' ),
		),
		'portfolio' => array(
			'name' => 'Portfolio and Projects',
			'type' => 'feature',
			'requires' => 'jetpack',
			'description' => 'Show off your Portfolio of work.',
			'related' => array( 'testimonials' ),
			'icon' => 'folder-open',
		),
		'infinite-scroll' => array(
			'name' => 'Infinite Scroll',
			'type' => 'feature',
			'requires' => 'jetpack',
			'description' => 'Continuously loading content to encourage your readers to stick around.',
			'icon' => 'arrow-down',
		),
		'site-logo' => array(
			'name' => 'Site Logo',
			'type' => 'feature',
			'requires' => 'jetpack',
			'description' => 'Add a logo to make your site your own.',
			'related' => array( 'customizer' ),
		),
		'search-engine-optimization' => array(
			'name' => 'SEO',
			'type' => 'feature',
			'description' => 'Search Engine Optimization to improve your sites rankings.',
			'icon' => 'line-chart',
		),
		'social-menu' => array(
			'name' => 'Social Menu',
			'type' => 'feature',
			'description' => 'Display links to your social media channels.',
			'icon' => 'share-alt',
		),
		'custom-colours-fonts' => array(
			'name' => 'Custom Colours and Fonts',
			'type' => 'feature',
			'requires' => 'styleguide',
			'description' => 'Tweak the fonts and colours on your site without touching any code.',
			'related' => array( 'custom-css', 'customizer', ),
			'icon' => 'paint-brush',
		),
		'featured-image' => array(
			'name' => 'Featured Images',
			'type' => 'feature',
			'description' => 'Image thumbnails for your blog posts and pages.',
			'related' => array( 'image-resizing' ),
			'icon' => 'camera',
		),
		'custom-css' => array(
			'name' => 'Custom CSS',
			'type' => 'feature',
			'requires' => 'jetpack',
			'description' => 'Edit the CSS on your website.',
			'related' => array( 'custom-colours-fonts', 'customizer', ),
			'icon' => 'css3',
			'og-image' => 'code.jpg',
		),
		'image-resizing' => array(
			'name' => 'Image Resizing (Photon)',
			'type' => 'feature',
			'requires' => 'jetpack',
			'description' => 'Resizes all of your images to fit the thumbnails used.',
			'related' => array( 'featured-image', 'speeding-up-your-wordpress-site' ),
			'icon' => 'picture-o',
		),
		'website-uptime-monitor' => array(
			'name' => 'Website Uptime Monitor',
			'type' => 'feature',
			'description' => 'Monitor your websites availability',
			'requires' => 'jetpack',
			'icon' => 'shield',
		),
		'contact-form' => array(
			'name' => 'Contact Form',
			'type' => 'feature',
			'requires' => 'jetpack',
			'description' => 'Add a simple contact form to your website or blog.',
			'icon' => 'envelope-o',
		),
		'sticky-post' => array(
			'name' => 'Sticky Posts',
			'type' => 'feature',
			'description' => 'Stick posts to the top of your blog.',
			'icon' => 'sticky-note',
		),
		'testimonials' => array(
			'name' => 'Testimonials',
			'type' => 'feature',
			'requires' => 'jetpack',
			'description' => 'Display comments from your users/ customers showing how much your product/ service benefits them.',
			'related' => array( 'portfolio', 'customizer' ),
			'icon' => 'comment',
		),
		'social-sharing' => array(
			'name' => 'Social Sharing Buttons',
			'type' => 'feature',
			'requires' => 'jetpack',
			'description' => 'Display social buttons that encourage readers to share your content.',
			'icon' => 'share-alt',
		),
		'related-content' => array(
			'name' => 'Related Content',
			'type' => 'feature',
			'requires' => 'jetpack',
			'description' => 'Display content, related to the current blog post, to give your readers something to look at next.',
			'icon' => 'arrows-h',
		),
		'customizer' => array(
			'name' => 'Customizer',
			'type' => 'feature',
			'related' => array( 'site-logo', 'testimonials', 'custom-front-page', 'custom-css', 'custom-colours-fonts', ),
			'description' => 'Edit site settings and get a live preview of the changes.',
			'icon' => 'cogs',
		),
		'widget-visibility' => array(
			'name' => 'Widget Visibility',
			'type' => 'feature',
			'related' => array( 'customizer' ),
			'description' => 'Show and hide widgets on different pages according to rules you set',
			'requires' => 'jetpack',
			'icon' => 'eye-slash',
		),
		/**
		'advertising' => array(
			'name' => 'Advertising',
			'type' => 'feature',
			'description' => 'Show and hide widgets on different pages according to rules you set',
			'requires' => array( 'radcontrol', 'jetpack' ),
			'icon' => 'eye-slash',
		),
		*/

	);


	// merge in the themes
	$themes = get_theme_data();

	foreach( $themes as $key => $theme ) {

		$theme[ 'type' ] = 'theme';

		$docs[ $key ] = $theme;

	}

	// merge in plugins
	$plugins = get_plugin_data();

	foreach( $plugins as $key => $plugin ) {

		$plugin[ 'type' ] = 'plugin';

		$docs[ $key ] = $plugin;

	}

	// process them
	$processed = array();

	foreach( $docs as $key => $doc ) {

		$doc[ 'url' ] = path( 'documentation/' . $doc[ 'type' ] . '/' . $key . '/' );

		// ensure required list is array
		if ( ! empty( $doc[ 'requires' ] ) && ! is_array( $doc[ 'requires' ] ) ) {
			$doc[ 'requires' ] = array( $doc[ 'requires' ] );
		}

		$processed[ $key ] = $doc;


	}

	return $processed;

}


/**
 * Create an unordered list showing the available docs
 */
function documentation_list( $type = '', $limit = 5 ) {

	$docs = get_documentation_data();

	$doc_list = array();

	foreach( $docs as $d ) {
		if ( $type == $d[ 'type' ] ) {
			$doc_list[] = $d;
		}
	}

	// reduce list to first '$limit' items
	$doc_list = array_slice( $doc_list, 0, $limit );

	if ( $doc_list ) {
		echo '<ul>';
		foreach( $doc_list as $d ) {
?>
	<li><a href="<?php echo $d[ 'url' ]; ?>"><?php echo $d[ 'name' ]; ?></a></li>
<?php
		}
		echo '</ul>';

	}

}


/**
 * does the current documentation type exist?
 */
function documentation_type_exists( $type ) {

	return in_array(
		$type,
		array( 'theme', 'general', 'plugin', 'feature' )
	);

}


/**
 * Check to see if the specified page exists
 */
function documentation_page_exists( $page, $type ) {

	$docs = get_documentation_data();

	foreach( $docs as $key => $value ) {
		if ( $page === $key && $value[ 'type' ] === $type ) {
			return true;
			break;
		}
	}

	return false;

}


/**
 * Get the data for the specified page
 */
function documentation_get( $page ) {

	$docs = get_documentation_data();

	foreach( $docs as $key => $value ) {
		if ( $page == $key ) {
			return $value;
			break;
		}
	}

	return false;

}


/**
 * get the value of a property of the specified page
 */
function documentation_page_property( $page, $property = 'name' ) {

	$docs = get_documentation_data();

	if ( ! empty( $docs[ $page ] ) && ! empty( $docs[ $page ][ $property ] ) ) {
		return $docs[ $page ][ $property ];
	}

	return '';

}


/**
 * get the name of the specified doc type
 */
function documentation_type_name( $type ) {

	$types = array(
		'general' => 'General',
		'theme' => 'Themes',
		'feature' => 'Features',
		'plugin' => 'Plugins',
	);

	if ( ! empty( $types[ $type ] ) ) {
		return $types[ $type ];
	}

	return '';

}


/**
 * Display a message stating what (if any) plugin is required for the current feature to work
 */
function documentation_required_plugin( $page ) {

	$docs = get_documentation_data();

	if ( ! empty( $docs[ $page ][ 'requires' ] ) ) {

		foreach ( $docs[ $page ][ 'requires' ] as $plugin ) {

			if ( ! empty( $docs[ $plugin ] ) ) {

				$plugin_url = $docs[ $plugin ][ 'url' ];
				$plugin_name = $docs[ $plugin ][ 'name' ];
?>
	<p class="note"><?php printf( '<strong>%s</strong> requires the <a href="%s">%s plugin</a>.', $docs[ $page ][ 'name' ], $plugin_url, $plugin_name ); ?></p>
<?php

			}

		}
	}

	return '';

}


/**
 * Display the list of themes that support the current feature
 * @param string $feature The feature to check for.
 */
function documentation_supported_themes( $feature ) {

	$docs = get_documentation_data();

	$supported = array();

	foreach( $docs as $doc ) {
		if ( ! empty( $doc[ 'supports' ] ) ) {
			if ( in_array( $feature, $doc[ 'supports' ] ) ) {
				$supported[] = sprintf( '<a href="%s">%s</a>', $doc[ 'url' ], $doc[ 'name' ] );
			}
		}
	}

	if ( ! empty( $supported ) ) {
?>
	<h2>Supported Themes</h2>
	<p><?php echo implode( ', ', $supported ); ?></p>
<?php
	}

}


/**
 * Display the list of features as supported by the current theme
 */
function documentation_theme_features( $theme ) {

	$docs = get_documentation_data();

	if ( ! empty( $theme[ 'supports' ] ) ) {
?>
	<h2>Standard Features</h2>
	<ul>
<?php
		foreach( $theme[ 'supports' ] as $feature ) {
			if ( isset( $docs[ $feature ] ) ) {
				$f = $docs[ $feature ];
?>
		<li><strong><a href="<?php echo $f[ 'url' ]; ?>"><?php echo $f[ 'name' ]; ?></a></strong> - <?php echo $f[ 'description' ]; ?></li>
<?php
			}
		}
	}
?>
	</ul>
<?php
}


/**
 * Display the list of features as supported by the current plugin
 */
function documentation_plugin_features( $plugin ) {

	$docs = get_documentation_data();

?>
	<h2>Supported Features</h2>
	<ul>
<?php
	foreach( $docs as $doc ) {
		if ( ! empty( $doc[ 'requires' ] ) && in_array( $plugin, $doc[ 'requires' ] ) ) {
?>
		<li>
			<strong>
				<a href="<?php echo $doc[ 'url' ]; ?>"><?php echo $doc[ 'name' ]; ?></a>
			</strong>
<?php
			if ( ! empty( $doc[ 'description' ] ) ) {
				echo ' - ' . $doc[ 'description' ];
			}
?>
		</li>
<?php
		}
	}
?>
	</ul>
<?php
}


/**
 * link to customization information page
 */
function documentation_customization() {
?>
	<p class="note"><strong>Please note</strong>: Unfortunately we are unable to offer support or help with theme customizations. For more info on Customization services please go to our <a href="<?php echo path( 'theme-customization/' ); ?>">Theme Customization</a> page.</p>
<?php
}


/**
 * Display related content
 */
function documentation_related( $feature ) {

	$docs = get_documentation_data();

	if ( ! empty( $docs[ $feature ][ 'related' ] ) ) {
		$related_docs = $docs[ $feature ][ 'related' ];
?>
		<h2>Related</h2>

		<ul>
<?php
		foreach( $related_docs as $related_feature ) {
			if ( isset( $docs[ $related_feature ] ) ) {
?>
			<li>
				<a href="<?php echo $docs[ $related_feature ][ 'url' ]; ?>"><?php echo $docs[ $related_feature ][ 'name' ]; ?></a>
			</li>
<?php
			}
		}
?>
		</ul>
<?php
	}
}


/**
 * Create a html link that points to a specific peice of documentation
 *
 * @param string $key The documentation key for the item to be linked.
 */
function documentation_link( $key ) {

	$docs = get_documentation_data();

	if ( ! empty( $docs[ $key ] ) ) {
		echo '<a href="' . $docs[ $key ]['url'] . '">' . $docs[ $key ]['name'] . '</a>';
	}

}
