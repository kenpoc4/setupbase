<?php
if( !function_exists( 'get_environment_type' ) ) {
    /**
     * Verify if we are in a local or production environment.
     * 
     * @return bool TRUE for production and FALSE for local
     */
    function get_environment_type(  ) {
        $environment = defined('WP_ENVIRONMENT_TYPE') ? WP_ENVIRONMENT_TYPE : 'production';
    
        if ($environment === 'production') {
            return true;
        } else {
            return false;
        }
    }
}
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