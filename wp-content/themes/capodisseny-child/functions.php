<?php
//* Code goes here


add_action( 'widgets_init', 'wpb_widgets_init' );
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'All rights reserved',
        'id'            => 'all-rights-reserved',
        'before_widget' => '<div class="all-right">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
 
}


