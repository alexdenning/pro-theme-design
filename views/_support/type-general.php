    <h1><?php echo documentation_page_property( $page ); ?></h1>

<?php
    site_include_view( '_support/_general/' . $page . '.php' );

    documentation_related( $page );
