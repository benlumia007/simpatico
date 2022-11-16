<?php

function simpatico_theme_setup() {
    load_theme_textdomain( 'simpatico');
}  
add_action( 'after_setup_theme', 'simpatico_theme_setup' );