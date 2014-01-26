<?php


function responsive_update_social_icons() {
	$responsive_options = responsive_get_options();
	if ( ! $responsive_options['googleplus_uid'] ) {
		$responsive_options['googleplus_uid'] = $responsive_options['google_plus_uid'];
	}
	if ( ! $responsive_options['stumbleupon_uid'] ) {
		$responsive_options['stumbleupon_uid'] = $responsive_options['stumble_uid'];
	}

	// Update entire array
	update_option( 'responsive_theme_options', $responsive_options );
}
add_action( 'after_setup_theme', 'responsive_update_social_icons' );
function my_admin_notice(){
    echo '<div class="updated">
       <p>I am a little yellow notice.</p>
    </div>';
}
add_action('admin_notices', 'my_admin_notice');