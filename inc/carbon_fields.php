<?php
use Carbon_Fields\Container;
use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'cf_theme_options' );
function cf_theme_options() {
    /**
     * Theme options
     */
    Container::make( 'theme_options', __( 'Opciones del theme', 'setup__base' ) )
        ->add_tab( __( 'Header', 'setup__base' ), array(
            Field::make( 'text', 'header_text', __( 'Copy Header', 'setup__base' ) )
        ) );
}