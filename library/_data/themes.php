<?php

/**
 * A list of all of our themes
 */
function get_theme_data() {

    $themes = array(

        'exhibit' => array(
            'name' => 'Exhibit',
            'description' => 'Exhibit is the perfect theme for businesses, big and small, to exhibit their work. Acting as both a portfolio and a blog Exhibit allows you to easily show off your projects.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'exhibit',
            'url-cm' => '348846-Exhibit-WordPress-Portfolio-Theme',
            'image' => 'exhibit.png',
            'supports' => array( 'custom-front-page', 'site-logo', 'infinite-scroll', 'social-menu', 'testimonials', 'portfolio' ),
        ),

        'puzzle' => array(
            'name' => 'Puzzle',
            'description' => 'A visually oriented theme, great for photographers and artists who want to tell stories using their images.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'puzzle',
            'url-cm' => '108641-Puzzle-Responsive-WordPress-Theme',
            'image' => 'puzzle.png',
            'supports' => array( 'portfolio', 'custom-front-page', 'site-logo', 'infinite-scroll', 'social-menu', 'testimonials', ),
        ),

        'romero' => array(
            'name' => 'Romero',
            'description' => 'A WordPress theme designed for visual magazine sites. Ideal for video game sites, motoring magazines, and other topics that have large vibrant imagery.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'romero',
            'url-cm' => '312559-Romero-WordPress-Video-Game-Theme',
            'image' => 'romero.png',
            'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'custom-colours-fonts' ),
        ),

        'monet' => array(
            'name' => 'Monet',
            'description' => 'A delicate responsive portfolio theme targeted at photographers and other creatives. With crisp typography Monet is easy on the eye.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'monet',
            'url-cm' => '312560-Monet-WordPress-Portfolio-Theme',
            'image' => 'monet.png',
            'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'portfolio', ),

        ),

        'chronicle' => array(
            'name' => 'Chronicle',
            'description' => 'A magazine theme. With 3 optional widget areas, featured posts, and a huge homepage slider, there are lots of options for creating interesting, immersive websites.',
            'price-wpcom' => 79,
            'price-wporg' => 129,
            'parent-theme' => 'broadsheet',
            'url-wpcom' => 'chronicle',
            'url-cm' => '113017-Chronicle-Magazine-Theme',
            'image' => 'chronicle.png',
            'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'testimonials', ),
        ),

        'opti' => array(
            'name' => 'Opti',
            'description' => 'A clean blog theme with magazine elements. Custom category blurbs, great typography and a fully editable color scheme.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'opti',
            'url-cm' => '9918-Opti-Responsive-WordPress-Theme',
            'image' => 'opti.png',
            'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', ),
        ),

        'mirror' => array(
            'name' => 'Mirror',
            'description' => 'A blog focused theme showcasing large featured images and clear typography. A large featured content slider in the header helps your top content to shine.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'mirror',
            'url-cm' => '220297-Mirror-WordPress-Photography-Theme',
            'image' => 'mirror.png',
            'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'custom-colours-fonts' ),
        ),

        'beacon' => array(
            'name' => 'Beacon',
            'description' => 'A perfect theme for viral content: trending topics, featured thumbnails, and photos and excerpts arranged by category or popularity.',
            'price-wpcom' => 79,
            'price-wporg' => '',
            'url-wpcom' => 'beacon',
            'url-cm' => '',
            'image' => 'beacon.png',
            'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', ),
        ),

        'traveler' => array(
            'name' => 'Traveler',
            'description' => 'Perfect for bloggers who want to document their travels with large photos, dramatic colors and Pinterest-style layouts.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'traveler',
            'url-cm' => '150534-Traveler-Visual-WordPress-Theme',
            'image' => 'traveler.png',
            'supports' => array( 'featured-content', 'featured-image', 'infinite-scroll', ),
        ),

        'lens' => array(
            'name' => 'Lens',
            'description' => 'A photo-oriented theme, great for people who like to tell stories with pictures, equally suitable for bloggers, scrapbookers, and writers.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'lens',
            'url-cm' => '108642-Lens-Responsive-Photography-Theme',
            'image' => 'lens.png',
            'supports' => array( 'site-logo', 'featured-content', 'featured-image', 'infinite-scroll', 'social-menu', 'testimonials', ),

        ),

        'broadsheet' => array(
            'name' => 'Broadsheet',
            'description' => 'A newspaper theme with 3 optional widget areas, featured posts and a huge homepage slider there are lots of options for creating interesting, immersive websites.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'broadsheet',
            'url-cm' => '108643-Broadsheet-Newspaper-Theme',
            'image' => 'broadsheet.png',
            'supports' => array( 'site-logo', 'featured-image', 'infinite-scroll', 'social-menu', 'testimonials', ),
        ),

        'mimbopro' => array(
            'name' => 'Mimbo Pro',
            'description' => 'A magazine theme that takes your content and formats it in a structured way grouped by category.',
            'price-wpcom' => 59,
            'price-wporg' => 79,
            'url-wpcom' => 'mimbopro',
            'url-cm' => '111465-Mimbo-Pro-WordPress-Theme',
            'image' => 'mimbopro.png',
            'supports' => array( 'featured-image', ),
        ),

        'bromley' => array(
            'name' => 'Bromley',
            'description' => 'The best elements of blogging themes manipulated into something beautifully simple. Ideal for local community, fan magazines, and talking about updates in your industry.',
            'price-wpcom' => 79,
            'price-wporg' => '',
            'url-wpcom' => 'bromley',
            'url-cm' => '113531-Bromley-Responsive-WordPress-Theme',
            'image' => 'bromley.png',
            'supports' => array( 'featured-content', 'featured-image', 'infinite-scroll', ),
        ),

        'vision' => array(
            'name' => 'Vision',
            'description' => 'A theme designed for artists, photographers and other people with a love of strong visuals, with a dark background to make your content pop.',
            'price-wpcom' => 79,
            'price-wporg' => '',
            'url-wpcom' => 'vision',
            'url-cm' => '',
            'image' => 'vision.png',
            'supports' => array( 'featured-content', 'featured-image', 'infinite-scroll', 'testimonials', ),
        ),

        'kent' => array(
            'name' => 'Kent',
            'description' => 'A responsive theme designed for writers who want to write. Stripped back to the minimum — it’s designed to work well on all internet-enabled devices.',
            'price-wpcom' => 79,
            'price-wporg' => '',
            'url-wpcom' => 'kent',
            'url-cm' => '',
            'url-wporg' => 'kent',
            'image' => 'kent.png',
            'supports' => array( 'featured-image', 'infinite-scroll', 'sticky-post', ),
        ),

        'bexley' => array(
            'name' => 'Bexley',
            'description' => 'The perfect combination of imagery and text, giving photographers and artists a space to user as their online portfolio or gallery.',
            'price-wpcom' => 69,
            'price-wporg' => '',
            'url-wpcom' => 'bexley',
            'url-cm' => '',
            'image' => 'bexley.png',
            'supports' => array( 'featured-image', 'infinite-scroll', 'sticky-post', ),
        ),

        'isca' => array(
            'name' => 'Isca',
            'description' => 'A tumblog theme for WordPress, designed for people who create a variety of types of content like quotes, images, text and video.',
            'price-wpcom' => 59,
            'price-wporg' => '',
            'url-wpcom' => 'isca',
            'url-cm' => '',
            'image' => 'isca.png',
            'supports' => array( 'infinite-scroll', 'post-formats' ),
        ),

    );

    $processed = array();

    foreach( $themes as $key => $theme ) {

        // set wordpress.org url if applicable
        if ( ! empty( $theme[ 'url-wporg' ] ) ) {
            $theme[ 'url-wporg' ] = 'https://wordpress.org/themes/' . $theme['url-wporg'];
        } else if ( ! empty( $theme[ 'price-wporg' ] ) ) {
            $theme[ 'url-wporg' ] = 'https://creativemarket.com/BinaryMoon/' . $theme['url-cm'] . '?u=BinaryMoon';
        } else {
            $theme[ 'url-wporg' ] = '';
        }

        // all themes are on wordpress.com so fill out the rest of the url
        $theme[ 'url-wpcom' ] = 'https://wordpress.com/themes/' . $theme[ 'url-wpcom' ] . '/';

        // theme info page
        $theme[ 'url' ] = path( 'theme/' . $key . '/' );

        // theme preview
        if ( ! empty( $theme[ 'url-cm' ] ) ) {
            $theme[ 'url-preview' ] = path( 'theme-preview/' . $key . '/' );
        } else {
            $theme[ 'url-preview' ] = '';
        }

        // theme showcase
        $theme[ 'url-showcase' ] = path( 'theme-showcase/' . $key . '/' );

        // set price
        if ( empty( $theme[ 'price-wporg' ] ) ) {
            $theme[ 'price-wporg' ] = 'free!';
        } else {
            $theme[ 'price-wporg' ] = '$' . $theme[ 'price-wporg' ];
        }

        $theme[ 'price-wpcom' ] = '$' . $theme[ 'price-wpcom' ];

        // set default theme features that all themes support
        $theme[ 'supports' ] = array_merge(
            $theme[ 'supports' ],
            array(
                'custom-colours-fonts',
                'image-resizing',
                'custom-css',
                'contact-form',
                'featured-image',
                'localization',
                'related-content',
                'social-sharing',
                'custom-page-templates',
                'customizer',
                'widget-visibility',
            )
        );

        $processed[ $key ] = $theme;
    }

    return $processed;

}


/**
 * list option elements for a select box
 */
function themes_select_box() {

    $themes = get_theme_data();

    foreach( $themes as $theme ) {
?>
    <option value="<?php echo $theme[ 'name' ]; ?>"><?php echo $theme[ 'name' ]; ?></option>
<?php
    }
}


/**
 * does the specified theme exist?
 */
function themes_exist( $theme_slug ) {

    $themes = get_theme_data();

    return isset( $themes[ $theme_slug ] );

}


/**
 * get the data for the specified theme
 */
function themes_get( $theme_slug ) {

    $themes = get_theme_data();

    if ( isset( $themes[ $theme_slug ] ) ) {
        return $themes[ $theme_slug ];
    }

    return false;

}


/**
 * get X random themes from the list
 */
function themes_get_random( $count = 3 ) {

    $themes = get_theme_data();

    $count = (int) $count;

    if ( $count < 3 ) {
        $count = 3;
    }

    shuffle( $themes );

    return array_slice( $themes, 0, $count );

}
