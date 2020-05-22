<?php
// Plugin name: Transacción visual para <a>anclas</a>
// Descripction: Agrega una transaccion visual a las etiquetas <a>anclas</a> (y adaptable a cualquier otra) con puro css.
// Version: 1.0.0
// Author: Kenny Poncio
// Author URI: https://github.com/kenpoc4

if(!defined('ABSPATH'))die();

function k_transaccion_a_plugin(){
    $css_url    =   plugin_dir_url( __FILE__ );

    wp_enqueue_style('k_trancicion'    , $css_url . '/assets/css/k_transaccion.css'   , array(), '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'k_transaccion_a_plugin' );