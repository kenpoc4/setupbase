
<?php
if( !function_exists( 'styles_scripts_init' ) ) {
    function styles_scripts_init(){

        wp_enqueue_style('styles-main', get_root() . '/assets/css/main.css', '', '4.0.0');
        wp_enqueue_style('styles', get_root() . '/assets/css/compiled.min.css', array('styles-main'), '1.0.0');
        wp_enqueue_script('scripts', get_root() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts',  'styles_scripts_init');
}