<?php

if( !function_exists( 'get_root' ) ) {
    /**
     * Get the root of theme
     * 
     * @return string Root of theme .../wp-content/theme/.../ WE ARE HERE
     */
    function get_root(  ) {
        return get_template_directory_uri();
    }
}